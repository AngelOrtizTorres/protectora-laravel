<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller {
    
    public function __invoke() {
        $animales = Animal::all(); 
        return view('animal.index', compact('animales'));
    }
    
}
