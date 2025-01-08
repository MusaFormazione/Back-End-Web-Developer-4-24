<?php require_once './inc/functions.php'; ?>
<?php 
$valori = require './inc/variables.php'; 
// echo $variabileNonEsportata;//undefined variables
echo $valori;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php getTitle($title) ?></title>
</head>
<body>

    <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="chi-siamo.php">Chi Siamo</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </header>

<?php
$ciao = 'Ciao Mondo!';
?> 