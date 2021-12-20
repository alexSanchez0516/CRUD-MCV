<?php

namespace Controllers;

use MVC\Router;
use Model\Services;
use PHPMailer\PHPMailer\PHPMailer;


class PageController
{
    public static function index(Router $router)
    {
        $message = null;
        $services = Services::getServicesList(null);
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $responses = $_POST['contact'];
            if (configMail($responses, 1)) {
                $message = "Enviado correctamente";
            } else {
                $message = "No se ha podido enviar, intenta más tarde";
            }
        }


        $router->render('index', [
            'services' => $services[0],
            'message' => $message
        ]);
    }

    public static function contact(Router $router)
    {
        $mensaje = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {


            $responses = $_POST['contact'];
        
            configMail($responses, 0);
        }

        $router->render('pages/contact', [
            'mensaje' => $mensaje
        ]);       
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
        $message = null;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $responses = $_POST['contact'];
            if (configMail($responses, 2)) {
                $message = "Enviado correctamente";
            } else {
                $message = "No se ha podido enviar, intenta más tarde";
            }
        }



        $router->render('pages/service', [
            'service' => $data[0],
            'listServices' => $data[1],
            'message' => $message
        ]);
    }
}
