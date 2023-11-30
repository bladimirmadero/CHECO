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

<div class="container">
  <h2>Filtrado BD</h2>
  <p>Ingrese letra o palabra referente a un ID, nombre del carro o motor, tipo de motor, marca, modelo o año:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar...">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID carro</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año</th>
        <th>Cilindros</th>
        <th>Distribución de cilindros</th>
        <th>Litros del cilindraje</th>
        <th>Tipo de transmisión</th>
        <th>Imagen</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "checo") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select idCarro, marca, modelo, year, cilindros, orden_cilindros, litros, transmision, imagen
                                from carro") or
            die("Problemas en el select:" . mysqli_error($conexion));
          
        
        while ($reg = mysqli_fetch_array($registros)) {
          echo "<tr>";
          echo "<td>" . $reg['idCarro'] . "</td>";
          echo "<td>" . $reg['marca'] . "</td>";
          echo "<td>" . $reg['modelo'] . "</td>";
          echo "<td>" . $reg['year'] . "</td>";
          echo "<td>" . $reg['cilindros'] . "</td>";
          echo "<td>" . $reg['orden_cilindros'] . "</td>";
          echo "<td>" . $reg['litros'] . "</td>";
          echo "<td>" . $reg['transmision'] . "</td>";
          echo "<td>  <img src='".$reg['imagen']."' width='100' heigth='100'> </td>";
          echo "</tr>";
        }
        //echo "</tr>";

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