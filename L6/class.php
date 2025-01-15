<?php

class User{
    
    /**
     *Imposto come protected/private le proprietà che non voglio 
     * vengano utilizzate all'esterno della classe per i seguenti motivi:
     * 
     * 1. La proprietà contiene un dato sensibile 
     * 2. Il dato deve essere elaborato prima di essere mostrato. 
     * 3. La proprietà è fatta per essere utilizzata solo internamente alla classe per rendere possibili alcuni funzionamenti
     * 
     * Gli stessi principi possono anche essere applicati ai metodi 
     */
    protected $password;
    protected $stipendio;
    public $nome;

    public function __construct(string $nome, string $cognome) {
        $this->nome = $nome;//La proprietà è automaticamente public. 
        $this->cognome = $cognome;//La proprietà è automaticamente public. 
        $this->password = 'password';
        $this->stipendio = 1500;
    }

    public function mostraStipendio():string{
        $netto = $this->stipendio * 0.8;//riduco del 20%
        return $netto . "€";
    }

}


$mario = new User('Mario','Rossi');

echo "Nome dell'utente: $mario->nome<br>";
//echo "Password dell'utente: $mario->password<br>";Cannot access protected property User::$password 
// echo $mario->stipendio;//non posso farlo
echo "Lo stipendio netto di $mario->nome è pari a " . $mario->mostraStipendio();

$mario->nome = 'Giovanni';//Posso accedere a proprietà pubbliche e modificarne il valore usando l'operatore di assegnamento 

echo '<hr>';
echo '<hr>';

echo '<pre>';
var_dump($mario);
echo '</pre>';