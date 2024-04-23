<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class tagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tags = Tag::all();
        return view('tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = [
            'red' => 'Color rojo',
            'yellow' => 'Color amarillo',
            'green' => 'Color verde',
            'blue' => 'Color azul',
            'indigo' => 'Color indigo',
            'purple' => 'Color morado',
            'pink' => 'Color rosado',
            // Añade más colores si es necesario
        ];

        return view('tags.index', compact('colors'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:tags',
            'color' => 'required|string|max:255',
        ]);

        // Crear el nuevo tag
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->slug = $request->input('slug');
        $tag->color = $request->input('color');
        $tag->save();

        // Redireccionar con mensaje de éxito
        return redirect()->route('tags.index')->with('success', 'Tag creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.index', compact('tag'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      
            $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'color' => 'required|string|in:red,yellow,green,blue,indigo,purple,pink'
            ]);
    
            $tag = Tag::findOrFail($id);
            $tag->name = $request->name;
            $tag->slug = $request->slug;
            $tag->color = $request->color;
            $tag->save();
    
            return redirect()->route('tags.index')->with('success', 'Tag actualizado exitosamente.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $tags = Tag::find($id);
        $tags->delete();
        return redirect()->route('tags.index');
    }
}
