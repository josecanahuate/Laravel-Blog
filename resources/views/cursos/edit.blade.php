@extends('layouts.plantilla')

@section('title', 'Cursos Edit')

@section('content')
<div class="container">
<h1>Editar Curso</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf  <!-- Token -->
    @method('put')   <!-- Metodo para actualizar registros-->

    <label>
        Nombre:
        <br>
        <input type="text" name="name" class="border border-black" value="{{ old('name', $curso->name) }}" >
    </label>
    
    @error('name')
        <span><strong>{{$message}}</strong></span>
        <br>
    @enderror
<br>

<label>
    Slug:
    <br>
    <input type="text" name="slug" class="border border-black" value="{{old('slug', $curso->slug)}}">
</label>

@error('slug')
 <span><strong>{{$message}}</strong></p>
 <br>
@enderror
<br>

    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5" class="border border-black"> {{ old('descripcion', $curso->descripcion )}} </textarea>
    </label>
    @error('descripcion')
    <span><strong>{{$message}}</strong></p>
    <br>
@enderror


    <br>
    <label>
        Categoría:
        <br>
        <input type="text" name="categoria" class="border border-black" value="{{ old('categoria', $curso->categoria) }}" >
    </label>

    @error('categoria')
    <span><strong>{{$message}}</strong></p>
    <br>
@enderror

    <br>
    <br>
    <button class="border border-black bg-black text-white" type="submit">Actualizar Formulario</button>
</form>
</div>
@endsection
