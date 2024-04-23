@extends('layouts.layout')

@section('title', 'Registrar Profesor| Uni')

@section('contenido')

<main>
    <div class="container py-4">
       <h2>{{ $msg }}</h2>

       <a href="{{ url('profesor') }}" class="btn btn-secondary">Regresar</a>
     </div>

</main>

@endsection