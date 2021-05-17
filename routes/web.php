<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

    Route::get('/dashboard', function(){
        return Inertia::render('Dashboard');
    })->name('dashboard');

});
