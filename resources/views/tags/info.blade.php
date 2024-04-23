<div class="modal fade" id="exampleModal{{$tag->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel{{$tag->id}}">Editar Categorias</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('tags.update', $tag->id) }}" method="post">
    @method("PUT")
    @csrf
    <div class="form-group">
        <label for="name_tags" class="col-sm-2 col-form-label">Nombre categoria:</label>
        <div class="">
            <input type="text" class="form-control" name="name" placeholder="nombre de slug" id="name_categories"
                value="{{ $tag->name }}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="slug_tags" class="col-sm-2 col-form-label">Slug categoria:</label>
        <div class="">
            <input readonly type="text" class="form-control" placeholder="generar slug" name="slug" id="slug_categories"
                value="{{ $tag->slug }}" required>
        </div>
    </div>
    <div class="">
        <label for="color" class="col-sm-2 col-form-label">Color tag:</label>
        <div class="">
            <select name="color" id="" class="form-control">
                <option value="red" {{ $tag->color == 'red' ? 'selected' : '' }}>Color rojo</option>
                <option value="yellow" {{ $tag->color == 'yellow' ? 'selected' : '' }}>Color amarillo</option>
                <option value="green" {{ $tag->color == 'green' ? 'selected' : '' }}>Color verde</option>
                <option value="blue" {{ $tag->color == 'blue' ? 'selected' : '' }}>Color azul</option>
                <option value="indigo" {{ $tag->color == 'indigo' ? 'selected' : '' }}>Color indigo</option>
                <option value="purple" {{ $tag->color == 'purple' ? 'selected' : '' }}>Color morado</option>
                <option value="pink" {{ $tag->color == 'pink' ? 'selected' : '' }}>Color rosado</option>
            </select>
        </div>
        @error('color')
            <span>{{$message}}</span>
        @enderror
    </div>
    
    <br>
    <a href="{{ url('tags') }}" class="btn btn-secondary">Regresar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
    </form>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModales{{ $tag->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Centros</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('tags.destroy', $tag->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar a <strong>{{ $tag->name}}</strong>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>