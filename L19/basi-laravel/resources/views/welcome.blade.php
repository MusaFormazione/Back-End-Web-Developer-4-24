<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['../css/app.css','../js/app.js'])


    </head>
    <body>

        <h1>Esempi con le direttive Blade</h1>

        <h2>Direttive condizionali</h2>

        {{-- questo è un commento di blade--}}
        @php
        //Sei lavori correttamente e queste aperture e chiusure di PHP probabilmente non ti serviranno mai
            $userRole = null;
        @endphp


        {{-- Puoi riconoscere le direttive di Blade perché sono anticipate da una chiocciola e non necessitano di un punto e virgola in chiusura dell'istruzione  --}}


        {{-- Non userai più if/elseif/else come facevi con PHP ma ti basta adoperare @if/@elseif/@else/@endif.  --}}
        @if($userRole === 'admin')

            <h3>Ruolo utente: Amministratore</h3>

        @elseif($userRole === 'customer')

            <h3>Ruolo utente: Cliente</h3>

        @else

            <h3>Utente non loggato</h3>

        @endif


        @php
            $name = 'Mario';
            $carrello = [];
        @endphp

        {{-- @isset() equivale a if(isset()) --}}
        @isset($name)
        <p>Nome utente: {{$name}}</p>
        @endisset

        {{-- @empty() equivale a if(empty()) --}}
        @empty($carrello)
            <p>Il carrello è vuoto</p>
        @endempty

        <h2>Direttive loop</h2>

        @php
            $tasks = ['Scrivere il codice','Testare l\'app', 'Fare il deploy']
        @endphp

        <h3>Elenco delle attività da svolgere</h3>

        <ul>
            {{-- Questo rappresenta il foreach fatto in Blade  --}}
            @foreach ( $tasks as  $task)
                <li>{{$task}}</li>
            @endforeach
        </ul>

        <h3>Ciclo con forelse</h3>

        @php
            $name = 'Mario';
            $carrello = ['elemento1','elemento2','elemento3'];
        @endphp

        <ul>
            {{-- forelse È un che però gestisce anche un output alternativo in caso di dati vuoti.  --}}
            @forelse($carrello as $elemento)
                <li>{{$elemento}}</li>
            @empty
                <li>Carrello vuoto</li>
            @endforelse
        </ul>


        <h3>Includere delle views</h3>

        @includeIf('partials.titolo')



    </body>
</html>
