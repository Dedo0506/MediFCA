@extends('principal')

@section('menu')

<link href="/sources/css/app.css" rel="stylesheet">
@include('layouts.partials.headerConsulta') 
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Actualizar consulta') }}</div>
        <div class="card-body">
          <form action="{{ url('/consulta/'.$consulta->id) }}" method="post">
            @csrf
            {{ method_field('PATCH') }}

            <div class="mb-3">
              <label for="fecha_hora" class="form-label">Fecha y Hora</label>
              <input type="datetime-local" class="form-control" id="fecha_hora" name="fecha_hora" value="{{ $consulta->fecha_hora }}">
            </div>

            <div class="mb-3">
              <label for="motivo" class="form-label">Motivo</label>
              <textarea class="form-control" id="motivo" name="motivo">{{ $consulta->motivo }}</textarea>
            </div>

            <div class="mb-3">
              <label for="exploracion_fisica" class="form-label">Exploración Física</label>
              <textarea class="form-control" id="exploracion_fisica" name="exploracion_fisica">{{ $consulta->exploracion_fisica }}</textarea>
            </div>

            <div class="mb-3">
              <label for="diagnostico" class="form-label">Diagnóstico</label>
              <input type="text" class="form-control" id="diagnostico" name="diagnostico" value="{{ $consulta->diagnostico }}">
            </div>

            <div class="mb-3">
              <label for="ambulancia" class="form-label">Ambulancia</label>
              <select class="form-control" id="ambulancia" name="ambulancia">
                <option value="S" {{ $consulta->ambulancia == 'S' ? 'selected' : '' }}>Sí</option>
                <option value="N" {{ $consulta->ambulancia == 'N' ? 'selected' : '' }}>No</option>
              </select>
            </div>
            @include('signosVitales.edit')
            <div class="card-body">
              <div class="subsection-inline">
                <div class="card-header">{{ __('Exploración Física') }}</div>
                <div class="subsection">
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <textarea class="form-control" id="exploracion_fisica" name="exploracion_fisica">{{ $consulta->exploracion_fisica }}</textarea>
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
                        <textarea class="form-control" id="diagnostico" name="diagnostico">{{ $consulta->diagnostico }}</textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @include('tratamiento.edit')

            <div class="form-group">
              <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
