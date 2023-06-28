<?php

use App\Http\Controllers\productosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('productos/create', [productosController::class, 'create']);

Route::post('productos', [productosController::class, 'store'])->name('productos.store');
Route::get('index', function () {
    return view('index');
});
Route::get('cart', function () {
    return view('cart');
});

//Route::get('cursos/create', [productosController::class, 'create']);

