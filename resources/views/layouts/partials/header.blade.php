<header>
    <h1>MEDIFCA</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}} " class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('pacientes.index')}}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Pacientes</a></li>
        </ul>
    </nav>
</header>