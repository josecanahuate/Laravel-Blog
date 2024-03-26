@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
<div class="container">
<h1>Crear Curso</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf  <!-- Token -->
    <label>
        Nombre:
        <br>
        <input type="text" name="name" class="border border-black" value="{{old('name')}}">
    </label>

@error('name')
     <span><strong>{{$message}}</strong></p>
     <br>
@enderror
<br>

<label>
    Slug:
    <br>
    <input type="text" name="slug" class="border border-black" value="{{old('slug')}}">
</label>

@error('slug')
 <span><strong>{{$message}}</strong></p>
 <br>
@enderror

<br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" rows="5" class="border border-black">{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
     <span><strong>{{$message}}</strong></p>
     <br>
@enderror

    <br>
    <label>
        Categoría:
        <br>
        <input type="text" name="categoria" value=" {{old('categoria')}} " class="border border-black">
    </label>
    @error('categoria')
    <span><strong>{{$message}}</strong></p>
    <br>
@enderror

    <br>
    <br>
    <button class="border border-black bg-black text-white" type="submit">Enviar Formulario</button>
</form>
</div>
@endsection
