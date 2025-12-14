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

                <br>
                
                <p>
                    Zonnestelsel: 
                    {{ $planet->solarSystem->name ?? 'Geen zonnestelsel' }}
                </p>
            </li>
        @endforeach
    </ul>
</body>
</html>