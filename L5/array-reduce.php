<?php

$numeri = [1,2,3,4,5,6,7,8,9];

$somma = array_reduce($numeri, function($acc, $el){
    return $acc + $el;
}, 0);

echo '<pre>';
print_r($somma);
echo '</pre>';