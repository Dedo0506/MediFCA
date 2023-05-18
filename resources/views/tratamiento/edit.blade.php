<div class="card-body">
    <div class="subsection-inline">
        <div class="card-header">{{ __('Tratamiento') }}</div>
        <div class="subsection">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="medicamento">{{ __('Seleccionar medicamento') }}</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $medicamentos->nombre}}">
                    </div>
                    <div class="col">
                        <label for="cantidad">{{ __('Cantidad suministrada') }}</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ $tratamientos->cantidad_suministrada }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
