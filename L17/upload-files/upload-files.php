<?php

var_dump($_FILES);

// Verifica se il file è stato caricato
if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

    //Preparo i parametri del file caricato mettendoli all'interno di comode variabili 
    $fileName = $_FILES['image']['name'];//Nome originale dell'immagine
    $fileTmp = $_FILES['image']['tmp_name'];//Percorso temporaneo al file 
    $fileSize = $_FILES['image']['size'];//Dimensione del file 
    $fileType = mime_content_type($fileTmp); //Per ottenere il tipo del file in modo più sicuro 

    //Controllare l'estensione del file
    $allowedTypes = ['images/jpeg', 'image/png'];
    if(!in_array($fileType, $allowedTypes)){
        die('Errore: Sono accettati solo .jpg, .png');
    }

    //Limito il peso del file. 
    $maxFileSize = 2;//Dimensione in MB. 
    if($fileSize > $maxFileSize * 1024 * 1024){
        // die('Errore: Il file è troppo grande(Max 2MB)');
    }

    //Limito le dimensioni dell'immagine. 
    $imageSize = getimagesize($fileTmp);
    $width = $imageSize[0];
    $height = $imageSize[1];

    if($width > 1920 || $height > 1080){
        die("Errore: L'immagine supera le dimensioni massime (1920x1080).");
    }
    
    //Controllo o creazione della directory 
    $uploadDir = 'uploads/';
    if(!is_dir($uploadDir)){
        mkdir($uploadDir);
    }
    
    // Spostamento del file nella directory desiderata
    $destination = $uploadDir . $fileName;

    if(move_uploaded_file($fileTmp, $destination)){
        echo "Immagine caricata con successo nella cartella $uploadDir <a href=\"$destination\">$fileName</a>";

        //Qui posso anche andare a salvare in database il nome del file. 
    }else{
        echo 'Errore  Non è stato possibile caricare il file :';
    }
    
}else{
    echo 'Errore  Non è stato possibile caricare il file  o si è verificato un errore';
}