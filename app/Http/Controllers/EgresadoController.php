<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Models\Regional;
use App\Models\User;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $regional = Regional::all();
        $egresado = Egresado::all();
        return view('egresado.index',['regional'=>$regional,'egresado'=>$egresado]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regional = Regional::all();
        $egresado = Egresado::all();
        return view('egresado.index',['regional'=>$regional,'egresado'=>$egresado]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre_egresado' => 'required|max:255',
            'apellido_egresado' => 'required|max:255',
            'identificacion' => 'required|max:255',
            'regional_id' => 'required',

        ]);


        $egresado = new Egresado();
        $egresado->nombre_egresado = $request->input('nombre_egresado');
        $egresado->apellido_egresado = $request->input('apellido_egresado');
        $egresado->identificacion = $request->input('identificacion');
        $egresado->regional_id = $request->input('regional_id');
        $egresado->save();
        //
            
        // Crear un usuario para el egresado 
        $user = new User();
        $user->name = $request->input('nombre_egresado');
        $user->email = $request->input('identificacion'); // Puedes personalizar el formato del correo si es necesario
        $user->password = $request->input('identificacion'); // Establece la contraseña que desees
        $user->save();

    // Asignar el rol "ESTUDIANTE" al usuario
        $user->assignRole('EGRESADO');

        return view('egresado.index',['egresado'=>Egresado::all(),'regional'=>Regional::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Egresado $egresado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Egresado $egresado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_egresado' => 'required|max:255',
            'apellido_egresado' => 'required|max:255',
            'identificacion' => 'required|max:255',
            // 'regional_id' => 'required',

        ]);
    
        $egresado = Egresado::find($id);
        $egresado->nombre_egresado = $request->input('nombre_egresado');
        $egresado->apellido_egresado = $request->input('apellido_egresado');
        $egresado->identificacion = $request->input('identificacion');
        // $egresado->regional_id = $request->input('regional_id');
        $egresado->save();
    

        
     

        return redirect()->route('egresado.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $egresado = Egresado::find($id);
        $egresado->delete();
        return redirect()->route('egresado.index');
        //
    }
}
