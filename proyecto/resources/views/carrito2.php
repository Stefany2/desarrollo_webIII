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
            padding: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px sólido #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 10px;
        }

        .cart-item-title {
            font-size: 1.5em;
        }

        .cart-item-controls {
            display: flex;
            align-items: center;
        }

        .cart-item-quantity {
            font-size: 1.2em;
            margin-right: 10px;
        }

        .remove-from-cart {
            font-size: 1.5em;
            color: red;
            cursor: pointer;
        }

        .total-price {
            font-size: 1.5em;
            font-weight: bold;
            text-align: center;
        }

        .action-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .pay-button,
        .add-products-button {
            text-align: center;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 1.5em;
        }

        .pay-button {
            background: green;
            color: white;
        }

        .add-products-button {
            background: blue;
            color: white;
            margin-right: 10px; /* Espacio entre los botones */
        }
    </style>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <div id="cart-content"></div>
    <div class="total-price" id="total-price">Precio Total: S/0.00</div>

    <!-- Botones para acciones -->
    <div class="action-buttons">
        <a href="http://localhost/proyecto/public/otros" class="add-products-button">Añadir Productos</a>
        <a href="http://localhost/proyecto/public/pagar" class="pay-button">Pagar</a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cartContent = document.getElementById("cart-content");
            const totalPriceElement = document.getElementById("total-price");

            function renderCart() {
                const cart = JSON.parse(localStorage.getItem("cart")) || [];
                cartContent.innerHTML = ""; // Limpiar contenido del carrito

                let totalPrice = 0;

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
