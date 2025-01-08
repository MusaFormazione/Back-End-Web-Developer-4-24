<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        td{
            border: 1px solid #000;
        }
    </style>
</head>
<body>

    <?php
       $numero = 1;
    ?>

    <div>
        Valore della variabile numero all'inizio: 
        <?php echo $numero //1 ?>
    </div>

    <?php
       $numero += 5;
    ?>

    <div>
        Valore della variabile numero dopo la somma: 
        <?php echo $numero //6 ?>
    </div>


    <?php
       $numero -= 2;
    ?>

    <div>
        Valore della variabile numero dopo la sottrazione: 
        <?php echo $numero //4 ?>
    </div>

    <?php
       $numero++;//Incrementa di uno il valore della variabile. 
    ?>

    <div>
        Valore della variabile numero dopo l'incremento: 
        <?php echo $numero //5 ?>
    </div>

    <?php
       $numero--;//Decrementa di uno il valore della variabile. 
    ?>

    <div>
        Valore della variabile numero dopo il decremento: 
        <?php echo $numero //4 ?>
    </div>


    <?php
       $html = '<table>';
       $html .= '<tr>';
       $html .= '<td>Prima cella</td>';
       $html .= '<td>Seconda cella</td>';
       $html .= '<td>Terza cella</td>';
       $html .= '</tr>';
       $html .= '</table>';
       ?>

    <div>
       <h2>
           Tabella costruita con php
       </h2>
        <?php echo $html ?>
    </div>

</body>
</html>