<?php 



function connectDB() : mysqli{
    //$db = new mysqli('localhost', '', '', ''); 
    if (!$db) {
        echo "No hay conexion";
        exit;
    } 

    return $db;
    
}



