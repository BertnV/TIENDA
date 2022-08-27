<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Productos!</title>
  </head>
  <body>

  <div class="container"> 

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
  </tbody>
</table>
  </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>