@extends('principal')

@section('menu')
<link href="/sources/css/app.css" rel="stylesheet">
<div class="container">
  <div class="card">
    <div class="card-header">
      <div class="d-flex justify-content-between align-items-center">
        <span>{{ __('Lista de consultas') }}</span>
        <a href="{{ url('/consulta/create') }}" class="btn btn-primary" onclick="return confirm('¿Quieres crear una nueva consulta?')">Nueva Consulta</a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
          <div class="card-header">{{ __('Anteriores.') }}</div>
          <thead>
            <tr>
              <th>#</th>
              <th>Fecha y Hora</th>
              <th>Motivo</th>
              <th>Exploracion Fisica</th>
              <th>Diagnostico</th>
              <th>Ambulancia</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($consultas as $consulta)
              <tr>
                <td>{{ $consulta->id }}</td>
                <td>{{ $consulta->fecha_hora }}</td>
                <td>{{ $consulta->motivo }}</td>
                <td>{{ $consulta->exploracion_fisica }}</td>
                <td>{{ $consulta->diagnostico }}</td>
                <td>{{ $consulta->ambulancia }}</td>
                <td>
                  <a href="{{ url('/consulta/'.$consulta->id.'/edit') }}" class="btn btn-sm btn-warning">Editar</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
