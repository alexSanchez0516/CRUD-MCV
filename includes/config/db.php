<?php 



function connectDB() : mysqli{
    //$db = new mysqli('localhost', '', '', 'divisione_crud'); pass:169, user: xy....
    if (!$db) {
        echo "No hay conexion";
        exit;
    } 

    return $db;
    
}



