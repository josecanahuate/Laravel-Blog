<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Http\Requests\UpdateCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        /* $cursos = Curso::all(); */ //consultas medianas < 2000
        $cursos = Curso::orderBy('id', 'DESC')->paginate();
        return view('cursos.index', compact('cursos'));
    }
    

    public function create(){
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        //creamos un nuevo objeto, lo instanciamos al Modelo 'Curso' y requerimos TODOS los campos
        $curso = Curso::create($request->all());
    
        // Redireccionar a la ruta de visualización del curso recién creado
        return redirect()->route('cursos.show', $curso->id)
            ->with('status', 'El curso se creó correctamente!');
    }
    
    public function show($id){
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }
    

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

/*     public function update(UpdateCurso $request, Curso $curso){

        $curso->name= $request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;

        //guardamos el registro en la BD
        $curso->save();

        //redireccion a una ruta especifica despues de realizar la accion
        return redirect()->route('cursos.show',$curso->id)
        ->with('status','Curso actualizado correctamente!');
    } */


    public function update(UpdateCurso $request, Curso $curso) {

    $curso->update($request->all());

    return redirect()->route('cursos.show', $curso->id)
        ->with('status', 'Curso actualizado correctamente!');
    }


    public function destroy(Curso $curso) {
        $curso->delete();
        return redirect()->route('cursos.index')
            ->with('status', 'Curso eliminado correctamente!');
    } 

}
