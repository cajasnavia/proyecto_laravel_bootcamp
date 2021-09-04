<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
//PRUEBA

/* 
-----------------------------------------------------------------------------------------
RUTAS SECCION PUBLICA
-----------------------------------------------------------------------------------------
*/
Route::get('/', function(Request $req){
    return view('publico.inicio');
});

Route::get('/login', function(Request $req){
    return view('publico.login');
});

// Route::get('/registro', function(Request $req){
//     return view('publico.registro');
// });
Route::resource('/usuarios', UsuarioController::class);


/* 
-----------------------------------------------------------------------------------------
RUTAS SECCION USUARIO
-----------------------------------------------------------------------------------------
*/

Route::get('/buscar_productos', function(Request $req){
    return view('usuario.buscar_producto');
});



/* 
-----------------------------------------------------------------------------------------
RUTAS SECCION ADMINISTRADOR
-----------------------------------------------------------------------------------------
*/
Route::resource('/categorias', ProductoController::class);

Route::resource('/productos', ProductoController::class);


/* 
-----------------------------------------------------------------------------------------
RUTAS EJEMPLOS ANTERIORES
-----------------------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/panel', function (Request $req) {
//     return view('panel', ['titulo'=>'BIENVENIDO A MI APLICACION EN LARAVEL',
//                           'enlaces'=> ['INICIO', 'OPCION 1', 'OPCION 2', 'OPCION 3']
//     ]);
// })->middleware('valida_usuario');


// Route::get('/panel', [PanelController::class, 'show'])->middleware('valida_usuario');

// Route::get('/productos/remate',[ProductoController::class, 'remate']);
// Route::get('/productos/remate',[ProductoController::class, 'remate']);
// Route::resource('/productos', ProductoController::class);


// Route::resource('/productos', ProductoController::class)->only(['index']);
// Route::resource('/productos', ProductoController::class)->except(['index']);

// Route::get('/foto', [FotoController::class, 'index']);

// Route::get('/foto', [FotoController::class, 'uploadFile'])->name('upload-file');
