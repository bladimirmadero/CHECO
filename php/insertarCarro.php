<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo CHECO-blanco.png">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/templatemo.css">
    <link rel="stylesheet" href="../assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">

    <!--Bootstrap (y otros)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <title>CHECO</title>
</head>

<style>
    h1,h2,h3,h4,h5 {
        text-align: center;
    }

    .inputs {
        font-family: 'Montserrat', sans-serif;
        width: 100%;
        background: #2E363C;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        border: 2px solid goldenrod;
        font-size: 18px;
        color: white;
    }

    label{
        font-size: 120% !important;
        font-family: 'Montserrat', sans-serif;
    }

    .btn-light{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 120%;
    }
    .btn-light:hover{
        background-color: goldenrod;
    }
</style>

<body style="background-color: #2E363C;">

     <!-- Barra de navegación -->
     <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        
        <!--justify-content-center-->
        <div class="container-fluid justify-content-around">

            <a class="navbar-brand" style="margin-left:20px" href="#"> 
                <img src="../assets/img/Logo CHECO-blanco.png" width="200" height="200"/>
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

            <!-- Barra de navegación -->
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbarNav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: aliceblue;" href="main.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: aliceblue;" href="personalizar_auto.html">Personalizar Auto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: aliceblue;" href="personalizar_autos.html">Consultar refacciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: aliceblue;" href="personalizar_autos.html">Aprende conceptos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: aliceblue;" href="personalizar_autos.html">Comprar autos</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav d-flex ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" style="color: aliceblue;" href="personalizar_autos.html"> Sobre Nosotros </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: aliceblue;" href="about.html"> Contacto </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fin de la barra de navegación -->

                    <!-- CONTENIDO DE LA PÁGINA -->

    <!-- CREAR CUENTA -->
    <div class="container py-5">
    
        <section id="home" data-stellar-background-ratio="0.5">
            <form class="form-register bg-dark" action="registro.php" method="post">
                <div class="container">
                    <h1 style="color: goldenrod;" >CREAR CUENTA</h1>
                    <form action="registro.php" method="get">

                        <br><br> <!--NOMBRE-->
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="inputs" placeholder="Escribe tu nombre" required>

                        <br><br> <!--CORREO-->
                        <label for="email">Correo electrónico</label>
                        <input type="email" name="email" id="email" class="inputs" placeholder="Escribe tu email" required>

                        <br><br> <!--USUARIO-->
                        <label for="usuario">Nombre de usuario</label>
                        <input type="text" name="usuario" id="usuario" class="inputs" placeholder="Escribe tu nombre de usuario" required>

                        <br><br> <!--CONTRASEÑA-->
                        <label for="password">Nueva contraseña</label>
                        <input type="password" name="password" id="password" class="inputs" placeholder="Escribe tu nueva contraseña" required>

                        <br><br> <!--CONTRASEÑA CORROBORACIÓN-->
                        <label for="ps">Nueva contraseña (repítela)</label>
                        <input type="password" name="ps" id="ps" class="inputs" placeholder="Repite tu nueva contraseña" required>

                        <br><br>
                        <div style="text-align: center;" >
                            <button type="submit" class="btn btn-light">Registrar</button>
                        </div>
                        
                    </form>
                </div>
            </form>
        </section>

        <div>
            <?php

                if (isset($_POST["password"])) {
                    $password = $_POST["password"];

                    $conexion = mysqli_connect("localhost", "root", "", "checo") or die("Problemas con la conexión");

                    mysqli_query($conexion, "insert into usuarios(name, email, nameUser, password) values 
                                        ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[usuario]','$_REQUEST[password]')")
                    or die("Problemas en el select" . mysqli_error($conexion));

                    mysqli_close($conexion);

                    echo "<br><p class='lead'>El alumno fue dado de alta.</p>";

                }
                
            ?>
        </div>
    </div>



    <!-- Los Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/templatemo.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <!-- Fin de los Scripts -->

    <!-- SCRIPTS -->
    


</body>

</html>