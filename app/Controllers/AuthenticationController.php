<?php

namespace app\Controllers;
use app\Services\MainView;

use app\Models\Authentication;

class AuthenticationController extends Authentication
{

    public function signIn(): void
    {
        MainView::renderAuth('sign-in', [  ]);
    }

    public function signUp(): void
    {
        MainView::renderAuth('sign-up', [  ]);
    }

    public function storeSignUp(): void
    {
        if(isset($_POST['sign-up'])){
            Authentication::register($_POST['name'], $_POST['email'], $_POST['password'], $_POST['about'], $_FILES['image']);
        }
    }

    public function storeSignIn(): void
    {
        if(isset($_POST['sign-in'])){
            Authentication::login($_POST['email'], $_POST['password']);
        }
    }

}

?>