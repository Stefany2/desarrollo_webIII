<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Blog Personal</title>
    <!-- Agregar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agregar iconos para diseño atractivo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Agregar fuente Cascadia Code desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Code&display=swap" rel="stylesheet">

    <!-- Estilo personalizado para fondo de cuaderno -->
    <style>
         body {
            font-family: 'Cascadia Code', monospace;
            background: url("https://png.pngtree.com/thumb_back/fh260/background/20230707/pngtree-web-development-concept-3d-illustrated-programming-and-coding-image_3766213.jpg") no-repeat center center; /* Imagen de fondo */
            background-size: cover; /* Ajuste para cubrir toda la pantalla */
            background-attachment: fixed; /* Mantener fijo al hacer scroll */
            margin: 0;
            padding: 0;
            min-height: 100vh; /* Asegurar que el fondo cubra todo */
        }

        .container {
            border: 2px solid #A569BD; /* Bordes como una página */
            padding: 20px;
            background: white; /* Fondo de la página */
            margin: 20px auto; /* Centrar el container */
            border-radius: 8px; /* Esquinas redondeadas */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Sombra suave */
            max-width: 800px; /* Máximo ancho para centrar */
            width: 100%; /* Ancho completo en dispositivos móviles */
        }

        .jumbotron {
            background-color: rgba(0, 0, 0, 0.25);
            background-size: 100% 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            color: #FBFCFC;
        }

        .nav-link {
            color: #5A5A5A;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #1F1F1F;
        }

        .footer {
            background-color: rgba(0, 0, 0, 0.25);
            padding: 10px;
            text-align: center;
            color:#FBFCFC ;
        }

        a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #007BFF; /* Cambiar color en hover */
        }
        .btn-regreso {
            background-color: #3498DB ; /* Color del botón */
            color: white; /* Color del texto del botón */
            border-radius: 8px; /* Bordes redondeados */
            padding: 10px 20px; /* Tamaño del botón */
            text-align: center; /* Centrar el texto */
            text-decoration: none; /* Sin subrayado */
            display: inline-block; /* Para que se comporte como botón */
        }

        .btn-regreso:hover {
            background-color: #C39BD3; /* Color al pasar el mouse */
        }
    </style>
</head>
<body>

    <!-- Sección de bienvenida -->
    <div class="jumbotron text-center">
        <h1>GUSTOS E CONOCIMIENTOS</h1>
        <p>Aqui te comparto sobre mis gustos personales y conocimientos.</p>
    </div>

    <!-- Sección de contenido -->
    <div class="container">
        <p>En mis gustos gastronomicos, me gusta la comida criolla como por ejemplo, el tallarin verde,el arroz con pato, el aji de gallina entre otros.</p>
        <p>Tambien me gusta el baile, leer y practicar deportes.</p>

        <h2>CONOCIMIENTOS</h2>

        <p>Tengo conocimiento en lo que es programación manejo el githup,JAVA, HTML,CSS entre otros.</p>
        <p>Base de datos como (MYSQL,LARAGON,XAMMPP)</p>
        <p>De la cuales he realizados proyectos funcionales puedes observar cada uno de mis proyectos realizados en mi githup, haciendo clik en mi icono.</p>

         <!-- Botón para regresar a la página principal -->
         <a href="http://localhost/blog_personal/public/" class="btn-regreso">Volver a la página principal</a>
    </div>
      <!-- Sección de imágenes -->
      <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <img src="https://m1.paperblog.com/i/424/4243839/fotos-platos-comida-criolla-peruana-gastronom-L-f5M3Ui.jpeg" alt="Imagen 1" class="img-fluid rounded"> <!-- Imagen 1 -->
            </div>
            <div class="col-md-4">
                <img src="https://blog.knoldus.com/wp-content/uploads/2020/05/Logo.png" alt="Imagen 2" class="img-fluid rounded"> <!-- Imagen 2 -->
            </div>
            <div class="col-md-4">
                <img src="https://img.freepik.com/vector-premium/pareja-hombre-mujer-bailando-ilustracion-icono-dibujos-animados-musica-concepto-icono-musica-personas-premium-aislado-estilo-plano-dibujos-animados_138676-1568.jpg" alt="Imagen 3" class="img-fluid rounded"> <!-- Imagen 3 -->
            </div>
        </div>
    </div>


    <!-- Sección de Contacto -->
    <footer class="footer">
        <p>Si deseas contactarme, envíame un mensaje a <a href="mailto:rojasvanesa792@gmail.com">mi correo</a> o sígueme en redes sociales.</p>
        <div>
            <a href="#" class="mx-2"><i class="fab fa-facebook"></i></a>
            <a href="#" class="mx-2"><i class=" fab fa-twitter"></i></a>
            <a href="https://github.com/Stefany2?tab=repositories" class="mx-2"><i class="fab fa-github"></i></a>

        </div>
    </footer>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
