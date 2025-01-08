<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Le variabili in PHP iniziano con il simbolo $, il quale deve essere seguito da lettere(o tratto basso) o numeri

//L'operatore di assegnamento è il simbolo =

$variabile = 3;
echo $variabile;
echo '<br>';

//Ad una variabile posso assegnare un'operazione matematica 
$somma = 1 + 1;
echo $somma;
echo '<br>';
//Le variabili sono riassegnabili 
$somma = 10;
echo $somma;
// var_dump($variabile); output descrittivo

echo '<hr>';

$numero = 4;
$numeroDecimale = 4.5;
$string = 'Ciao Mondo!';
$bool = true;
$array = [1,2,3];//Sistema nuovo 
$arrayOld = array(1,2,3);//Sistema vecchio 

//A differenza di javascript, PHP non converte in stringa gli array, quindi non puoi usare echo ma dovrai selezionare uno specifico indice per poter fare un output. 
echo $array[0];//1
echo $arrayOld[2];//3
echo '<br>';


//stringhe
$stringaUno = "Apici doppi";
$stringaDue = 'Apici singoli';

echo $stringaUno;
echo '<br>';
echo $stringaDue;
echo '<hr>';

//Concatenamento di stringhe 
$nome = "Michele";

$concatenamento1 = 'Ciao, mi chiamo ' . $nome;
echo $concatenamento1;
echo '<br>';

//Interpolazione di stringhe, possibile solo con apici doppi. 
$concatenamento2 = "Ciao, mi chiamo $nome";
echo $concatenamento2;

//Le variabili Heredoc Permettono l'inserimento di testi lunghi, utili per la scrittura all'interno di file mantenendo la formattazione. Concedono anche l'interpolazione di variabili
$varHeredoc = <<<EOD
<hr>
<p>
Variabile Heredoc<br>
Lorem $nome ipsum dolor sit amet consectetur adipisicing elit.
 Ratione, et dicta quasi minus, soluta odio quae a enim labore, sit provident molestias saepe. 
Modi vitae, dicta molestiae accusamus quidem facere!
</p>
EOD;

echo $varHeredoc;

//Escape

$escapeDelDollaro = "\$dollari";
// echo $escapeDelDollaro;

$escapeApostrofo = 'Escape dell\'apostrofo';
// echo $escapeApostrofo;

$escapeVirgolette = "<div class=\" col \"></div>";
echo $escapeVirgolette;

//caratteri speciali 

$var = "Questa riga va \n a capo nei files";
echo $var;
echo '<hr>';

//operazioni miste

$str = '100';
//Se una stringa composta di soli numeri viene moltiplicata per un numero La stringa si converte in numero e la moltiplicazione viene svolta correttamente 
echo $str * 2;

echo gettype($str * 1);//integer, La stringa moltiplicata per uno viene convertita in numero mantenendo il valore iniziale numerico. 

?>
</body>
</html>