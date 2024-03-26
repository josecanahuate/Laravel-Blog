<?php

namespace App\Http\Requests;

use App\Models\Curso;
use Illuminate\Foundation\Http\FormRequest;


class UpdateCurso extends FormRequest
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
    public function rules(Curso $curso): array
    {

           // Acceder al ID del curso
           $curso = $this->route('curso');


        //validar los datos del formulario
        return [
            'name'=>'required|min:3|max:50',
            'slug'=>'required|unique:cursos, slug,' . $curso->id,
            'descripcion'=>'required|min:10|max:255',
            'categoria'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'El nombre es obligatorio',
            'name.min'=>'El nombre debe tener al menos 3 caracteres',
            'name.max'=>'El nombre no puede superar los 50 caracteres',
            'slug.required'=>'El Slug es obligatorio',
            'slug.unique'=>'El Slug es unico, debes crear usar un valor nuevo',
            'descripcion.required'=> 'La descripción es obligatoria',
            'descripcion.min'=> 'La descripción debe contener al menos  10 caracteres',
            'descripcion.max'=> 'La descripción no puede superar los 255 caracteres',
            'categoria.required'=>'Seleccione una categoría para el curso'
        ]; 
    }

    public function attributes(): array
    {
        return [
            'name' => 'Nombre del Curso',
            'descripcion'=> 'Descripción del Curso',
            'categoria'=> 'Categoría del Curso'
        ];
    }
}
