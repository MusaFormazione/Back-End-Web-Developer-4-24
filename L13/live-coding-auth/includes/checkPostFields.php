<?php


if (!$availablePostValues) {
    throw new Exception('Missing array for post values');
}

foreach ($availablePostValues as $key) {
     
    if (!isset($_POST[$key]) || (empty($_POST[$key]) && !gettype($_POST[$key]) == 'bool')) {

        throw new Exception('Missing ' . $key);
    }
    
    $$key = $_POST[$key];

}

