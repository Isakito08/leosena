@extends('layouts.layout')

@section('title', 'REGIONAL | SENA')

@section('css')
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

@endsection

@section('contenido')

<main>

    <h2 class="listado_text">Listado de Regionales </h2>

    <div class="card">
        <div class="card-body">
            <div class="container py-4">
                
         
                <table id="regional" class="table table-hover">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Codigo Regional</th>
                         <th>Nombre Regional</th>
                         <th>Editar Regional</th>
                         <th>Eliminar Regional</th>
                     </tr>
                  </thead>
                <tbody>
                    @foreach ($regional as $regionals)
                    <tr>
                        <td>{{ $regionals->id }}</td>
                        <td>{{ $regionals->cod_regional }}</td>
                        <td>{{ $regionals->nombre}}</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Editar
                         </button></td>
                         <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$regionals->id}}">
                             Eliminar
                           </button></td>
             
         
         
                     </tr>
                     @include('regional.info')
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

                <script>
                $(document).ready(function() {
                    $('#regional').DataTable({
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
    Crear Regional
    </button>

    <!-- Modal -->
<div class="modal fade" id="exampleModalre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Regional</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('regional') }}" method="post">
                @csrf
                    <div class="">
                        <label for="cod_regional" class="col-sm-2 col-form-label">Codigo Regional:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="cod_regional"  id="cod_regional" value="{{ old('cod_regional') }}" required>
                        </div>

                       

                    </div>
                    <div class="">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre regional:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="nombre"  id="nombre" value="{{ old('nombre') }}" required>
                        </div>
                        

                    </div>
                    
                    <br>
                   

                    <a href="{{ url('regional') }}"  class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
        </div>
       
        
      </div>
    </div>
  </div>

  
</main>

@endsection
