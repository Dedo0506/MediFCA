<link href="/resources/css/index.css" rel="stylesheet">

<div class="navbar-nav">
    <a class="nav-link"  href="{{ route('pacientes.create') }}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Datos personales</a>
    <a class="nav-link" href="{{route('antecedentes.create')}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a>
</div>