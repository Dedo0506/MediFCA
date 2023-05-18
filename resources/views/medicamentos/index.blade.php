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
</style>

<div class="container">
  <div class="card">
    <div class="card-header">{{ __('Lista de medicamentos') }}</div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Presentación</th>
            <th>Gramaje</th>
            <th>Fecha de caducidad</th>
            <th>Unidades</th>
            <th>Fecha de registro</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($medicamentos as $medicamento)
            <tr>
              <td>{{ $medicamento->id }}</td>
              <td>{{ $medicamento->nombre }}</td>
              <td>{{ $medicamento->tipo }}</td>
              <td>{{ $medicamento->presentacion }}</td>
              <td>{{ $medicamento->gramaje }}</td>
              <td>{{ $medicamento->fecha_caducidad }}</td>
              <td>{{ $medicamento->unidades }}</td>
              <td>{{ $medicamento->fecha }}</td>
              <td>
                <a href="{{url('/medicamentos/'.$medicamento->id.'/edit')}}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ url('/medicamentos/'.$medicamento->id) }}" method="POST" style="display: inline-block;">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
