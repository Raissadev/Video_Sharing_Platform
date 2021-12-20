<?php

namespace src\Repository;

use app\Services\ConnectionFactory;

class ContentRepository
{

    protected static function schemaCreateContent(int $owner, int $channel, string $title, string $description, string $thumbnail, string $video, int $likes, int $deslikes): void
    {
        $create = ConnectionFactory::connect()->prepare("INSERT INTO channel_contents (owner, channel, title, description, thumbnail, video, likes, deslikes) VALUES (?,?,?,?,?,?,?,?)");
        $create->execute(array((int) $owner, (int) $channel, (string) $title, (string) $description, (string) $thumbnail, (string) $video, (int) $likes, (int) $deslikes));
    }

    protected static function schemaContentChannel($id): array
    {
        $content = ConnectionFactory::connect()->prepare("SELECT * FROM channel_contents WHERE channel = $id");
        $content->execute();
        $content = $content->fetchAll(\PDO::FETCH_ASSOC);
        return $content;
    }

    protected static function schemaChannelUser(): array
    {
        $channel = ConnectionFactory::connect()->prepare("SELECT * FROM channels WHERE owner = $_SESSION[id]");
        $channel->execute();
        $channel = $channel->fetchAll(\PDO::FETCH_ASSOC);
        return $channel;
    }

    protected static function schemaOwnerChannel(int $id): array
    {
        $owner = ConnectionFactory::connect()->prepare("SELECT * FROM users WHERE id = $id");
        $owner->execute();
        $owner = $owner->fetch(\PDO::FETCH_ASSOC);
        return $owner;
    }

    protected static function schemaGetContent(int $id): array
    {
        $content = ConnectionFactory::connect()->prepare("SELECT * FROM channel_contents WHERE id = $id");
        $content->execute();
        $content = $content->fetch();
        return $content;
    }

    protected static function schemaLastSeeContentChannel(): array
    {
        $lastSee = ConnectionFactory::connect()->prepare("SELECT * FROM channel_contents");
        $lastSee->execute();
        $lastSee = $lastSee->fetch();
        return $lastSee;
    }

    protected static function schemaAddLike(int $channelContent, int $like): void
    {
        $liked = ConnectionFactory::connect()->prepare("UPDATE channel_contents SET likes = ? WHERE id = $channelContent");
        $liked->execute(array((int) $like));
    }

    protected static function schemaAddDeslike(int $channelContent, int $deslike): void
    {
        $liked = ConnectionFactory::connect()->prepare("UPDATE channel_contents SET deslikes = ? WHERE id = $channelContent");
        $liked->execute(array((int) $deslike));
    }

}

?>