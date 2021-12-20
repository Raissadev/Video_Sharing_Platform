<?php require 'components/flash-message.php'; ?>

<section class="container h65vh items-flex align-center just-center w100">
    <form method="POST" action="/create-content" enctype="multipart/form-data" class="form-box w90">
        <h4 class="mr-bottom-small">Create a new video for your channel!</h4>
        <input type="text" name="title" class="mr-bottom-small w100" placeholder="Content title" />
        <input type="text" name="description" class="mr-bottom-small w100" placeholder="Channel description" />
        <select name="channel" class="mr-bottom-small w100">
            <?php foreach($params['channelUser'] as $key => $channelUser){  ?>
            <option value="<?= $channelUser['id'] ?>"><?= $channelUser['name'] ?></option>
            <?php } ?>  
        </select>
        <input type="file" name="thumbnail" class="mr-bottom-small w100" />
        <input type="file" name="video" class="mr-bottom-small w100" />
        <button type="submit" name="create-content" class="button-default center w20 w60-dv-small">Create Content</button>
    </form>
</section>


