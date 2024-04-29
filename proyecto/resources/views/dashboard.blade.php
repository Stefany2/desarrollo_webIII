<x-app-layout>
    <!-- CSS para aplicar la imagen de fondo -->
    <style>
        .background-image {
            background-image: url('https://www.xtrafondos.com/descargar.php?id=6268&resolucion=2560x1440'); /* Cambia la URL por tu imagen */
            background-size: cover; /* Ajusta la imagen para cubrir el contenedor */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* No repite la imagen */
            height: 100vh; /* Abarca toda la altura del viewport */
        }
    </style>

<x-slot name="header">
    <div class="bg-light shadow-sm flex items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('VIRTUAL SHOP') }}
        </h2>
        <!-- Ícono de tiendita como SVG con enlace -->
        <a href="http://localhost/proyecto/public/Bienvenido" class="ml-2"> <!-- Inserta aquí tu URL -->
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 6h-2.3l-.7-3.3c-.1-.4-.5-.7-.9-.7H6.9c-.4 0-.8.3-.9.7L5.3 6H3c-.6 0-1 .4-1 1s.4 1 1 1v9c0 1.1.9 2 2 2h3v-2H6V8.4l1-4.3h9l1 4.3V17h-1v2h3c1.1 0 2-.9 2-2V8c.6 0 1-.4 1-1s-.4-1-1-1z"/>
            </svg>
        </a>
    </div>
</x-slot>



    <!-- Contenedor principal con imagen de fondo -->
    <div class="background-image py-12"> <!-- Aplica la imagen de fondo aquí -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido a Virtual Shop!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


