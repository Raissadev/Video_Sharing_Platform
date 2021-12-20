<?php

namespace app\Models;

use app\Services\ConnectionFactory;
use src\Repository\UserRepository;
use app\Models\Entitys\User;
use src\Middlewares\UserAuthenticator;
use src\Helpers\MessageAuth;

class Authentication extends UserRepository
{

    protected static function register(string $name, string $email, string $password, string $about, array $image): void
    {
        $verifyName = UserAuthenticator::verifyName($name);
        $verifyEmail = UserAuthenticator::verifyEmail($email);
        $verifyPassword = UserAuthenticator::verifyPassword($password);
        $verifyImage = UserAuthenticator::verifyImage($image);

        if($verifyName === false || $verifyEmail === false || $verifyPassword === false || $verifyImage === false ) return;

        $signUp = UserRepository::schemaRegister((string) $name, (string) $email, (string) $password, (string) $about, (string) $image['name']);
        $id = ConnectionFactory::connect()->lastInsertId();

        if(!$signUp){
            MessageAuth::launchMessage('error', 'Error while registering!');
            return;
        };

        move_uploaded_file($image['tmp_name'], dirname(__DIR__, 2).'\storage\users\\' . $image['name']);

        new User((int) $id, (string) $name, (string) $email, (string) $password, (string) $about, (string) $image['name']);
        header('Location: '.BASE_URL.'/');
    }

    protected static function login(string $email, string $password): void
    {
        $verifyEmail = UserAuthenticator::verifyEmail($email);

        if($verifyEmail === false) return;

        $user = UserRepository::schemaLogin((string) $email, (string) $password);

        if($user === false){
            MessageAuth::launchMessage('error', 'User not exists!');
            return;
        };

        new User((int) $user['id'], (string) $user['name'], (string) $email, (string) $password, (string) $user['about'], (string) $user['image']);
        header('Location: '.BASE_URL.'/');
    }

}

?>