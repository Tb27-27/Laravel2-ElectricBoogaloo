<!DOCTYPE html>
<html>
<head>
    <title>Planeten</title>
</head>
<body>
    <h1>Alle Planeten</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <a href="/planets/{{ $planet->id }}">
                    {{ $planet->name }}
                </a>
                <p>({{ $planet->description }})</p>
                
                <br>
                <span>
                    Zonnestelsel:
                        <!-- pak de solar system of gooi onbekend terug -->
                    {{ $planet->solarSystem->name ?? 'Onbekend' }}
                </span>
            </li>
        @endforeach
    </ul>
</body>
</html>