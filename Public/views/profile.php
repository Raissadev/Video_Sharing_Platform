<?php require 'components/flash-message.php'; ?>

<section class="mr-top-default">
    <form method="POST" action="/update-profile" enctype="multipart/form-data" class="form-box w90 center items-flex align-center just-space-between flex-wrap-dv-small">
        <div class="col w45 w100-dv-small mr-dv-bottom-default">
            <input type="text" name="name" value="<?= $_SESSION['name'] ?>" class="mr-bottom-small w100" />
            <input type="text" name="email" value="<?= $_SESSION['email'] ?>" class="mr-bottom-small w100" />
            <input type="text" name="password" value="<?= $_SESSION['password'] ?>" class="mr-bottom-default w100" />
            <input type="text" name="about" value="<?= $_SESSION['about'] ?>" class="mr-bottom-default w100" />
            <input type="file" name="image" value="<?= $_SESSION['image'] ?>" class="mr-bottom-default w100" />
            <button type="submit" name="update-profile" class="w40 button-default w60-dv-small">Update Profile</button>
        </div>
        <div class="col w50 w100-dv-small">
            <figure class="img-bigger-user">
                <img src="<?= BASE_STORAGE ?>/users/<?= $_SESSION['image'] ?>" />
            </figure>
        </div>
    </form>
</section>

