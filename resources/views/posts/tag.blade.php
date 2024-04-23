@extends('layouts.layout')

@section('title', 'POSTS | SENA')

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <style>
        .text_categoria {
            text-transform: uppercase;
            text-align: center;
            font-size: 1.875rem;
            font-weight: bold;
        }

        .div_text_categoria {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .article_img {
            margin-bottom: 2rem;
            width: 100%;
            background-color: white;
            box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1), 0px 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
            /* O el valor que prefieras */
            overflow: hidden;
        }

        .imagen_posts {
            width: 100%;
            height: 18rem;
            object-fit: cover;
            object-position: center;
        }

        .div_texto_post {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;

        }

        .texto_post {
            font-weight: bold;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .text_post_a {
            text-decoration: none;
            color: black;
        }

        .text_extract {
            color: grey;
            font-size: 1rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .tag_container {
            padding: 1rem 1.5rem 0.5rem;
        }

        .tag_link {
            display: inline-block;
            background-color: gray;
            border-radius: 9999px;
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            color: white;
            margin-right: 0.5rem;
            text-decoration: none;
        }
    </style>
@endsection

@section('contenido')
    <main>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
             Categorias
            </button>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li><a class="dropdown-item" href="{{route('posts.category',$category)}}">{{ $category->name}}</a></li>
              @endforeach
            </ul>
          </div>

        <div class="div_text_categoria">
            <h1 class="text_categoria">Etiquetas: {{ $tag->name }}</h1>
            @foreach ($posts as $post)
               <x-card-post :post='$post'/>
            @endforeach
            
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

    </main>
@endsection
