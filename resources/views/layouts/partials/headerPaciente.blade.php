<div>
    <nav>
        <ul>
            <li><a href="{{route('antecedentes.create')}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a></li>
            <li><a href="{{route('pacientes.index')}}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Pacientes</a></li>
        </ul>
    </nav>
</div>