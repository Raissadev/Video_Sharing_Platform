<?php require 'components/flash-message.php'; ?>

<section class="container-initial w90 center mr-bottom-default">
    <div class="wrap">
        <div class="row items-flex align-center just-space-between mr-bottom-small">
            <h5>Global Top 50</h5>
            <a  href="/search-page?name=&search=" class="font-weak">See All</a>
        </div>
        <ul class="row list-channels items-flex">
            <?php 
                foreach($params['channels'] as $channel){
                    include 'components/box-single-small.php';
                } 
            ?>
        </ul>
    </div>
</section>

<section class="container-initial w90 center mr-bottom-default">
    <div class="wrap">
        <div class="row items-flex align-center just-space-between mr-bottom-small">
            <h5>First Channels</h5>
            <a  href="/search-page?name=&search=" class="font-weak">See All</a>
        </div>
        <ul class="row list-channels items-flex">
            <?php 
                foreach($params['firstChannels'] as $channel){
                    include 'components/box-single-small.php';
                } 
            ?>
        </ul>
    </div>
</section>