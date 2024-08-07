<?php


use Illuminate\Support\Facades\Route;

Route::view('/', 'bienvenido');

// web.php



//Route::get('/Usuario', [UsuarioController ::class, 'index']);
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
