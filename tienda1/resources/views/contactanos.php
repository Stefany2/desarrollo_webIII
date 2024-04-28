<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contáctame</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Iconos FontAwesome para íconos visuales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts para fuentes personalizadas -->
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+MT:wght@400;700&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para diseño llamativo -->
    <style>
        body {
           
            background-color: #fff; /* Fondo blanco para la página */
        }

        .navbar {
            background-color: #333; /* Color oscuro para la barra de navegación */
        }

        .navbar-brand, .nav-link {
            color: #fff !important; /* Texto blanco para visibilidad */
        }

        .nav-link:hover {
            color: #ffd700 !important; /* Efecto de cambio de color al pasar el mouse */
        }

        .container {
            text-align: center; /* Centrar el contenido */
            padding-top: 50px;
        }

        h1 {
            font-size: 3em; /* Tamaño del encabezado más grande */
            color: #333; /* Color oscuro para el encabezado */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra para el texto */
        }

        p {
            font-size: 1.5em; /* Tamaño del texto del párrafo más grande */
            color: #333; /* Color más oscuro para legibilidad */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Sombra para el texto del párrafo */
        }

        /* Estilos para desplazar el carrusel a la derecha */
        .carousel {
           
            margin-left: 400px; /* Desplazar el carrusel hacia la derecha */
        }
    </style>
</head>
<body>

<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CONTACTATE CON NOSOTROS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://facebook.com/tu_perfil" target="_blank">
          <i class="fab fa-facebook-f"></i> Facebook
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:rojasvanesa792@gmail.com">
          <i class="fas fa-envelope"></i> Correo
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://wa.me/51931576209" target="_blank">
          <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://tienda1.test/">
          <i class="fas fa-sign-out-alt"></i> Salir
        </a>
      </li>
    </ul>
  </div>
</nav>

<!-- Cuerpo de la página -->
<div class="container mt-5">
  <h1>BIENVENIDO A LA PÁGINA PARA COMUNICARTE CON NOSOTROS</h1>
  <p>Puedes contactarnos a través de Facebook, correo electrónico, WhatsApp, o salir si deseas cerrar sesión.</p>
</div>
<!-- Carrusel de Bootstrap -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Contenido de imagen-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://http2.mlstatic.com/storage/pog-cm-admin/calm-assets/Link_MLC_Desktop--4195206e.png" class="d-block w-50" alt="Imagen 1">
    </div>
    

  <!-- Controles para avanzar y retroceder -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
