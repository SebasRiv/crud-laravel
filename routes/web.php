<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Cuidado con esto por cambios en laravel 8, utilizar la de abajo
// No olvidar importar la clase que se use
// Route::get('/empleados', 'EmpleadosController@index'); ya no funciona
// Route::get('/empleados', [EmpleadosController::class, 'index']);
// Route::get('/empleados/create', [EmpleadosController::class, 'create']);
Route::resource('empleados', EmpleadosController::class);