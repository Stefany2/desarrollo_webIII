<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Inicio</title>
    <!-- Importar fuente Cascadia Code desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Code:wght@600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilo personalizado -->
    <style>
        /* Aplicar la fuente Cascadia Code SemiBold a todo el cuerpo */
        body {
            font-family: 'Cascadia Code', monospace; /* Fuente para todo el texto */
        }

        /* Estilo para el encabezado */
        header {
            background-color: #ffc107 ;
            color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        /* Estilo para la sección de descripción */
        .intro {
            padding: 40px;
            background-color: #f8f9fa;
            text-align: center;
        }

        /* Estilo para productos destacados */
        .featured-products {
            padding: 40px 0;
            background-color: #f8f9fa;
        }

        /* Estilo para la llamada a la acción */
        .cta {
            background-color: #ffc107;
            color: #343a40;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .cta a {
            color: ##8E44AD ;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .cta a:hover {
            color: #000000;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>BIENVENIDO A NUESTRA TIENDA ONLINE</h1>
        <p>Encuentra los mejores productos al mejor precio</p>
    </header>

    <!-- Sección de Descripción de la Tienda -->
    <section class="intro">
        <h2>Acerca de Nosotros</h2>
        <p>Nuestra tienda online ofrece una amplia gama de productos de alta calidad a precios competitivos.</p>
        <P>Nos esforzamos por proporcionar una experiencia de compra excepcional, con atención al cliente de primera clase y envíos rápidos y seguros</p>
        <p>Desde productos tecnológicos hasta moda y accesorios, encontrarás todo lo que necesitas en un solo lugar.</p>
        <p>¡Te invitamos a explorar nuestra tienda y descubrir ofertas exclusivas!</p>
    </section>

    <!-- Sección de Productos Destacados -->
    <section class="featured-products text-center">
        <div class="container">
            <h2>Productos Populares</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://i5.walmartimages.com.mx/mg/gm/3pp/asr/b4d951df-d388-4110-a414-62144e80063d.6b79217cb98ed55c80758a3785e1b3d6.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" alt="Producto 4">
                        <div class="card-body">
                            <h5 class="card-title">samsung galaxy A50</h5>
                            <p class="card-text">Sistema operativo. Android 9.0.Tecnología celular. 2G.Capacidad de almacenamiento de memoria. 64 GB.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_120461530_2677147_1?wid=800&hei=800&qlt=70" alt="Producto 5">
                        <div class="card-body">
                            <h5 class="card-title">Casaca de cuero mujer</h5>
                            <p class="card-text">símbolo de rebelión.Hidrata las prendas de piel.Utiliza productos que protejan la fibra de tu abrigo. </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="https://falabella.scene7.com/is/image/FalabellaPE/gsc_114364742_867382_1?wid=800&hei=800&qlt=70" alt="Producto 6">
                        <div class="card-body">
                            <h5 class="card-title">Latop HP I7</h5>
                            <p class="card-text">15,6 de pantalla.12Gb de RAM.SSD 512 GB. 10 NUCLEOS. 12 generación</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Llamada a la Acción -->
    <section class="cta">
        <h2>¡Aprovecha Nuestras Ofertas Especiales!</h2>
        <p>No te pierdas nuestros descuentos exclusivos. ¡Compra ahora!</p>
        <a href="http://localhost/proyecto/public/Bienvenido" class="btn btn-dark">REGRESAR MENU</a>
    </section>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>