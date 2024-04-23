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
<div class="container">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Importar Egresados</div>

                <div class="card-body">
                    @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        {{$error}}
                        @endforeach
                    </div>
                    @endif

                    <form action="{{route('import.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="file" name="import_file" />
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit">Importar</button>
                    </form>
                </div>
            </div>
        </div>

</div>
@endsection
