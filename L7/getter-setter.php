<?php

class Prodotto{

    private $nome;
    private $prezzo;

    public function __construct(string $nome, int|float $prezzo) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
    }

    public function setPrezzo(int|float $prezzo): void {
        $this->prezzo = $prezzo;
    }

    public function getPrezzo(): string {
        $conIva = $this->prezzo * 1.22;
        return $conIva . '€';
    }
    
}

$smartphone = new Prodotto('Samsung Galaxy S10 5G', 500);

echo $smartphone->getPrezzo().'<br>';

$smartphone->setPrezzo(1000).'<br>';

echo 'Prezzo dopo l\'aumento: ' . $smartphone->getPrezzo().'<br>';