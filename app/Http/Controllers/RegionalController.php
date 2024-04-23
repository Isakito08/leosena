<?php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;
use App\Models\User;

class RegionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regional = Regional::all();
        return view('regional.index',['regional'=>$regional]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regional = Regional::all();
        return view('regional.index',['regional'=>$regional]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cod_regional' => 'required|max:255',
            'nombre'=>'required|max:255'
        ]);

        $regional = new Regional();
        $regional->cod_regional= $request->input('cod_regional');
        $regional->nombre= $request->input('nombre');
        $regional->save();

        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('nombre'); // Puedes personalizar el formato del correo si es necesario
        $user->password = $request->input('cod_regional'); // Establece la contraseña que desees
        $user->save();

        $user->assignRole('REGIONAL');

        return view('regional.index',['regional'=>Regional::all()]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Regional $regional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regional $regional)
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
            'cod_regional' => 'required|max:255',
            'nombre'=>'required|max:255'
        ]);

        $regional = Regional::find($id);
        $regional->cod_regional= $request->input('cod_regional');
        $regional->nombre= $request->input('nombre');
        $regional->save();

        return redirect()->route('regional.index');
    }    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $regional = Regional::find($id);
        $regional->delete();
        return redirect()->route('regional.index');
    }
}
