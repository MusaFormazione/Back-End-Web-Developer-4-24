<?php

class Persona{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function saluto(){
        return "Ciao, mi chiamo $this->nome $this->cognome";
    }
}

class Docente extends Persona{
    public $skills;
    public function __construct($nome, $cognome, $skills = []) {
        parent::__construct($nome, $cognome);
        $this->skills = $skills;
    }

    public function saluto(){

        $skillsString = implode(array: $this->skills, separator: ", ");

        return parent::saluto() . " ed insegno le materie: $skillsString";
    }

}

class Studente extends Persona{
    public $materie;
    public function __construct($nome, $cognome, $materie = []) {
        parent::__construct($nome, $cognome);
        $this->materie = $materie;
    }

    public function saluto(){

        $materieString = implode(array: $this->materie, separator: ", ");

        return parent::saluto() . " e studio le materie: $materieString";
    }

}

$docente = new Docente('Michele','Tedesco',['PHP','Laravel']);
$studente = new Studente('Mario','Rossi',['PHP','Laravel']);


echo $docente->saluto().'<br>';
echo $studente->saluto();