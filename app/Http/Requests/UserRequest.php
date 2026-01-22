<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'telefono' => 'required|min:9|max:20',
            'password' => 'required|min:8',
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'rol' => 'required'
        ];
    }
}