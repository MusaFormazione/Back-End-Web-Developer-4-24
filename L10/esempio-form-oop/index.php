<?php
include './Form-handler.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$form = new FormHandler();


$form->addSelectField([
    "1" => "Roma",
    "30" => "Milano",
    "67" => "Napoli"
],
[
    "name" => "city",
    "required" => true,
]);

$form->addInputField([
    "name" => "nome",
    "type" => "text",
    "placeholder" => "text",
    "required" => true
]);

$form->addSubmitBtn('Save');

$form->render();
?>
    
</body>
</html>