<?php

namespace src\Middlewares;

use src\Helpers\MessageAuth;
use src\Exceptions\AuthenticatorException;

abstract class ChannelAuthenticator extends MessageAuth
{

    public static function verifyName(string $name): bool
    {
        $caracteres = preg_match("/[\[^\'£$%^&*()}{@:\'#~?><>]]'/", $name);
        if($caracteres || $name == ''){
            MessageAuth::launchMessage('error', "O nome $name é inválido!");
            return false;
        }

        return true;
    }

    public static function verifyImage(array $image)
    {
        $imageValidate = preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $image['type']);
        if(!$imageValidate){
            MessageAuth::launchMessage('error', "O arquivo $image é inválido!");
            return false;
        }
        
        return true;
    }

    public static function verifyVideo(array $video)
    {
        $videoValidate = preg_match('/^video\/(mp4|MOV|AVCHD|WebM)$/', $video['type']);
        if(!$videoValidate){
            MessageAuth::launchMessage('error', "O arquivo $video é inválido!");
            return false;
        }
        
        return true;
    }

}

?>