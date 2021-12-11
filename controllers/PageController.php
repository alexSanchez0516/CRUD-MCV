<?php

namespace Controllers;

use MVC\Router;
use Model\Services;


class PageController
{
    public static function index(Router $router)
    {
        $router->render('index', []);
    }

    public static function contact(Router $router)
    {
        $router->render('pages/contact', []);
    }

    public static function about(Router $router)
    {
        $router->render('pages/about', []);
    }

    public static function services(Router $router)
    {
        $data = Services::getServicesList(null);
        $router->render('pages/services', [
            'data' => $data[0]
        ]);
    }
    public static function cookies(Router $router)
    {
        $router->render('legal/cookies', []);
    }

    public static function legal(Router $router)
    {
        $router->render('legal/legal', []);
    }

    public static function privacy(Router $router)
    {
        $router->render('legal/privacidad', []);
    }

    public static function service(Router $router) {
        $id = validateOrRedirect("/");
        $data = Services::getServicesList($id);

        $router->render('pages/service', [
            'service' => $data[0],
            'listServices' => $data[1]
        ]);
    }
}
