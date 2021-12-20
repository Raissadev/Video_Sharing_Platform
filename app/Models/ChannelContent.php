<?php

namespace app\models;

use src\Repository\ContentRepository;
use src\Helpers\MessageAuth;
use src\Middlewares\ChannelAuthenticator;

class ChannelContent extends ContentRepository
{

    protected static function getContent(int $id): array
    {
        $content = ContentRepository::schemaGetContent($id);
        return $content;
    }

    protected static function ChannelUser(): array
    {
        $channel = ContentRepository::schemaChannelUser();
        return $channel;
    }

    protected static function newContent(int $owner, int $channel, string $title, string $description, array $thumbnail, array $video, int $likes, int $deslikes): void 
    {
        $verifyTitle = ChannelAuthenticator::verifyName($title);
        $verifyThumbnail = ChannelAuthenticator::verifyImage($thumbnail);
        $verifyVideo = ChannelAuthenticator::verifyVideo($video);

        if($verifyTitle === false  || $verifyThumbnail === false || $verifyVideo === false) return;

        $content = ContentRepository::schemaCreateContent((int) $owner, (int) $channel, (string) $title, (string) $description, (string) $thumbnail['name'], (string) $video['name'], (int) $likes, (int) $deslikes);

        move_uploaded_file($thumbnail['tmp_name'], dirname(__DIR__, 2).'\storage\channel-content\\' . $thumbnail['name']);
        move_uploaded_file($video['tmp_name'], dirname(__DIR__, 2).'\storage\videos\\' . $video['name']);

        MessageAuth::launchMessage('success', 'Content successfully posted!');

    }

    protected function addLike(int $channelContent, int $like): void
    {
        $like = ContentRepository::schemaAddLike($channelContent, $like);
    }

    protected function addDeslike(int $channelContent, int $deslike): void
    {
        $like = ContentRepository::schemaAddDeslike($channelContent, $deslike);
    }

    public static function ownerChannel(int $id): array
    {
        $owner = ContentRepository::schemaOwnerChannel((int) $id);
        return $owner;
    }

    public static function getContentChannel($id): array
    {
        $content = ContentRepository::schemaContentChannel($id);
        return $content;
    }

    public static function lastVisas($see): int
    {
        $_SESSION['last_visas'][] = $see;
        return $see;
    }

    public static function getLastSeeContentChannel($ids): array
    {
        $content = ContentRepository::schemaLastSeeContentChannel($ids);
        return $content;
    }

}

?>