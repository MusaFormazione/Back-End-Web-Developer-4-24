<?php

//$colori = ['red','green','blue','bisque'];

$colore = 'redsffds';

switch ($colore) {

    case 'red':
        echo "<div style=\"height:100px; background-color:red\"></div>";
        break;
    case 'green':
        echo "<div style=\"height:100px; background-color:green\"></div>";
        break;
    case 'blue':
        echo "<div style=\"height:100px; background-color:blue\"></div>";
        break;
    case 'bisque':
        echo "<div style=\"height:100px; background-color:bisque\"></div>";
        break;
    default:
        echo "<div style=\"height:100px; background-color:#ccc\">Colore mancante</div>";
}

echo "<hr>";

//versione ottimizzata

function createBoxWithBackground(string $colore, string $altezza, string $larghezza):void{

    $bgColor = '';

    switch ($colore) {
        case 'rosso':
        case 'red':
            $bgColor = 'red';
            break;
        case 'verde':
        case 'green':
            $bgColor = 'green';
            break;
        case 'blu':
        case 'blue':
            $bgColor = 'blue';
            break;
        case 'bisque':
            $bgColor = 'bisque';
            break;
        default:
            echo "<div style=\"height:$altezza; width:$larghezza; background-color:#ccc\">Colore mancante</div>";
    }

    echo "<div style=\"height:$altezza; width:$larghezza; background-color: $bgColor\"></div>";
}


createBoxWithBackground(colore:'verde',altezza:'200px',larghezza:'200px');

createBoxWithBackground(colore:'rosso',altezza:'100px',larghezza:'100px');
