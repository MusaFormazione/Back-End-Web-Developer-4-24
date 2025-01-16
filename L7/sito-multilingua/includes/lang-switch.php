<?php

$lang = $_GET['lang'] ?? 'it';

$langs = [
    'it' => 'Italiano',
    'en' => 'English'
];


function selectField(string $fieldLang): string{
    global $lang;

    return $lang === $fieldLang ? 'selected' : '';
}

function createLangFields():string{
    global $langs;

    $fieldsArray = '';

    foreach ($langs as $key => $value){
        $selected = selectField($key);
        $fieldsArray .= "<option $selected value=\"$key\">$value</option>";
    }
    
    return $fieldsArray;
}