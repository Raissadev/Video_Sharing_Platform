<aside class="infos-aside hide-dv-small">
    <div class="wrap w90 center">
        <header>
            <div class="wrap items-flex align-center just-space-between">
                <h5> Notifications </h5>
                <a class="circles toggle-right items-flex align-center">
                    <span></span>
                    <span></span>
                </a>
            </div>
        </header>
        <div class="row mr-bottom-default">
            <ul class="col">
                <?php foreach($params['notification'] as $channel){ ?>
                <li class="items-flex mr-bottom-small"> 
                    <div> <a class="icon-feature"><i class="ri-file-list-2-fill"></i></a>  </div>
                    <div class="col mr-side-small">
                        <h5 class="font-size-small limit-line-one"><?= $channel['title'] ?> added to playlist</h5>
                        <p class="font-size-tiny limit-line-one"><?= $channel['description'] ?></p>
                    </div>
                    <div class="col">
                        <p><?= $channel['id'] ?> Id</p>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="row">
            <div class="wrap items-flex align-center just-space-between mr-bottom-small">
                <h5> Users in Platform </h5>
                <a class="circles items-flex align-center">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <ul class="items-flex list-panel flex-wrap">
            <?php 
                foreach($params['owners'] as $owner){
            ?>
                <li class="text-center">
                    <figure class="img-tiny-channel pos-relative">
                        <img src="<?= BASE_STORAGE ?>/users/<?= $owner['image'] ?>" />
                    </figure>
                    <h5 class="font-size-tiny limit-line-one"><?= $owner['name'] ?></h5>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</aside>