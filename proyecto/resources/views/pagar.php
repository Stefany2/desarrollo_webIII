<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            background-image: url('https://wallpapers.com/images/hd/pretty-black-qe0065n8fmbmz72q.jpg'); /* URL de la imagen de fondo */
            background-size: cover; /* Asegura que la imagen cubra todo el cuerpo */
            background-position: center; /* Centra la imagen */
        }

        .payment-card {
            max-width: 500px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 255, 0.3); /* Azul con cierta transparencia */
            background:rgba(0, 0, 0, 0); /* Transparente */
            background-image: url('https://media1.tenor.com/m/r5a_QxNpB6UAAAAC/gracias-thanks.gif'); /* Imagen de fondo para la tarjeta */
            background-size: cover; /* Cubre todo el espacio de la tarjeta */
            background-position: center; /* Centra la imagen en la tarjeta */
        }

        .payment-header {
            display: flex; /* Flexbox para alinear el texto y el ícono */
            justify-content: space-between; /* Distribuir espacio para que el ícono esté al final */
            align-items: center; /* Alinear ícono verticalmente con el texto */
            background: linear-gradient(90deg, rgba(0, 123, 255, 1), rgba(0, 105, 218, 1));
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        .close-icon {
            font-size: 24px; /* Tamaño grande para mayor visibilidad */
            cursor: pointer; /* Cursión tipo mano */
            color: red; /* Color rojo para destacar */
        }

        .card-body {
            padding: 20px;
            background: rgba(255, 255, 255, 0.8); /* Un ligero fondo blanco para el texto */
            border-radius: 10px; /* Redondea las esquinas */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-card">
            <div class="payment-header">
                <h4>FORMULARIO DE PAGO</h4>
                <i class="fas fa-times close-icon" onclick="window.location.href = 'http://localhost/proyecto/public/productos';"></i>

            </div>
            <div class="card-body">
                <form id="payment-form">
                    <div class="form-group">
                        <label for="nombre">Nombre en la Tarjeta</label>
                        <input type="text" id="nombre" class="form-control" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="numero">Número de Tarjeta</label>
                        <input type="text" id="numero" class="form-control" placeholder="Ingrese el número de su tarjeta" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="expiracion">Fecha de Expiración</label>
                            <input type="text" id="expiracion" class="form-control" placeholder="MM/AA" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" class="form-control" placeholder="Ingrese el CVV" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto a Pagar</label>
                        <input type="text" id="monto" class="form-control" placeholder="Ingrese el monto a pagar" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Pagar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jsPDF para crear PDFs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        document.getElementById('payment-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Previene el envío del formulario

            const { jsPDF } = window.jspdf; // Obtiene el objeto jsPDF

            // Obtiene los datos del formulario
            var nombre = document.getElementById('nombre').value;
            var numero = document.getElementById('numero').value;
            var expiracion = document.getElementById('expiracion').value;
            var cvv = document.getElementById('cvv').value;
            var monto = document.getElementById('monto').value;

            // Crear un nuevo PDF
            const pdf = new jsPDF();
            

            // Añadir texto a PDF
            pdf.setFontSize(18);
            pdf.text("BOLETA DE COMPRA", 105, 20, { align: 'center' }); // Centrar texto

            pdf.setFontSize(14);
            pdf.text(`Nombre: ${nombre}`, 20, 40);
            pdf.text(`Número de Tarjeta: ${numero}`, 20, 60);
            pdf.text(`Fecha de Expiración: ${expiracion}`, 20, 80);
            pdf.text(`CVV: ${cvv}`, 20, 100);
            pdf.text(`Monto a Pagar: ${monto}`, 20, 120);

             // Añadir un pie de página
    pdf.setFontSize(10); // Tamaño de fuente para el pie
    pdf.text("Gracias por su compra.", 105, 270, { align: 'center' }); // Centrar texto en el pie
     

            // Descarga el PDF
            pdf.save("Recibo_compra.pdf");
        });
    </script>
</body>
</html>
