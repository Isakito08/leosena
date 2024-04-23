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

   <h2 class="listado_text">Listado de Egresado</h2>
   <div class="card" style="position: relative" style="margin-left: 10rem">
       <div class="card-body">

        <div class="container py-4">

       <table  id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
               <th>Id </th>
                <th>name</th>
                <th>editar</th>
                <th>eliminar</th>
                
            </tr>
         </thead>
       <tbody>
           @foreach ($tags as $tag)
           <tr>
               <td>{{ $tag->id }}</td>
               <td>{{ $tag->name }}</td>
              
               <td>
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$tag->id}}">
                       Editar
                   </button>
               </td>
               <td>
                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModales{{$tag->id}}">
                       Eliminar
                   </button>
               </td>
           </tr>
            @include('tags.info') 
           @endforeach
       </tbody>
       </table>








       @section('js')

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
         <!-- DataTables scripts -->
         <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
         <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
         <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
      </div>


       </div>

    </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary crear" data-bs-toggle="modal" data-bs-target="#exampleModalre">
            Crear tags
            </button>
        
            <!-- Modal -->
        <div class="modal fade" id="exampleModalre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Tags</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('tags') }}" method="post">
                        @csrf
                            <div class="">
                                <label for="name" class="col-sm-2 col-form-label">Nombre tag:</label>
                                <div class="">
                                    <input type="text" class="form-control"  name="name"  id="name" value="{{ old('name') }}" required>
                                </div>
                                @error('name')
                            
                                 <span>{{$message}}</span>
        
                                @enderror
                            </div>
                            <div class="">
                                <label for="slug" class="col-sm-2 col-form-label">Slug tag:</label>
                                <div class="">
                                    <input readonly type="text" class="form-control"  name="slug"  id="slug" value="{{ old('slug') }}" required>
                                </div>
                                @error('slug')
                            
                                     <span>{{$message}}</span>
    
                                @enderror
                            </div>
        
                            <br>
                            
                            <div class="">
                                 <label for="color" class="col-sm-2 col-form-label">Colors tag:</label>
                                <div class="">
                                    <select name="color" id="" class="form-control">
                                        <option value="red">Color rojo</option>
                                        <option value="yellow">Color amarillo</option>
                                        <option value="green">Color verde</option>
                                        <option value="blue" selected>Color azul</option>
                                        <option value="indigo" selected>Color indigo</option>
                                        <option value="purple" selected>Color morado</option>
                                        <option value="pink" selected>Color rosado</option>
                                    </select> 

                            </div>
                                @error('slug')
                            
                                     <span>{{$message}}</span>
    
                                @enderror
                            </div>
                            <br>
        
                            <a href="{{ url('tags') }}"  class="btn btn-secondary">Regresar</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                    </form> 
                </div>
        
        
              </div>
            </div>
          </div>
</main>
@endsection