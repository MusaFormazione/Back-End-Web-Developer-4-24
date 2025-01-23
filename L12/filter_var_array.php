<?php

$post = [
    'nome' => 'Mario',
    'cognome' => 'Rossi',
    'email' => 'mariorossi.it',
    'anni' => 30
];

$filters = [
    'nome' => FILTER_SANITIZE_STRING,
    'cognome' => FILTER_SANITIZE_STRING,
    'email' => FILTER_VALIDATE_EMAIL,
    'anni' => [
        'filter' => FILTER_VALIDATE_INT,
        'options' => [
            'min_range' => 1,
            'max_range' => 10
        ]
    ]
];

$result = filter_var_array($post,$filters);

var_dump($result);