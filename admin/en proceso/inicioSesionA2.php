<?php
    // Iniciar sesión
    session_start();

    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['adminUser'])) {
        // Si no está autenticado, redirigir a la página de inicio de sesión
        header('location: inicioSesionA.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Tu contenido del head -->
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

    <!-- Contenido de la página -->
    <div class="container py-5">
        <section id="home" data-stellar-background-ratio="0.5">
            <form class="form-register bg-dark" method="POST" autocomplete="off">
                <div class="container">
                    <h1 style="color: goldenrod;" >Inicio de sesión exitoso</h1>
                    <form action="../about.html" method="post" autocomplete="off">
                        <h2 style="color:red;">¡A administrar!</h2>
                        <center><a href="main-admin.html">
                        <img src="https://media.giphy.com/media/eHWwJ9ayvuC0Qz49Ok/giphy.gif" alt="">
                    </a>
                    
                    <h2 style="color:Green;">Presiona al Trophy truck <span style="color: white;">↑</span> para acceder al menú.</h2>
                    </center>
                    </form>
                </div>
            </form>
        </section>
    </div>

    <!-- Tus scripts -->
    <!-- ... -->

</body>
</html>
