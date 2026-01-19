<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;

Route::get('/', IndexController::class)->name('root');

Route::get('/usuarios', [UserController::class, 'show'])->name('users');
Route::get('registro/usuarios', [AuthController::class, 'showUserRegisterForm'])->name('show.register.users');
Route::post('registro/usuarios', [AuthController::class, 'registerUser'])->name('register.user');

Route::get('/animales', [AnimalController::class, 'show'])->name('animals');
Route::get('registro/animales', [AuthController::class, 'showAnimalRegisterForm'])->name('show.register.animal');
Route::post('registro/animales', [AuthController::class, 'registerAnimal'])->name('register.animal');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::get('/usuarios/editar/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/animales/editar/{animal}', [AnimalController::class, 'edit'])->name('animal.edit');
Route::put('/animales/{animal}', [AnimalController::class, 'update'])->name('animal.update');
Route::delete('/animales/{animal}', [AnimalController::class, 'destroy'])->name('animal.destroy');