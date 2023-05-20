@extends('principal')

@section('menu')
<link href="/resources/css/create.css" rel="stylesheet">
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