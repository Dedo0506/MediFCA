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
        <form action="{{ url('/medicamentos/'.$medicamentos->id) }}" method="post">
            @csrf
            {{ method_field('PATCH') }}

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del medicamento</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $medicamentos->nombre }}">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de medicamento</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $medicamentos->tipo }}">
            </div>

            <div class="mb-3">
                <label for="presentacion" class="form-label">Presentación</label>
                <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{ $medicamentos->presentacion }}">
            </div>

            <div class="mb-3">
                <label for="gramaje" class="form-label">Gramaje</label>
                <input type="text" class="form-control" id="gramaje" name="gramaje" value="{{ $medicamentos->gramaje }}">
            </div>

            <div class="mb-3">
                <label for="fecha_caducidad" class="form-label">Fecha de caducidad</label>
                <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" value="{{ $medicamentos->fecha_caducidad }}">
            </div>

            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades</label>
                <input type="number" class="form-control" id="unidades" name="unidades" value="{{ $medicamentos->unidades }}">
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de registro</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $medicamentos->fecha }}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>

            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection