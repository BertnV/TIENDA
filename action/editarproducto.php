<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Editar Productos!</title>
  </head>
  <body class="sty">

  <div class="container"> 
  <br>
<!-- inicio de formulario  -->
<?php
    // Importar el archivo de conexion
    include('../connection/connection.php');    

$phpId = $_GET['id'];

          // Variable para listar objeto por medio de codigo
          $consulta = "SELECT * FROM producto WHERE codigo = '$phpId'"; 

          // Query de conexion y query a mostrar
          $resultado = mysqli_query($connection, $consulta);

          // Mientras haya algo dentro de table, seguira listando
          $fila = mysqli_fetch_array($resultado);
  ?>

<form action="updateproducto.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Nombre Productos</label>
    <input  type="text" name="inputNombre" value="<?php echo $fila["nombre"]?>"  class="form-control">
    <input  type="hidden" name="inputId"  value="<?php echo $fila["codigo"] ?>">
    <br>
    <label class="form-label">Precio</label>
    <input  type="number"  name="inputPrecio" value="<?php echo $fila["precio"]?>" class="form-control">
    <br>
    <label class="form-label">Nombre de fabricante </label>
<form>
  
     <!-- Select para los nombres de fabricantes -->  
    <select name="inputCodigoFabricante" class="form-select form-select form-select-md">  
    <option selected>Abre este menu</option>
    <?php
          // Importar el archivo de conexion
          // include('connection/connection.php');
          // Variable para listar toda la tabla de fabricante
          $consulta = "SELECT fabricante.codigo as codigo_fabricante, 
          fabricante.nombre as nombre_fabricante  FROM fabricante";
          // Query de conexion y query de listado
          $resultado = mysqli_query($connection, $consulta);
          // Mientras haya algo dentro de table, seguira listando
          while ($fila = mysqli_fetch_array($resultado)) {
  ?>
    <option value="<?php echo $fila["codigo_fabricante"]?>"><?php echo $fila["nombre_fabricante"]?></option>
  
    <?php }  // cierre del while?>    
          </select> 
          <br> 

<button type="submit" name="actualizar" class="btn btn-primary">actualizar</button>
</form>
<!-- fin de formulario  -->


          </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>