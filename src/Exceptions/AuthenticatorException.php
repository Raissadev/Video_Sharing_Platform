<?php

namespace src\Exceptions;

class AuthenticatorException extends \DomainException
{

    public function __construct(string $message)
    {
        self::treatment($message);
    }

    public function treatment($message): void
    {
        if($message){
            MessageAuth::defineMessage('error', $message);
            header('Location: '.BASE.'/exception-treatament');
        }
    }

}

?>