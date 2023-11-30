

<?php
    // Iniciar sesión
  
    // Conexión a la base de datos
    $db = mysqli_connect("localhost", "root", "", "checo");
    $errors = [];
    // Si se ha enviado el formulario
    if (isset($_POST['login-button'])) {
        $username = mysqli_real_escape_string($db, $_POST['usuario']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Comprobar si el nombre de usuario es válido
        $query = "SELECT * FROM admin WHERE nameUser ='$username'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            // Nombre de usuario válido, verificar contraseña
            $row = mysqli_fetch_assoc($results);
            echo "<p>Contraseña de la base de datos: ". $row['password'] ."</p>";
            echo "<p>Contraseña local: $password" . "</p>";
            if ($password === $row['password']) {
                // Inicio de sesión válido
                $_SESSION['nameUser'] = $username;
                header('location: main-admin.html');
            } else {
                // Contraseña inválida
                $errors[] = "contraseña inválidos";
            }
        } else {
            // Nombre de usuario inválido
            $errors[] = "Nombre de usuario inválido";
        }
    }
?>

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
    <link rel="stylesheet" href="../assets/css/btn-flotante.css">

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

    .new-inputs{
        font-family: 'Montserrat', sans-serif;
    }

    label{
        font-size: 120% !important;
        font-family: 'Montserrat', sans-serif;
    }

    .btn-light{
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 120%;
        width: 60%;
        border: none;
    }
    .btn-light:hover{
        background-color: goldenrod;
    }
</style>

<body style="background-color: #2E363C;">

    

                    <!-- CONTENIDO DE LA PÁGINA -->

    <!-- INICIAR SESIÓN -->
    <div class="container py-5">
        
        <section id="home" data-stellar-background-ratio="0.5">
            <form class="form-register bg-dark" method="POST" autocomplete="off">
                <div class="container">
                    <h1 style="color: goldenrod;" >Iniciar como administrador</h1>
                    <form action="" method="post" autocomplete="off">

                        <?php
                            if (count($errors) > 0) {
                                echo "<div class='alert alert-danger' role='alert'>";
                                foreach ($errors as $error) {
                                    echo $error . "<br>";
                                }
                                echo "</div>";
                            }
                        ?>

                        <br><br> <!--USUARIO-->
                        <label for="usuario">Nombre de usuario</label>
                        <input type="text" name="usuario" id="usuario" class="inputs" placeholder="Escribe tu nombre de usuario" required>

                        <br><br> <!--CONTRASEÑA-->
                        <label for="password">Nueva contraseña</label>
                        <input type="password" name="password" id="password" class="inputs" placeholder="Escribe tu nueva contraseña" required>

                        
                        <br><br>
                        
                        <div style="text-align: center;">
                            <button type="submit" class="corner-button" name="login-button" style="font-size: 90%; font-weight: bold;" >
                                <span style="font-family: 'Montserrat', sans-serif;">Iniciar</span>
                            </button>
                        </div>

                    </form>
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
    
    <a style="text-decoration: none;" href="../admin/inicioSesionA.php" class="btn-flotante">Iniciar como administrador</a>

</body>

</html>