<?php

$fileName = 'file.csv';

//Apro il file CSV in sola lettura. 
$file = fopen($fileName, 'r');

//fgets È come fwrite, però recupera solo la prima riga di un file e non richiede di sapere quanti dati recuperare
$primaRiga = fgets($file);//Lancio qui la prima lettura in modo da Evitare che la prima riga sia inserita nella rete di utenti, dato che contiene solo i nomi dei campi 

//Quando avvio la lettura di un file devo immaginarmi un cursore che si muove all'interno di questo e si sposta man mano dall'inizio verso la fine, fgets Di fatto sposta il cursore alla fine della riga che ha appena recuperato (ogni volta che viene lanciato). 

//Preparo la lei utenti che popolerò successivamente. 
$utenti = [];
//feof() => Mi comunica se durante la lettura del file il puntatore è già alla fine oppure no, Restituisce True solo se il puntatore è alla fine del file  
//Quindi questo ciclo continuerà a procedere finché il puntatore non ha raggiunto la fine del file 
while(!feof($file)){
    

    $riga = fgets($file);

    //Può capitare che un csv abbia delle righe vuote, quindi meglio verificare
    if(!empty($riga)){
        //Sapendo che ci sono quattro colonne ed a cosa corrispondono i dati al loro interno possiamo facilmente procedere ad una destrutturazione 
        [$id, $nome, $cognome, $anni] = explode(',',$riga);

        //Utilizza i dati destrutturati per comporre un Nuovo, avrei associativo che rappresenta l'utente e lo inserisco nell'array utenti che adopererò successivamente. 
        $utenti[] = [
            'id' => $id,
            'nome' => $nome,
            'cognome' => $cognome,
            'anni' => $anni,
        ];
    }

}

//Finalmente ho la rete di utenti, posso adoperarlo per costruire nuovi file oppure posso ciclarlo per procedere a fare inserimenti all'interno del database
var_dump($utenti);

fclose($file);

