<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['../css/app.css','../js/app.js'])
</head>
<body>

    <h1>Lista pizze</h1>

    @php

    $pizze = [
        [
            'gusto' => 'Margherita',
            'prezzo' => 5
        ],
        [
            'gusto' => 'Diavola',
            'prezzo' => 1
        ]
    ]

    @endphp

    @each('partials.pizza', $pizze, 'pizza','partials.pizza-mancante')


</body>
</html>
