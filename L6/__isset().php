<?php

class IssetMagico{

    //$name è il nome della prop a cui si vuole accedere
    public function __isset($name){
        echo "$name non esiste";
    }
}

$test = new IssetMagico();

isset($test->proprietàInesistente);