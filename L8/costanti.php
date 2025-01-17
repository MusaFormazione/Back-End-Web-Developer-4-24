<?php
//Define consente anche l'utilizzo di array 
//Puoi utilizzarlo a livello globale 
define('COSTANTE_ARRAY', [] );
define('COSTANTE_NUMERO', 1 );
define('COSTANTE_STRINGA',  '' );

//Anche con È utilizzabile a livello globale 
const COSTANTE_NUMERO_CONST = 0;
const COSTANTE_STRING_CONST = '';

class TestCostanti{

    //All'interno di una classe non posso adoperare di fine perché è una funzione. 
    //Userò invece const
    public const COSTANTE_INTERNA_ALLA_CLASSE = '0';

}

//Posso accedere alla costante interna alla classe come se fosse una proprietà statica 
TestCostanti::COSTANTE_INTERNA_ALLA_CLASSE;

function prova(){
    //All'interno di una funzione non puoi usare cosst, ma qualora avessi bisogno di creare una costante locale, puoi usare define; 
    define('COSTANTE_LOCALE','valore');

}