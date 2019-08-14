<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tareas', 'TareasController');
Route::resource('empleados', 'EmpleadosController');
