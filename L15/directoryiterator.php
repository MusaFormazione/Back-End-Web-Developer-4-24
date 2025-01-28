<?php

function leggiCartellaAdOggetti($directory){
    $contenutoCartella = new DirectoryIterator($directory);
    // var_dump($contenutoCartella);

    echo "<ul>";
    foreach($contenutoCartella as $item){
        if($item->isDot()){
            continue;
        }

        echo "<li>";
       

        if($item->isDir()){
            echo "<b>Cartella: </b> ";
        }else if($item->isFile()){
            echo "<b>File: </b> ";
            echo $item->getFileName() . ' ';
            echo $item->getSize() . ' ';
        }


        echo "</li>";
    }
    echo "</ul>";
    
}

leggiCartellaAdOggetti(__DIR__);

