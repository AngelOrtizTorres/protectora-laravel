<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animal;

class AuthController extends Controller {
    
    public function showUserRegisterForm() {
        return view('auth.register_user');
    }

    public function registerUser(Request $request) {
        $user = new User;

        // Lógica para registrar un usuario
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->telefono = $request->input('telefono');
        $user->password = bcrypt($request->input('password'));
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->direccion = $request->input('direccion');
        $user->rol = $request->input('rol');
        $user->save();

    }

    public function showAnimalRegisterForm() {
        return view('auth.register_animal');
    }

    public function registerAnimal(Request $request) {
        $animal = new Animal;

        // Lógica para registrar un animal
        $animal->nombre = $request->input('nombre');
        $animal->raza = $request->input('raza');
        $animal->fechaNacimiento = $request->input('fechaNacimiento');
        $animal->save();
    }

    public function showLoginForm() {
        return view('auth.login');
    }
}
