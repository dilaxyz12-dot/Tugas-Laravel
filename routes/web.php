<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('layout.app');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return 'Hello laravel!';
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/update/{id}', [ProductController::class, 'update']);
Route::get('/products/delete/{id}', [ProductController::class, 'destroy']);
