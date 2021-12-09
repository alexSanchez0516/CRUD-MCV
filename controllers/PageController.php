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
        $router->render('services/contact', []);
    }

    public static function about(Router $router)
    {
        $router->render('services/about', []);
    }

    public static function services(Router $router)
    {
        $data = Services::consulSQL("SELECT services.id, name, imageProduct, description, service.nameService FROM services LEFT JOIN service ON services.id = service.serviceID; ");
        $listServices = [];

        $router->render('services/services', [
            'data' => $data,
            'listServices' => $listServices
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
        $router->render('services/service', []);
    }
}
