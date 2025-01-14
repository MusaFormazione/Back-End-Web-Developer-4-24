<?php

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$maggioriDiQuattro = array_filter($numeri, function ($n) {
    return $n > 4;
});

echo '<pre>';
print_r($maggioriDiQuattro);
echo '</pre>';

$utenti = [
    "kjfdhusdujs" => [
        "nome" => "Mario"
    ],
    "jhdsagvffdf" => [
        "nome" => "Maria"
    ],
    "kjausergyiu" => [
        "nome" => "Giovanna"
    ],
    "sadkjuhbasg" => [
        "nome" => "Mirko"
    ],
];

$utenteCercato = array_filter($utenti, function ($chiave) {
    return $chiave === 'kjausergyiu';
}, ARRAY_FILTER_USE_KEY);

echo '<pre>';
print_r($utenteCercato['kjausergyiu']['nome']);
echo '</pre>';