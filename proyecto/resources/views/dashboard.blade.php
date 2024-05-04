<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Virtual Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts para fuentes modernas -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <!-- CSS personalizado para el estilo -->
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif; /* Usar una fuente moderna */
            background-image: url('https://cdn.shopify.com/s/files/1/0551/2390/2545/files/9_1024x1024.png?v=1641440966'); /* Imagen de fondo */
            background-size: cover; /* Ajusta la imagen para cubrir el contenedor */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* No repetir la imagen */
            height: 100vh; /* Altura del viewport */
            color: #333; /* Color de texto */
        }
        .navbar {
            background: rgba(255, 255, 255, 0.8); /* Transparencia para el navbar */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
        .content {
            background: rgba(255, 255, 255, 0.9); /* Transparencia para el contenido */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            padding: 20px; /* Espaciado para el contenido */
            border-radius: 10px; /* Bordes redondeados */
            text-align: center; /* Centrando el texto */
            max-width: 600px; /* Máxima anchura */
            margin: 0 auto; /* Centrar horizontalmente */
        }
        .btn-primary {
            background: #007bff; /* Color azul Bootstrap */
            border: none; /* Sin borde */
        }
        .btn-primary:hover {
            background: #0056b3; /* Color más oscuro en hover */
        }
        .btn-success {
            background: #28a745; /* Color verde Bootstrap */
            border: none; /* Sin borde */
        }
        .btn-success:hover {
            background: #218838; /* Color más oscuro en hover */
        }
        h1 {
        font-family: 'Arial', sans-serif; /* Fuente para el encabezado */
        font-size: 2rem; /* Tamaño de la fuente */
        color: #333; /* Color del texto */
        text-align: center; /* Centrar el texto */
    }
    i.fas.fa-store {
        color: #007bff; /* Color del icono */
        margin-right: 10px; /* Espacio entre el icono y el texto */
    }
    </style>
</head>
<body>

<!-- Navbar con diseño moderno -->
<nav class="navbar navbar-expand-lg">
<h1>
    <i class="fas fa-store"></i> <!-- Icono de tienda -->
    VIRTUAL SHOP
</h1>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile">Perfil</a>
                    <a class="dropdown-item" href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="/login">Iniciar sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Registrarse</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>

<!-- Contenido principal en una tarjeta -->
<div class="container d-flex align-items-center justify-content-center" style="height: 80vh;">
    <div class="content">
        <h3 class="text-primary">Bienvenido a Virtual Shop!</h3>
        <p>Tu lugar para comprar productos de calidad y encontrar las mejores ofertas.</p>
        <a href="http://localhost/proyecto/public/Bienvenido" class="btn btn-success">Comienza a comprar</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
