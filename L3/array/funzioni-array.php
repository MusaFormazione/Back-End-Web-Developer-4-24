<?php

$arr1 = range(1, 10);//Crea un array e lo riempie con numeri da uno a 10 

print_r($arr1);
echo '<br>';

//Verificare l'esistenza di una chiave 
if (array_key_exists(1, $arr1)) {
    echo 'La chiave 1 esiste<br>';
}

//isset non si usa solo per gli array ma è in grado di verificare l'esistenza di un valore in una variabile, qualunque essa sia. 
if (isset($arr1[1])) {
    echo 'La chiave 1 esiste e non è null<br>';
}

//Verificare l'esistenza di un valore 
if (in_array(3, $arr1)) {
    echo 'Il valore 3 è presente nell\'array<br>';
}

//Cercando un valore, ne ottengo la chiave 
$dato = array_search(3, $arr1);
echo 'La chiave di 3 è:' . $dato . '<br>';


//manipolazione
array_push($arr1, 11, 12);
echo 'Dopo il push:';
print_r($arr1);

//Elimina l'ultimo elemento dall'array e lo restituisce. 
$ultimo = array_pop($arr1);
echo '<br>Hai eliminato l\'elemento:' . $ultimo . '<br>';

//Eliminazione di un singolo elemento 
unset($arr1[10]);
echo "Dopo l'eliminazione della chiave 10: ";
print_r($arr1);

echo '<hr>';

$menu = [
    'pizze' => [
        [
            'gusto' => 'Margherita',
            'prezzo' => 5
        ],
        [
            'gusto' => 'Diavola',
            'prezzo' => 1
        ],
        [
            'gusto' => 'Marinara',
            'prezzo' => 4
        ],
    ],
    'primi' => [
        [
            'gusto' => 'Carbonara',
            'prezzo' => 16
        ],
        [
            'gusto' => 'Al pomodoro',
            'prezzo' => 9
        ]
    ]
];

//Recupero un array di chiavi all'interno dell'array associativo. 
$keys = array_keys($menu);
print_r($keys);
echo '<br>';

//Recupero un array di valori all'interno di un array associativo
$values = array_values($menu['pizze'][1]);
echo '<pre>';
print_r($values);
echo '</pre>';
echo '<br>';

// array_splice(array, index, quantità, [valori sostitutivi])
$nuovaPizza = [
    'gusto' => 'Marinara',
    'prezzo' => 40
];

//Può essere utilizzato per eliminare, aggiungere o sostituire degli elementi all'interno di un array
array_splice($menu['pizze'], 2, 1, [$nuovaPizza]);
echo '<pre>';
print_r($menu['pizze']);
echo '</pre>';

//Rimozione duplicati
$arrDuplicati = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9];
$unique = array_unique($arrDuplicati);
print_r($unique);



