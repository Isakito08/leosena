<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;



class Postcontroller extends Controller{
    
    public function index()
    {
        $posts = Post::where('status', 2)->get();
        
    
        $categories = Category::all();
       
    
        return view('posts.index', compact('posts','categories'));
    }

    public function  show(Post $post)
    {

        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->latest('id','!=', $post->id)
                            ->take(4)
                            ->get();
        return view('posts.show', compact('post','similares'));
    }

  

    public function category( Category $category){
        $posts = Post::where('category_id', $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);

        $categories = Category::all();

        return view('posts.category',compact('posts','category', 'categories'));
    }

    public function tag( tag $tag){
        $posts =  $tag->posts()->where('status', 2 )->latest('id')->get();
        $categories = Category::all();

        return view('posts.tag',compact('posts','tag','categories'));
    }
   
}
