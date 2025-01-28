<?php

$fileName = 'file-creato-put-contents.txt';

//Identificato il file, procedo ad aggiungere un testo al suo interno 
file_put_contents($fileName, "\nTesto aggiunto", 
FILE_APPEND);
//FILE_APPEND => Indica che non voglio sovrascrivere il file, ma desidero aggiungere alla fine del file un testo