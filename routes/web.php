<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Session::forget('user');
    return redirect('/login');
});
Route::view('/register','register');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/detail/{id}', [\App\Http\Controllers\ProductController::class, 'detail']);
Route::get('/search', [\App\Http\Controllers\ProductController::class, 'search']);
Route::post('/add_to_cart', [\App\Http\Controllers\ProductController::class, 'addToCart']);
Route::get('/cartlist', [\App\Http\Controllers\ProductController::class, 'cartList']);
Route::get('/removecart/{id}', [\App\Http\Controllers\ProductController::class, 'removeCart']);
Route::get('ordernow', [\App\Http\Controllers\ProductController::class, 'orderNow']);
Route::post('/orderplace', [\App\Http\Controllers\ProductController::class, 'orderPlace']);
Route::get('/myorders', [\App\Http\Controllers\ProductController::class, 'myOrders']);
