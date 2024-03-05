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
            'nombre' => 'required|max: 200',
            'categoria' => 'required|exists:categorias,id',
            'precio' => 'required|gt:0',
            'descripcion' => 'required|min:5|max:1000',
            'imagen' => 'required'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.max' => 'El nombre no puede superar los 200 caracteres',
            'categoria.required' => 'La categoría es obligatoria',
            'categoria.exists' => 'La categoría no existe',
            'precio.required' => 'El precio es obligatorio',
            'precio.gt' => 'El precio debe ser mayor a 0',
            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.min' => 'La descripción debe tener al menos 5 caracteres',
            'descripcion.max' => 'La descripción no puede superar los 1000 caracteres',
            'imagen.required' => 'La imagen es obligatoria'
        ];
    }
}
