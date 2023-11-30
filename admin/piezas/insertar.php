<html lang="en">
<head>
  <title>Piezas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  

  <link rel="stylesheet" href="../style-admin.css">

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
  <h2>Registro de refacciones</h2>
      <form action="insertar1.php" method="post">

      <div class="form-group">
      <br><br> <!--Admision-->

      <table class="table">
        <tr>
          <td><!--Izquierda-->
          <label for="tipo">Tipo de pieza</label> <br>
          <!--  <input type="text" id="tipo" name="tipo" class="inputs" placeholder="Tipo" required>  -->

          <select class="form-select form-select-lg mb-3" style="width: 40%; font-size: 120%;" name="tipo" id="tipo">
            <option value="Cigüeñal">Cigüeñal</option>
            <option value="ECU (computadora)">ECU (computadora)</option>
            <option value="Sistema de refrigeración">Sistema de refrigeración</option>
            <option value="Sistema de escape">Sistema de escape</option>
            <option value="Turbo">Turbo</option>
          </select>

          <br><br> <!--Sistema de combustible-->
          <label for="categoria">Categoría</label><br>
          <input type="text" name="categoria" id="categoria" class="inputs" placeholder="Categoria" required>

          <br><br> <!--Encendido-->
          <label for="marca">Marca</label><br>
          <input type="text" name="marca" id="marca" class="inputs" placeholder="Marca" required>

          <br><br> <!--Valvulas de admision-->
          <label for="modelo">Modelo</label><br>
          <input type="text" name="modelo" id="modelo" class="inputs" placeholder="Modelo" required>

          <br><br> <!--Pistones / Compresión-->
          <label for="fit">Compatibilidad</label><br>
          <input type="text" name="fit" id="fit" class="inputs" placeholder="Compatibilidad" required>

          <br><br> <!--Intercooler-->
          <label for="precio">Precio</label><br>
          <input type="number" name="precio" id="precio" class="inputs" placeholder="Precio" required>
          <label>MXN</label>

          <br><br> <!--Turbocompresores-->
          <label for="descripcion">Descripcion</label><br>
          <input type="text" name="descripcion" id="descripcion" class="inputs" placeholder="Descripcion" required>
          
          <br><br><label for="link">Enlace de compra</label><br>
          <input type="text" id="link" name="link" class="inputs" placeholder="Enlace de compra" required>

          
          </td>
          <td><!--Derecha-->
          
          <!--Sistema de combustible-->
          <label for="p_potencia">Porcentaje de potencia</label><br>
          <input type="number" name="p_potencia" id="p_potencia" class="inputs" placeholder="Ej: 1.5" required>
          <label>%</label>

          <br><br><!--Encendido-->
          <label for="p_velocidad">Porcentaje velocidad</label><br>
          <input type="number" name="p_velocidad" id="p_velocidad" class="inputs" placeholder="Ej: 1.5" required>
          <label>%</label>

          <br><br> <!--Valvulas de admision-->
          <label for="p_aceleracion">Porcentaje aceleración</label><br>
          <input type="number" name="p_aceleracion" id="p_aceleracion" class="inputs" placeholder="Ej: 1.5" required>
          <label>%</label>

          <br><br> <!--Pistones / Compresión-->
          <label for="caballos">Caballos de fuerza</label><br>
          <input type="number" name="caballos" id="caballos" class="inputs" placeholder="Ej: 350 HP" required>
          <label>HP</label>

          <br><br> <!--Intercooler-->
          <label for="aceleracion">Aceleracion</label><br>
          <input type="number" name="aceleracion" id="aceleracion" class="inputs" step="0.01" placeholder="3.5s" required>
          <label>Segundos</label>

          <br><br> <!--Turbocompresores-->
          <label for="torque">Torque</label><br>
          <input type="number" name="torque" id="torque" class="inputs" placeholder="200 Nm" required>
          <label>Nm</label>

          <br><br>
          <label for="velocidad">Velocidad</label><br>
          <input type="number" name="velocidad" id="velocidad" class="inputs" placeholder="240 Km/h" required>
          <label>Km/h</label>
          </td>
        </tr>
      </table>
      
        <br><br>
      
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Agregar pieza</button>
          </div>
        </div>
      </div>
          
      </form>
  </div>
</form>
</section>
</div>
      </div>
    </div>
  </form>
</div>

</body>
</html>