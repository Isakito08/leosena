@extends('layouts.layout')

@section('title', 'REGIONAL | SENA')

@section('css')
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

@endsection

@section('contenido')
@include('msjs')

<div class="card_user">
    <div class="card-body">
        <h2 class="text-center" style="margin-top: 1rem">Actualizar mi datos </h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
              <form action="{{route('changePassword')}}" method="POST" class="needs-validation" novalidate>
                  @csrf

                  <div class="row mb-3">
                      <div class="form-group mt-3">
                          <label for="name">Nombre de Usuario</label>
                          <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  <div class="row mb-3">
                    <div class="form-group mt-3">
                        <label for="password_actual">Clave Actual</label>
                        <input type="password" name="password_actual" class="form-control @error('password_actual') is-invalid @enderror" required>
                          @error('password_actual')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="form-group mt-3">
                          <label for="new_password ">Nueva Clave</label>
                          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="form-group mt-3">
                          <label for="confirm_password">Confirmar nueva Clave</label>
                          <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror"required>
                          @error('confirm_password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="row text-center  mt-5">
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary crear" id="formSubmit">Guardar Cambios</button>
                          <a href="/home" class="btn btn-secondary crear">Cancelar</a>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>

     </div>
</div>


@endsection


