<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use App\Imports\EgresadosImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('egresado.import-excel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('import_file');

        Excel::import(new EgresadosImport, $file);
        

        return redirect()->route('egresado.index')->with('success', 'Productos importados exitosamente');
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
    public function update(Request $request, Egresado $egresado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Egresado $egresado)
    {
        //
    }
}
