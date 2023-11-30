<html lang="en">
<head>
  <title>Carros CHECO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--Navbar de administrador-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../main-admin.html">Inicio</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrar <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="insert.php">Agregar</a></li>
          <li><a href="borrar.php">Eliminar</a></li>
          <li><a href="listado.php">Mostrar todo</a></li>
          <li><a href="up.php">Modificar</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

    <?php
    $conexion = mysqli_connect("localhost", "root", "", "checo") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update carro
                          set idCarro='$_REQUEST[idCarroNuevo]' 
                        where idCarro='$_REQUEST[idCarroViejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El carro fue modificado con exito";
    ?>
</body>

</html>