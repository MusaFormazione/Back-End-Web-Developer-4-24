<?php

$input = '<script>alert("xss")</script>';
// echo $input;

$safeInput = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
echo $safeInput;

//altro sistema per la codifica di simboli

//codifica anche HTML entities
$safeInput = htmlentities($input, ENT_QUOTES, 'UTF-8');
echo $safeInput;

//codifica di valori per url
$nome = 'Mario Rossi';
$nomeSicuro = htmlspecialchars($nome);
$nomePerUrl = urlencode($nomeSicuro);
$nomeNascosto = base64_encode($nomePerUrl);

echo "http://musa4-24.test/L12/htmlspecialchars.php?id=5&nome=$nomeNascosto";