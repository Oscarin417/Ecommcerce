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

Route::resource('admin/contactos', 'App\Http\Controllers\ContactoController');

Route::resource('admin/comentarios', 'App\Http\Controllers\ComentarioController');

Route::resource('admin/productos', 'App\Http\Controllers\ProductoController');

Route::resource('admin/cart', 'App\Http\Controllers\CartController');

Route::resource('admin/empleados', 'App\Http\Controllers\EmpleadoController');

Route::resource('admin/faqs', 'App\Http\Controllers\FAQController');

Route::resource('admin/categorias', 'App\Http\Controllers\CategoriaController');

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/faq', function () {
    return view('faq');
});