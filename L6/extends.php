<?php

/**
 * protected: Proprietà o metodo non accessibile all'esterno della classe, accessibile però nelle classi derivate  
 * 
 * private: Proprietà o metodo non accessibile nè all'esterno della classe, tanto meno all'interno delle classi derivate
 * Possiamo dire che i metodi e le proprietà private sono per uso esclusivamente interno alla classe in cui sono dichiarate
 */

class Veicolo{

    public $type;
    public $nRuote;
    public $maxVel;
    private $vel = 0;

    public function __construct(string $type, int $nRuote, int $maxVel){
        $this->type = $type;
        $this->nRuote = $nRuote;
        $this->maxVel = $maxVel;
    }

    protected function ottieniVelocità():int{
        return $this->vel;
    }

    public function accelera(): void{
        $this->vel++;
    }
    
    public function frena(): void{
        if($this->vel > 0){
            $this->vel--;
        }
    }

    public function ferma(): void{
        $this->vel = 0;
    }

}


class Automobile extends Veicolo{

    public $marca;
    public $modello;

    public function __construct(string $marca, string $modello, int $maxVel){
        parent::__construct('automobile', 4, $maxVel);
        $this->marca = $marca;
        $this->modello = $modello;

        // $this->vel;//Essendo private non è accessibile nella classe derivata
    }

    public function mostraVelocità(){

        echo 'Il veicolo sta andando alla velocità di ' . parent::ottieniVelocità() . 'Km/h';

    }


}

$fiat = new Automobile( 'Fiat','500', 150);

$fiat->accelera();
$fiat->accelera();
$fiat->accelera();
$fiat->accelera();
$fiat->accelera();

$fiat->mostraVelocità();

echo '<hr>';
echo '<hr>';
echo '<hr>';

echo '<pre>';
var_dump($fiat);
echo '</pre>';

