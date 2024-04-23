@extends('layouts.layout')

@section('title', 'POSTS| SENA')

<style>
    .container_principal{
        padding-bottom: 8px 0px 8px 0px;
    
    }

    .name{
        
        font-weight: bold;
        color: grey;
    }

    .extract{
        font-size: 1rem; 
        color: grey;
        margin-bottom: 2%;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 columnas con ancho igual */
        gap: 20px; /* Espacio entre las columnas */
    }

    .cols-span-2{
        grid-column: span 2; /* Ocupar 2 columnas */
    }

    .imagen_post{
       
      /* Estilos para la imagen dentro del contenedor */
      display: block;
      width: 100%;
      height: auto;
      object-fit: cover;
      object-position: center;
    
    }

    .text_body{
        margin-top: 1rem;
        color:grey;
    }

    .category_relacionados{
        font-weight: bold;
        color: gray;
        margin-bottom: 1rem;
    }

    .rutas_similares{
        display: flex;
        padding: 1rem;
        text-decoration: none;
    }

    .espaciado{
        margin-bottom: 1rem;
        list-style: none;
    }
    .imagenes_similares{
        width: 9rem;
        height: 5rem;
        object-fit: cover;
        object-position: center;
       
    }

    .similar_name{
        margin-left: 1rem;
        color: grey;

    }
</style>

@section('contenido')
<main>
  
    <div  class="container_principal">
        <h1 class="name">{{$post->name}}</h1>
    </div>

    <div class="extract">
        {{$post->extract}}
    </div>

    <div class="grid">

        <div class="cols-span-2">
                <figure>
                    <img class="imagen_post" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>

                <div class="text_body">
                    {{$post->body}}
                </div>
        
        </div>

        <aside>
            <h1 class="category_relacionados">Mas en {{$post->category->name}}</h1>

            <ul>
                @foreach ($similares as $similar )
                    <li class="espaciado">
                        <a class="rutas_similares" href="{{route('posts.show', $similar  )}}">
                            <img class="imagenes_similares" src="{{Storage::url($similar->image->url)}}" alt="">
                            <span class="similar_name">{{$similar->name}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
       
    </div>
    
</main>
@endsection


