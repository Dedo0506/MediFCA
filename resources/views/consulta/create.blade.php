@extends('principal')

@section('menu')
<link href="/resources/css/create2.css" rel="stylesheet">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Nueva consulta') }}</div>
        <div class="card-body">
          <div class="subsection-inline">
            <div class="subsection">{{ __('Nuevo registro') }}</div>
            <form action="{{ url('consulta.create') }}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="paciente_id" value="{{$paciente->id }}">
              <div class="form-group">
                <label for="fecha_hora">{{ __('Fecha y Hora') }}</label>
                <input type="datetime-local" class="form-control" id="fecha_hora" name="fecha_hora">
              </div>
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
                <select class="form-control" id="ambulancia" name="ambulancia">
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
                  <div class="card-header">{{ __('Diagnóstico') }}</div>
                  <div class="subsection">
                    <div class="form-group">
                      <div class="row">
                        <div class="col">
                          <textarea class="form-control" id="diagnostico" name="diagnostico"></textarea>
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
</div>
@endsection
