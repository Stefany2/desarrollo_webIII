<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Online Mejorada</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilo personalizado -->
    <style>
        /* Cambios en el fondo y el color del menú */
        .navbar-custom {
            background-color: #343a40; /* Color oscuro */
        }

        /* Cambios de color para los enlaces al pasar el mouse por encima */
        .navbar-custom .nav-link {
            color: #f8f9fa; /* Color claro para mejor contraste */
            transition: color 0.3s ease; /* Transición suave */
        }

        .navbar-custom .nav-link:hover {
            color: #ffc107; /* Color dorado al pasar el mouse */
        }

        /* Para el elemento activo */
        .navbar-custom .nav-item.active .nav-link {
            color: #ffc107; /* Color dorado para el elemento activo */
        }

        /* Estilo para el dropdown */
        .dropdown-menu {
            background-color: #343a40; /* Mismo color que la navbar */
            border: none; /* Sin borde */
        }

        .dropdown-item {
            color: #f8f9fa; /* Color claro */
            transition: color 0.3s ease; /* Transición suave */
        }

        .dropdown-item:hover {
            color: #ffc107; /* Color dorado */
            background-color: #495057; /* Fondo oscuro al pasar el mouse */
        }

        /* Estilo para el h1 */
        h1 {
            color: #ffc107; /* Color dorado */
            text-shadow: 2px 2px 4px #000000; /* Sombra para el texto */
            font-size: 2.5em; /* Tamaño más grande */
            margin-bottom: 20px; /* Espacio debajo */
            text-align: center; /* Centrado */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/proyecto/public/inicio"><i class="fas fa-home"></i> INICIO</a> <!-- Icono de casa -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/proyecto/public/cart"><i class="fas fa-shopping-cart"></i> COMPRAR</a> <!-- Icono de carrito -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/proyecto/public/contactanos"><i class="fas fa-envelope"></i> CONTACTANOS</a> <!-- Icono de sobre -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i> PRODUCTOS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/proyecto/public/productos"><i class="fas fa-laptop"></i> Tecnología</a> <!-- Icono de laptop -->
                        <a class="dropdown-item" href="http://localhost/proyecto/public/ropas"><i class="fas fa-tshirt"></i> Ropa</a> <!-- Icono de camiseta -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="http://localhost/proyecto/public/otros"><i class="fa-ellipsis-h"></i> Otros</a> <!-- Icono de puntos suspensivos -->
                    </div>
                </li>
                <!-- Ícono de Salir -->
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/proyecto/public/dashboard"><i class="fas fa-sign-out-alt"></i> SALIR</a> <!-- Icono de salir -->
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Título H1 -->
    <h1>VIRTUAL SHOP</h1> <!-- Aplicación del estilo personalizado -->

    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.topitop.pe/arquivos/240422_desktop_3.png?v=638492258742800000" alt="Primera Diapositiva">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.ocu.org/-/media/ocu/images/home/tecnologia/satisfaccion-fiabilidad-hitech-jun19/fiabilidad-satisfaccion-tecnologia.png?rev=5881ff83-c6d2-476c-8e47-3649765eb390&hash=E426F47B135A3C2AB84AECAA7AF8104D" alt="Segunda Diapositiva">
            </div>
            <div classcarousel-item">
                <img class="d-block w-100" src="https://media.gq.com.mx/photos/627bbaf2053326c8d35ba67c/4:3/w_2684,h_2013,c_limit/vestir%20bien.jpg" alt="Tercera Diapositiva">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
