<?php

$nomeFile = 'file-creato.txt';//Può contenere anche il percorso del file 

if(unlink($nomeFile)){
    echo 'File eliminato';
}else{
    echo 'Impossibile eliminare il file, forse è in uso.';
}