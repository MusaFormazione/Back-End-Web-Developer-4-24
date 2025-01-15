<?php
//È un metodo magico richiamato ogni qualvolta si richiami un metodo che non esiste

class CallMagico{

    public function __call($methodName, $args){
        echo "$methodName non esiste";
    }
}

$test = new CallMagico();

$test->metodoInesistente();