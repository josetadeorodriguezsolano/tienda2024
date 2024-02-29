<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'nombre' => 'required|max:200|min:5',
            'categoria' => 'required|exists:categorias,id',
            'precio' => 'required|gt:0',
            'descripcion' => 'required|min:5|max:5000',
            'imagen' => 'required|max:512|mimes:jpg'
        ];
    }

    public function messages()
    {
        return[
            'nombre.required' => 'El nombre del producto es requerido',
        ];
    }
}
