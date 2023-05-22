@extends('principal')

@section('title', 'Registrar')

@section('menu')
<style>
    .col-md-8 {
        flex: 0 0 auto;
        width: auto;
    }
</style>
<link href="/sources/css/app.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Antecedentes') }}</div>
                <form method="POST" action="{{ route('antecedentes.store') }}">
                    @csrf
                    <input type="hidden" name="paciente_id" value="{{ $paciente->id }}">
                <div class="card-body">
                    <div class="subsection-inline">
                        <div class="card-header">{{ __('Patologicos') }}</div>
                        <div class="subsection">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">
                                            Aplica:
                                            <select name="antP_aplica" class="form-control">
                                                <option value="N"{{ old('antP_aplica') == 'N' ? 'selected' : '' }}>No</option>
                                                <option value="S"{{ old('antP_aplica') == 'S' ? 'selected' : '' }}>Si</option>
                                            </select>
                                        </label>
                                        @error('antP_aplica')
                                        <small>*{{$message}}</small>
                                        <br><br>
                                        @enderror

                                        <label class="form-label">
                                            Descripción:
                                            <textarea class="form-control" name="antP_descripcion">{{ old('antP_descripcion') }}</textarea>
                                        </label>
                                        @error('antP_descripcion')
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
                        <div class="card-header">{{ __('No patológicos') }}</div>
                        <div class="subsection">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <h4>Vacunas:</h4>
                                        <label class="form-label">Covid-19</label>
                                        <input type="checkbox" name="vacunas[]" value="Vacuna 1">

                                        <label class="form-label">Tétanos</label>
                                        <input type="checkbox" name="vacunas[]" value="Vacuna 2">

                                        <label class="form-label">Influenza</label>
                                        <input type="checkbox" name="vacunas[]" value="Vacuna 3">

                                        <br><br>
                                        <label class="form-label">
                                            Alimentación:
                                            <input type="text" class="form-control" name="alimentacion" value="{{ old('alimentacion') }}">
                                        </label>
                                        @error('alimentacion')
                                        <small>*{{$message}}</small>
                                        <br><br>
                                        @enderror

                                        <label class="form-label">
                                            Horas de sueño:
                                            <input type="number" class="form-control" name="hrs_sueno" value="{{ old('hrs_sueno') }}">
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
                        <div class="card-header">{{ __('Heredo familiares') }}</div>
                        <div class="subsection">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">
                                            Enfermedad:
                                            <select name="enfermedad" class="form-control">
                                                <option value="ninguna"{{ old('enfermedad') == '' ? 'selected' : '' }}>Ninguna</option>
                                                <option value="Diabetes"{{ old('enfermedad') == 'Diabetes' ? 'selected' : '' }}>Diabetes</option>
                                                <option value="Hipertension"{{ old('enfermedad') == 'Hipertension' ? 'selected' : '' }}>Hipertensión</option>
                                                <option value="Asma"{{ old('enfermedad') == 'Asma' ? 'selected' : '' }}>Asma</option>
                                                <option value="Cancer"{{ old('enfermedad') == 'Cancer' ? 'selected' : '' }}>Cáncer</option>
                                            </select>
                                        </label>
                                        @error('enfermedad')
                                        <small>*{{$message}}</small>
                                        <br><br>
                                        @enderror

                                        <label class="form-label">
                                            Familiar(es):
                                            <input type="text" class="form-control" name="familiar" value="{{ old('familiar') }}">
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
                        <div class="card-header">{{ __('Ginecológicos') }}</div>
                        <div class="subsection">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label class="form-label">
                                            Aplica:
                                            <select class="form-control" name="antG_aplica">
                                                <option value="N"{{ old('antG_aplica') == 'N' ? 'selected' : '' }}>No</option>
                                                <option value="S"{{ old('antG_aplica') == 'S' ? 'selected' : '' }}>Si</option>
                                            </select>
                                        </label>
                                        @error('antG_aplica')
                                        <small>*{{$message}}</small>
                                        <br><br>
                                        @enderror

                                        <label class="form-label">
                                            Especificación:
                                            <textarea class="form-control" name="especificacion" >{{ old('especificacion') }}</textarea>
                                        </label>
                                        @error('especificacion')
                                        <small>*{{$message}}</small>
                                        <br><br>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div >
                    <button type="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
