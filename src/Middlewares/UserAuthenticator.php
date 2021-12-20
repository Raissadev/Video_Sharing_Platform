<?php

namespace src\Middlewares;

use src\Helpers\MessageAuth;
use src\Exceptions\AuthenticatorException;

abstract class UserAuthenticator extends MessageAuth
{

    public static function verifyName(string $name): bool
    {
        $caracteres =  preg_match("/[\[^\'£$%^&*()}{@:\'#~?><>]]/", $name);
        if($caracteres || $name == ''){
            MessageAuth::launchMessage('error', 'Nome inválido!');
            return false;
        }

        return true;
    }

    public static function verifyEmail(string $email): bool
    {
        $validation = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$validation || $email == ''){
            MessageAuth::launchMessage('error', 'Email inválido!');
            return false;
        }

        return true;
    }

    public static function verifyPassword(string $password): bool
    {
        $strongPassword = filter_var($password, FILTER_VALIDATE_REGEXP, array( "options" => array("regexp"=>"/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/")));
        if(!$strongPassword){
            MessageAuth::launchMessage('error', 'Senha fraca! Coloque ao menos uma letra maiuscula, números e um caracter especial.');
            return false;
        }

        return true;
    }

    public static function verifyImage(array $image)
    {
        $imageValidate = preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/', $image['type']);
        if(!$imageValidate){
            MessageAuth::launchMessage('error', 'Imagem inválida!');
            return false;
        }
        return true;
    }

}

?>