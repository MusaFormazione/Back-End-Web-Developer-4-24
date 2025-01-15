<?php
//Chiamato quando si prova a convertire in stringa l'oggetto. 
class ToString{

    public function __toString(){
        return 'Questo è un oggetto, non una stringa';
    }

}

$obj = new ToString();

echo $obj;