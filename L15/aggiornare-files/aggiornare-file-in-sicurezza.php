<?php

$fileName = 'file-creato.txt';

//Siccome devo aggiornare un file esistente, controllo che questo esista prima di procedere, altrimenti blocco lo script. 
//Per semplicità sto bloccando lo script ma tieni presente che sarebbe il caso di avvisare l'utente e dare anche una navigazione alternativa in modo che possa abbandonare la pagina o ritentare l'operazione 
if(!file_exists($fileName)){
    echo 'File does not exist';
    exit;
}

//Apro il file in modalità append
$file = fopen($fileName,'a');

//Verifico se è stato possibile aprire il file 
if(!$file){
    echo 'Imposibile aprire il file';
    exit;
}

//Blocco il file così che altri processi non possono fare operazioni su di esso. 
if(flock($file, LOCK_EX)){
    echo 'File bloccato<br>';

    //Ora posso procedere a una scrittura sicura 
    if(fwrite($file,"\nSto facendo una scrittura sicura!")){
        echo 'file scritto con successo<br>';
        //Ho effettuato la scrittura, adesso procedo a sbloccare il file, così che altri processi possano operare su di esso. 
        flock($file, LOCK_UN);
    }

}else{
    echo 'Impossibile bloccare il file';
}

