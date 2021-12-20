<li class="box">
    <figure class="img-small-channel pos-relative">
        <img src="<?= BASE_STORAGE ?>/users/<?= $user['image'] ?>" />
        <a href="<?= BASE_URL ?>/channel/?id=<?= $user['id'] ?>" class="button"><i class="ri-play-mini-fill"></i></a>
    </figure>
    <h5 class="limit-line-one"><?= $user['name'] ?></h5>
    <p class="font-size-tiny limit-line-one"><?= $user['about'] ?></p>
</li>