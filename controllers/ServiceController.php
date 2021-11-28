<?php

namespace Controllers;
use MVC\Router;

class ServiceController {
    public static function index(Router $router) {
        $router->render('properties/admin', [
            'msg' => 'Desde El controlador',
            'text' => [1,32,43,43]
        ]);
    }

    public static function create() {
        debug("Creating");
    }

    public static function update() {
        debug("Updating");
    }
}