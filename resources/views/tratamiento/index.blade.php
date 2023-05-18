<div class="card-body">
    <div class="subsection-inline">
        <div class="card-header">{{ __('Tratamiento') }}</div>
        <div class="subsection">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="medicamento">{{ __('Seleccionar medicamento') }}</label>
                        <select class="form-control" id="medicamento" name="medicamento">
                            @foreach($medicamentos as $medicamento)
                                <option value="{{ $medicamento->id }}">{{ $medicamento->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="cantidad">{{ __('Cantidad suministrada') }}</label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
