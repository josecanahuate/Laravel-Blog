@extends('layouts.plantilla')

@section('title', 'Curso'. $curso->name)

@section('content')
<div class="container">
<h1>Bienvenido al curso  {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver a Cursos</a>
<p><strong>Categoria: </strong>{{$curso->categoria}}</p>
<p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>
</div>
@endsection
