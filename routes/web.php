<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
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

//Pagina Home
Route::get('/', function () {
    return Inertia::render('Index');
});

//Login
Route::get('/login',function(){
    return Inertia::render('Auth/Login');
})->name('login');

//Utilizamos un grupo con middleware para que todos los que tengan acceso a esta sección deban estar logeados
Route::middleware(['auth:sanctum', 'verified'])->group( function () {

    Route::get('/home', function(){
        return Inertia::render('Admin/Home');
    })->name('home');

    Route::get('/search/{name}', [SearchController::class, 'search'])->name('search');

    //Routes Products
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/product/{id}',[ProductController::class, 'show'])->name('product');
    Route::get('/products-list', [ProductController::class, 'getProducts'])->name('products-list');
    Route::post('/create-product', [ProductController::class, 'create'])->name('create-product');
    Route::put('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
    Route::delete('/delete-product/{id}', [ProductController::class, 'destroy'])->name('delete-product');

});