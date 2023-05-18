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

.subsection {
  font-weight: bold;
  text-transform: uppercase;
  color: #0d6efd;
  margin-top: 20px;
}

.subsection-inline {
  display: flex;
  justify-content: space-between;
  align-items: center;
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

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
</style>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Nueva consulta') }}</div>
        <div class="card-body">
          <div class="subsection-inline">
            <div class="subsection">{{ __('Nuevo registro') }}</div>
            <div class="form-group" style="margin-left: auto;">
              <label for="fecha_hora">{{ __('Fecha y Hora') }}</label>
              <input type="datetime-local" class="form-control" id="fecha_hora" name="fecha_hora">
            </div>
          </div>
          <form action="{{ url('/consulta') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="motivo">{{ __('Motivo') }}</label>
              <textarea class="form-control" id="motivo" name="motivo"></textarea>
            </div>
            <div class="form-group">
              <label for="exploracion_fisica">{{ __('Exploración Física') }}</label>
              <textarea class="form-control" id="exploracion_fisica" name="exploracion_fisica"></textarea>
            </div>
            <div class="form-group">
              <label for="diagnostico">{{ __('Diagnóstico') }}</label>
              <input type="text" class="form-control" id="diagnostico" name="diagnostico">
            </div>
            <div class="form-group">
              <label for="ambulancia">{{ __('Ambulancia') }}</label>
              <select class="form-control" id="ambulancia name="ambulancia">
                <option value="S">Sí</option>
                <option value="N">No</option>
              </select>
            </div>
            @include('signosVitales.index')
              <div class="card-body">
                <div class="subsection-inline">
                  <div class="card-header">{{ __('Exploración Física') }}</div>
                  <div class="subsection">
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <textarea class="form-control" id="exploracion_fisica" name="exploracion_fisica"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="subsection-inline">
                  <div class="card-header">{{ __('Diagnostico') }}</div>
                  <div class="subsection">
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <textarea class="form-control" id="exploracion_fisica" name="exploracion_fisica"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @include('tratamiento.index')
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
