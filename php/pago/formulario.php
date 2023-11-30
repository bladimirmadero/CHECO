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
    <title>CHECO</title>
</head>

<style>
    h1,h2,h3,h4,h5 {
        text-align: center;
        color: white;
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
        color: white;
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

<?php
$baseUrl = 'http://localhost/paypal-pdt-php/buy_now_button';
?>


<body  style="background-color: #2E363C;">
    <div class="container py-5">
    <h1>Donaciones</h1>

        <!-- Para cambiar al entorno de producción usar: https://www.paypal.com/cgi-bin/webscr -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="form_pay">

            <!-- Valores requeridos -->
            <input type="hidden" name="business" value="vendedor@business.example.com">
            <input type="hidden" name="cmd" value="_xclick">

            <label for="item_name" class="form-label">Nombre (Opcional)</label>
            <input class="inputs" type="text" name="item_name" id="" placeholder="Escribe tu nombre" required=""><br>

            <label for="amount" class="form-label">Monto</label>
            <input class="inputs" type="number" name="amount" id="" placeholder="$100" required=""><br>

            <input type="hidden" name="currency_code" value="MXN">

            <label for="mensaje" class="form-label"></label>
            <textarea class="inputs" id="mensaje" name="olapato" rows="4" cols="50" placeholder="Escribenos algo..."></textarea>

            <!-- Valores opcionales -->
            <!-- En el siguiente enlace puedes encontrar una lista completa de Variables HTML para pagos estándar de PayPal. -->
            <!-- https://developer.paypal.com/docs/paypal-payments-standard/integration-guide/Appx-websitestandard-htmlvariables/ -->

            <input type="hidden" name="item_number" value="1">
            <!-- <input type="hidden" name="invoice" value="0012"> -->

            <input type="hidden" name="lc" value="es_ES">
            <input type="hidden" name="no_shipping" value="1">
            <input type="hidden" name="image_url" value="https://picsum.photos/150/150">
            <input type="hidden" name="return" value="<?= $baseUrl ?>/receptor.php">
            <input type="hidden" name="cancel_return" value="<?= $baseUrl ?>/pago_cancelado.php">

            <hr>

            <button type="submit" class="btn btn-warning">Pagar ahora con Paypal!</button>

        </form>
    </div>
</body>

