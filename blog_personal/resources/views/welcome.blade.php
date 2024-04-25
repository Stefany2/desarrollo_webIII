<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blog Personal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/app.css"> 
    <style>
        body {
            background: transparent;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background: #e0e0e0;
            border-bottom: 2px solid #ccc; /* Imitación de línea de cuaderno */
        }
        .navbar-nav .nav-item {
            border-bottom: 1px solid #ccc;
        }
        .navbar-nav .nav-item .nav-link {
            font-family: 'Courier New', Courier, monospace; /* Fuente estilo cuaderno */
            color: purple;
        }
        .carousel-item {
            height: 910px; /* Ajusta la altura del carrusel */
        }
        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .centered-container {
            position: absolute;
            top: 50%; /* Para centrar verticalmente */
            left: 50%; /* Para centrar horizontalmente */
            transform: translate(-50%, -50%); /* Ajuste para mantener centrado */
            background: rgba(255, 255, 255, 0.8); /* Fondo semitransparente */
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1); /* Efecto de sombra */
            text-align: center; /* Para centrar el texto */
        }
        .section-title {
            font-family: 'Cascadia Code', monospace; /* Aplicar la fuente Cascadia Code */
    font-weight: 700; /* Aumentar el grosor del texto */
    color: #2c3e50; /* Color del texto */
    font-size: 36px; /* Tamaño del texto */
    text-align: center; /* Centrar el texto */
    margin-top: 20px; /* Espacio arriba */
    margin-bottom: 20px; /* Espacio abajo */
    letter-spacing: 2px; /* Espaciado entre letras */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
            <h1>STEFANY PAULINO</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Ocupacion') }}">Ocupación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Acerca_de_mi') }}">Acerca de mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Experiencia') }}">Experiencia Profesional</a>
                </li>
                <li class="nav-item">
                <a class="nav-link"  href="{{ route('Gustos') }}">Gustos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carouselBackground" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2018/08/fondos-pantalla-full-hd-animales_4.jpg?tf=3840x" alt="Fondo Carrusel 1">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/81/25/6a/81256a00f5306f375fb29619931929dc.jpg" alt="Fondo Carrusel 2">
            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/2ZkCESu.jpg" alt="Fondo Carrusel 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselBackground" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselBackground" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="centered-container">
        <h2 class="section-title">Sección Principal</h2>
        <p>Bienvenido a mi blog personal. Aquí comparto información sobre mi ocupación, experiencia profesional, intereses y mucho más.</p>
    </div>

</body>
</html>
