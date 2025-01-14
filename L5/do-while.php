<?php

//A differenza di while, do/while esegue il blocco prima di verificare che la condizione sia vera. 
//Quindi nel caso in cui la condizione da verificare non sia mai vera, avremo sempre almeno una esecuzione del blocco legato al ciclo
$i = 0;

//Il blocco da di codice da eseguire inizia con do
do{
    $i++;
    echo "Iterazione numero: $i<br>";
}while($i <= 5);//La condizione viene verificata in modo da decidere se il blocco de dovrà essere eseguito nuovamente. 