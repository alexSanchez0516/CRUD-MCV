<?php

namespace MVC;

Class Router {


    public $routesPOST = [];
    public $routesGET = [];
    
    public function get($url, $fn) {
        $this->routesGET[$url] = $fn;

    }

    public function checkRoutes() {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        
        if ($method == 'GET') {
            $fn = $this->routesGET[$uri] ?? NULL;
        }

        if ($fn) {
            //Si la URL existe
            call_user_func($fn, $this);

        } else {
            header('Location: 404.php');
        }
         

    }

    public function render($view, $data = []) { 

        foreach ($data as $key => $value) {
            $$key = $value; //Variable de variable
        }

        ob_start(); //Almacenamiento en memoria momentaneo
        include __DIR__ . '/views/' . $view .'.php';

        $content = ob_get_clean(); //Limpiamos el buffer

        include __DIR__ . '/views/layout.php';
    }
}