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
use App\Http\Controllers\ReservationController;
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

//Register
Route::get('/register',function(){
    return Inertia::render('Auth/Register');
})->name('register');

//Images
Route::get('/images/video',function(){
    return Inertia::render('Client/Images');
})->name('images');

//Reservation
Route::get('/reservation',function(){
    return Inertia::render('Client/Reservation');
})->name('reservations');

    Route::post('/create-reservation', [ReservationController::class, 'create'])->name('create-reservation');

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
    Route::get('/dishes-list', [DishController::class, 'getDishes'])->name('dishes-list');
    Route::post('/create-dish', [DishController::class, 'store'])->name('create-dish');
    Route::get('/dish/{id}',[DishController::class, 'show'])->name('dish');
    Route::put('/update-dish/{id}', [DishController::class, 'updateDish'])->name('update-dish');
    Route::delete('/delete-dish/{id}', [DishController::class, 'destroy'])->name('delete-dish');

    //Shop
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

    //Order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/order-numticket', [OrderController::class, 'getNumTicket'])->name('order-numticket');
    Route::post('/create-order', [OrderController::class, 'create'])->name('create-order');

    //Tables
    Route::get('/tables', [TableController::class, 'index'])->name('tables');
    Route::get('/tables-list', [TableController::class, 'getTables'])->name('tables-list');

    //Users
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users-list', [UserController::class, 'getUsers'])->name('users-list');
    Route::get('/user/{id}',[UserController::class, 'show'])->name('user');
    Route::put('/update-user/{id}', [UserController::class, 'updateUser'])->name('update-user');
    Route::delete('/user-delete/{id}', [UserController::class, 'destroy'])->name('user-delete');



    //Innvoices
    Route::get('/innvoices', [InnvoiceController::class, 'index'])->name('innvoices');

});