<?php

//Definisco un set di funzioni e proprietà all'interno del contesto del tratto.
//Queste funzioni di proprietà potranno poi essere importate all'interno di classi 
trait FunzioniVeicolo{

    public $vel = 0;

    public function accelera(): void{ 
        $this->vel++;
    }

    public function frena(): void{ 
        $this->vel--;
    }

    public function ferma(): void{
        $this->vel = 0;
    }

}


class Auto {

    use FunzioniVeicolo;

}

$auto = new Auto();

$auto->accelera();
$auto->accelera();
$auto->accelera();
$auto->accelera();

echo $auto->vel;