<?php

namespace app\Controllers;

use app\Services\MainView;
use app\Models\Channel;
use app\Models\ChannelContent;
use app\Models\Profile;

class Controller
{

    public function home(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $owners = Channel::getOwner("LIMIT 6");
        $channels = Channel::getChannels("ORDER BY id DESC LIMIT 4");
        $firstChannels = Channel::getChannels("ORDER BY id ASC LIMIT 4");
        MainView::render('home', [ 'channels' => $channels, 'owners' => $owners, 'firstChannels' => $firstChannels, 'notification' => $notification ]);
    }

    public function searchPage(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $owners = Channel::getOwner("LIMIT 6");
        $channels = Channel::searchChannels( isset($_GET['name']) ? $_GET['name'] : '' );
        MainView::render('search-page', [ 'channels' => $channels, 'owners' => $owners, 'notification' => $notification ]);
    }

    public function recents(): void
    {
        $notification = Profile::getAlbum("LIMIT 2", $_SESSION['id']);
        $owners = Channel::getOwner("LIMIT 6");
        $channels = Channel::searchChannels( isset($_GET['name']) ? $_GET['name'] : '' );
        $contents = ChannelContent::getLastSeeContentChannel( isset($_SESSION['last_visas']) ? $_SESSION['last_visas'] : [ '' ]);
        MainView::render('recents', [ 'owners' => $owners, 'notification' => $notification, 'channels' => $channels, 'contents' => $contents ]);
    }

    public function exceptionTreatament(): void
    {
        MainView::renderAuth('exception-treatament', [  ]);
    }

}

?>