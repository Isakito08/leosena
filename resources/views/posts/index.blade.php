@extends('layouts.layout')

@section('title', 'POSTS| SENA')

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

    <style>
        .image-container {
            position: relative;
            width: 100%;
            height: auto;
        }

        .image-overlay {
            position: absolute;
            top: 69%;
            left: 34%;
            transform: translate(-50%, -50%);
            color: #fff;
            padding: 10px;
            text-align: left;
        }

        .image-overlay p {
            margin: 0;
        }

    .taga{
        display: inline-block;
        padding: 3px;
        height: 30px;
        color: white;
        border: 1px solid none;
        border-radius: 10px;
        text-decoration: none;
    }

    .page-link {
    color: #000 !important;
    background-color: #fff !important;
    border: 1px solid #dee2e6 !important;
    padding: 0.5rem 0.75rem !important;
    margin: 0 0.25rem !important;
    text-decoration: none !important;
}

.page-item.active .page-link {
    background-color: #007bff !important;
    border-color: #007bff !important;
    color: #fff !important;
}

.post_name{
    font-size: 1rem ;
    text-decoration: none;
    color: white;
}

.dropdown{
    margin-left: 15px;
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
    {{-- <h2 class="listado_text">Listado de Egresado</h2> --}}
    <div class="container py-4" style="display: flex; flex-wrap: wrap; justify-content: center;">
        @foreach ($posts as $key => $post)
            @if ($post->image)
                <article
                    style="flex: 0 0 {{ $key == 0 ? '66.66%' : '33.33%' }}; max-width: {{ $key == 0 ? '66.66%' : '33.33%' }}; padding: 5px;">
                    <div class="image-container">
                        <img style="width: 100%; height: auto;" src="{{ Storage::url($post->image->url) }}" alt="{{ $post->name }}">
                        <div class="image-overlay">
                            <!-- Mostrar los tags asociados al post -->
                            <div class="tags">
                                @foreach ($post->Tags as $tag)
                                <a class="taga" style="background-color:{{$tag->color}}" href="{{route('posts.tag',$tag)}}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                            <a href="{{route('posts.show',$post)}}" class="post_name">{{ $post->name }} </a>
                        </div>
                    </div>
                </article>
            @endif
        @endforeach
      
    </div>
    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
     <!-- DataTables scripts -->
     <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
     
     <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name_categories").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug_categories',
                space: '-'
            });
        });

        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable({
           responsive: true,
           autoWidth:false
        });
    });
    </script>
   @endsection
</main>
@endsection


