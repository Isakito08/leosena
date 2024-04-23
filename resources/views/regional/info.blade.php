<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Estudiante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('regional.update', $regionals->id) }}" method="post">
                    @method("PUT")
                    @csrf
                    <div class="">
                        <label for="nombre" class="col-sm-2 col-form-label">Codigo regional:</label>
                        <div class="">
                            <input type="text" class="form-control" name="cod_regional" id="nombre"
                                value="{{ $regionals->cod_regional }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="apellido" class="col-sm-2 col-form-label">Nombre regional:</label>
                        <div class="">
                            <input type="text" class="form-control" name="nombre" id="apellido"
                                value="{{ $regionals->nombre }}" required>
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

<div class="modal fade" id="exampleModal{{ $regionals->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Curso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('regional.destroy', $regionals->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar a <strong>{{ $regionals->nombre}}?</strong>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>