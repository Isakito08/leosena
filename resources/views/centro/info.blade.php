<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar centro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('centro.update', $centros->id) }}" method="post">
                    @method("PUT")
                    @csrf
                    <div class="">
                        <label for="cod_centro" class="col-sm-2 col-form-label">Codigo centro:</label>
                        <div class="">
                            <input type="text" class="form-control" name="cod_centro" id="cod_centro"
                                value="{{ $centros->cod_centro }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre centro:</label>
                        <div class="">
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                value="{{ $centros->nombre }}" required>
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

<div class="modal fade" id="exampleModal{{ $centros->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Centros</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('centro.destroy', $centros->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar a <strong>{{ $centros->nombre}}?</strong>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
