<?php

abstract class Veicolo{

    public $vel = 0;
    public $maxVel;
    public $nRuote;

    public function __construct(int|float $maxVel, int $nRuote) {
        $this->maxVel = $maxVel;
        $this->nRuote = $nRuote;
    }

    public abstract function accelera(): void;

    public abstract function frena(): void;

    public function ferma(): void{
        $this->vel = 0;
    }

}

// $v = new Veicolo(); //non puoi instanziare la classe astratta
//Non è fatta per essere istanziata, ma per essere ssata come punto da cui estendere nuove classi

class Automobile extends Veicolo {

    public $marca;
    public $modello;

    public function __construct(string $marca, string $modello, int|float $maxVel) {
        parent::__construct($maxVel, 4);

        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function accelera(): void{
        $this->vel += 20;
    }

    public function frena(): void{
        $this->vel -= 20;
    }

}


$fiat = new Automobile('Fiat','500', 170);

$fiat->accelera();
$fiat->accelera();

echo '<pre>';
var_dump($fiat);
echo '<pre>';

echo '<hr>';
echo '<hr>';

class Bici extends Veicolo {
    public function __construct() {
        parent::__construct(40, 2);
    }

    public function accelera(): void{
        $this->vel++;
    }

    public function frena(): void{
        $this->vel--;
    }

}

$bicicletta = new Bici();

$bicicletta->accelera();
$bicicletta->accelera();

echo '<pre>';
var_dump($bicicletta);
echo '<pre>';