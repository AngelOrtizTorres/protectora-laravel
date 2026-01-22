<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller {
    
    public function show() {
        $animales = Animal::orderBy('id')->paginate(10); 
        return view('animal.index', compact('animales'));
    }

    public function edit(Animal $animal) {
        
        return view('animal.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal) {

        $animal->nombre = $request->nombre;
        $animal->raza = $request->raza;
        $animal->save();

        return redirect()->route('animals');
    }

    public function destroy(Animal $animal) {
        
        $animal->delete();
        return redirect()->route('animals');
    }
    
}
