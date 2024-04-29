<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css">
    <!-- Incluye Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('https://fondosmil.co/fondo/4278.jpg'); /* Cambia esta URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            padding: 20px;
        }

        .form {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Clase para añadir iconos dentro del campo de texto */
        .icon-input {
            position: relative;
        }

        .icon-input i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: gray;
        }

        .icon-input input {
            padding-left: 30px; /* Espacio para el icono */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form">
            <x-guest-layout>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  
                        <x-input-label for="name" :value="__('NOMBRES')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    

                  
                        <x-input-label for="email" :value="__('CORREO')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                

                   
                        <x-input-label for="password" :value="__('CONTRASEÑA')" />

                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />

                        <x-input-error :messages="$errors'(" CONTRASEÑA '')"class="mt-2" />
                

                        <x-input-label for="password_confirmation" :value="__('CONFIRMAR CONTRASEÑA')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation"
                                        required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                 

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Ya registrado?') }}
                        </a>

                        <x-primary-button class="ms-4">
                            {{ __('Registrar') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-guest-layout>
        </div>
    </div>
</body>
</html>
