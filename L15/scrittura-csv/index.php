<?php
$utenti = [
    [
        'id' => 1,
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'anni' => 30
    ],
    [
        'id' => 2,
        'nome' => 'Maria',
        'cognome' => 'Bianchi',
        'anni' => 35
    ],
    [
        'id' => 3,
        'nome' => 'Giovanna',
        'cognome' => 'Verdi',
        'anni' => 20
    ]
];

$file = fopen('export.csv','w');

$keys = array_keys($utenti[0]);
fputcsv($file, $keys,';');

foreach ($utenti as $utente){

    fputcsv($file, $utente);

}

fclose($file);

