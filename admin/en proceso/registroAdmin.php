<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/Logo CHECO-blanco.png">

    <!-- Google Fonts y otros estilos -->
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

    <!-- Bootstrap y otros estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <title>CHECO Registro de Administradores</title>
</head>

<body style="background-color: #2E363C;">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Contenido de tu barra de navegación -->
    </nav>
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
    
  .container {
        max-width: 80%;
        margin: auto;
    }

    .form-register {
        width: 100%;
        padding: 20px;
        box-sizing: border-box; 
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
    <!-- Contenido de la página -->
    <div class="container py-5">
        <form class="form-register bg-dark" action="registroAdmin2.php" method="post" autocomplete="off">
            <h1 style="color: goldenrod;">Registro Admins</h1>

            <!-- Nombre -->
            <label for="nombre">Nombre</label>
            <input type="text" id="nombreA" name="nombreA" class="inputs" placeholder="Escribe tu nombre" required>

            <!-- Correo Electrónico -->
            <label for="email">Correo electrónico</label>
            <input type="email" name="emailA" id="emailA" class="inputs" placeholder="Escribe tu email" required>

            <!-- Nombre de Usuario -->
            <label for="usuario">Nombre de usuario</label>
            <input type="text" name="usuarioA" id="usuarioA" class="inputs" placeholder="Escribe tu nombre de usuario" required>

            <!-- Contraseña -->
            <label for="password">Nueva contraseña</label>
            <input type="password" name="passwordA" id="passwordA" class="inputs" placeholder="Escribe tu nueva contraseña" required>

            <!-- Confirmar Contraseña -->
            <label for="ps">Corrobora tu contraseña</label>
            <input type="password" name="psA" id="psA" class="inputs" placeholder="Repite tu nueva contraseña" required>

            <!-- Botón de Registro -->
            <div style="text-align: center;">
                <button type="submit" class="corner-button" style="font-size: 90%; font-weight: bold;">
                    <span style="font-family: 'Montserrat', sans-serif;">Registrar</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="../assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/templatemo.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/jquery.js"></script>

</body>
</html>