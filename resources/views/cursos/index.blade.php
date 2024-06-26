@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
<div class="container">
<h1>Lista de cursos</h1>

<a href="{{route('cursos.create')}}">Crear Nuevo Curso</a>

<div class="container">
<ul>
    @foreach ($cursos as $curso)
    <li>
        <a href="{{route('cursos.show', $curso->slug)}}">{{$curso->name}}</a>
    </li>
    @endforeach
</ul>

{{$cursos->links()}}
</div>
    
</div>
@endsection
