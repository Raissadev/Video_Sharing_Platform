<?php

namespace src\Helpers;

abstract class MessageAuth
{

    public static function launchMessage(string $type, string $message): void
    {
        $_SESSION['message'] = $message;
        $_SESSION['type'] = $type;
    }

}

?>