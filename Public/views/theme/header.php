<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASE_PATH ?>/css/global.css" rel="stylesheet" />
    <link href="<?= BASE_PATH ?>/css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>MyYoutube</title>
</head>
<body>

<aside class="panel w17 h100vh hide-dv-small">
    <div class="wrap w90 center">
        <div class="logo mr-bottom-tiny">
            <a class="items-flex align-center">
                <i class="ri-terminal-fill mr-right-tiny"></i>
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <nav class="menu items-flex flex-wrap direction-column">
            <ul class="mr-bottom-small">
                <h6 class="mr-bottom-tiny">Menu</h6>
                <li><a href="/home"> <i class="ri-home-fill"></i> Home </a></li>
                <li><a href="/search-page"> <i class="ri-search-fill"></i> Search </a></li>
                <li><a href="/search-page?name=&search="> <i class="ri-compass-3-fill"></i> Discover </a></li>
                <li><a href="/albuns"> <i class="ri-bookmark-2-fill"></i> Albuns </a></li>
                <li><a href="/content-creators-users"> <i class="ri-user-3-fill"></i> Artists </a></li>
            </ul>
            <ul class="mr-bottom-small">
                <h6 class="mr-bottom-tiny">Library</h6>
                <li><a href="/recents"> <i class="ri-time-fill"></i> Recents </a></li>
                <li><a href="/favourites"> <i class="ri-heart-fill"></i> Favourites </a></li>
                <li><a href="/create-content"> <i class="ri-folder-reduce-fill"></i> New Video </a></li>
            </ul>
            <ul class="mr-bottom-small">
                <h6 class="mr-bottom-tiny">Menu</h6>
                <li><a href="/new-channel"> <i class="ri-add-fill"></i> Create New </a></li>
                <li><a href="/search-page?name=Gospel&search="> <i class="ri-file-list-2-fill"></i> Gospel </a></li>
                <li><a href="/search-page?name=Rock&search="> <i class="ri-file-list-2-fill"></i> Rock </a></li>
            </ul>
            <ul>
                <h6 class="mr-bottom-tiny">Menu</h6>
                <li><a href="/profile"> <i class="ri-settings-4-fill"></i> Settings </a></li>
                <li><a href="/?logout"> <i class="ri-logout-box-r-fill"></i> Logout </a></li>
                <li class="hide-dv-bigger toggle"><a> <i class="ri-arrow-left-line"></i> Fechar</a></li>
            </ul>
        </nav>
    </div>
</aside>

<main class="container">

<header class="mr-bottom-small">
    <div class="wrap w90 center items-flex align-center">
        <nav class="col w50 items-flex align-center">
            <li class="mr-right-small hide-dv-small"> <a href="/search-page?name=Music&search="> Musics </a> </li>
            <li class="mr-right-small hide-dv-small"> <a href="/search-page?name=Podcast&search="> Podcasts </a> </li>
            <li class="mr-right-small hide-dv-small"> <a href="/search-page?name=Game&search="> Games </a> </li>
            <li class="mr-right-small hide-dv-small"> <a href="/search-page?name=Radio&search="> Radio </a> </li>
            <li class="hide-dv-bigger toggle"> <a> <i class="ri-menu-line"></i> </a> </li>
        </nav>
        <div class="col w50 items-flex align-center just-end">
            <a class="circles toggle-right items-flex align-center">
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</header>