<?php

function conectarDB() : mysqli{
    $db = new mysqli('localhost','root','root','bienesraices_crud');

    if(!($db)){
        die("Error al Conectarse");
    }

    return $db;
}