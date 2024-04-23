@extends('layouts.layout')

@section('title', 'CENTROS | SENA')

@section('css')
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

@endsection

@section('contenido')

<main>

    <h2 class="listado_text">Listado de Centro </h2>

    <div class="card">
        <div class="card-body">
            <div class="container py-4">


                <table id="centro" class="table table-hover">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Codigo Centro</th>
                         <th>Nombre Centro</th>
                         <th>Editar Regional</th>
                         <th>Eliminar Regional</th>
                     </tr>
                  </thead>
                <tbody>
                    @foreach ($centro as $centros)
                    <tr>
                        <td>{{ $centros->id }}</td>
                        <td>{{ $centros->cod_centro }}</td>
                        <td>{{ $centros->nombre}}</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Editar
                         </button></td>
                         <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$centros->id}}">
                             Eliminar
                           </button></td>



                     </tr>
                     @include('centro.info')
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
                    $('#centro').DataTable({
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Centro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('centro') }}" method="post">
                @csrf
                    <div class="">
                        <label for="cod_centro" class="col-sm-2 col-form-label">Codigo centro:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="cod_centro"  id="cod_centro" value="{{ old('cod_centro') }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre regional:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="nombre"  id="nombre" value="{{ old('nombre') }}" required>
                        </div>
                    </div>

                    <br>


                    <a href="{{ url('centro') }}"  class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
        </div>


      </div>
    </div>
  </div>


</main>

@endsection
