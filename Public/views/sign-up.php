<section class="container-auth w100 h100vh items-flex align-center just-center">
    <form method="POST" action="<?= BASE_URL ?>/sign-up" enctype="multipart/form-data" class="form-box items-flex flex-wrap align-center w50 w90-dv-small">
        <?php require 'components/flash-message.php'; ?>
        <input type="text" name="name" placeholder="Your name" class="mr-bottom-small w100" autocomplete="off" />
        <input type="text" name="email" placeholder="Your email" class="mr-bottom-small w100" autocomplete="off" />
        <input type="password" name="password" placeholder="Your password" class="mr-bottom-small w100" autocomplete="off" />
        <input type="text" name="about" placeholder="About you" class="mr-bottom-small w100" autocomplete="off" />
        <input type="file" name="image" class="mr-bottom-small w100" />
        <button type="submit" name="sign-up" class="button-default w20 center w50-dv-small">Sign Up</button>
        <div class="mr-top-tiny text-right w100">
            <p>Already have an account? <a href="<?= BASE_URL ?>/sign-in">Sign In!</a></p>
        </div>
    </form>
</section>

