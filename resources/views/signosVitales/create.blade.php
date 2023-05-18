@extends('principal')

@section('menu')
<style>
.container {
  margin-top: 50px;
}

.card-header {
  font-weight: bold;
  text-transform: uppercase;
  color: #0d6efd;
  background-color: #fff;
  border-bottom: 2px solid #dee2e6;
}

.card-body {
  background-color: #f8f9fa;
  border: 2px solid #dee2e6;
  border-top: none;
}

.form-group label {
  font-weight: bold;
}

.btn-primary {
  background-color: #0d6efd;
  border: none;
  font-weight: bold;
}

.btn-primary:hover {
  background-color: #0b5ed7;
}

.form-control:focus {
  border-color: #0d6efd;
  box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Registrar medicamento') }}</div>
        <div class="card-body">
          <!-- Formulario de registro -->
          <form action="{{ url ('/medicamentos') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nombre">{{ __('Nombre del medicamento') }}</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
              <label for="tipo">{{ __('Tipo de medicamento') }}</label>
              <input type="text" class="form-control" id="tipo" name="tipo">
            </div>
            <div class="form-group">
              <label for="presentacion">{{ __('Presentación') }}</label>
              <input type="text" class="form-control" id="presentacion" name="presentacion">
            </div>
            <div class="form-group">
              <label for="gramaje">{{ __('Gramaje') }}</label>
              <input type="text" class="form-control" id="gramaje" name="gramaje">
            </div>
            <div class="form-group">
              <label for="fecha_caducidad">{{ __('Fecha de caducidad') }}</label>
              <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad">
            </div>
            <div class="form-group">
              <label for="unidades">{{ __('Unidades') }}</label>
              <input type="number" class="form-control" id="unidades" name="unidades">
            </div>
            <div class="form-group">
              <label for="fecha">{{ __('Fecha de registro') }}</label>
              <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection