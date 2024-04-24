<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ruta para mostrar un formulario de contacto
Route::get('contacto', function () {
    $menu_url = url('http://ejercicio1.test/'); // Cambia '/menu' por la ruta del menú principal

    return "
        <div style='font-family: Arial, sans-serif;'>
            <h1 style='color: #EC407A ; font-size: 2em; text-align: center;'>Bienvenido a la página CONTACTO</h1>
            <p style='color: #34495e; font-size: 1.2em; text-align: center;'>
                Aquí puedes encontrar información sobre los numeros a contactarnos.
            </p>
            <form action='$menu_url' style='text-align: center;'>
                <button type='submit' style='background-color: #EC407A ; color: white; border: none; padding: 10px 20px; font-size: 1em; cursor: pointer; border-radius: 5px;'>Regresar al Menú</button>
            </form>
        </div>
    ";
});
// mostrar ruta de un formulario cursos
Route::get('cursos', function () {
    $menu_url = url('http://ejercicio1.test/'); // Cambia '/menu' por la ruta del menú principal

    return "
        <div style='font-family: Arial, sans-serif;'>
            <h1 style='color: #0000FF ; font-size: 2em; text-align: center;'>Bienvenido a la página CURSOS</h1>
            <p style='color: #34495e; font-size: 1.2em; text-align: center;'>
                Aquí puedes encontrar información sobre los cursos.
            </p>
            <form action='$menu_url' style='text-align: center;'>
                <button type='submit' style='background-color: #0000FF ; color: white; border: none; padding: 10px 20px; font-size: 1em; cursor: pointer; border-radius: 5px;'>Regresar al Menú</button>
            </form>
        </div>
    ";
});

// Ruta para mostrar un formulario de contacto
Route::get('correo', function () {
    $menu_url = url('http://ejercicio1.test/'); // Cambia '/menu' por la ruta del menú principal

    return "
        <div style='font-family: Arial, sans-serif;'>
            <h1 style='color: #FF00FF; font-size: 2em; text-align: center;'>Bienvenido a la página CORREO</h1>
            <p style='color: #34495e; font-size: 1.2em; text-align: center;'>
                Aquí puedes encontrar información sobre el correo electronico.
            </p>
            <form action='$menu_url' style='text-align: center;'>
                <button type='submit' style='background-color: #FF00FF; color: white; border: none; padding: 10px 20px; font-size: 1em; cursor: pointer; border-radius: 5px;'>Regresar al Menú</button>
            </form>
        </div>
    ";
});

// Ruta para mostrar un formulario de imagenes
Route::get('imagenes', function () {
    $menu_url = url('http://ejercicio1.test/'); // Cambia '/menu' por la ruta del menú principal

    return "
        <div style='font-family: Arial, sans-serif;'>
            <h1 style='color: #2ECC71 ; font-size: 2em; text-align: center;'>Bienvenido a la página IMAGENES</h1>
            <p style='color: #34495e; font-size: 1.2em; text-align: center;'>
                Aquí puedes encontrar las imagenes actualizadas.
            </p>
            <form action='$menu_url' style='text-align: center;'>
                <button type='submit' style='background-color: #2ECC71; color: white; border: none; padding: 10px 20px; font-size: 1em; cursor: pointer; border-radius: 5px;'>Regresar al Menú</button>
            </form>
        </div>
    ";
});

// Ruta para mostrar un formulario de horarios
Route::get('horarios', function () {
    $menu_url = url('http://ejercicio1.test/'); // Cambia '/menu' por la ruta del menú principal

    return "
        <div style='font-family: Arial, sans-serif;'>
            <h1 style='color: #6C3483; font-size: 2em; text-align: center;'>Bienvenido a la página HORARIOS</h1>
            <p style='color: #34495e; font-size: 1.2em; text-align: center;'>
                Aquí puedes encontrar información sobre los cursos.
            </p>
            <form action='$menu_url' style='text-align: center;'>
                <button type='submit' style='background-color: #6C3483 ; color: white; border: none; padding: 10px 20px; font-size: 1em; cursor: pointer; border-radius: 5px;'>Regresar al Menú</button>
            </form>
        </div>
    ";
});


