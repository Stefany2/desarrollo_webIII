<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOTELES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></i>CAMILA STEFANY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://ejercicio1.test/cursos">BIENVENIDO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ejercicio1.test/contacto">CONTACTO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Opciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://ejercicio1.test/correo">CORREO</a>
                        <a class="dropdown-item" href="http://ejercicio1.test/imagenes">IMAGENES</a>
                        <a class="dropdown-item" href="http://ejercicio1.test/horarios">HORARIOS</a>
                    </div>
                </li>
               
            </ul>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://a.travel-assets.com/findyours-php/viewfinder/images/res70/331000/331456-Quintana-Roo.jpg" alt="Primera diapositiva">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.cancunhotelsmexico.com/data/Pics/OriginalPhoto/12735/1273570/1273570822/pic-sandos-luxury-experience-hotel-cancun-15.JPEG" alt="Segunda diapositiva">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://a.travel-assets.com/findyours-php/viewfinder/images/res70/332000/332276-Hotel-Zone.jpg" alt="Tercera diapositiva">
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

    <!-- Sección de tarjetas -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Tarjeta 1">
                    <div class="card-body">
                        <h5 class="card-title">TODO INCLUIDO</h5>
                        <p class="card-text">Tienes accesos a bares,restaurantes,fitnes center y actividades acuaticas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Tarjeta 2">
                    <div class="card-body">
                        <h5 class="card-title">VIAJE EN PAREJA</h5>
                        <p class="card-text">Puedes descubrir toda esas fantacias para lo que no has tenido tiempo y espacio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="Tarjeta 3">
                    <div class="card-body">
                        <h5 class="card-title">TODO INCLUIDO</h5>
                        <p class="card-text">Descripción de la tarjeta 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de servicios -->
    <div class="container mt-4">
        <h2 id="services">Servicios</h2>
        <button id="toggle-services" class="btn btn-primary">Mostrar/Ocultar Servicios</button>
        <div id="services-content" style="display: none;">
            <p>Este es el contenido de la sección de servicios. Puedes cambiarlo según sea necesario.</p>
        </div>
    </div>

    <!-- Sección de contacto -->
    <div class="container mt-4">
        <h2 id="contact">Contacto</h2>
        <form>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Script para mostrar/ocultar servicios -->
    <script>
        $(document).ready(function() {
            $("#toggle-services").click(function() {
                $("#services-content").toggle();
            });
        });
    </script>
</body>
</html>
