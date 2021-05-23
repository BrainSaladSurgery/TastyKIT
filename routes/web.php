<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InnvoiceController;
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

    Route::get('/search/{name}/{type}', [SearchController::class, 'search'])->name('search');

    //Products
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/product/{id}',[ProductController::class, 'show'])->name('product');
    Route::get('/products-list', [ProductController::class, 'getProducts'])->name('products-list');
    Route::post('/create-product', [ProductController::class, 'create'])->name('create-product');
    Route::put('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
    Route::delete('/delete-product/{id}', [ProductController::class, 'destroy'])->name('delete-product');

    //Drinks
    Route::get('/drinks', [DrinkController::class, 'index'])->name('drinks');
    Route::get('/drinks-list', [DrinkController::class, 'getDrinks'])->name('drinks-list');
    Route::get('/drink/{id}',[DrinkController::class, 'show'])->name('drink');
    Route::post('/create-drink', [DrinkController::class, 'create'])->name('create-drink');
    Route::put('/update-drink/{id}', [DrinkController::class, 'updateDrink'])->name('update-drink');
    Route::delete('/delete-drink/{id}', [DrinkController::class, 'destroy'])->name('delete-drink');

    //Dishes
    Route::get('/dishes', [DishController::class, 'index'])->name('dishes');

    //Shop
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

    //Order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');

    //Tables
    Route::get('/tables', [TableController::class, 'index'])->name('tables');

    //Users
    Route::get('/users', [UserController::class, 'index'])->name('users');

    //Innvoices
    Route::get('/innvoices', [InnvoiceController::class, 'index'])->name('innvoices');

});