<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        echo "<h3>Output della funzione prova</h3>";
        $prova = fn():string => 'ciao';
        echo $prova();//scrivo a schermo "ciao";
        
        $raddoppia = fn(int|float $numero):int|float => $numero * 2;
        
        
        echo "<h3>Funzione che raddoppia il valore 4</h3>";
        echo $raddoppia(4);
        echo "<h3>Funzione che raddoppia il valore 8465</h3>";
        echo $raddoppia(8465);
        
        echo "<h3>Funzione che accede ad una variabile globale</h3>";
        $globale = 5;
        
        $fnConVarEsterna = fn() => "Il valore della variabile globale è: $globale";
        
        echo $fnConVarEsterna();
        
        
        echo "<h3>Trasformazione di un testo in grassetto</h3>";
        $bold = fn($testo) => "<b>$testo</b>";

        echo $bold('Ciao Mondo!');

    ?>

</body>
</html>