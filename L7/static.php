<?php

class Math{

    public static function somma(int|float ...$numeri){
        return array_sum($numeri);
    }

}

//utilizzo corretto
echo Math::somma(1,2,3,4,5,8,7);

//utilizzo scorretto
// $istanza = new Math();
// $istanza->somma(1,2,3,4,5,8,7);