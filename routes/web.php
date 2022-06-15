<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Creamos un grupo que se ejecutens cuando se haya logueado el usuario */
Route::group(['middleware' => 'auth'], function () {
   
    /* Grupo de rutas para la vista de cargos */
    Route::group(['prefix' => 'gestion/cargos'], function () {
        /* Ruta para la vista de cargos */
        Route::get('cargos', [App\Http\Controllers\gestion\CargosController::class, 'get_cargos'])->name('cargos');
        Route::post('create', [App\Http\Controllers\gestion\CargosController::class, 'create_cargo'])->name('create');
    });
});
