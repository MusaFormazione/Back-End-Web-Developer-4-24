<?php
//Viene invocato quando si utilizza unset su una proprietà non definita o privata  
class UnsetMagico{

    public function __unset($prop){
        echo "Non puoi eliminare la propietà $prop poiché non esiste";
    }

}

$obj = new UnsetMagico();

unset($obj->prop);