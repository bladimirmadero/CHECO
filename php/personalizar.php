<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo CHECO-blanco.png">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/templatemo.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" media="all" href="../assets/css/button.css">
    <link rel="stylesheet" href="../assets/css/inicio-sesion.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">

    <!--Bootstrap (y otros)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Calculadora de Potencia</title>
    <style>
        .select-css {
            width: 300px;
            padding: 15px;
            margin-bottom: 10px;
            border: white 1px solid;
            font-family: 'Montserrat', sans-serif;
        }

        .select-css:hover {
            border: goldenrod 1px solid;
        }

        .resultados, label, h1,p{
            color: white;
            font-family: 'Montserrat', sans-serif;
        }

        p {
            font-size: 120%;
        }

        .progress {
        height: 30px;
        width: 100%;
        border: none;
        border-radius: 5px;
        background-color: #2E363C !important;
        
        margin-bottom: 15px;
        }
        
        .progress-bar {
            height: 100%;
            background: goldenrod;
            display: flex;
            align-items: center;
            transition: width 0.25s;
            border-radius: 5px;
        }
        
        .progress-bar-text {
            margin-left: 10px;
            font-weight: bold;
            color: black !important;
           font-size: 160%;
        }
    </style>
 


<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <!--justify-content-center-->
        <div class="container-fluid justify-content-around">

            <a class="navbar-brand" style="margin-left:20px" href="../index.html"> 
                <img src="../assets/img/Logo CHECO-dorado2.png" width="181.4" height="96.35"/>
            </a>
            
            <!-- Botón para dispositivos pequeños (como móviles) -->
            <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav"
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbarNav">
                <div class="flex-fill">

                    <ul class="nav navbar-nav d-flex justify-content-center">

                        <nav class="navx"><!--INICIO-->
                            <ul class="ulx">
                                <a style="text-decoration: none;" href="../main.html">
                                    <li class="lix" style="user-select: none;">
                                        Inicio
                                        <span class="spanx"></span><span class="spanx"></span>
                                        <span class="spanx"></span><span class="spanx"></span>
                                    </li>
                                </a>
                            </ul>
                        </nav>

                        <nav class="navx"><!--Personalizar-->
                            <ul class="ulx">
                                <a style="text-decoration: none;" href="">
                                    <li class="lix" style="user-select: none;">
                                        Personalizar
                                        <span class="spanx"></span><span class="spanx"></span>
                                        <span class="spanx"></span><span class="spanx"></span>
                                    </li>
                                </a>
                            </ul>
                        </nav>

                        <nav class="navx"><!--Tienda-->
                            <ul class="ulx">
                                <a style="text-decoration: none;" href="../tienda.html">
                                    <li class="lix" style="user-select: none;">
                                        Tienda
                                        <span class="spanx"></span><span class="spanx"></span>
                                        <span class="spanx"></span><span class="spanx"></span>
                                    </li>
                                </a>
                            </ul>
                        </nav>


                        <nav class="navx"><!--Nosotros-->
                            <ul class="ulx">
                                <a style="text-decoration: none;" href="../about.html">
                                <li class="lix" style="user-select: none;">
                                    Nosotros
                                    <span class="spanx"></span><span class="spanx"></span>
                                    <span class="spanx"></span><span class="spanx"></span>
                                </li>

                            </ul>
                        </nav>

                        <nav class="navx"><!--Sesión-->
                            <ul class="ulx">
                                <a style="text-decoration: none;" href="../sesion.html">
                                    <li class="lix" style="user-select: none;">
                                        Sesión
                                        <span class="spanx"></span><span class="spanx"></span>
                                        <span class="spanx"></span><span class="spanx"></span>
                                        <img src="../assets/img/usuario 2.png" style="position: absolute; right: 8px;" width="40" height="40">
                                    </li>
                                </a>
                            </ul>
                        </nav>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



</head>



<body class="container-fluid" style="background-color: #2E363C;">

<div style="text-align: right;">
    <button type="button" class="btn btn-warning" style="font-weight: bold;" onclick="window.location.href = 'personalizar.php';">
        <span style="font-family: 'Montserrat', sans-serif;">Recargar</span>
    </button>
</div>


<?php
    // Establecer la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "checo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>

<section>
    <form id="calculadoraForm">

        <div class="row"> 

            <div class="col-4"> <!--COLUMNA IZQUIERDA-->

            <form></form>
            <form class="form-register bg-dark">
            <h1>Selecciona tu vehículo</h1>
                <div class="container">
                    <!-- (1) SELECT para "carro" -->
                    <label for="carroSelect">Carro:</label>
                    <select class="select-css btn-dark" name="carroSelect" id="carroSelect">
                        <?php
                        $marca_temp;
                        $modelo_temp;
                        $id_temp;
                        $year_temp;

                        $consultaCarro = "SELECT * FROM carro";
                        $resultadoCarro = mysqli_query($conn, $consultaCarro);
                    
                        while ($filaCarro = mysqli_fetch_array($resultadoCarro)) {
                            echo '<option  value="' . $filaCarro['idCarro'] . '" >'. $filaCarro['marca'] .' ' . $filaCarro['modelo'] .' '. $filaCarro['year'] . '</option>';
                            $marca_temp = $filaCarro['marca'];
                            $modelo_temp = $filaCarro['modelo'];
                            $id_temp = $filaCarro['idCarro'];
                            $year_temp = $filaCarro['year'];
                        }
                        //echo "<option value='' selected>seleccione la marca</option>";
                        //echo '<option value="' . $id_temp . '">'. $marca_temp .' ' . $modelo_temp .' '. $year_temp . '</option>';
                        ?>
                    </select>
                    <button class="btn btn-warning" style="font-weight: bold;" type="submit">Aceptar</button>
                </div>
                
                <br>

                <!-- •••••••••••••• Obtenemos la compatibilidad del motor •••••••••••••• -->
                <?php
                    $fit = '';
                    if (isset($_REQUEST['carroSelect'])) {
                        $buscarCarro = "SELECT * FROM carro WHERE idCarro = '". $_REQUEST['carroSelect'] ."'";
                        $buscarFitCarro = mysqli_query($conn, $buscarCarro);
                        while ($fitCarro = mysqli_fetch_array($buscarFitCarro)) {
                            $fit = $fitCarro['fit'];
                        }
                    }
                ?>


                <!-- ••••••••••••••••••••••••• PIEZAS •••••••••••••••••••••••••••••• -->
                
                <!-- (2) SELECT 'piezas' = Cigueñal  -->
                <label for="ciguenalSelect">Cigüeñal</label>
                <select  class="select-css btn-dark" name="ciguenalSelect" id="ciguenalSelect">
                    <?php
                        $ghost = '';
                        $consultaPiezas = "SELECT * FROM piezas WHERE tipo = 'Cigüeñal' AND fit = '". $fit ."'";
                        $resultadoPiezas = mysqli_query($conn, $consultaPiezas);
                    
                        /*
                        if (isset($_REQUEST['ciguenalSelect'])) {
                            
                            $idPiezas = [];
                            $categoriaPiezas = [];
                            $marcaPiezas = [];
                            $a = 0;
                            while ($filaPiezas = mysqli_fetch_array($resultadoPiezas)) {
                                $idPiezas [$a] = $filaPiezas['id'];
                                $categoriaPiezas [$a] = $filaPiezas['categoria'];
                                $marcaPiezas [$a] = $filaPiezas['marca'];
                                $a+=1;
                            }
                            for ($i=0; $i < $a; $i++) { 
                                echo "<option>A: ".$idPiezas[$i]."</option>";
                                echo "<option>B: ".$_REQUEST['ciguenalSelect']."</option>";
                                if ($idPiezas[$i] == $_REQUEST['ciguenalSelect']) {
                                    echo '<option value="' . $idPiezas[$i] . '">'. $categoriaPiezas[$i] . ' | ' . $marcaPiezas[$i] . '</option>';
                                } else{
                                    echo '<option value="' . $idPiezas[$i] . '" selected>'. $categoriaPiezas[$i] . ' | ' . $marcaPiezas[$i] . '</option>';
                                }
                                
                            }
                            
                        }
                        */
                        
                        while ($filaPiezas = mysqli_fetch_array($resultadoPiezas)) {
                            echo '<option value="' . $filaPiezas['id'] . '">'. $filaPiezas['categoria'] . ' | ' . $filaPiezas['marca'] . '</option>';
                            $ghost = $filaPiezas['categoria'] ." | ". $filaPiezas['marca'];
                        }
                    ?>
                </select>
                
                <br>

                <!-- (3) SELECT 'piezas' = ECU  -->
                <label for="ecuSelect">ECU</label>
                <select  class="select-css btn-dark" name="ecuSelect" id="ecuSelect">
                    <?php
                    $consultaPiezas = "SELECT * FROM piezas WHERE tipo = 'ECU (computadora)' AND fit = '". $fit ."'";
                    $resultadoPiezas = mysqli_query($conn, $consultaPiezas);
                    while ($filaPiezas = mysqli_fetch_array($resultadoPiezas)) {
                        echo '<option value="' . $filaPiezas['id'] . '">'. $filaPiezas['categoria'] . ' | ' . $filaPiezas['marca'] . '</option>';
                    }
                    ?>
                </select>
                <br>

                <!-- (4) SELECT 'piezas' = Sistema de refrigeración  -->
                <label for="refriSelect">Sistema de refrigeración</label>
                <select  class="select-css btn-dark" name="refriSelect" id="refriSelect">
                    <?php
                    $consultaPiezas = "SELECT * FROM piezas WHERE tipo = 'Sistema de refrigeración' AND fit = '". $fit ."'";
                    $resultadoPiezas = mysqli_query($conn, $consultaPiezas);
                    while ($filaPiezas = mysqli_fetch_array($resultadoPiezas)) {
                        echo '<option value="' . $filaPiezas['id'] . '">'. $filaPiezas['categoria'] . ' | ' . $filaPiezas['marca'] . '</option>';
                    }
                    ?>
                </select>
                <br>

                <!-- (5) SELECT 'piezas' = Sistema de escape  -->
                <label for="ecuSelect">Sistema de escape</label>
                <select  class="select-css btn-dark" name="ecuSelect" id="escapeSelect">
                    <?php
                    $consultaPiezas = "SELECT * FROM piezas WHERE tipo = 'Sistema de escape' AND fit = '". $fit ."'";
                    $resultadoPiezas = mysqli_query($conn, $consultaPiezas);
                    while ($filaPiezas = mysqli_fetch_array($resultadoPiezas)) {
                        echo '<option value="' . $filaPiezas['id'] . '">'. $filaPiezas['categoria'] . ' | ' . $filaPiezas['marca'] . '</option>';
                    }
                    ?>
                </select>
                <br>

                <!-- (6) SELECT 'piezas' = Turbo  -->
                <label for="ecuSelect">Turbo</label>
                <select  class="select-css btn-dark" name="turboSelect" id="turboSelect">
                    <?php
                    $consultaPiezas = "SELECT * FROM piezas WHERE tipo = 'Turbo' AND fit = '". $fit ."'";
                    $resultadoPiezas = mysqli_query($conn, $consultaPiezas);
                    while ($filaPiezas = mysqli_fetch_array($resultadoPiezas)) {
                        echo '<option value="' . $filaPiezas['id'] . '">'. $filaPiezas['categoria'] . ' | ' . $filaPiezas['marca'] . '</option>';
                    }
                    ?>
                </select>
                <br>


                </form>
            </div>

            <div class="col-4"> <!-- COLUMNA CENTRAL -->
            <form></form>
                <form class="form-register bg-dark">
                    <div class="container" style="align-items: center; display: flex;">
                        
                        <?php
                            if (isset($_REQUEST['carroSelect'])) { //Buscamos la foto del vehículo y su nombre + modelo + año
                                $buscarIMG = "SELECT * FROM carro WHERE idCarro = ' ". $_REQUEST['carroSelect'] ." '";
                                $buscarFitIMG = mysqli_query($conn, $buscarIMG);
                                while ($filaPiezas = mysqli_fetch_array($buscarFitIMG)) {
                                    echo "<h1 style='color: goldenrod;'>".$filaPiezas['marca']." ".$filaPiezas['modelo']." ".$filaPiezas['year']."</h1>";
                                    echo "<img src='".$filaPiezas['imagen']."' style='width: 50%; height: auto; text-align: center;'";
                                }
                            }else{ //En caso de que aún no se seleccione nada. se muestra silueta de un vehículo
                                echo "<h1 style='color: goldenrod;'>¡Descubre tu vehículo!</h1>";
                                echo "<img src='../assets/img/autos/carro_silueta.png' style='width: 50%; height: auto; text-align: center;'";
                            }
                        ?>
                        <br>
                    </div>
                </form>


                <!--••••••••• Resultados en tiempo real •••••••••-->
                <form class="form-register bg-dark">
                    <div class="container" style="align-items: center;">

                        <?php 
                        error_reporting(0);
                            //variables para carro
                            $p_potencia_carro = "";
                            $p_velocidad_carro = "";
                            $p_aceleracion_carro = "";
                            $caballos_carro = "";
                            $aceleracion_carro = "";
                            $torque_carro = "";
                            $velocidad_maxima = "";

                            //Declaración de parámetros de las piezas (vacío)
                            $p_potencia_piezas = [];
                            $p_velocidad_piezas = [];
                            $p_aceleracion_piezas = [];
                            $caballos_piezas = [];
                            $aceleracion_piezas = [];
                            $torque_piezas = [];
                            $velocidad_maxima_piezas = [];

                            $id_piezas = [];

                            if (isset($_REQUEST['carroSelect'])) { //MOSTRAR RENDIMIENTO DE FÁBRICA
                                $buscarCarro = "SELECT * FROM carro WHERE idCarro = ' ". $_REQUEST['carroSelect'] ." '";
                                $buscarCarro2 = mysqli_query($conn, $buscarCarro);
                                while ($filaPiezas = mysqli_fetch_array($buscarCarro2)) {
                                    
                                    echo "<h1 style='color: goldenrod;'>Especificaciones de fábrica</h1>";

                                    //Mostrar motor equipado
                                    echo "<p>Motor equipado de fábrica: <span style='color: goldenrod;'>";
                                    echo $filaPiezas['fit']." de ".$filaPiezas['cilindros']." cilindros ".$filaPiezas['orden_cilindros']. " de ".$filaPiezas['litros']." Litros";
                                    echo "</span></p>";

                                    //Mostrar transmisión
                                    echo "<p>Transmisión original: <span style='color: goldenrod;'>";
                                    echo " ".$filaPiezas['transmision'];
                                    echo "</span></p>";

                                    //Mostrar 
                                    echo "<p>Caballos de fuerza: <span style='color: goldenrod;'>";
                                    echo " ".$filaPiezas['caballos'];
                                    echo "</span> HP</p>";

                                    //Mostrar 
                                    echo "<p>Aceleración: <span style='color: goldenrod;'>";
                                    echo " ".$filaPiezas['aceleracion'];
                                    echo "</span> Segundos de 0 a 100 km/h</p>";

                                    //Mostrar 
                                    echo "<p>Torque: <span style='color: goldenrod;'>";
                                    echo " ".$filaPiezas['torque'];
                                    echo "</span> Newton metros</p>";

                                    //Mostrar 
                                    echo "<p>Velocidad máxima: <span style='color: goldenrod;'>";
                                    echo " ".$filaPiezas['velocidad'];
                                    echo "</span> km/h</p>";

                                    //------------------------------------------------

                                    $p_potencia_carro = $filaPiezas['p_potencia'];
                                    $p_velocidad_carro = $filaPiezas['p_velocidad'];
                                    $p_aceleracion_carro = $filaPiezas['p_aceleracion'];
                                    $caballos_carro = $filaPiezas['caballos'];
                                    $aceleracion_carro = $filaPiezas['aceleracion'];
                                    $torque_carro = $filaPiezas['torque'];
                                    $velocidad_maxima = $filaPiezas['velocidad'];

                                }

                                
                            }

                            if (true) {
                                //Este array almacena los ids de las piezas
                                $id_piezas[0] = $_REQUEST['ciguenalSelect'];
                                $id_piezas[1] = $_REQUEST['ecuSelect'];
                                $id_piezas[2] = $_REQUEST['refriSelect'];
                                $id_piezas[3] = $_REQUEST['escapeSelect'];
                                $id_piezas[4] = $_REQUEST['turboSelect'];

                                
                                //Esto extrae los datos de cada pieza y lo agrega al array de dicho parametro específico
                                for ($i=0; $i < 6; $i++) { 
                                    $consultar = "SELECT * FROM piezas WHERE id = ' ". $id_piezas[$i] ." ' ";
                                    $consultar2 = mysqli_query($conn, $consultar);
                                    while ($filaPiezas = mysqli_fetch_array($consultar2)) {
                                        //Esto almacena el parámetro de cada pieza en cada array de un parámetro en específico
                                        $p_potencia_piezas[$i] = $filaPiezas['p_potencia'];
                                        $p_velocidad_piezas [$i] = $filaPiezas['p_velocidad'];
                                        $p_aceleracion_piezas [$i] = $filaPiezas['p_aceleracion'];
                                        $caballos_piezas [$i] = $filaPiezas['caballos'];
                                        $aceleracion_piezas [$i] = $filaPiezas['aceleracion'];
                                        $torque_piezas [$i] = $filaPiezas['torque'];
                                        $velocidad_maxima_piezas [$i] = $filaPiezas['velocidad'];
                                    }
                                }

                                //Hacer la suma de los parámetros
                                $suma_potencia = $p_potencia_carro;
                                $suma_velocidad = $p_velocidad_carro;
                                $suma_aceleracion_p = $p_aceleracion_carro;
                                $suma_caballos = $caballos_carro;
                                $suma_aceleracion = $aceleracion_carro;
                                $suma_torque = $torque_carro;
                                $suma_velocidad_max = $velocidad_maxima;


                                for ($i=0; $i < + 6; $i++) { 
                                    $suma_potencia += $p_potencia_piezas[$i];
                                    $suma_velocidad += $p_velocidad_piezas [$i];
                                    $suma_aceleracion_p += $p_aceleracion_piezas [$i];
                                    $suma_caballos += $caballos_piezas [$i];
                                    $suma_aceleracion += $aceleracion_piezas [$i];
                                    $suma_torque += $torque_piezas [$i];
                                    $suma_velocidad_max += $velocidad_maxima_piezas [$i];
                                }
                                
                                
                                
                            }
                        ?>
                    </div>
                </form>
            </div>

            <div class="col-4"> <!-- COLUMNA DERECHA -->

                <form class="form-register bg-dark">
                    <?php 
                        echo "<h1 style='color: goldenrod;'>Simluación de rendimiento</h1>";

                        echo "<p>Potencia total: <b style='color: goldenrod;'>".$suma_potencia."%</b></p>";
                        echo "<div class='progress'>
                                <div class='progress-bar' style='width:".$suma_potencia."%;'>
                                    <span class='progress-bar-text'>".$suma_potencia."%</span>
                                </div>
                            </div>";
                        
                        echo "<p>Velocidad potencial: <b style='color: goldenrod;'>".$suma_velocidad."%</b></p>";
                        echo "<div class='progress'>
                                <div class='progress-bar' style='width:".$suma_velocidad."%;'>
                                    <span class='progress-bar-text'>".$suma_velocidad."%</span>
                                </div>
                            </div>";

                        echo "<p>Aceleración potencial: <b style='color: goldenrod;'>".$suma_aceleracion_p."%</b></p>";
                        echo "<div class='progress'>
                                <div class='progress-bar' style='width:".$suma_aceleracion_p."%;'>
                                    <span class='progress-bar-text'>".$suma_aceleracion_p."%</span>
                                </div>
                            </div>";

                        echo "<p>Caballos potenciales: <b style='color: goldenrod;'>".$suma_caballos."</b> HP</p>";
                        echo "<p>Aceleración potencial: <b style='color: goldenrod;'>".$suma_aceleracion."</b> segundos de 0 a 100km/h</p>";
                        echo "<p>Torque potencial: <b style='color: goldenrod;'>".$suma_torque."</b> Nm (Newton metros)</p>";
                        echo "<p>Velocidad máxima potencial: <b style='color: goldenrod;'>".$suma_velocidad_max."</b> Km/h</p>";
                    ?>
                </form>

                <!--••••••••• FIN de resultados en tiempo real •••••••••-->
                

                <div style="text-align: center; display: center;"></div>
                

            
            </div> <!-- fin de columna derecha -->

            

        </div>

        
<br><br>
    </form>
</section>

</body>
</html>