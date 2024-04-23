<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar profesor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route ('egresado.update', $egresados->id) }}" method="post">
                @method("PUT")
                @csrf
                    <div class="">
                        <label for="ficha" class=" col-form-label"> Ficha Egresado:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="ficha"  id="ficha" value="{{ $egresados->ficha }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="programa" class=" col-form-label"> Programa:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="programa"  id="programa" value="{{ $egresados->programa }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="nis" class=" col-form-label"> Nis:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="nis"  id="nis" value="{{ $egresados->nis }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="registro" class=" col-form-label"> Registro Egresado:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="registro"  id="registro" value="{{ $egresados->registro }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="tipo_documento" class=" col-form-label"> Tipo Documento:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="tipo_documento"  id="tipo_documento" value="{{ $egresados->tipo_documento }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="num_documento" class=" col-form-label"> Numero Documento:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="num_documento"  id="num_documento" value="{{ $egresados->num_documento }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="nombre" class=" col-form-label"> Nombre Egresado:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="nombre"  id="nombre" value="{{ $egresados->nombre }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="residencia" class=" col-form-label"> Residencia Egresado:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="residencia"  id="residencia" value="{{ $egresados->residencia }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="correo" class=" col-form-label"> Correo Egresado:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="correo"  id="correo" value="{{ $egresados->correo }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="telefono" class=" col-form-label"> Telefono Principal:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="telefono"  id="telefono" value="{{ $egresados->telefono }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="telefono_al" class=" col-form-label"> Telefono Alternativo:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="telefono_al"  id="telefono_al" value="{{ $egresados->telefono_al }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="celular" class=" col-form-label"> Celular:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="celular"  id="celular" value="{{ $egresados->celular }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="año" class=" col-form-label"> Año:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="año"  id="año" value="{{ $egresados->año }}" required>
                        </div>
                    </div>
                    <div class="">
                        <label for="sexo" class=" col-form-label"> Sexo:</label>
                        <div class="">
                            <input type="text" class="form-control"  name="sexo"  id="sexo" value="{{ $egresados->sexo }}" required>
                        </div>
                    </div>


                    <a href="{{ url('egresado') }}"  class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModale{{ $egresados->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Curso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('egresado.destroy', $egresados->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar a <strong>{{ $egresados->nombre_egresado}}?</strong>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
