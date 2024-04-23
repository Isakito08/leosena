@extends('layouts.layout')

@section('title', 'Profesor | Uni')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Editar Egresado</h2>
    </div>
</main>


<form action="{{ url('egresado/'.$egresados->id) }}" method="post">
    @method("PUT")
    @csrf
        <div class="md-3 row">
            <label for="nombre" class="col-sm-2 col-form-label"> Nombre Egresado:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control"  name="nombre"  id="nombre" value="{{ $egresado->nombre }}" required>
            </div>
        </div>
        <div class="md-3 row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido Egresado:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control"  name="apellido"  id="apellido" value="{{ $egresado->apellido }}" required>
            </div>
        </div>
        <a href="{{ url('programa') }}"  class="btn btn-secondary">Regresar</a>
        <button type="sbumit" class="btn btn-success">Guardar</button>

</form>


@endsection
