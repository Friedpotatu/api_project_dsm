<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'min:3', 'max:10', 'alpha_num'],
            'name' => ['required', 'min:3', 'max:10', 'alpha_num','regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'],
            'last_name' => ['required', 'min:3', 'max:10', 'alpha_num','regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required','alpha_num','min:8','max:15'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'El campo nombre de usuario es obligatorio.',
            'username.min' => 'El largo del nombre de usuario es inferior a :min caracteres.',
            'username.max' => 'El largo del nombre de usuario es superior a :max caracteres.',
            'username.alpha_num' => 'El nombre de usuario solo puede contener letras y números.',
            'name.required' => 'El campo nombre es obligatorio.',
            'name.min' => 'El largo del nombre es inferior a :min caracteres.',
            'name.max' => 'El largo del nombre es superior a :max caracteres.',
            'name.alpha_num' => 'El nombre solo puede contener letras y números.',
            'name.regex' => 'El nombre solo puede contener letras y números.',
            'last_name.required' => 'El campo apellido es obligatorio.',
            'last_name.min' => 'El largo del apellido es inferior a :min caracteres.',
            'last_name.max' => 'El largo del apellido es superior a :max caracteres.',
            'last_name.alpha_num' => 'El apellido solo puede contener letras y números.',
            'last_name.regex' => 'El apellido solo puede contener letras y números.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El correo no es válido',
            'email.unique' => 'El correo ya existe',
            'password.required' => 'El campo contrasena es obligatorio.',
            'password.alpha_num' => 'La contraseña solo puede contener letras y números.',
            'password.min' => 'El largo de la contraseña es inferior a :min caracteres.',
            'password.max' => 'El largo de la contraseña es superior a :max caracteres.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
        ], 422));
    }
}
