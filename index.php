<?php

require 'Config/config.php';

$Route = new app\Route\Router;

if($_SERVER['REQUEST_URI'] !== '/sign-in' && !isset($_SESSION['login'])){
    header('Location: '.BASE_URL.'/sign-in');
}

if($_SERVER['REQUEST_URI'] === '/'){
    (new app\Controllers\Controller)->home();
}

//Methods Post
$Route->post('/sign-up', 'app\Controllers\AuthenticationController', 'storeSignUp');
$Route->post('/sign-in', 'app\Controllers\AuthenticationController', 'storeSignIn');
$Route->post('/new-channel', 'app\Controllers\ChannelController', 'channelStore');
$Route->post('/create-content', 'app\Controllers\ChannelContentController', 'storeCreateContent');
$Route->post('/add-album', 'app\Controllers\UserController', 'addItemAlbum');

//Methods Puts
$Route->put('/update-profile', 'app\Controllers\UserController', 'setProfile');
$Route->put('/channel-content', 'app\Controllers\ChannelContentController', 'setLike');
$Route->put('/channel', 'app\Controllers\ChannelController', 'setFollow');

//Methods Gets
$Route->get('/home', 'app\Controllers\Controller', 'home');
$Route->get('/sign-up', 'app\Controllers\AuthenticationController', 'signUp');
$Route->get('/sign-in', 'app\Controllers\AuthenticationController', 'signIn');
$Route->get('/new-channel', 'app\Controllers\ChannelController', 'index');
$Route->get("/channel/?id=", 'app\Controllers\ChannelController', 'getChannel');
$Route->get('/profile', 'app\Controllers\UserController', 'profile');
$Route->get('/create-content', 'app\Controllers\ChannelContentController', 'createContent');
$Route->get('/channel-content', 'app\Controllers\ChannelContentController', 'content');
$Route->get('/recents', 'app\Controllers\Controller', 'recents');
$Route->get('/albuns', 'app\Controllers\UserController', 'albuns');
$Route->get('/favourites', 'app\Controllers\UserController', 'albuns');
$Route->get('/content-creators-users', 'app\Controllers\ChannelController', 'contentCreatorsUsers');
$Route->get('/?logout', 'app\Controllers\UserController', 'setLogout');
$Route->get('/search-page', 'app\Controllers\Controller', 'searchPage');


$Route->get('test', 'app\Controllers\Controller', 'test');
