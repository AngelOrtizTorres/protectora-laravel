<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;

Route::get('/', IndexController::class);

Route::get('/usuarios', UserController::class)->name('usuarios');
Route::get('registro/usuarios', [AuthController::class, 'showUserRegisterForm']);
Route::post('registro/usuarios', [AuthController::class, 'registerUser'])->name('register.user');

Route::get('/animales', AnimalController::class)->name('animales');
Route::get('registro/animales', [AuthController::class, 'showAnimalRegisterForm']);
Route::post('registro/animales', [AuthController::class, 'registerAnimal'])->name('register.animal');

Route::get('/login', [AuthController::class, 'showLoginForm']);