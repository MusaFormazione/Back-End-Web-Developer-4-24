<?php

echo '<a href="funzioni-array.php">Vai alle funzioni per gli array</a><br>';

//2 formati
$arr = array();
$arr = [];

$arr = ['val1','val2','val3'];
//come accedere ad un solo valore e mostrarlo a schermo
echo $arr[0];//val1

//In fase di sviluppo è utile poter osservare tutto il contenuto di un array, quindi si può utilizzare print_r oppure var_dump
//Qualora volessimo osservare in una maniera più chiara l'output di queste due funzioni, potremmo inserirle all'interno dei tag <pre></pre> che Permetterebbero di osservare l'output con una formattazione verticale più chiara 
echo '<pre>';
print_r($arr);//output con i dati
echo '</pre>';

echo '<pre>';
var_dump($arr);//output con dati e dettagli
echo '</pre>';

//manipolazione array
$pizze = ['Margherita','Diavola','Capricciosa'];

echo '<hr>';
echo '<h4>Aggiunta di elementi</h4>';
//aggiunta di elementi
//È come se fosse un push() in javascript 
$pizze[] = '4 stagioni';
var_dump($pizze);

echo '<hr>';
echo '<h4>Modifica di elementi</h4>';

//modifica di elementi
if(isset($pizze[2])){
    //In questa fase è meglio accertarsi che alla posizione due il valore ci sia 
    $pizze[2] = 'Marinara';
}
echo $pizze[2];
// var_dump($pizze);

$pizze[6] = 'Marinara';
var_dump($pizze);

echo '<hr>';
echo '<h4>Ottenere la lunghezza dell\'array</h4>';

echo count($pizze);

echo '<hr>';
echo '<h4>Array multi dimensionali</h4>';

$multi = [
    [
        'a',
        'b',
        'c'
    ],
    [
        'd',
        'e',
        'f'
    ]
];

echo "Secondo valore del primo array:" . $multi[0][1] . '<br>';
echo "Secondo valore del secondo array:" . $multi[1][1] . '<br>';

echo '<hr>';
echo '<h4>Array associativi</h4>';

$arr_assoc = [];
$arr_assoc['test'] = 'Hello World!';

print_r($arr_assoc);

$margherita = [
    'gusto' => 'Margherita',
    'prezzo' => 5
];
echo '<br>';
print_r($margherita);
echo '<br>';
echo 'Gusto della pizza:' . $margherita['gusto'];

$menu = [
    'pizze' => [$margherita],
    'pasta' => [
        [
            'gusto' => 'Carbonara',
            'prezzo' => 12
        ],
        [
            'gusto' => 'Al pomodoro',
            'prezzo' => 9
        ]
    ]
];
echo '<br>';
print_r($menu);


