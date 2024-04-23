


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Categorias</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                    @method("PUT")
                    @csrf
                    <div class="">
                        <label for="name_categories" class="col-sm-2 col-form-label">Nombre categoria:</label>
                        <div class="">
                            <input type="text" class="form-control" name="name"  placeholder="nombre de slug" id="name_categories"
                                value="{{ $category->name }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="slug_categories" class="col-sm-2 col-form-label">Slug categoria:</label>
                        <div class="">
                            <input readonly type="text" class="form-control" placeholder="generar slug" name="slug" id="slug_categories"
                                value="{{ $category->slug }}" required>
                        </div>
                    </div>
                    <br>

                    <a href="{{ url('categories') }}"  class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModale{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Centros</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('categories.destroy', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar a <strong>{{ $category->name}}</strong>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div> -

