<section class="container-auth w100 h100vh items-flex align-center just-center">
    <form method="POST" action="<?= BASE_URL ?>/sign-in" class="form-box items-flex flex-wrap align-center w50">
        <?php require 'components/flash-message.php'; ?>
        <input type="text" name="email" placeholder="Your email" class="mr-bottom-small w100" autocomplete="off" />
        <input type="password" name="password" placeholder="Your password" class="mr-bottom-small w100" autocomplete="off" />
        <button type="submit" name="sign-in" class="button-default w20 center">Sign In</button>
        <div class="mr-top-tiny text-right w100">
            <p>Don't have an account? <a href="<?= BASE_URL ?>/sign-up">Create!</a></p>
        </div>
    </form>
</section>

