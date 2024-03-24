<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        /* $cursos = Curso::all(); */ //consultas medianas < 2000
        $cursos = Curso::paginate(); //consultas grandes 10k >
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        $curso = Curso::find($id); //igualamos la variable curso a id para ser usada en compact('curso'))
        return view('cursos.show', compact('curso'));
    }
}
