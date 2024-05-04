<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú de Productos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome para íconos visuales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts para fuentes personalizadas -->
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+MT:wght@400;700&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para diseño llamativo -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Fuente general */
            background-color: #f5f5f5; /* Fondo claro */
            padding: 20px;
        }

        .navbar {
            background-color: #333; /* Barra de navegación oscura */
            color: #fff; /* Texto blanco */
        }

        .navbar-brand {
            color: #ffd700 !important; /* Marca de la barra con color dorado */
        }

        .navbar a {
            color: white; /* Color del texto en enlaces de la barra de navegación */
        }

        .product-card {
            background-color: #fff; /* Fondo blanco para cada tarjeta */
            border: 1px solid #ddd; /* Borde para cada tarjeta */
            border-radius: 10px; /* Bordes redondeados */
            padding: 15px; /* Espaciado interno */
            margin-bottom: 20px; /* Espaciado entre tarjetas */
            transition: box-shadow 0.3s; /* Transición para efecto de sombra */
        }

        .product-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); /* Efecto de sombra al pasar el mouse */
        }

        .product-title {
            font-size: 1.5em; /* Tamaño del título del producto */
            color: #333; /* Color del texto */
        }

        .product-price {
            font-size: 1.2em; /* Tamaño del precio */
            color: #666; /* Color del texto del precio */
        }

        .add-to-cart {
            font-size: 1.5em; /* Tamaño del ícono del carrito */
            color: #ff6347; /* Color del ícono del carrito */
            cursor: pointer; /* Cursor como mano para el ícono */
            transition: color 0.3s; /* Transición para cambio de color */
        }

        .add-to-cart:hover {
            color: #ff4500; /* Efecto de cambio de color al pasar el mouse */
        }

        .product-image {
            width: 100%; /* Asegura que la imagen ocupe todo el ancho */
            border-radius: 10px; /* Bordes redondeados para la imagen */
        }
    </style>
</head>
<body>

<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">PRODUCTOS BISUTERIA</a>
  <div class="ml-auto"> <!-- Se coloca el icono a la derecha -->
    <a href="http://localhost/proyecto/public/Bienvenido" title="Cerrar sesión"> <!-- Cambiar href por la ruta correcta -->
      <i class="fas fa-sign-out-alt"></i> <!-- Icono de salida -->
    </a>
  </div>
</nav>

<!-- Contenedor para productos -->
<div class="container mt-4">
    <div class="row">
        <!-- Productos -->
        <!-- Tarjeta de producto -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://img4.dhresource.com/webp/m/0x0/f3/albu/km/j/05/389191d3-00b8-4e0f-8e73-ad82f8fd3939.jpg" class="product-image" alt="Producto 1"> <!-- Imagen -->
                <h3 class="product-title">Collar Corazon Acero Inoxidable </h3>
                <p class="product-price">S/30.00</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>
        
        <!-- Producto 2 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/MNsAAOSwoSNkbc5o/s-l1600.jpg" class="product-image" alt="Producto 2"> <!-- Imagen -->
                <h3 class="product-title">Collar Margarita Flor de Circonio Acero Inoxdable </h3>
                <p class="product-price">S/69.00</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/Au4AAOSwMWplzDwD/s-l1600.jpg" class="product-image" alt="Producto 3"> <!-- Imagen -->
                <h3 class="product-title">Colgante Cruz de Acero Inoxidable hombre</h3>
                <p class="product-price">S/52.70</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/bKMAAOSw5uxdBLlH/s-l960.jpg" class="product-image" alt="Producto 4"> <!-- Imagen -->
                <h3 class="product-title">Punk Plateado Acero Inoxidabel hombre mujer </h3>
                <p class="product-price">s/10.32</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 5 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/QhgAAOSw43llDaA9/s-l1600.jpg" class="product-image" alt="Producto 5"> <!-- Imagen -->
                <h3 class= " product-title">Colgante Acero Inoxidable Enchapado en Oro </h3>
                <p class="product-price">S/15.00</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 6 -->
        <div class="col-md-4">
            <div class= " product-card">
                <img src="https://i.ebayimg.com/images/g/3i0AAOSwKCJlhX1t/s-l1600.jpg" class="product-image" alt="Producto 6"> <!-- Imagen -->
                <h3 class="product-title">colgante de mariposa de acero inoxidable</h3>
                <p class= " product-price">S/20.00</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 7 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/s0QAAOSwq0dmHwiX/s-l960.jpg" class="product-image" alt="Producto 7"> <!-- Imagen -->
                <h3 class= "product-title">Colgante Cruz Plata Acero Inoxidable</h3>
                <p class= " product-price">S/18.00</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 8 -->
        <div class= " col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/cvwAAOSwr7hhOW8p/s-l960.jpg" class="product-image" alt="Producto 8"> <!-- Imagen -->
                <h3 class= " product-title">Mujer Enchapado en Oro 18K Acero Inoxidable Flor Margarita</h3>
                <p class= " product-price">S/33.48</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 9 -->
        <div class= " col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/U6cAAOSwpMZlUIaG/s-l960.jpg" class="product-image" alt="Producto 9"> <!-- Imagen -->
                <h3 class= " product-title">Aretes Argollas en Oro 14K Colgantes</h3>
                <p class= " product-price">S/30.00</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 10 -->
        <div class= " col-md-4">
            <div class="product-card">
                <img src="https://i.ebayimg.com/images/g/eOYAAOSwPMpfxmnv/s-l960.jpg" class="product-image" alt="Producto 10"> <!-- Imagen -->
                <h3 class= " product-title">Acero Inoxidable Pendientes de aro Tachuelas </h3>
                <p class= " product-price">S/8.10</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 11 -->
        <div class= " col-md-4">
            <div class= "product-card">
                <img src="https://i.ebayimg.com/images/g/6dYAAOSwwgRgkXO~/s-l960.jpg" class="product-image" alt="Producto 11"> <!-- Imagen -->
                <h3 class= "product-title">Punk de acero inoxidable para hombres</h3>
                <p class=" product-price">S/7.00</p>
                <i class= "fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 12 -->
        <div class= "col-md-4">
            <div class= " product-card">
                <img src="https://i.ebayimg.com/images/g/iDEAAOSwKP1hr1Yk/s-l960.jpg" class="product-image" alt="Producto 12"> <!-- Imagen -->
                <h3 class= "product-title">Circón Mariposa Oreja Clip Sin Perforación </h3>
                <p class= "product-price">S/10.40</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
