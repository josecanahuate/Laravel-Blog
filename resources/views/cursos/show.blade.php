@extends('layouts.plantilla')

@section('title', 'Curso'. $curso->name)

@section('content')
<div class="container">
<h1>Bienvenido al curso  {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a Cursos</a>
<br>
<a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
<br>
<p><strong>Categoria: </strong>{{$curso->categoria}}</p>
<p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>

</div>
@endsection
