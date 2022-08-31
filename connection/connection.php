<?php

// Datos de la db en variables

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';

// Query para la conexion a la db

$connection = mysqli_connect($hostname, $username,$password, $database);

// Validador de conexion de la db

if(mysqli_connect_error()){
    echo 'Conexion fallida';
}else{
    //echo 'Conexion exitosa';
}
?>