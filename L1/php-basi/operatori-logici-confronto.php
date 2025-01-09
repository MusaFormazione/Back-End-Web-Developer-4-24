<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php    
    $anni = 30;
    ?>
    <!-- apertura php alternativa, equivale a scrivere "echo" in php -->
    <?php echo $anni == 30 //output: 1, il booleano true viene convertito in numero 1 ?>
    
    <br>
    Anni == 30
    <?php var_dump($anni == 30); //con var_dump() possiamo vedere il valore reale dell'operazione?>
    
    <br>
    Anni == '30'
    <?php var_dump($anni == '30'); //true perchè la stringa viene convertita in numero?>
    
    <br>
    Anni != 30
    <?php var_dump($anni != 30) ?>
    
    <br>
    Anni === '30'
    <?php var_dump($anni === '30');//false: perchè anche se il valore numerico è uguale non avviene la conversione in numero. Di base sto richiedendo che sia il valore che il tipo di dato siano uguali ?>
    
    <br>
    Anni !== '30'
    <?php var_dump($anni !== '30');//true: In questo caso il valore è uguale, ma il tipo di dato è diverso?>

    <br>
    Anni > 30
    <?php var_dump($anni > 30);//false: 30 non è superiore a 30?>
    
    <br>
    Anni < 30
    <?php var_dump($anni < 30);//false: 30 non è inferiore a 30?>
    
    <br>
    Anni <= 30
    <?php var_dump($anni <= 30);?>
    
    <br>
    Anni >= 30
    <?php var_dump($anni >= 30);?>

    <br>
    operatore ! inverte il valore
    <?php var_dump(!($anni == 30) );?>

    <hr>
    <h3>spaceship:</h3>
    Anni <=> 29
    <?php var_dump($anni <=> 29);?>
    <p>1 significa che anni è superiore a 29</p>

    Anni <=> 30
    <?php var_dump($anni <=> 30);?>
    <p>0 significa che anni è uguale a 30</p>

    Anni <=> 31
    <?php var_dump($anni <=> 31);?>
    <p>-1 significa che anni è inferiore a 31</p>

    <hr>
    <h3>Operatori logici:</h3>

    <?php
    
    $a = true;
    $b = true;

    ?>
    Tra $a e $b ce n'è almeno una vera?
    <?php var_dump($a || $b);?>
    <?php var_dump($a OR $b);?>
    <p>Una delle due condizioni deve essere vera</p>

    $a e $b sono entrambe vere?
    <?php var_dump($a && $b);?>
    <?php var_dump($a AND $b);?>
    <p>Entrambe le condizioni devono essere vere allo stesso tempo. </p>

    $a e $b XOR?
    <?php var_dump($a XOR $b);?>
    <p>Ci deve essere una condizione vera ed una falsa, necessariamente. </p>


    
</body>
</html>