<?php

include_once  'includes.php';

use Models\Utente;
use Models2\Utente as Utente2;//uso un alias per evitare il conflitto

$utenteConnesso = new Utente('Mario');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?=$utenteConnesso->saluto()?></h1>
    
</body>
</html>