<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use App\Models\User;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centro = Centro::all();
        return view('centro.index',['centro'=>$centro]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centro = Centro::all();
        return view('centro.index',['centro'=>$centro]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cod_centro' => 'required|max:255',
            'nombre'=>'required|max:255'
        ]);

        $centro = new Centro();
        $centro->cod_centro= $request->input('cod_centro');
        $centro->nombre= $request->input('nombre');
        $centro->save();

        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('nombre'); // Puedes personalizar el formato del correo si es necesario
        $user->password = $request->input('cod_centro'); // Establece la contraseña que desees
        $user->save();

        $user->assignRole('CENTRO');

        return view('centro.index',['centro'=>Centro::all()]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Centro $regional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centro $regional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'cod_centro' => 'required|max:255',
            'nombre'=>'required|max:255'
        ]);

        $centro = Centro::find($id);
        $centro->cod_centro= $request->input('cod_centro');
        $centro->nombre= $request->input('nombre');
        $centro->save();

        return redirect()->route('centro.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $centro = Centro::find($id);
        $centro->delete();
        return redirect()->route('centro.index');
    }
}
