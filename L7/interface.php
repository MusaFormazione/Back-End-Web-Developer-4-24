<?php

interface iVeicolo{

    public function accelera():void;
    public function frena():void;

    public function fermati():void;

}


class Bici implements iVeicolo{
    
    public $vel = 0;

    public function accelera():void{
        $this->vel++;
    }
    
    public function frena(): void{
        if($this->vel > 0){
            $this->vel--;
        }        
    }

    public function fermati():void{
        $this->vel = 0;
    }   
}

class Automobile implements iVeicolo{
    

    public $vel = 0;

    public function accelera():void{
        $this->vel += 20;
    }
    
    public function frena(): void{
        if(($this->vel - 20) > 0){
            $this->vel -= 20;
        }        
    }

    public function fermati():void{
        $this->vel = 0;
    }   
}