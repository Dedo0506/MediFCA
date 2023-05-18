@extends('principal')

@section('menu')
    <div class="container w-25 border p-4">
        <form method="POST" action="{{ route('medicamentos.update', $medicamento->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del medicamento</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $medicamento->nombre) }}">
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de medicamento</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ old('tipo', $medicamento->tipo) }}">
            </div>
            <div class="mb-3">
                <label for="presentacion" class="form-label">Presentación</label>
                <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{ old('presentacion', $medicamento->presentacion) }}">
            </div>
            <div class="mb-3">
                <label for="gramaje" class="form-label">Gramaje</label>
                <input type="text" class="form-control" id="gramaje" name="gramaje" value="{{ old('gramaje', $medicamento->gramaje) }}">
            </div>
            <div class="mb-3">
                <label for="fecha_caducidad" class="form-label">Fecha de caducidad</label>
                <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" value="{{ old('fecha_caducidad', $medicamento->fecha_caducidad) }}">
            </div>
            <div class="mb-3">
                <label for="unidades" class="form-label">Unidades</label>
                <input type="number" class="form-control" id="unidades" name="unidades" value="{{ old('unidades', $medicamento->unidades) }}">
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha de registro</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', $medicamento->fecha) }}">
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
