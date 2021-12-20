<?php

namespace app\Models;

use app\Services\ConnectionFactory;
use app\Models\Entitys\User;
use src\Helpers\MessageAuth;
use src\Repository\ChannelRepository;
use src\Middlewares\ChannelAuthenticator;

class Channel extends ChannelRepository
{

    protected static function getChannelUser($id): array
    { 
        $channel = ChannelRepository::schemaGetChannel($id);
        return $channel;
    }

    protected static function newChannel(int $owner, string $name, string $about, array $image, string $videos, string $followers): void
    {
        $verifyName = ChannelAuthenticator::verifyName($name);
        $verifyImage = ChannelAuthenticator::verifyImage($image);

        if($verifyName === false || $verifyImage === false) return;

        ChannelRepository::schemaNewChannel((int) $owner, (string) $name, (string) $about, (string) $image['name'], (string) $videos, (string) $followers);
        move_uploaded_file($image['tmp_name'], dirname(__DIR__, 2).'\storage\channels\\' . $image['name']);
    
        MessageAuth::launchMessage('success', 'Channel created successfully!');
    }

    public static function getChannels($query): array
    {
        $channels = ChannelRepository::schemaChannels($query);
        return $channels;
    }


    public static function searchChannels($name): array
    {
        $search = ChannelRepository::schemaSearchChannels($name);
        return $search;
    }

    public static function searchUsersChannels($name): array
    {
        $search = ChannelRepository::schemaSearchUsersChannels($name);
        return $search;
    }

    public static function getOwner($query): array
    {
        $owners = ChannelRepository::schemaGetOwner($query);
        return $owners;
    }

    protected static function newFollow(int $channel, string $follow): void
    {
        ChannelRepository::schemaNewFollow((int) $channel, (string) $follow);
    }

    protected static function getFollowers(int $id): array
    {
        $followers = ChannelRepository::schemaGetFollowers((int) $id);
        return $followers;
    }

    public static function getChannelsInJson(): object
    {
        $channels = ChannelRepository::schemaChannels();
        return json_encode($channels);
    }

}

?>