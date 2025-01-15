<?php

/**
 * Il metodo magico destruct si avvia in automatico quando si prova a distruggere l'oggetto generato con la classe di riferimento. 
 */
class Distruzione{

    public function __destruct(){
        echo 'Distrutto';
    }

}


$test = new Distruzione();

unset($test);