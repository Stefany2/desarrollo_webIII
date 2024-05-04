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
  <a class="navbar-brand" href="#">PRODUCTOS ROPAS</a>
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
                <img src="https://cueroperu.com/wp-content/uploads/2023/06/Chaqueta-de-cuero-con-forro-de-piel-para-hombre-abrigo-de-motociclista-ajustado-con-cremallera-y.jpg_Q90.jpg" class="product-image" alt="Producto 1"> <!-- Imagen -->
                <h3 class="product-title">Casaca de cuero, con bolsillos </h3>
                <p class="product-price">S/ 194.50</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>
        
        <!-- Producto 2 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/61nUzO6JIxL._AC_UY1000_.jpg" class="product-image" alt="Producto 2"> <!-- Imagen -->
                <h3 class="product-title">Vestido casual de verano</h3>
                <p class="product-price">S/ 160.00</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://i5.walmartimages.com.mx/mg/gm/3pp/asr/06795104-a48a-4ce4-8f02-23348bb06857.a70d4cd42f38353566352a03076483ea.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" class="product-image" alt="Producto 3"> <!-- Imagen -->
                <h3 class="product-title">vestido largo casual</h3>
                <p class="product-price">S/ 148.00</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://estilo.pe/wp-content/uploads/2021/04/105-Pantalon-Mujer-Jean-Cristal-Juvenil-Perfil.jpg" class="product-image" alt="Producto 4"> <!-- Imagen -->
                <h3 class="product-title">Pantalon Slouchy jeans rigido </h3>
                <p class="product-price">s/ 59.90</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 5 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://www.mydandelion.com.mx/wp-content/uploads/2022/11/0-0ca444.jpeg" class="product-image" alt="Producto 5"> <!-- Imagen -->
                <h3 class= " product-title">Vaqueros Holgados Vintage</h3>
                <p class="product-price">S/107.00</p>
                <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 6 -->
        <div class="col-md-4">
            <div class= " product-card">
                <img src="https://www.dhresource.com/webp/m/0x0/f2/albu/g8/M00/62/01/rBVaV11l9VKARmvUAAMmm9tTwWs106.jpg" class="product-image" alt="Producto 6"> <!-- Imagen -->
                <h3 class="product-title">Jogger  Camuflaje</h3>
                <p class= " product-price">S/69.90</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 7 -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="https://img.fruugo.com/product/2/65/542338652_max.jpg" class="product-image" alt="Producto 7"> <!-- Imagen -->
                <h3 class= "product-title">Pantalon Cargo</h3>
                <p class= " product-price">S/109.00</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 8 -->
        <div class= " col-md-4">
            <div class="product-card">
                <img src="https://www.digitalsport.com.ar/files/products/5cedd7c9dc3e7-489744-500x500.jpg" class="product-image" alt="Producto 8"> <!-- Imagen -->
                <h3 class= " product-title">Pantalon Jeans</h3>
                <p class= " product-price">S/127.92</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 9 -->
        <div class= " col-md-4">
            <div class="product-card">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_123780006_3738135_1?wid=1500&hei=1500&qlt=70" class="product-image" alt="Producto 9"> <!-- Imagen -->
                <h3 class= " product-title">Polo Oversize Roman tee</h3>
                <p class= " product-price">S/99.00</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 10 -->
        <div class= " col-md-4">
            <div class="product-card">
                <img src="https://rematexperu.com/cdn/shop/files/130_533x.png?v=1695931364" class="product-image" alt="Producto 10"> <!-- Imagen -->
                <h3 class= " product-title">Polos de algodon</h3>
                <p class= " product-price">S/35.00</p>
                <i class= " fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 11 -->
        <div class= " col-md-4">
            <div class= "product-card">
                <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_120296861_2633141_1?wid=800&hei=800&qlt=70" class="product-image" alt="Producto 11"> <!-- Imagen -->
                <h3 class= "product-title">Polo Yansus Tricolor</h3>
                <p class=" product-price">S/30.90</p>
                <i class= "fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
            </div>
        </div>

        <!-- Producto 12 -->
        <div class= "col-md-4">
            <div class= " product-card">
                <img src="https://www.lacasadelandamiero.com/wp-content/uploads/2022/11/Polos-de-obra-polos-de-trabajo-industrial-manga-larga-de-colores.jpg" class="product-image" alt="Producto 12"> <!-- Imagen -->
                <h3 class= "product-title">Polos Manga Larga</h3>
                <p class= "product-price">S/17.90</p>
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