<?php require 'components/flash-message.php'; ?>

<section class="container h65vh items-flex align-center just-center w100">
    <form method="POST" action="/new-channel" enctype="multipart/form-data" class="form-box w90">
        <h4 class="mr-bottom-small">Create a new channel!</h4>
        <input type="text" name="name" class="mr-bottom-small w100" placeholder="Channel name" />
        <input type="text" name="about" class="mr-bottom-small w100" placeholder="Channel about" />
        <input type="file" name="image" class="mr-bottom-small w100" />
        <button type="submit" name="new-channel" class="button-default center w20 w60-dv-small">New Channel</button>
    </form>
</section>

