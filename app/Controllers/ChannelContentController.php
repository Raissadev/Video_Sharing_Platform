<?php

namespace app\Controllers;

use app\Services\MainView;
use app\Models\Channel;
use app\Models\ChannelContent;
use app\Models\Profile;

class ChannelContentController extends ChannelContent
{

    public function content(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $content = ChannelContent::getContent($_GET['id']);
        $contents = ChannelContent::getContentChannel($content['channel']);
        $owners = Channel::getOwner("LIMIT 6");
        $channels =  Channel::getChannels("");
        $itSaw = ChannelContent::lastVisas($content['id']);
        MainView::render('channel-content', [  'owners' => $owners, 'notification' => $notification, 'channels' => $channels, 'content' => $content, 'contents' => $contents ]);
    }

    public static function createContent(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $channelUser = ChannelContent::ChannelUser();
        $owners = Channel::getOwner("LIMIT 6");
        $channels =  Channel::getChannels("");
        MainView::render('create-content', [  'owners' => $owners, 'notification' => $notification,'channels' => $channels, 'channelUser' => $channelUser ]);
    }

    public function storeCreateContent(): void
    {
        if(isset($_POST['create-content'])){
            (new ChannelContent)->newContent($_SESSION['id'], $_POST['channel'], $_POST['title'], $_POST['description'], $_FILES['thumbnail'], $_FILES['video'], 0, 0);
        }
    }

    public function setLike(): void
    {
        if(isset($_GET['like'])){
            (new ChannelContent)->addLike($_GET['channel_content'], $_GET['like']);
        }
        elseif(isset($_GET['deslike'])){
            (new ChannelContent)->addDeslike($_GET['channel_content'], $_GET['deslike']);
        }
    }

}

?>