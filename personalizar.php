<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CHECO</title>
</head>

<style>
    .nav-link{
        color: black;
        font-size: 150%;
    }
    .nav-link:hover { /* Al pasar el mouse hará lo siguiente */
        color: white; /* Cambia de color */
        /* font-size: 1.2em; Cambia el tamaño de fuente */
        font-weight: bold;  /*Pone el texto en negrito*/
        font-size: 140%;
      }
    .navbar-brand{
        color: black;

    }
    h1{
        color: white;
    }
</style>

<body  style="background-color:#222222;">
      
     <!-- Barra de navegación -->
     <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        
        <div class="container d-flex justify-content-around align-items-center">

            <a class="navbar-brand align-self-center" href="index.html"> 
                <img src="LOGO_MARLET.png" width="300" height="200"/>
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

            <!-- Contenido de la barra de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Personalizar Auto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comprar Autos</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Sobre Nosotros </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Contacto </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO DE LA PÁGINA -->

    <div class="container py-5">
        <h1 class="text-center display-1">Autos destacados</h1>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Busca tu auto aquí" aria-label="Buscar">
            <button class="btn btn-outline-warning" type="submit">Buscar</button>
          </form>

        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <!--Auto: MUSTANG-->
            <div class="col">
                <div class="card shadow">
                    <img src="autos/ford-mustang-gen3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Ford Mustang 1984</h5>
                        <p class="card-text">El mustang de tercera generación es un clásico, fue uno de los mejores autos deportivos de toda la historia, lamentablemente la generación más infravalorada.</p>
                    </div>

                    <!--Barra de eficiencia-->
                    <div class="container mb-3">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Stock</div>
                            <div class="progress-bar bg-warning"  role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">+ 20%</div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-warning">Personalizar</button>
                    </div>

                </div>
            </div>

            <!--Auto: RANGER-->
            <div class="col">
                <div class="card shadow">
                    <img src="autos/ford-ranger-gen2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Ford Ranger 1996</h5>
                        <p class="card-text">El Ranger es un pickup compacto confiable y versátil. Con un motor resistente y capacidad de carga, es un compañero ideal para el trabajo o la diversión. Un fiel compañero</p>
                    </div>

                    <!--Barra de eficiencia-->
                    <div class="container mb-3">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Stock</div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 38%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" >+ 38%</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-warning">Personalizar</button>
                    </div>
                </div>
            </div>

            <!--Auto: Frontier 1998-->
            <div class="col">
                <div class="card shadow">
                    <img src="autos/nissan-frontier-98.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Frontier 1998</h5>
                        <p class="card-text">El Frontier de 1998 es un pickup compacto que se destacó por su robustez y versatilidad. Se ganó una sólida reputación por ser una opción confiable tanto para el trabajo como para el uso diario.</p>
                    </div>

                    <!--Barra de eficiencia-->
                    <div class="container mb-3">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Stock</div>
                            <div class="progress-bar bg-danger"  role="progressbar" style="width: 23%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">+ 23%</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-warning">Personalizar</button>
                    </div>
                </div>
            </div>

            <!--Auto: Sentra-->
            <div class="col">
                <div class="card shadow">
                    <img src="autos/nissan-sentra-05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Sentra 2005</h5>
                        <p class="card-text">El Nissan Sentra 2005 fue un sedán compacto conocido por su eficiencia en el consumo de combustible, comodidad y fiabilidad en el manejo diario. Aun que no parezca, es candidato a Off-Road</p>
                    </div>

                    <!--Barra de eficiencia-->
                    <div class="container mb-3">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Stock</div>
                            <div class="progress-bar bg-warning"  role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">+ 30%</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-warning">Personalizar</button>
                    </div>
                </div>
            </div>

            <!--Auto: MUSTANG 2000-->
            <div class="col">
                <div class="card shadow">
                    <img src="autos/ford-mustang-gen4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> Mustang 2000</h5>
                        <p class="card-text">El Mustang del 2000 es un vehículo que encarnaba la esencia de los muscle cars americanos, con su diseño llamativo. Con su potencia y un sistema Off-Road sería imparable.</p>
                    </div>

                    <!--Barra de eficiencia-->
                    <div class="container mb-3">
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Stock</div>
                            <div class="progress-bar bg-danger"  role="progressbar" style="width: 48%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">+ 48%</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around mb-5">
                        <button class="btn btn-warning">Personalizar</button>
                    </div>
                </div>
            </div>

    
    <!-- Incluye los archivos JavaScript de Bootstrap (jQuery es requerido) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

</body>

</html>