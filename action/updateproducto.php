<?php 

// Importar el archivo de conexion
include('../connection/connection.php');


$phpId = $_POST['inputId'];
$phpNombre = $_POST['inputNombre'];
$phpPrecio = $_POST['inputPrecio'];
$phpFabricante = $_POST['inputCodigoFabricante'];

$updateFabricante = "UPDATE producto SET nombre = '$phpNombre', precio = '$phpPrecio', codigo_fabricante = '$phpFabricante' WHERE codigo = '$phpId'";


$resultado = mysqli_query($connection, $updateFabricante);

header('Location: ../productos.php')


?>