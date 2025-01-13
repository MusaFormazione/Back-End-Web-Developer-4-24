<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="endpoint.php" method="GET">

    <input type="text" name="s" placeholder="Scrivi il nome della pizza">

    <button>Cerca</button>

</form>

<script>

    // document.querySelector('form')
    // .addEventListener('submit', function(e){
    //     console.log('ok');
        
    //     e.preventDefault();

    //     const gusto = this.querySelector('input[name=s]').value
    //     fetch(`http://a4-24.test/L4/esercizio-endpoint/endpoint.php?s=${gusto}`)
    //     .then(res => res.json())
    //     .then(console.log);
    
    // });

</script>
    
</body>
</html>