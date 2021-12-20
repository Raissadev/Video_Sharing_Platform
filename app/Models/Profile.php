<?php

namespace app\Models;

use app\Services\ConnectionFactory;
use app\Models\Entitys\User;
use src\Helpers\MessageAuth;
use src\Middlewares\UserAuthenticator;
use src\Repository\UserRepository;

class Profile extends UserRepository
{

    protected static function updateProfile(int $id, string $name, string $email, string $password, string $about, array $image): void
    {
        $verifyName = UserAuthenticator::verifyName($name);
        $verifyEmail = UserAuthenticator::verifyEmail($email);
        $verifyPassword = UserAuthenticator::verifyPassword($password);
        $verifyImage = UserAuthenticator::verifyImage($image);

        if($verifyName === false || $verifyEmail === false || $verifyPassword === false || $verifyImage === false ) return;

        $update = UserRepository::schemaUpdateProfile((int) $id, (string) $name, (string) $email, (string) $password, (string) $about, (string) $image['name']);
        
        if(!$update){
            MessageAuth::launchMessage('error', 'Error while update!');
            return;
        };

        move_uploaded_file($image['tmp_name'], dirname(__DIR__, 2).'\storage\users\\' . $image['name']);

        new User((int) $id, (string) $name, (string) $email, (string) $password, (string) $about, (string) $image['name']);
        header('Location: '.BASE_URL.'/profile');
    }


    protected function albumAdd(int $user, int $channelContent): void
    {
        $add = UserRepository::schemaAlbumAdd((int) $user, (int) $channelContent);

        if($add){
            MessageAuth::launchMessage('success', 'Content successfully added to the album!');
            header('Location: '.BASE_URL.'/albuns');
        };
    }

    public static function getAlbum($query, $user): array
    {
        $album = UserRepository::getAlbum($query, $user);
        return $album;
    }

    protected function logout(): void
    {
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['image']);
        unset($_SESSION['about']);
        unset($_SESSION['id']);
        session_destroy();
        header('Location: '.BASE_URL.'/sign-in');
    }

}

?>