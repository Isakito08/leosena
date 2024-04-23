@extends('layouts.layout')

@section('title', 'Notas | Estudiante')

@section('contenido')
    <div class="container py-4">
        <h2>Mis Notas</h2>


                @if ($notas->count() > 0)

                    <table class="table table-hover">
                        <thead>
                            <tr>


                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Promedio</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                @foreach ($notas as $nota)

                                    <td>{{ $nota->nota1 }}</td>
                                    <td>{{ $nota->nota2 }}</td>
                                    <td>{{ $nota->nota3 }}</td>
                                    <td>{{ $nota->definitiva }}</td>
                                @endforeach
                        </tbody>
                    </table>

                @else
                    <p>No tienes notas registradas.</p>
                @endif


        </tbody>
        </table>
    </div>
@endsection
