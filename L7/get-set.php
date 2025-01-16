<?php

class Prodotto{

    private $nome;
    private $prezzo;

    public function __construct(string $nome, int|float $prezzo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function __set($property, $value): void {
        //Potrebbe essere stata richiamata una proprietà che non esiste, quindi è necessario controllare la sua esistenza ed in caso contrario lanciare un'eccezione 
        if(property_exists($this, $property)){

            //Faccio una serie di validazioni che, se attivate, bloccheranno l'assegnamento del nuovo valore
            $this->checkName($property, $value);
            
            if($property == 'prezzo' && $value < 0){
                throw new Exception('Il prezzo non può essere negativo');
            }

            //Se le eccezioni che ci sono sopra non vengono scatenate, allora ci sarà finalmente l'assegnamento 
            $this->$property = $value;
            return;//Blocco la funzione in modo che non venga lanciata l'eccezione            
        }
        throw new Exception("Proprietà $property non trovata");
    }
    
    public function __get($property): mixed {

        if(property_exists($this, $property)){
            if($property === 'prezzo'){
                return $this->getPrezzo();
            }

            return $this->$property;
        }

        throw new Exception("Proprietà $property non trovata");
    }

    //Metodo creato per gestire la validazione, evitando di sporcare troppo il setter 
    private function checkName($property, $value){
        if($property == 'nome' && strlen($value) < 2){
            throw new Exception('Il nome deve avere almeno 2 caratteri');
        }
    }

    private function getPrezzo():string{
        $conIva = $this->prezzo * 1.22;
        return $conIva . '€' ;
    }
    
}

$smartphone = new Prodotto('Samsung Galaxy S10 5G', 500);

//Dato che la classe potrebbe lanciare delle eccezioni (errori), utilizzo un blocco tra i catch che possa intercettarle e gestirle. 
try{
    
    $smartphone->prezzo = 400;

    echo 'Prezzo: ' . $smartphone->prezzo . '<br>';
    echo 'Nome prodotto: ' . $smartphone->nome . '<br>';

    // $smartphone->prezzo = -400; //lancia un'eccezione
    // $smartphone->nome = '';//lancia un'eccezione


}catch(Exception $e){
    echo $e->getMessage();
}