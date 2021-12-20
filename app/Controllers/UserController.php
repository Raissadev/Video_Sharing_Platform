<?php

namespace app\Controllers;

use app\Services\MainView;
use app\Models\Channel;
use app\Models\Entitys\User;
use app\Models\Profile;

class UserController extends Profile
{

    public function profile(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $channels = Channel::getChannels("");
        $owners = Channel::getOwner("LIMIT 6");
        MainView::render('profile', [ 'owners' => $owners, 'channels' => $channels, 'notification' => $notification ]);
    }

    public function setProfile(): void
    {
        if(isset($_POST['update-profile'])){
            Profile::updateProfile($_SESSION['id'], $_POST['name'], $_POST['email'], $_POST['password'], $_POST['about'], $_FILES['image']);
        }
    }

    public function albuns(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $channels = Channel::getChannels("");
        $album = Profile::getAlbum("", $_SESSION['id']);
        $owners = Channel::getOwner("LIMIT 6");
        MainView::render('albuns', [ 'owners' => $owners, 'channels' => $channels, 'album' => $album, 'notification' => $notification ]);
    }

    public function addItemAlbum(): void
    {
        if(isset($_POST['add-album'])){
            Profile::albumAdd($_SESSION['id'], $_POST['channel_content']);
        }
    }

    public function setLogout(): void
    {
        if(isset($_GET['logout'])){
            (new Profile)->logout();
        }
    }

}

?>