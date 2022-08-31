<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Productos!</title>
  </head>
  <body class="sty">


  <div class="container"> 
  <br>

<!-- inicio de formulario  -->
<form action = "action/insertproductos.php" method = "POST">
  <div class="mb-3">
    <label class="form-label">Nombre de Productos</label>
    <input  type="text" name="inputNombre"  class="form-control">
    <label class="form-label">Precio</label>
    <input  type="text" name="inputPrecio"  class="form-control">
    <label class="form-label">Codigo de fabricante </label>
    <input  type="text" name="inputCodigoFabricante"  class="form-control">
  </div>

  
  <button type="submit" name="enviar" 
  class="btn btn-primary">Enviar</button>
</form>
<!-- fin de formulario  -->
<br>

<!-- comienso de tabla -->
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Codigo de Fabricante</th>
    </tr>
  </thead>

  <?php

include('connection/connection.php');
$consulta = "SELECT * FROM producto";
$resultado = mysqli_query($connection, $consulta);

while ($fila = mysqli_fetch_array($resultado)) {



  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo  $fila["codigo"]?></th>
      <td><?php echo  $fila["nombre"]?></td>
      <td><?php echo  $fila["precio"]?></td>
      <td><?php echo  $fila["codigo_fabricante"]?></td>
     
    
    </tr>
        <?php } ?>
        <!-- fin de tabla -->
  </tbody>
</table>
  </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>