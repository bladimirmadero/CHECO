<?php
    // Iniciar sesión
    session_start();

    // Conexión a la base de datos
    $db = mysqli_connect("localhost", "root", "", "checo");

    $errors = [];

    // Si se ha enviado el formulario
    if (isset($_POST['login-button'])) {
        $username = mysqli_real_escape_string($db, $_POST['usuario']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        // Comprobar si el nombre de usuario es válido
        $query = "SELECT * FROM administradores WHERE username ='$username'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            // Nombre de usuario válido, verificar contraseña
            $row = mysqli_fetch_assoc($results);

            if ($password === $row['password']) {
                // Inicio de sesión válido
                $_SESSION['adminUser'] = $username;
                header('location: inicioSesionA2.php');
            } else {
                // Contraseña inválida
                $errors[] = "Contraseña inválida";
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
    <!-- Tu contenido del head -->
</head>



<body style="background-color: #2E363C;">

    <!-- Tu barra de navegación -->
    <!-- ... -->

    <!-- Contenido de la página -->
    <div class="container py-5">
        <form class="form-register bg-dark" method="POST" autocomplete="off">
            <h1 style="color: goldenrod;">Iniciar sesión</h1>

            <?php
                if (count($errors) > 0) {
                    echo "<div class='alert alert-danger' role='alert'>";
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                    echo "</div>";
                }
            ?>

            <!-- Nombre de Usuario -->
            <label for="usuario">Nombre de usuario</label>
            <input type="text" name="usuario" id="usuario" class="inputs" placeholder="Escribe tu nombre de usuario" required>

            <!-- Contraseña -->
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" class="inputs" placeholder="Escribe tu contraseña" required>

            <!-- Botón de Inicio de Sesión -->
            <div style="text-align: center;">
                <button type="submit" class="corner-button" name="login-button" style="font-size: 90%; font-weight: bold;">
                    <span style="font-family: 'Montserrat', sans-serif;">Iniciar Sesión</span>
                </button>
            </div>
        </form>
    </div>

    <!-- Tus scripts -->
    <!-- ... -->

</body>
</html>
