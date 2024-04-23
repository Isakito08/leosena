@extends('layouts.layout')

@section('title', 'POSTS| SENA')

@section('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">


@endsection

@section('contenido')
    <main>

        <h2 class="listado_text">Listado de post</h2>
        <div class="card" style="position: relative" style="margin-left: 10rem">
            <div class="card-body">

                <div class="container py-4">

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id </th>
                                <th>name</th>
                                <th>editar</th>
                                <th>eliminar</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->name }}</td>

                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Editar
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModale">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                                {{-- @include('categories.info') --}}
                            @endforeach
                        </tbody>
                    </table>








                @section('js')

                    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                    <!-- DataTables scripts -->
                    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                    </script>
                    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

                    <script>
                        $(document).ready(function() {
                            $("#name_categories").stringToSlug({
                                setEvents: 'keyup keydown blur',
                                getPut: '#slug_categories',
                                space: '-'
                            });
                        });

                        $(document).ready(function() {
                            $("#name").stringToSlug({
                                setEvents: 'keyup keydown blur',
                                getPut: '#slug',
                                space: '-'
                            });
                        });
                    </script>

                    <script>
                        ClassicEditor
                            .create(document.querySelector('#extract'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                    <script>
                        ClassicEditor
                            .create(document.querySelector('#body'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable({
                                responsive: true,
                                autoWidth: false
                            });
                        });
                    </script>
                @endsection
            </div>


        </div>

    </div>

    <style>
        .ck.ck-editor__editable_inline>:last-child {
            margin-bottom: var(--ck-spacing-large);
            color: black;
        }
    </style>

    <button type="button" class="btn btn-primary crear" data-bs-toggle="modal" data-bs-target="#exampleModalre">
        Crear Post
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Tag</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="">
                            <label for="name" class="col-sm-2 col-form-label">Nombre Post:</label>
                            <div class="">
                                 <input type="hidden" name="egresado_id" value="{{ auth()->user()->id }}">{{--arreglar que en vez de traerse el id de user traiga el de egresado --}}
                            </div>
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                     
                        <div class="">
                            <label for="name" class="col-sm-2 col-form-label">Nombre Post:</label>
                            <div class="">
                                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="slug" class="col-sm-2 col-form-label">Slug Post:</label>
                            <div class="">
                                <input readonly type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
                            </div>
                            @error('slug')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <br>
                        
                        <div class="form-group row" style="flex-direction: column;">
                            <label for="category_id" class="col-sm-2 col-form-label">Categoría:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group row" style="flex-direction: column;">
                            <label for="category_id" class="col-sm-2 col-form-label">Etiquetas:</label>
                            <div class="col-sm-10">
                                @foreach ($tag as $tags)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tag_id[]" id="tag_{{ $tags->id }}" value="{{ $tags->id }}">
                                        <label class="form-check-label" for="tag_{{ $tags->id }}">
                                            {{ $tags->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            @error('tags')
                            <span>{{ $message }}</span>
                        @enderror
                        </div>
                        <br>
                        
                        <div class="form-group row" style="flex-direction: column;">
                            <label for="category_id" class="col-sm-2 col-form-label">Etiquetas:</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <label>
                                        <input type="radio" name="status" value="1" checked>
                                        Borrador
                                    </label>
                                    
                                    <label>
                                        <input type="radio" name="status" value="2">
                                        Publicado
                                    </label>    

                                    @error('status')
                                    <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        
                        <div class="">
                            <label for="extract" class="col-sm-2 col-form-label">Extracto Post:</label>
                            <div class="">
                                <textarea style="color: black" class="form-control" name="extract" id="extract" rows="4">{{ old('extract') }}</textarea>
                            </div>
                            @error('extract')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <br>
                        
                        <div class="">
                            <label for="body" class="col-sm-2 col-form-label">Cuerpo Post:</label>
                            <div class="">
                                <textarea class="form-control" name="body" id="body" rows="8">{{ old('body') }}</textarea>
                            </div>
                            @error('body')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <br>
                        <br>
                        <a href="{{ url('post-_crud') }}" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>


            </div>
        </div>
    </div>






</main>
@endsection
