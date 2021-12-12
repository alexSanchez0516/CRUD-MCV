<?php

namespace Controllers;

use MVC\Router;
use Model\Services;

class ServiceController
{


    public static function admin(Router $router)
    {
        $state = null;
        if ($_GET) {
            $state = filter_var(intval($_GET['state']), FILTER_VALIDATE_INT);
        }
        $services = Services::all();



        $router->render('admin/admin', [
            'services' => $services,
            'state' => $state
        ]);
    }


    public static function login(Router $router)
    {
        $router->render('login', []);
    }

    public static function create(Router $router)
    {
        $serviceInstace = new Services();
        $errors = Services::getErrors();
        $listServices = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            ob_start();

            $serviceInstace = new Services($_POST);

            $image = $_FILES['image'];
            $serviceInstace->uploadImg($image, null);

            $errors = $serviceInstace->validateData();

            if (empty($errors)) {
                $serviceInstace->save();
            }
            $listServices = $_POST['services'];
        }



        $router->render('admin/create', [
            'serviceInstace' => $serviceInstace,
            'errors' => $errors,
            'listServices' => $listServices
        ]);
    }



    public static function update(Router $router)

    {
        $id = validateOrRedirect('/admin');
        $serviceInstace = Services::find($id, null);

        $listServices = Services::getServicesList($id);
        $listServices = implode(', ', $listServices[1]);

        $errors = Services::getErrors();
        $imgDelete = $serviceInstace->imageProduct;

        $args = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            ob_start();

            $args['name'] = $_POST['name'] ?? null;
            $args['description'] = $_POST['description'] ?? null;
            $args['services'] = $_POST['services'] ?? null;
            $args['price'] = $_POST['price'] ?? null;
            $args['imageProduct'] = $_FILES['image']['name'] ?? null;

            $serviceInstace->synchronize($args);

            $errors = $serviceInstace->validateData();


            if (empty($errors)) {
                if (!empty($_FILES['image']['tmp_name'])) {
                    $serviceInstace->uploadImg($_FILES['image'], $imgDelete);
                }
                $serviceInstace->save();
            }
        }


        $router->render('admin/update', [
            'serviceInstace' => $serviceInstace,
            'errors' => $errors,
            'listServices' => $listServices
        ]);
    }

    public static function delete($id)
    {
        $idDelete = validateOrRedirect("/admin");
        $ServiceInstance = Services::find($idDelete, null);
        $ServiceInstance->delete();
    }


}
