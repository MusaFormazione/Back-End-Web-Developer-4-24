<?php

$nome = 'numero';

//Assumendo che il valore della variabile $nome possa cambiare, io genero un variabile il cui nome sarà pari al valore della variabile $nome. 
$$nome = 4; //In questo caso, essendo che il valore della variabile $nome è 'numero', sto creando la variabile $numero. 

echo $numero;