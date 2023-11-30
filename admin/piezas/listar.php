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

<div class="container">
  <h2>Filtrado </h2>
  <p>Ingrese letra o palabra referente a un ID:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Categoria</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Fit</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>Link</th>
        <th>P_potencia</th>
        <th>P_velocidad</th>
        <th>P_aceleracion</th>
        <th>Caballos</th>
        <th>Aceleracion</th>
        <th>Torque</th>
        <th>Velocidad</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "checo") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "SELECT id, tipo, categoria, marca, modelo, fit, precio, descripcion, link, p_potencia, p_velocidad, p_aceleracion, caballos, aceleracion, torque, velocidad
                                from piezas") or
            die("Problemas en el select:" . mysqli_error($conexion));
          
        echo "<tr>";
        while ($reg = mysqli_fetch_array($registros)) {
          echo "<td>" . $reg['id'] . "</td>";
          echo "<td>" . $reg['tipo'] . "</td>";
          echo "<td>" . $reg['categoria'] . "</td>";
          echo "<td>" . $reg['marca'] . "</td>";
          echo "<td>" . $reg['modelo'] . "</td>";
          echo "<td>" . $reg['fit'] . "</td>";
          echo "<td>" . $reg['precio'] . "</td>";
          echo "<td>" . $reg['descripcion'] . "</td>";
          echo "<td>" . $reg['link'] . "</td>";
          echo "<td>" . $reg['p_potencia'] . "</td>";
          echo "<td>" . $reg['p_velocidad'] . "</td>";
          echo "<td>" . $reg['p_aceleracion'] . "</td>";
          echo "<td>" . $reg['caballos'] . "</td>";
          echo "<td>" . $reg['aceleracion'] . "</td>";
          echo "<td>" . $reg['torque'] . "</td>";
          echo "<td>" . $reg['velocidad'] . "</td>";
          echo "</tr>";
        }
        echo "</tr>";

        mysqli_close($conexion);
    ?>

    </tbody>
  </table>
  
</div>

<script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>


</body>

</html>