<div class="card-body">
<div class="subsection-inline">
  <div class="card-header">{{ __('Signos Vitales') }}</div>
  <div class="subsection">
    <div class="form-group">
      <div class="row">
        <div class="col">
          <label for="t_a">{{ __('T.A.') }}</label>
          <input type="text" class="form-control" id="t_a" name="t_a">
        </div>
        <div class="col">
          <label for="t_c">{{ __('T.C.') }}</label>
          <input type="text" class="form-control" id="t_c" name="t_c">
        </div>
        <div class="col">
          <label for="t_r">{{ __('T.R.') }}</label>
          <input type="text" class="form-control" id="t_r" name="t_r">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col">
          <label for="temperatura">{{ __('T°') }}</label>
          <input type="text" class="form-control" id="temperatura" name="temperatura">
        </div>
        <div class="col">
          <label for="sao2">{{ __('SaO2') }}</label>
          <input type="text" class="form-control" id="sao2" name="sao2">
        </div>
        <div class="col">
          <label for="glucosa">{{ __('Glucosa') }}</label>
          <input type="text" class="form-control" id="glucosa" name="glucosa">
        </div>
      </div>
    </div>
  </div>
</div>
@yield('signosVitales')