<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});


//CRUD views
//Mostrar una lista de los proyectos
//Route::get('/proyectos', function () {
//    return view('proyectos/listadoProyectos');
//});
//Route::get('/proyectos', [ProyectosController::class, 'index']);
//Route::get('/proyectos/create', [ProyectosController::class, 'create']);
//Route::get('/proyectos/{proyecto}', [ProyectosController::class, 'show']);
Route::resource('proyectos', ProyectosController::class);
//Crear proyecto from
//Route::get('/proyectos/create', function () {
//    return view('proyectos/proyectosForm');
//});
Route::get('/inicio', function () {
    return view('inicio');
});
//Detalle del proyecto
//Formulario de edición del proyecto
//Eliminar proyecto