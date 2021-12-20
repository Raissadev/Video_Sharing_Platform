<section class="mr-bottom-default">
    <form method="GET" action="/content-creators-users" class="wrap w90 center items-flex">
        <input type="text" name="name" placeholder="Enter the users you are looking for..." autocomplete="off" class="w80 mr-right-small" />
        <button type="submit" name="search-user" class="w20 button-default"><span class="hide-dv-small">Search</span> <i class="ri-search-line mr-left-tiny mr-none"></i></button>
    </form>
</section>

<section class="container-initial container-search w90 center mr-bottom-default">
    <div class="wrap">
        <div class="row items-flex align-center just-space-between mr-bottom-small block-dv-small">
            <h5>Channels Result: <?= count($params['ownersSearch']) ?></h5>
            <a href="/content-creators-users?name=&search-user=" class="font-weak">See All</a>
        </div>
        <ul class="row list-channels items-flex flex-wrap">
            <?php 
                foreach($params['ownersSearch'] as $user){
                    if(str_contains($params['channels'][0]['owner'], $user['id'])){
                        include 'components/box-user-creator-content.php';
                    }
                } 
            ?>
        </ul>
    </div>
</section>