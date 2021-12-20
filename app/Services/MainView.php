<?php

namespace app\Services;

class MainView
{

    public static function render($filename, $params = [], $header = 'Public/views/theme/header.php', $footer = 'Public/views/theme/footer.php', $aside = 'Public/views/theme/aside.php'): void
    {
        include($header);
        include("Public/views/$filename.php");
        include($aside);
        include($footer);
        die();
    }

    public static function renderAuth($filename, $params = [], $header = 'Public/views/theme/header-auth.php', $footer = 'Public/views/theme/footer.php'): void
    {
        include($header);
        include("Public/views/$filename.php");
        include($footer);
        die();
    }

}

?>