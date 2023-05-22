@extends('principal')

@section('menu')
<link href="/resources/css/index.css" rel="stylesheet">

<div class="container">
  <div class="card">
    <div class="card-header" style="display:flex; justify-content:space-between;">{{ __('Lista de medicamentos') }}
      <a href="{{ route('medicamentos.create') }}" class="btn btn-primary" onclick="return confirm('¿Quieres registrar un medicamento?')">Registrar Medicamento</a>
    </div>
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
