<li class="box">
    <figure class="img-small-channel pos-relative">
        <img src="<?= BASE_STORAGE ?>/channels/<?= $channel['image'] ?>" />
        <a href="<?= BASE_URL ?>/channel/?id=<?= $channel['id'] ?>" class="button"><i class="ri-play-mini-fill"></i></a>
    </figure>
    <h5 class="limit-line-one"><?= $channel['name'] ?></h5>
    <p class="font-size-tiny limit-line-one"><?= $channel['about'] ?></p>
</li>