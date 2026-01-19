<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    /**
     * User $user = Route Model Binding
     */
    
    public function show() {

        $usuarios = User::orderBy('id')->paginate(5); 
        return view('user.index', compact('usuarios'));
    }

    public function edit(User $user) {
        
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user) {

        $user->username = $request->username;
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->direccion = $request->direccion;
        $user->rol = $request->rol;
        $user->save();

        return redirect()->route('users');
    }

    public function destroy(User $user) {
        
        $user->delete();
        return redirect()->route('users');
    }
}
