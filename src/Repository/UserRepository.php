<?php

namespace src\Repository;

use app\Services\ConnectionFactory;

class UserRepository
{

    protected static function schemaRegister(string $name, string $email, string $password, string $about, string $image)
    {
        $signUp = ConnectionFactory::connect()->prepare("INSERT INTO users (name, email, password, about, image) VALUES (?,?,?,?,?)");
        $signUp->execute(array((string) $name, (string) $email, (string) $password, (string) $about, (string) $image));
        if($signUp) return true;
    }

    protected static function schemaLogin(string $email, string $password)
    {
        $userSignIn = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $userSignIn->execute(array((string) $email, (string) $password));
        $userSignIn = $userSignIn->fetch(\PDO::FETCH_ASSOC);
        if($userSignIn) return $userSignIn;
        else return false;
    }

    protected static function schemaUpdateProfile(int $id, string $name, string $email, string $password, string $about, string $image)
    {
        $update = ConnectionFactory::connect()->prepare("UPDATE users SET name = ?, email = ?, password = ?, about = ?, image = ? WHERE id = $id");
        $update->execute(array((string) $name, (string) $email, (string) $password, (string) $about, (string) $image));
        if($update) return true;
        else return false;
    }

    protected static function schemaAlbumAdd(int $user, int $channelContent): void
    {
        $add = ConnectionFactory::connect()->prepare("INSERT INTO albuns (user_id, channel_content) VALUES (?,?)");
        $add->execute(array((int) $user, (int) $channelContent));
    }

    protected static function getAlbum($query, $user): array
    {
        $album = ConnectionFactory::connect()->prepare("SELECT * FROM albuns JOIN channel_contents ON albuns.channel_content = channel_contents.id WHERE user_id = $user $query");
        $album->execute();
        $album = $album->fetchAll(\PDO::FETCH_ASSOC);
        return $album;
    }

}

?>