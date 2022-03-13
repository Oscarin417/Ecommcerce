<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


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

Route::get('/productos', function () {
    return view('producto');
});

Route::get('/empleados/login', function () {
    return view('auth/login');
});

Route::get('/empleados/register', function () {
    return view('auth/register');
});

Route::get('/usuarios/registro', function () {
    return view('registro');
});

Route::get('/usuarios/login', function () {
    return view('login');
});

Auth::routes();

Route::resource('admin/contactos', 'App\Http\Controllers\ContactoController');

Route::resource('admin/comentarios', 'App\Http\Controllers\ComentarioController');

Route::resource('admin/productos', 'App\Http\Controllers\ProductoController');

Route::resource('admin/cart', 'App\Http\Controllers\CartController');

Route::resource('admin/empleados', 'App\Http\Controllers\EmpleadoController');

Route::resource('admin/faqs', 'App\Http\Controllers\FAQController');

Route::resource('admin/categorias', 'App\Http\Controllers\CategoriaController');

Route::resource('admin/usuarios', 'App\Http\Controllers\UsuarioController');

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');