<?php

namespace app\Controllers;

use app\Services\MainView;
use app\Models\Channel;
use app\Models\ChannelContent;
use app\Models\Profile;

class ChannelController extends Channel
{

    public function index(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $channels = Channel::getChannels("");
        $owners = Channel::getOwner("LIMIT 6");
        MainView::render('new-channel', [ 'owners' => $owners, 'channels' => $channels, 'notification' => $notification ]);
    }

    public function channelStore(): void
    {
        if(isset($_POST['new-channel'])){
            Channel::newChannel($_SESSION['id'], $_POST['name'], $_POST['about'], $_FILES['image'], '0', '0');
        }
    }

    public function getChannel(): void
    {   
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $owners = Channel::getOwner("LIMIT 6");
        $channels =  Channel::getChannels("");
        $content = ChannelContent::getContentChannel($_GET['id']);
        $channel = Channel::getChannelUser($_GET['id']);
        $ownerChannel = ChannelContent::ownerChannel($channel['owner']);
        $followers = Channel::getFollowers($_GET['id']);
        MainView::render('channel', [ 'channel' => $channel, 'owners' => $owners, 'notification' => $notification, 'channels' => $channels, 'content' => $content, 'ownerChannel' => $ownerChannel, 'followers' => $followers ]);
    }

    public function setFollow(): void
    {
        if(isset($_POST['follow'])){
            Channel::newFollow($_POST['channel'], $_POST['follow']);
        }
    }

    public function contentCreatorsUsers(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $owners = Channel::getOwner("");
        $channels = Channel::getChannels("");
        $ownersSearch = Channel::searchUsersChannels( isset($_GET['name']) ? $_GET['name'] : '' );
        MainView::render('content-creators', [ 'owners' => $owners, 'notification' => $notification, 'channels' => $channels, 'ownersSearch' => $ownersSearch ]);
    }

}

?>