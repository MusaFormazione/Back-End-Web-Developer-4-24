<?php
// $variabileNonEsportata = 'Valore NON esportato';
// $variabileEsportata = 'Valore esportato';
//Le variabili globali sono comunque disponibili nello scope globale, incapsulale con delle funzioni per prevenire questo comportamento ed usa return per restituirne il valore

function getVariabili(){
    $variabileNonEsportata = 'Valore NON esportato';
    $variabileEsportata = 'Valore esportato';
    return $variabileEsportata;
}

return getVariabili();