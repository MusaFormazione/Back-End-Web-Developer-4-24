<?php

class Veicolo{

    public $type;
    public $nRuote;
    public $maxVel;
    protected $vel = 0;

    public function __construct(string $type, int $nRuote, int $maxVel){
        $this->type = $type;
        $this->nRuote = $nRuote;
        $this->maxVel = $maxVel;
    }

    public function accelera(){
        $this->vel++;
    }
    
    public function frena(){
        if($this->vel > 0){
            $this->vel--;
        }
    }

    public function ferma(){
        $this->vel = 0;
    }

}


