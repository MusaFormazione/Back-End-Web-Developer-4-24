<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $punteggio = 85;

    if ($punteggio >= 90) {
        echo 'Voto: A';
    } else if ($punteggio >= 80) {
        echo 'Voto: B';
    } else if ($punteggio >= 70) {
        echo 'Voto: C';
    } else {
        echo 'Voto: F';
    }

    ?>
    <br>

    <?php
    //sintassi alternativa
    $punteggio = 85;

    if ($punteggio >= 90):
        echo 'Voto: A';
    elseif ($punteggio >= 80):
        echo 'Voto: B';
    elseif ($punteggio >= 70):
        echo 'Voto: C';
    else:
        echo 'Voto: F';
    endif;

    ?>
    <h2>Rendering condizionale</h2>
    <?php
    //sintassi alternativa
    $punteggio = 85;

    if ($punteggio >= 90) { ?>
        <h4>Voto: A</h4>
    <?php } else if ($punteggio >= 80) { ?>
        <h4>Voto: B</h4>
    <?php } else if ($punteggio >= 70) { ?>
        <h4>Voto: C</h4>
    <?php } else { ?>
        <h4>Voto: F</h4>
    <?php } ?>



</body>

</html>