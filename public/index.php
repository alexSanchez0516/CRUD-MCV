<?php

require_once __DIR__ . '../../includes/app.php'; 

use MVC\Router;
use Controllers\ServiceController;


$router = new Router();



$router->get('/admin', [ServiceController::class, 'index']);
$router->get('/admin/create', [ServiceController::class, 'create']);
$router->get('/admin/update', [ServiceController::class, 'update']);


$router->checkRoutes();