<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="stylesheet" href="style.css">

    <title>Fabricantes</title>
  </head>
  <body class = "sty">
 
<div class="container">
<br>

<!-- inicio de formulario  -->
<form action = "action/insertfabricante.php" method = "POST">
  <div class="mb-3">
    <label class="form-label">Nombre fabricante</label>
    <input  type="text" name="inputNombre"  class="form-control">
  </div>
  <button type="submit" name="enviar" 
  class="btn btn">Enviar</button>
</form>
<!-- fin de formulario  -->
<br>

<!-- inicio de la tabla fabricante  -->
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
      // Importar el archivo de conexion
      include('connection/connection.php');
      // Variable para listar toda la tabla de fabricante
      $consulta = "SELECT * FROM fabricante";
      // Query de conexion y query de listado
      $resultado = mysqli_query($connection, $consulta);
      // Mientras haya algo dentro de table, seguira listando
      while ($fila = mysqli_fetch_array($resultado)) {
  ?>
    <tr>
      <th scope="row"><?php echo $fila["codigo"]?></th>
      <td><?php echo $fila["nombre"]?></td>
      <td><a button href="action/deletefabricante.php?id=<?php echo $fila["codigo"]?> " type="button" class="btn btn-danger" >Eliminar</a></td>
      <td><a button  href="action/editarfabricante.php?id=<?php echo $fila["codigo"]?> type="button" class="btn btn-warning">Edit</a></td>
      
    </tr>
<?php }  // cierre del while?>
  </tbody>
</table>

</div>
<!-- cierre de la tabla  -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>