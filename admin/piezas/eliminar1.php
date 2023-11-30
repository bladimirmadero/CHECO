<html lang="en">
<head>
  <title>Piezas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--Navbar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../main-admin.html">Inicio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrar<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="insertar.php">Agregar</a></li>
          <li><a href="eliminar.php">Eliminar</a></li>
          <li><a href="listar.php">Mostrar todo</a></li>
          <li><a href="modificar.php">Modificar</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "checo") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select id from piezas
                        where id='$_REQUEST[id]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from piezas where id='$_REQUEST[id]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado de la pieza con dicho ID.";
  } else {
    echo "No existe una pieza con ese ID.";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>