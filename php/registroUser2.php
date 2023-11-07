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
    <link rel="stylesheet" media="all" href="../assets/css/button.css">
    <link rel="stylesheet" href="../assets/css/inicio-sesion.css">

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
                                <a style="text-decoration: none;" href="personalizar.php">
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

                        <!--
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
                        </li>-->

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
                            <!--<li class="nav-item">
                                <a class="nav-link" style="color: aliceblue;" href="personalizar_autos.html"> Sobre Nosotros </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color: aliceblue;" href="about.html"> Contacto </a>
                            </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>

                    <!-- CONTENIDO DE LA PÁGINA -->

    <!-- CREAR CUENTA -->
    <div class="container py-5">
    
        <section id="home" data-stellar-background-ratio="0.5">
            <form class="form-register bg-dark">
                <div class="container">

                    <?php
                        
                        $password1 = $_POST['password'];
                        $password2 = $_POST['ps'];
                    
                        //Ambas contraseñas deben ser iguales
                        if($password1 === $password2){
                            
                            //Consultsar si existe otro usuario con este nombre
                            $conexion = mysqli_connect("localhost", "root", "", "checo") or
                                die("Problemas con la conexión");

                            $consultas = mysqli_query($conexion, "select nameUser
                                                    from usuarios where nameUser='$_REQUEST[usuario]'") or
                                die("Problemas en el select:" . mysqli_error($conexion));

                            if ($reg = mysqli_fetch_array($consultas)) {//Si llega aquí, es porqeu ya existe el nombre de usuario

                                echo"<h2>Lo sentimos, el usuario ". $reg['nameUser'] ." ya existe</h2>";

                            } else {
                                //Si llega aquí, es bueno, porque no encontró otro usuario igual
                                $nombre = $_POST['nombre'];
                                $email = $_POST['email'];
                                $usuario = $_POST['usuario'];
                                $password = $_POST['password'];

                                $conexion = mysqli_connect("localhost", "root", "", "checo") or die("Problemas con la conexión");
                                
                                mysqli_query($conexion, "insert into usuarios(name, email, nameUser, password) values 
                                                    ('$nombre','$email','$usuario','$password')")
                                or die("Problemas en el select" . mysqli_error($conexion));

                                mysqli_close($conexion);

                                echo "<h2>Ta has registrado correctamente</h2>";

                            }
                            mysqli_close($conexion);

                        } else {
                            // Si las contraseñas no coinciden, muestra un mensaje de error
                            echo "<h2>Las contraseñas no coinciden</h2>";
                        }
                        
                    ?>
                    
                    <br>
                </div>
            </form>
        </section>
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
    <script>
        function redireccionar() {
            window.location.href = "../main.html";
        }
    </script>
</body>

</html>