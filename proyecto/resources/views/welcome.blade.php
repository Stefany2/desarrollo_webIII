<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <style>
        /* Navbar con posición fija */
        .navbar {
            background-color: rgba(0, 0, 0, 1);
            background-size: cover;
            background-position: center;
            z-index: 1000; /* Asegura que el menú esté al frente */
        }

        /* Espacio para la posición fija del menú */
        .carousel {
            margin-top: 56px; /* Altura estándar de la navbar */
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top"> <!-- Fijo en la parte superior -->
    <a class="navbar-brand" href="/">
        <i class="bi bi-shop"></i> <!-- Icono de tienda -->
        VIRTUAL SHOP
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto"> <!-- Alinea los elementos a la derecha -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="bi bi-box-arrow-in-right"></i> <!-- Icono para Login -->
                   INGRESAR
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <i class="bi bi-person-plus"></i> <!-- Icono para Registrarse -->
                    Registrarse
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Carrusel -->
<div id="mainCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators"> <!-- Indicadores para la navegación -->
        <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mainCarousel" data-slide-to="1"></li>
        <li data-target="#mainCarousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner"> <!-- Contenido del carrusel -->
        <div class="carousel-item active"> <!-- Primera imagen -->
            <img src="https://media.gq.com.mx/photos/6005e4e9136a880326643701/16:9/w_2560%2Cc_limit/chaquetas%2520de%2520cuero-1212854786.jpg" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
                <h3>BIENVENIDO A VIRTUAL SHOP/h3>
                <p>Descubre nuestros productos destacados.</p>
            </div>
        </div>
        <div class="carousel-item"> <!-- Segunda imagen -->
            <img src="https://cutevibesstore.com/cdn/shop/files/image_5e360a67-c6f5-4ff4-ac27-39f89d0322f3.jpg?v=1688657151&width=1445" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
                <h3>Nuevas Colecciones</h3>
                <p>Encuentra lo último en moda y tecnología.</p>
            </div>
        </div>
        <div class="carousel-item"> <!-- Tercera imagen -->
            <img src="https://previews.123rf.com/images/pattarasin/pattarasin1709/pattarasin170900070/85502077-plantilla-de-gran-venta-banner-pancartas-fondos-de-pantalla-invitaci%C3%B3n-carteles-folleto.jpg" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
                <h3>Ofertas Especiales</h3>
                <p>Consigue grandes descuentos en nuestros productos.</p>
            </div>
        </div>
    </div>
    
    <!-- Controles del carrusel -->
    <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>
