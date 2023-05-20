@extends('principal')

@section('title', 'Registrar')

@section('menu')
<style>
    .col-md-8 {
    flex: 0 0 auto;
    width: auto;
    }
</style>
<link href="/resources/css/create.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Antecedentes') }}</div>
          <div class="card-body">
            <div class="subsection-inline">
              <div class="subsection">{{ __('Antecendetes patologicos') }}</div>
                <form method="POST" action="{{ route('antecedentes.store', ['paciente' => $paciente]) }}">
                    @csrf
                    <!--crea y lleva un registro de los token generados que solo pueden ser accesados a la ruta del form-->  
                    <input type="hidden" name="paciente_id" value="{{ $paciente->id }}">
                    <div class="form-group">
                        <label class="form-label">
                            Aplica: 
                            <select name="antP_aplica" class="form-control">
                                <option value="N"{{old('antP_aplica')== 'N' ? 'selected' : ''}}>No</option>
                                <option value="S"{{old('antP_aplica')== 'S' ? 'selected' : ''}}>Si</option>
                            </select>
                        </label>
                        @error('antP_aplica')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            Descripcion: 
                            <textarea type="text" class="form-control" name="antP_descripcion" rows="5">{{old('antP_aplica' == 'N' ? 'readonly' : '' )}}</textarea>
                            <br>
                        </label>
                        @error('antP_descripcion')
                            <small>*{{$message}}</small>
                            <br><br>
                        @enderror
                    </div>

                    <div class="card-body">
                        <div class="subsection-inline">
                          <div class="card-header">{{ __('Antecendetes no patologicos') }}</div>
                            <div class="subsection">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <h4>vacunas:</h4>
                                            
                                            <label class="form-label">Covid-19</label>
                                            <input type="checkbox" name="vacunas[]" value="Vacuna 1">
                                            
                                            <label class="form-label">Tetanos</label>
                                            <input type="checkbox" name="vacunas[]" value="Vacuna 2">
                                            
                                            <label class="form-label">Influenza</label>
                                            <input type="checkbox"  name="vacunas[]" value="Vacuna 3">
                                            
                                            <br><br>
                                            <label class="form-label">
                                                Alimentacion: 
                                                <br>
                                                <input type="text" class="form-control"name="alimentacion" value="{{old('alimentacion')}}"/>
                                                <br>
                                            </label>
                                            @error('alimentacion')
                                                <small>*{{$message}}</small>
                                                <br><br>
                                            @enderror

                                            <label class="form-label" >
                                                Horas de sueño: 
                                                <br>
                                                <input type="number" class="form-control" name="hrs_sueno" value="{{old('hrs_sueno')}}"/>
                                                <br>
                                            </label>
                                            @error('hrs_sueno')
                                                <small>*{{$message}}</small>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="subsection-inline">
                          <div class="card-header">{{ __('Antecendetes heredo familiares') }}</div>
                            <div class="subsection">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-label" >
                                                Enfermedad: 
                                            <select name="enfermedad" class="form-control">
                                                <option value="ninguna"{{old('enfermdad')== '' ? 'selected' : ''}}>Ninguna</option>
                                                <option value="Diabetes"{{old('enfermedad')== 'Diabetes' ? 'selected' : ''}}>Diabetes</option>
                                                <option value="Hipertension"{{old('enfermedad')== 'Hipertension' ? 'selected' : ''}}>Hipertension</option>
                                                <option value="Asma"{{old('enfermedad')== 'Asma' ? 'selected' : ''}}>Asma</option>
                                                <option value="Cancer"{{old('enfermedad')== 'Cancer' ? 'selected' : ''}}>Cancer</option>
                                            </select>
                                            @error('enfermedad')
                                                <small>*{{$message}}</small>
                                                <br><br>
                                            @enderror

                                            <label class="form-label" >
                                                Familiar(es): 
                                                <input type="text" class="form-control" name="familiar" value="{{old('familiar')}}"/>
                                                <br>
                                            </label>
                                            @error('familiar')
                                                <small>*{{$message}}</small>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="card-body">
                        <div class="subsection-inline">
                          <div class="card-header">{{ __('Antecendetes ginecologicos') }}</div>
                            <div class="subsection">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label>
                                                Aplica: 
                                                <select name="antG_aplica">
                                                    <option value="N"{{old('antG_aplica')== 'N' ? 'selected' : ''}}>No</option>
                                                    <option value="S"{{old('antG_aplica')== 'S' ? 'selected' : ''}}>Si</option>
                                                </select>
                                            </label>
                                            @error('antG_aplica')
                                                <small>*{{$message}}</small>
                                                <br><br>
                                            @enderror
                                            
                                            <label>
                                                Especificacion: 
                                                <textarea type="text" name="especificacion" rows="5">{{old('especificacion')}}</textarea>
                                                <br>
                                            </label>
                                            @error('descripcionG')
                                                <small>*{{$message}}</small>
                                                <br><br>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                    <button type="submit">Enviar formulario</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    </form>
@endsection

