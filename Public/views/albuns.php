<?php require 'components/flash-message.php'; ?>

<section class="mr-bottom-default">
    <form method="GET" action="/search-page" class="wrap w90 center items-flex">
        <input type="text" name="name" placeholder="Enter the channel you are looking for..." autocomplete="off" class="w80 mr-right-small" />
        <button type="submit" name="search" class="w20 button-default"><span class="hide-dv-small">Search</span> <i class="ri-search-line mr-left-tiny mr-none"></i></button>
    </form>
</section>

<section class="container-initial container-search w90 center mr-bottom-default">
    <div class="wrap">
        <div class="row items-flex align-center just-space-between mr-bottom-small block-dv-small">
            <h5>Channels Contents Result: <?= count($params['album']) ?></h5>
            <a href="/search-page?name=&search=" class="font-weak">See All</a>
        </div>
        <ul class="row list-channels items-flex flex-wrap">
            <?php 
                foreach($params['album'] as $channel){
                    include 'components/box-content-channel.php';
                } 
            ?>
        </ul>
    </div>
</section>