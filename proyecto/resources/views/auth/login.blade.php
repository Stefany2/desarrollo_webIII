<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluir íconos (como FontAwesome para usar íconos en el diseño) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Estilos personalizados para imagen de fondo y transparencia -->
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/31/30/f1/3130f126b285a41d00af4873b18d4fc5.jpg'); /* Cambia a tu imagen de fondo */
            background-size: cover; /* Para que la imagen cubra todo el fondo */
            background-position: center; /* Para centrar la imagen */
            height: 100vh; /* Para que cubra toda la pantalla */
        }
        .card {
            background: rgba(255, 255, 255, 0.7); /* Transparencia */
            backdrop-filter: blur(10px); /* Efecto de desenfoque para un toque elegante */
            padding: 20px; /* Relleno para evitar compresión */
            margin: 20px; /* Margen para evitar borde estrecho */
            min-width: 300px; /* Ancho mínimo para evitar que sea demasiado estrecha */
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto"> <!-- Tamaño más grande -->
            <div class="card text-center mt-3 mb-3">
                <div class="card-header bg-primary text-white">
                    <!-- Icono personalizado -->
                    <i class="fas fa-user-circle fa-2x"></i> <!-- Icono de usuario -->
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="card-body">
                    <!-- Estado de la sesión -->
                    <div id="session-status" class="mb-4 text-success">
                        <!-- Aquí se mostrará el estado de la sesión -->
                    </div>

                    <!-- Formulario de inicio de sesión -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Dirección de correo -->
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                            <!-- Errores de entrada -->
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        </div>

                        <!-- Contraseña -->
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                            <small class="text-danger">{{ $errors->first('password') }}</small>
                        </div>

                        <!-- Recordarme -->
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                            <label class="form-check-label" for="remember_me">Mostrar contraseña</label>
                        </div>

                        <!-- Olvidó su contraseña -->
                        <div class="d-flex justify-content-between align-items-center">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-muted" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif

                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluir Bootstrap y Popper.js para interactividad -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
