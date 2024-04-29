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
  <a class="navbar-brand" href="#">PRODUCTOS TECNOLÓGICOS</a>
</nav>

<!-- Contenedor para productos -->
<div class="container mt-4">
  <div class="row">
    <!-- Productos -->
    <!-- Tarjeta de producto -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_117633903_1836865_1?wid=800&hei=800&qlt=70" class="product-image" alt="Producto 1"> <!-- Imagen -->
        <h3 class="product-title">Samsung galaxy S23 </h3>
        <p class="product-price">S/3.779</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 2 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://scontent.flim6-4.fna.fbcdn.net/v/t39.30808-6/275952127_2775704262734622_385038544443037622_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=hA5HnzsdywoQ7kNvgFOXO8D&_nc_ht=scontent.flim6-4.fna&oh=00_AfDLjOsd5ta5l1NT8Ah7iw0K7LnhICXGrue6M4gLHoSnNw&oe=663386FA" class="product-image" alt="Producto 2"> <!-- Imagen -->
        <h3 class="product-title">Redmi Note 11 pro</h3>
        <p class="product-price">S/1.299</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 3 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://oechsle.vteximg.com.br/arquivos/ids/14905668-1000-1000/image-30edaf9e7d7b42ddaa2e7f383001be54.jpg?v=638282468035800000" class="product-image" alt="Producto 3"> <!-- Imagen -->
        <h3 class="product-title">Laptop Hp</h3>
        <p class="product-price">S/6.599</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 4 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://www.quickservicepanama.com/cdn/shop/files/JBL_TUNE_520BT_Box_Image_Side_view_Blue_SKU_1605x1605_ca2675e0-d148-4f05-87a9-c1617bad88ac.png?v=1703363121&width=360" class="product-image" alt="Producto 4"> <!-- Imagen -->
        <h3 class="product-title">JBL Tune 520BT </h3>
        <p class="product-price">s/178</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 5 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://www.jbl.com.pe/dw/image/v2/AAUJ_PRD/on/demandware.static/-/Sites-masterCatalog_Harman/default/dw7b7d90b0/JBL_Tune_Flex_Box_Image_Side_Black_SKU_1605x1605.png?sw=537&sfrm=png" class="product-image" alt="Producto 5"> <!-- Imagen -->
        <h3 class="product-title">JBL tUNE FLEX</h3>
        <p class="product-price">s/299</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 6 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://plazavea.vteximg.com.br/arquivos/ids/25891832-512-512/image-4a0259dac6b3495aacf0967323a23271.jpg" class="product-image" alt="Producto 6"> <!-- Imagen -->
        <h3 class="product-title">Computadora PC Gamer RYZEN 5-4600G3.7</h3>
        <p class="product-price">S/1.879</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 7 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-image" alt="Producto 7"> <!-- Imagen -->
        <h3 class="product-title">Producto 7</h3>
        <p class="product-price">$79.99</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 8 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-image" alt="Producto 8"> <!-- Imagen -->
        <p class="product-price">$89.99</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 9 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-image" alt="Producto 9"> <!-- Imagen -->
        <h3 class="product-title">Producto 9</h3>
        <p class="product-price">$99.99</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 10 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-image" alt="Producto 10"> <!-- Imagen -->
        <h3 class="product-title">Producto 10</h3>
        <p class="product-price">$109.99</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 11 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-image" alt="Producto 11"> <!-- Imagen -->
        <h3 class="product-title">Producto 11</h3>
        <p class="product-price">$119.99</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 12 -->
    <div class="col-md-4">
      <div class="product-card">
        <img src="https://via.placeholder.com/300x200" class="product-image" alt="Producto 12"> <!-- Imagen -->
        <h3 class="product-title">Producto 12</h3>
        <p class="product-price">$129.99</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>