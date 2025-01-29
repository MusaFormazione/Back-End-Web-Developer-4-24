<?php

echo 'Anno attuale: ' . date('Y') . '<br>';

echo 'Data di oggi: ' . date('Y/m/d') . '<br>';
echo 'Che ore sono: ' . date('H:i:s') . '<br>';

echo 'Data ed ora: ' . date('Y/m/d H:i:s') . '<br>';

//timestamp

echo 'Numero di secondi trascorsi dal 1 gennaio 1970 ad oggi: ' . time();

echo '<hr>';
//confronto tra date

$adesso = time();//timestamp attuale
$domani = strtotime('tomorrow');//timestamp di domani
echo "Prima data: $adesso, seconda data: $domani <br>";
if($adesso < $domani){
    echo "La seconda data è nel futuro";
}


//collaborazione tra strtotime e date

$domani =  date('d-m-Y', strtotime('tomorrow'));
$future = date('d-m-Y', strtotime('+7 days'));

echo '<br>';

echo "Domani darà il $domani<br>";
echo "Tra 7 giorni sarà il $future<br>";