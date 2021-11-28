<?php


require 'funciones.php';
require 'config/db.php';
require __DIR__ . '/../vendor/autoload.php';




$db = connectDB();

use Model\ActiveRecord;
//use App\Services;
//use App\Users;

ActiveRecord::setDB($db);
//Users::setDB($db);