<?php

namespace Controllers;
use MVC\Router;
use Model\Services;

class ServiceController {
    public static function index(Router $router) {

        $services = Services::all();

        $router->render('properties/admin', [
            'services' => $services
        ]);
    }

    public static function create() {
        debug("Creating");
    }

    public static function update() {
        debug("Updating");
    }
}