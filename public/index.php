<?php

require_once __DIR__ . '../../includes/app.php'; 

use MVC\Router;
use Controllers\ServiceController;
use Controllers\PageController;
use Controllers\LoginController;


$router = new Router();

//PAGES
$router->post('/', [PageController::class, 'index']);
$router->get('/', [PageController::class, 'index']);

$router->get('/inicio', [PageController::class, 'index']);
$router->post('/inicio', [PageController::class, 'index']);


$router->get('/contacto', [PageController::class, 'contact']);
$router->post('/contacto', [PageController::class, 'contact']);
$router->get('/sobre-nosotros', [PageController::class, 'about']);
$router->get('/servicios', [PageController::class, 'services']);
$router->get('/cookies', [PageController::class, 'cookies']);
$router->get('/legal', [PageController::class, 'legal']);
$router->get('/privacidad', [PageController::class, 'privacy']);
$router->get('/servicio', [PageController::class, 'service']);
$router->post('/servicio', [PageController::class, 'service']);



//CRUD-ADMIN
$router->get('/admin', [ServiceController::class, 'admin']);
$router->get('/admin/create', [ServiceController::class, 'create']);
$router->post('/admin/create', [ServiceController::class, 'create']);
$router->post('/admin/update', [ServiceController::class, 'update']);
$router->get('/admin/update', [ServiceController::class, 'update']);
$router->get('/admin/delete', [ServiceController::class, 'delete']);


//AUTH
$router->get('/login', [LoginController::class, 'auth']);
$router->post('/login', [LoginController::class, 'auth']);
$router->get('/logout', [LoginController::class, 'logout']);




$router->checkRutes();
