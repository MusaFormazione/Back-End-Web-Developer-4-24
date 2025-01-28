<?php

//is_dir() -> Si utilizza per verificare se un elemento del file system è una cartella ma è anche utilizzabile per verificare se la cartella esiste. 
$dirname = 'pippo';
if(!is_dir($dirname)){
    //Se la cartella non esiste, la creo. 
    mkdir($dirname);
}

//file_put_contents() crea il file se non esiste ma non si occupa di creazione di cartelle, quindi lancerà un errore qualora la cartella non ci fosse. 
file_put_contents("$dirname/file.txt",'ciao');