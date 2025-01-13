<?php

function saluta(string $nome, string $cognome, int $anni, bool $active = true):void{
    if($active){
        echo "Ciao, mi chiamo $nome $cognome ed ho $anni anni";
    }
}

//Quando si usano argomenti posizionali, l'ordine è fondamentale. Ecco perché I parametri che hanno un valore predefinito si scrivono di solito alla fine della lista di parametri. 

//Quando però si usano argomenti nominali Allora l'ordine di utilizzo non è più importante, perché possiamo richiamarli per per riferimento diretto

//best practice:
//Anche se prevedi di adoperare sempre le tue funzioni con nad Argments, la cosa migliore sarebbe predisporre sempre le funzioni anche per un utilizzo posizionale. 

//in questo caso ignoro volutamente l'ultimo parametro siccome pè facoltativo, avendo un valore predefinito booleano pari a true
saluta(anni:30, nome:'Mario', cognome:'Rossi');


saluta(anni:30, nome:'Mario', cognome:'Rossi',active: false);


//importante:

//Funzionano solo da PHP 8.0 in poi.
//I nomi dei parametri devono corrispondere esattamente a quelli definiti nella funzione 
//Non puoi mescolare nede argments e positional argument, dopo aver usato i named argments.

//esempio di utilizzo scorretto
//saluta(nome:'Mario', cognome:'Rossi', 30); => errore



//Anche le funzioni built-in supportano i named arguments

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

$nuovaPizza = [
    'gusto' => 'Marinara',
    'prezzo' => 40
];


array_splice(
    array:$menu['pizze'],  
    replacement:[$nuovaPizza], 
    length :1, 
    offset:2
);

echo '<pre>';
print_r($menu['pizze']);
echo '</pre>';
