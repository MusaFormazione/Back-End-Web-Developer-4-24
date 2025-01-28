<?php


function leggiCartella($directory){
    $contenutoCartella = scandir($directory);
    // var_dump($contenutoCartella);

    echo "<ul>";
    foreach($contenutoCartella as $item){
        if($item === '.' || $item === '..'){
            continue;
        }

        echo "<li>";
        $itemPath = "$directory/$item";

        if(is_dir($itemPath)){
            echo "<b>Cartella: </b> ";
        }else if(is_file($itemPath)){
            echo "<b>File: </b> ";
        }

        
        echo "<a href=\"$itemPath\">$item</a>";
        
        echo "</li>";
    }
    echo "</ul>";
    
}

echo "<h1>cartella attuale:</h1>";
leggiCartella(__DIR__);
echo "<h1>cartella aggiornare-files:</h1>";
leggiCartella(__DIR__.'/aggiornare-files');


var_dump($_SERVER);