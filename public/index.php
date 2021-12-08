<?php

require_once __DIR__ . '../../includes/app.php'; 

use MVC\Router;
use Controllers\ServiceController;


$router = new Router();

//PAGES
$router->get('/', [ServiceController::class, 'index']);
$router->get('/contacto', [ServiceController::class, 'contact']);
$router->get('/sobre-nosotros', [ServiceController::class, 'about']);
$router->get('/servicios', [ServiceController::class, 'services']);



//ADMIN
$router->get('/admin', [ServiceController::class, 'admin']);


$router->get('/admin/create', [ServiceController::class, 'create']);
$router->post('/admin/create', [ServiceController::class, 'create']);

$router->post('/admin/update', [ServiceController::class, 'update']);
$router->get('/admin/update', [ServiceController::class, 'update']);


$router->get('/admin/delete', [ServiceController::class, 'delete']);


//AUTH

$router->get('/login', [ServiceController::class, 'login']);



$router->checkRutes();