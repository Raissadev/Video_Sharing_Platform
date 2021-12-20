<li class="box">
    <figure class="img-small-channel pos-relative">
        <img src="<?= BASE_STORAGE ?>/channel-content/<?= $channel['thumbnail'] ?>" />
        <a href="<?= BASE_URL ?>/channel-content/?id=<?= $channel['id'] ?>" class="button"><i class="ri-play-mini-fill"></i></a>
    </figure>
    <h5 class="limit-line-one"><?= $channel['title'] ?></h5>
    <p class="font-size-tiny limit-line-one"><?= $channel['description'] ?></p>
</li>