<section class="channel-content mr-top-default mr-bottom-default">
    <div class="wrap w90 center">
        <figure style="background-image:url('<?= BASE_STORAGE ?>/channel-content/<?= $params['content']['thumbnail'] ?>')" class="img-bigger-channel items-flex align-end">
            <video controls class="video-content">
                <source src="<?= BASE_STORAGE ?>/videos/<?= $params['content']['video'] ?>">
            </video>
        </figure>
    </div>
</section>

<section class="container-channel-about mr-bottom-default">
    <div class="wrap w90 center items-flex just-space-between flex-wrap-dv-small">
        <div class="box w50 w100-dv-small mr-dv-bottom-default">
            <h4 class="mr-bottom-tiny">About Content</h4>
            <p class="mr-bottom-small"><?= $params['content']['description'] ?></p>
            <div class="items-flex align-center">
                <p class="mr-right-small">Gostou: <?= $params['content']['likes'] ?></p>
                <p>Não Gostou: <?= $params['content']['deslikes'] ?></p>
            </div>
        </div>
        <div class="box w45 pos-relative w100-dv-small items-flex direction-column just-space-between">
            <div>
                <h4 class="mr-bottom-tiny">Title Content</h4>
                <p><?= $params['content']['title'] ?></p>
            </div>
            <div class="items-flex align-center just-space-between">
                <form method="POST" action="/add-album" class="action-add">
                    <input type="hidden" name="channel_content" value="<?= $params['content']['id'] ?>" />
                    <button type="submit" name="add-album"><i class="ri-heart-fill"></i></button>
                </form>
                <form method="POST" action="/channel-content/?id=<?= $params['content']['id'] ?>" class="likes items-flex align-center">
                    <input type="hidden" name="channel_content" value="<?= $params['content']['id'] ?>" />
                    <button type="submit" name="like" value="<?= $params['content']['likes'] + 1 ?>"><i class="ri-thumb-up-line"></i></button>
                    <button type="submit" name="deslike" value="<?= $params['content']['deslikes'] + 1 ?>"><i class="ri-thumb-down-line"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="container-initial container-search w90 center mr-bottom-default">
    <div class="wrap">
        <div class="row items-flex align-center just-space-between mr-bottom-small">
            <h5>Contents Channel: <?= count($params['contents']) ?></h5>
            <a href="/search-page?name=&search=" class="font-weak">See All</a>
        </div>
        <ul class="row list-channels items-flex flex-wrap">
            <?php 
                foreach($params['contents'] as $channel){
                    include 'components/box-content-channel.php';
                } 
            ?>
        </ul>
    </div>
</section>
 
