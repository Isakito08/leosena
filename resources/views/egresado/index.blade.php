@extends('layouts.layout')

@section('title', 'EGRESADO | SENA')

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
                 <th>Ficha</th>
                 <th>Programa</th>
                 <th>Nis</th>
                 <th>Numero Registro</th>
                 <th>Tipo Documento</th>
                 <th>Numero Documento</th>
                 <th>Nombre Aprendiz</th>
                 <th>Residencia</th>
                 <th>Correo Electronico</th>
                 <th>Telefono Principal</th>
                 <th>Telefono Alternativo</th>
                 <th>Celular</th>
                 <th>Año</th>
                 <th>Sexo</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
          </thead>
        <tbody>
            @foreach ($egresado as $egresados)
            <tr>
                <td>{{ $egresados->id }}</td>
                <td>{{ $egresados->ficha }}</td>
                <td>{{ $egresados->programa }}</td>
                <td>{{ $egresados->nis }}</td>
                <td>{{ $egresados->registro }}</td>
                <td>{{ $egresados->tipo_documento }}</td>
                <td>{{ $egresados->num_documento }}</td>
                <td>{{ $egresados->nombre }}</td>
                <td>{{ $egresados->residencia }}</td>
                <td>{{ $egresados->correo }}</td>
                <td>{{ $egresados->telefono }}</td>
                <td>{{ $egresados->telefono_al }}</td>
                <td>{{ $egresados->celular }}</td>
                <td>{{ $egresados->año }}</td>
                <td>{{ $egresados->sexo }}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Editar
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModale{{ $egresados->id }}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('egresado.info')
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
        <button type="button" class="btn btn-primary crear" data-bs-toggle="modal" data-bs-target="#exampleModal1">
            Crear Egresado
        </button>


        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary crear" data-bs-toggle="modal" data-bs-target="#exampleModalim">
    Importar Egresado
    </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalim" tabindex="-1" aria-labelledby="exampleModalLabelim" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabelim">Import Masivo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if (isset($errors) && $errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
            </div>
            @endif

            <form action="{{route('import.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- <input type="file" name="import_file" class="primary" /> --}}
                <div class="mb-3">
                    <input class="form-control" name="import_file" type="file" id="formFile">
                  </div>



        </div>
        <div class="modal-footer">
            <a href="{{ asset('template/EGRESADO.xlsx') }}" class="btn btn-success impo"><i class="fa-regular fa-file-excel"></i>   <i class="bi bi-file-earmark-excel"></i></a>
          <button type="button" class="btn btn-danger close" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-success impo" type="submit">Importar</button>
        </div>
    </form>
      </div>
    </div>
  </div>


<!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Egresado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body">
            <form action="{{ url('egresado') }}" method="post">
                @csrf
                <div class="">
                    <label for="ficha" class=" col-form-label"> Ficha Egresado:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="ficha"  id="ficha" value="{{ old('ficha') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="programa" class=" col-form-label"> Programa:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="programa"  id="programa" value="{{ old('programa') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="nis" class=" col-form-label"> Nis:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="nis"  id="nis" value="{{ old('nis') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="registro" class=" col-form-label"> Registro Egresado:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="registro"  id="registro" value="{{ old('registro') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="tipo_documento" class=" col-form-label"> Tipo Documento:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="tipo_documento"  id="tipo_documento" value="{{ old('tipo_documento') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="num_documento" class=" col-form-label"> Numero Documento:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="num_documento"  id="num_documento" value="{{ old('num_documento') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="nombre" class=" col-form-label"> Nombre Egresado:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="nombre"  id="nombre" value="{{ old('nombre') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="residencia" class=" col-form-label"> Residencia Egresado:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="residencia"  id="residencia" value="{{ old('residencia') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="correo" class=" col-form-label"> Correo Egresado:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="correo"  id="correo" value="{{ old('correo') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="telefono" class=" col-form-label"> Telefono Principal:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="telefono"  id="telefono" value="{{ old('telefono') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="telefono_al" class=" col-form-label"> Telefono Alternativo:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="telefono_al"  id="telefono_al" value="{{ old('telefono_al') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="celular" class=" col-form-label"> Celular:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="celular"  id="celular" value="{{ old('celular') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="año" class=" col-form-label"> Año:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="año"  id="año" value="{{ old('año') }}" required>
                    </div>
                </div>
                <div class="">
                    <label for="sexo" class=" col-form-label"> Sexo:</label>
                    <div class="">
                        <input type="text" class="form-control"  name="sexo"  id="sexo" value="{{ old('sexo') }}" required>
                    </div>
                </div>

                    <br>

                    <a href="{{ url('egresado') }}"  class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>


</main>

@endsection

