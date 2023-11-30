<html lang="en">
<head>
  <title>Carros CHECO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../style-admin.css">

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
  <h2>Alta de vehículos</h2>
  <form class="form-horizontal" action="insert2.php" enctype="multipart/form-data">

  <div class="form-group">
      <label class="control-label col-sm-2" for="marca">Marca:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="marca" placeholder="Ingrese una marca" name="marca">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="modelo">Modelo:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="modelo" placeholder="Ingrese un modelo" name="modelo">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="year">Año:</label>
      <div class="col-sm-3">
        <input type="number" class="form-control" id="year" placeholder="Ingrese un año" name="year">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="cilindros">Cantidad de cilindros:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="cilindros" placeholder="Ingrese la cuántos cilindros tiene" name="cilindros">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="orden_cilindros">Distribución de los cilindros:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="orden_cilindros" placeholder="Ingrese el tipo de estructura" name="orden_cilindros">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="litros">Cantidad de litros:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="litros" placeholder="Ingrese cuántos litros usa el motor" name="litros">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="transmision">Tipo de transmisión:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="transmision" placeholder="Ingrese el tipo de transmisión" name="transmision">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="imagen">Link de la imagen del carro:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" id="imagen" placeholder="" name="imagen">
      </div>
    </div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Agregar carro</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>