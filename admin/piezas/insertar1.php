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

// Crear la conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "checo") or die("Problemas con la conexión");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y escapar los valores del formulario
    $tipo = mysqli_real_escape_string($conexion, $_POST["tipo"]);
    $categoria = mysqli_real_escape_string($conexion, $_POST["categoria"]);
    $marca = mysqli_real_escape_string($conexion, $_POST["marca"]);
    $modelo = mysqli_real_escape_string($conexion, $_POST["modelo"]);
    $fit = mysqli_real_escape_string($conexion, $_POST["fit"]);
    $precio = mysqli_real_escape_string($conexion, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($conexion, $_POST["descripcion"]);
    $link= mysqli_real_escape_string($conexion, $_POST["link"]);
    $p_potencia = mysqli_real_escape_string($conexion, $_POST["p_potencia"]);
    $p_velocidad = mysqli_real_escape_string($conexion, $_POST["p_velocidad"]);
    $p_aceleracion = mysqli_real_escape_string($conexion, $_POST["p_aceleracion"]);
    $caballos = mysqli_real_escape_string($conexion, $_POST["caballos"]);
    $aceleracion = mysqli_real_escape_string($conexion, $_POST["aceleracion"]);
    $torque = mysqli_real_escape_string($conexion, $_POST["torque"]);
    $velocidad = mysqli_real_escape_string($conexion, $_POST["velocidad"]);

    // Preparar la sentencia SQL usando una consulta preparada
    $query = "INSERT INTO piezas (tipo, categoria, marca, modelo, fit, precio, descripcion, link, p_potencia, p_velocidad, p_aceleracion, caballos, aceleracion, torque, velocidad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexion, $query);

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "sssssssssssssss", $tipo, $categoria, $marca, $modelo, $fit, $precio, $descripcion, $link, $p_potencia, $p_velocidad, $p_aceleracion, $caballos, $aceleracion, $torque, $velocidad);


    // Ejecutar la sentencia
    mysqli_stmt_execute($stmt);

    // Verificar si la inserción fue exitosa
    
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<br><p class='lead'>Los registros fueron insertados correctamente.</p>";
    } else {
        echo "<br><p class='lead'>Hubo un problema al insertar los registros.</p>";
        }

    // Cerrar la conexión y liberar recursos
    mysqli_stmt_close($stmt);
}

// Cerrar la conexión al finalizar el script
mysqli_close($conexion);
?>
</body>

</html>