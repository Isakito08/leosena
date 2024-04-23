<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Category ;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('categories.index' ,compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255', // Cambia 'name_categories' a 'name'
        'slug' => 'required|unique:categories|max:255', // Cambia 'slug_categories' a 'slug'
    ]);

    $category = new Category();
    $category->name = $request->input('name'); // Cambia 'name_categories' a 'name'
    $category->slug = $request->input('slug'); // Cambia 'slug_categories' a 'slug'
    $category->save();
    
    return view('categories.index',['categories'=>Category::all()]);
}

    /**
     * Display the specified resource.
     */
    public function show( Category $category)
    {
        //
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Encuentra la categoría por su ID
    $category = Category::find($id);
    if (!$category) {
        // Si la categoría no existe, redirige a alguna página de error o manejo de errores
        return redirect()->back()->with('error', 'La categoría no existe.');
    }

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'slug' => "required|unique:categories,slug,{$id}"
    ]);

    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Por favor, corrige los siguientes errores.');
    }

    // Actualiza los atributos de la categoría
    $category->name = $request->input('name');
    $category->slug = $request->input('slug');
    $category->save();

    // Redirige de vuelta a la página de edición o a cualquier página relevante
    return redirect()->route('categories.index')->with('success', 'Categoría actualizada exitosamente.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
