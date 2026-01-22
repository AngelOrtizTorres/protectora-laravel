<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'telefono',
        'password',
        'nombre',
        'apellido',
        'direccion',
        'rol',
    ];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }
    
    protected $hidden = [
        'password'
    ];

    public function username(): Attribute {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
        );
    }

    public function nombre(): Attribute {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
        );
    }

    public function apellido(): Attribute {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value);
            },
        );
    }
}
