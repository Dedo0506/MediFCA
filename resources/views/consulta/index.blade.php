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

.table {
  margin-top: 20px;
}

.table td,
.table th {
  vertical-align: middle;
}

.table thead th {
  background-color: #0d6efd;
  color: #fff;
  border: none;
}

.table-hover tbody tr:hover {
  background-color: #f5f5f5;
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

@media (max-width: 576px) {
  .container {
    margin-top: 20px;
  }

  .table-responsive {
    overflow-x: auto;
  }
}
</style>
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
