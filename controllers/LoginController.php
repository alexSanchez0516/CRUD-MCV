<?php

namespace Controllers;
use MVC\Router;
use Model\Users;

class LoginController {


    public static function auth(Router $router) {
        $errors = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userLogin = new Users($_POST);
            $userLogin->login();
            $errors = $userLogin->getErrors();
        }

        $router->render('login', [
            'errors' => $errors
        ]);
    }

    public static function logout(Router $router) {
        Users::logout();   
    }

}