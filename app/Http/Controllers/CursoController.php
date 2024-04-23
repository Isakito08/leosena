<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Programa;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        $programas = Programa::all();
        return view('curso.index', [
            'programas' => $programas,
            'cursos' => $cursos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('curso.index', ['programas' => Programa::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'num_curso' => 'required|max:20',
            'alias' => 'required|max:255',
            'programa_id' => 'required',


        ]);

        /**
         *  $alumno->CAMPOS DE LA BD = $request->input('CAMPOS DEL FORMULARIO');
         */

        $curso = new Curso();
        $curso->num_curso = $request->input('num_curso');
        $curso->alias = $request->input('alias');
        $curso->programa_id = $request->input('programa_id');
        $curso->save();

        /**
         * creamos una vista para comentar que se guardo la informacion
         */
        return view('curso.index',['cursos' => Curso::all(),'programas'=> Programa::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $curso = Curso::find($id);
        return view('curso.index', ['curso' => $curso], ['programas' => Programa::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //


        $request->validate([
            'num_curso' => 'required|max:255',
            'alias' => 'required|max:255',
            'programa_id' => 'required',
        ]);

        $curso = Curso::find($id);
        $curso->num_curso = $request->input('num_curso');
        $curso->alias = $request->input('alias');
        $curso->programa_id = $request->input('programa_id');
        $curso->save();

        return redirect()->route('curso.index'); // Redirección a la página de índice
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return redirect()->route('curso.index');
    }
}
