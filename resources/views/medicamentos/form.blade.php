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
