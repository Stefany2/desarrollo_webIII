<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome para íconos visuales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #333;
        }

        .cart-content {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-title {
            font-size: 1.2em;
            font-weight: bold;
        }

        .cart-item-controls {
            display: flex;
            align-items: center;
        }

        .cart-item-quantity {
            font-size: 1.1em;
            color: #555;
            margin-right: 10px;
        }

        .remove-from-cart {
            font-size: 1.5em;
            color: red;
            cursor: pointer;
            transition: color 0.3s;
        }

        .remove-from-cart:hover {
            color: darkred;
        }

        .total-price {
            font-size: 1.5em;
            font-weight: bold;
            text-align: right;
            padding: 10px;
            margin-top: 20px;
            border-top: 2px solid #ddd;
        }

        .action-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .pay-button,
        .add-products-button {
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 1.2em;
            text-decoration: none;
        }

        .pay-button {
            background: green;
            color: white;
        }

        .pay-button:hover {
            background: darkgreen;
        }

        .add-products-button {
            background: blue;
            color: white;
            margin-right: 10px; /* Espacio entre botones */
        }

        .add-products-button:hover {
            background: darkblue;
        }

    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">CARRITOS DE COMPRAS</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Carrito de Compras</h1>
        <div id="cart-content" class="cart-content"></div>
        <div class="total-price" id="total-price">Precio Total: S/0.00</div>

        <!-- Botones para acciones -->
        <div class="action-buttons">
            <a href="http://localhost/proyecto/public/productos" class="add-products-button">Añadir Productos</a>
            <a id="pay-button" class="pay-button">Pagar</a>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const totalPriceElement = document.getElementById("total-price");

    // Obtén el total del precio desde el texto
    const totalPriceText = totalPriceElement.textContent;
    const totalPriceValue = parseFloat(totalPriceText.replace("Precio Total: S/", "").trim());

    const payButton = document.getElementById("pay-button");
    
    // Modifica el href del botón "Pagar" para incluir el total como parámetro en la URL
    payButton.href = `http://localhost/proyecto/public/pagar?monto=${totalPriceValue.toFixed(2)}`;
});

        document.addEventListener("DOMContentLoaded", function () {
            const cartContent = document.getElementById("cart-content");
            const totalPriceElement = document.getElementById("total-price");

            function renderCart() {
                const cart = JSON.parse(localStorage.getItem("cart")) || [];
                cartContent.innerHTML = ""; // Limpiar contenido del carrito

                let totalPrice = 0;

                if (cart.length === 0) {
                    const emptyMessage = document.createElement("div");
                    emptyMessage.className = "alert alert-info";
                    emptyMessage.textContent = "Tu carrito está vacío. Añade productos para continuar.";
                    cartContent.appendChild(emptyMessage);
                } else {
                    cart.forEach((product, index) => {
                        const cartItem = document.createElement("div");
                        cartItem.className = "cart-item";

                        const title = document.createElement("div");
                        title.className = "cart-item-title";
                        title.textContent = product.title;

                        const quantity = document.createElement("div");
                        quantity.className = "cart-item-quantity";
                        quantity.textContent = `Cantidad: ${product.quantity}`;

                        const removeButton = document.createElement("i");
                        removeButton.className = "fas fa-trash-alt remove-from-cart";
                        removeButton.addEventListener("click", function () {
                            removeProductFromCart(index);
                        });

                        cartItem.appendChild(title);
                        cartItem.appendChild(quantity);
                        cartItem.appendChild(removeButton);

                        cartContent.appendChild(cartItem);

                        totalPrice += product.price * product.quantity; // Calcular precio total
                    });
                }

                totalPriceElement.textContent = `Precio Total: S/${totalPrice.toFixed(2)}`; // Mostrar el precio total
            }

            renderCart(); // Renderizar el carrito al cargar la página

            function removeProductFromCart(index) {
                let cart = JSON.parse(localStorage.getItem("cart")) || [];
                cart.splice(index, 1); // Eliminar producto por índice
                localStorage.setItem("cart", JSON.stringify(cart));
                renderCart(); // Re-renderizar el carrito
            }
        });
    </script>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
