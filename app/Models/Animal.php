<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'raza',
        'fechaNacimiento'
    ];

    public function nombre(): Attribute {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {
                return ucwords($value);
            }
        );
    }

    public function raza(): Attribute {
        return Attribute::make(
            set: function ($value) {
                $content = strtolower($value);
                $separator = ' ';
                return str_replace($separator, '-', $content);
            },
            get: function ($value) {
                $content = str_replace('-', ' ', $value);
                
                return ucwords($content, ' ');
            }
        );
    }
}
