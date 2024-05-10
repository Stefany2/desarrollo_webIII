<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú de Productos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome para íconos visuales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .navbar {
            background-color: #333;
            color: #fff;
        }

        .navbar-brand {
            color: #ffd700 !important;
        }

        .product-card {
            background-color: #fff;
            border: 1px sólido #ddd;
            border-radius: 10px;
            padding: 15px;
            transition: box-shadow 0.3s;
            height: 100%; /* Para mantener el tamaño uniforme */
        }

        .product-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .product-title {
            font-size: 1.5em;
            color: #333;
        }

        .product-price {
            font-size: 1.2em;
            color: #666;
        }

        .add-to-cart {
            font-size: 1.5em;
            color: #ff6347;
            cursor: pointer;
            transition: color 0.3s;
        }

        .add-to-cart:hover {
            color: #ff4500;
        }

        .cart-icon {
            position: relative;
            cursor: pointer;
        }

        .cart-counter {
            position: absolute;
            top: -5px;
            right: -10px;
            background: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 0.8em;
        }
        .cart-icon {
  margin-right: 15px; /* Ajusta la distancia entre los iconos */
}
    </style>
</head>
<body>
<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">PRODUCTOS TECNOLOGICOS</a>
  <div class="ml-auto"> <!-- Ícono del carrito y de cerrar sesión -->
    <a href="http://localhost/proyecto/public/carrito" class="cart-icon"> <!-- El estilo viene de la clase -->
      <i class="fas fa-shopping-cart"></i>
      <span class="cart-counter">0</span> <!-- Contador del carrito -->
    </a>
    <a href="http://localhost/proyecto/public/Bienvenido" title="Cerrar sesión">
      <i class="fas fa-sign-out-alt"></i>
    </a>
  </div>
</nav>


<!-- Contenedor para productos -->
<div class="container mt-4">
  <div class="row">
    <!-- Ejemplo de Producto -->
    <div class="col-md-4 mb-4"> <!-- Añade margen inferior para separar filas -->
      <div class="product-card" data-id="1" data-title="Samsung Galaxy S23" data-price="3779">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_117633903_1836865_1?wid=800&hei=800&qlt=70" class="product-image" alt="Samsung Galaxy S23" style="width: 100%;"> <!-- Asegura que la imagen ocupe el 100% del ancho -->
        <h3 class="product-title">Samsung Galaxy S23</h3>
        <p class="product-price">S/3.779</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 2 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="2" data-title="Redmi Note 11 pro" data-price="1299">
        <img src="https://www.laptopperu.pe/wp-content/uploads/2023/06/celular-xiaomi-redmi-note-11-pro-plus-1-600x600.webp" class="product-image" alt="Redmi Note 11 pro" style="width: 100%;">
        <h3 class="product-title">Redmi Note 11 pro</h3>
        <p class="product-price">S/1.299</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 3 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="3" data-title="Laptop Hp" data-price="6599">
        <img src="https://oechsle.vteximg.com.br/arquivos/ids/14905668-1000-1000/image-30edaf9e7d7b42ddaa2e7f383001be54.jpg?v=638282468035800000" class="product-image" alt="Laptop Hp" style="width: 100%;">
        <h3 class="product-title">Laptop Hp</h3>
        <p class="product-price">S/6.599</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 4 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="4" data-title="JBL Tune 520BT" data-price="178">
        <img src="https://www.quickservicepanama.com/cdn/shop/files/JBL_TUNE_520BT_Box_Image_Side_view_Blue_SKU_1605x1605_ca2675e0-d148-4f05-87a9-c1617bad88ac.png?v=1703363121&width=360" class="product-image" alt="JBL Tune 520BT" style="width: 100%;">
        <h3 class="product-title">JBL Tune 520BT </h3>
        <p class="product-price">s/178</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 5 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="5" data-title="JBL tUNE FLEX" data-price="299">
        <img src="https://www.jbl.com.pe/dw/image/v2/AAUJ_PRD/on/demandware.static/-/Sites-masterCatalog_Harman/default/dw7b7d90b0/JBL_Tune_Flex_Box_Image_Side_Black_SKU_1605x1605.png?sw=537&sfrm=png" class="product-image" alt="JBL tUNE FLEX" style="width: 100%;">
        <h3 class="product-title">JBL tUNE FLEX</h3>
        <p class="product-price">s/299</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 6 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="6" data-title="Computadora PC Gamer RYZEN 5-4600G3.7" data-price="1879">
        <img src="https://plazavea.vteximg.com.br/arquivos/ids/25891832-512-512/image-4a0259dac6b3495aacf0967323a23271.jpg" class="product-image" alt="Computadora PC Gamer RYZEN 5-4600G3.7" style="width: 100%;">
        <h3 class="product-title">Computadora PC Gamer RYZEN 5-4600G3.7</h3>
        <p class="product-price">S/1.879</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 7 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="7" data-title="LED SONY 32" data-price="1449">
        <img src="https://home.ripley.cl/store/Attachment/WOP/D171/2000360024898/2000360024898_2.jpg" class="product-image" alt="LED SONY 32" KLD-32W605d HD smart TV,Motionflow XR 240,Wi-Fi incorporada,X-Reality PRO." style="width: 100%;">
        <h3 class="product-title">LED SONY 32" KLD-32W605d HD smart TV,Motionflow XR 240,Wi-Fi incorporada,X-Reality PRO.</h3>
        <p class="product-price">S/1.449</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 8 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="8" data-title="ALEXA ECHO DOT 5 GEN" data-price="599">
        <img src="https://smarthomesv.com/cdn/shop/products/B09B8V1LZ3_1_1200x1200.jpg?v=1671464063" class="product-image" alt="ALEXA ECHO DOT 5 GEN,Asistente de voz smart." style="width: 100%;">
        <h3 class="product-title">ALEXA ECHO DOT 5 GEN,Asistente de voz smart.</h3>
        <p class="product-price">S/599</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 9 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="9" data-title="TAPO C225" data-price="349">
        <img src="https://maptechperu.com/wp-content/uploads/2023/10/6b9e1024-7506-4e31-8550-2ebb8abeca7b-1.jpeg" class="product-image" alt="TAPO C225,Smart,LED invisible IR de 940 nm." style="width: 100%;">
        <h3 class="product-title">TAPO C225,Smart,LED invisible IR de 940 nm.</h3>
        <p class="product-price">S/349</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 10 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="10" data-title="Xiaomi Mi TV Box S 4K" data-price="298">
        <img src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_121805228_3190949_1?wid=800&hei=800&qlt=70" class="product-image" alt="Xiaomi Mi TV Box S 4K 2nd Gen" style="width: 100%;">
        <h3 class="product-title">Xiaomi Mi TV Box S 4K 2nd Gen,Android Tv,Dolby Audio,google</h3>
        <p class="product-price">S/298</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 11 -->
    <div class="col-md-4 mb-4">
      <div class="product-card" data-id="11" data-title="robot aspirador cecotec " data-price="1299">
        <img src="https://i.ebayimg.com/images/g/bc8AAOSwdy1dm1YJ/s-l500.png" class="product-image" alt="robot aspirador cecotec conga 1090" style="width: 100%;">
        <h3 class="product-title">robot aspirador cecotec conga 1090,6 modos de limpieza.</h3>
        <p class="product-price">S/1.299</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

    <!-- Producto 12 -->
    <div class="col-md-4 mb-4">
      <div class="product-card"data-id="12" data-title="consola Nintendo Switch" data-price="1599">
        <img src="https://jvgamesperu.pe/wp-content/uploads/2022/02/7.jpg" class="product-image" alt="consola Nintendo Switch,Modelo OLED,64 GB,conexión por cable" style="width: 100%;">
        <h3 class="product-title">consola Nintendo Switch,Modelo OLED,64 GB,conexión por cable</h3>
        <p class="product-price">S/1.599</p>
        <i class="fas fa-shopping-cart add-to-cart"></i> <!-- Ícono de carrito -->
      </div>
    </div>

  </div> <!-- Cierre del row -->
</div> <!-- Cierre del container -->

<!-- Código JavaScript para manejar eventos y carrito -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const cartIconElements = document.querySelectorAll(".add-to-cart"); // Íconos de carrito
    const cartCounter = document.querySelector(".cart-counter"); // Contador del carrito

    function getCart() {
        return JSON.parse(localStorage.getItem("cart")) || [];
    }

    function updateCartCount() {
        const cart = getCart();
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        cartCounter.textContent = totalItems;
    }

    function addProductToCart(product) {
        const cart = getCart();
        const existingProduct = cart.find(p => p.id === product.id);

        if (existingProduct) {
            existingProduct.quantity += 1; // Incrementar cantidad
        } else {
            cart.push({ id: product.id, title: product.title, price: product.price, quantity: 1 });
        }

        localStorage.setItem("cart", JSON.stringify(cart)); // Guardar el carrito
        updateCartCount(); // Actualizar contador
    }

    cartIconElements.forEach(icon => {
        icon.addEventListener("click", function () {
            const productCard = this.closest(".product-card");
            const product = {
                id: productCard.getAttribute("data-id"),
                title: productCard.getAttribute("data-title"),
                price: parseFloat(productCard.getAttribute("data-price")),
            };
            addProductToCart(product); // Agregar al carrito
        });
    });

    updateCartCount(); // Actualizar contador al cargar la página
});

</script>

<!-- Dependencias de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>