<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista pizze</title>
    @vite(['../css/app.css','../js/app.js'])
</head>
<body>

    <h1>Lista pizze</h1>

    @foreach($pizzas as $pizza)
        <div>
            <h3>Pizza {{$pizza['gusto']}}</h3>
            <p>Prezzo: {{$pizza['prezzo']}}€</p>
        </div>
    @endforeach

</body>
</html>
