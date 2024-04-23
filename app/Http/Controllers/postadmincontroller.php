<?php

namespace App\Http\Controllers;

use App\Models\Egresado;
use Illuminate\Http\Request;
use App\Models\Post ;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Tag;


use App\Http\Requests\StoragePostRequest;

class postadmincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        if (Auth::check()) {
            // El usuario está autenticado
            $egresado_id = auth()->id(); // Esto obtendría el ID del usuario autenticado
            $posts = Post::where('egresado_id', $egresado_id)->get();
            $categories =  Category::all();
            $tag =  Tag::all();
            return view('post_crud.index', compact('posts','categories','tag'));
        } else {
            // El usuario no está autenticado, puedes redirigirlo a la página de inicio de sesión
            return redirect()->route('login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories =  Category::all();
        return view('post_crud.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoragePostRequest $request)
    {
        //
        $post = Post::created($request->all());

        if ($request->tags) {
            $post->tags()->attach([1,2,3]);
            return $post;
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
