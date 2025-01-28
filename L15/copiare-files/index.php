<?php

//Prima di creare la cartella controlla se questa esista, perché altrimenti ricevi errore
if(!is_dir('copy')){
    mkdir('copy');
}

$fileOriginale = 'file-da-copiare.txt';
$fileDestinazione = 'copy/file-copiato.txt';

if(copy($fileOriginale, $fileDestinazione)){
    echo 'Il file è stato copiato con successo';
}else{
    echo 'Impossibile copiare il file';
}