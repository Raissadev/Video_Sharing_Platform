<?php

namespace src\Repository;

use app\Services\ConnectionFactory;

class ChannelRepository
{

    public static string $followers;

    protected static function schemaNewChannel(int $owner, string $name, string $about, string $image, string $videos, string $followers): void
    {
        $newChannel = ConnectionFactory::connect()->prepare("INSERT INTO channels (owner, name, about, image, videos, followers) VALUES (?,?,?,?,?,?)");
        $newChannel->execute(array((int) $owner, (string) $name, (string) $about, (string) $image, (string) $videos, (string) $followers));
    }

    protected static function schemaChannels($query): array
    {
        $channels = ConnectionFactory::connect()->prepare("SELECT * FROM channels $query");
        $channels->execute();
        $channels = $channels->fetchAll(\PDO::FETCH_ASSOC);
        return $channels;
    }

    protected static function schemaGetChannel($id): array
    {
        $channels = ConnectionFactory::connect()->prepare("SELECT * FROM channels WHERE id = $id");
        $channels->execute();
        $channels = $channels->fetch(\PDO::FETCH_ASSOC);
        return $channels;
    }

    protected static function schemaSearchChannels($name): array
    {
        $query = isset($name) ? "WHERE name LIKE '$name%' OR about LIKE '$name%'" : '';
        $results = ConnectionFactory::connect()->prepare("SELECT * FROM channels $query");
        $results->execute();
        $results = $results->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    protected static function schemaSearchUsersChannels($name) : array
    {
        $query = isset($name) ? "WHERE name LIKE '$name%' OR about LIKE '$name%'" : '';
        $results = ConnectionFactory::connect()->prepare("SELECT * FROM users $query");
        $results->execute();
        $results = $results->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }

    protected static function schemaGetOwner($query): array
    {
        $owners = ConnectionFactory::connect()->prepare("SELECT * FROM users $query");
        $owners->execute();
        $owners = $owners->fetchAll(\PDO::FETCH_ASSOC);
        return $owners;   
    }

    protected static function schemaNewFollow(int $channel, string $followers): void
    {
        $follow = ConnectionFactory::connect()->prepare("UPDATE channels SET followers = ? WHERE id = $channel");
        $follow->execute(array($followers));
    }

    protected static function schemaGetFollowers(int $id): array
    {
        $followers = ConnectionFactory::connect()->prepare("SELECT (id, followers) FROM channels WHERE id = $id");
        $followers->execute();
        $followers = $followers->fetch();
        return $followers;
    }

}

?>