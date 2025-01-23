<?php
//sanitizzazione email
$email = "esempio@miosito.it<script>alert('XSS')</script>";
$result = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $result;
// var_dump($result);
echo "<br>";

//sanitizzazione int
$integer = '123abc456';
$result = filter_var($integer, FILTER_SANITIZE_NUMBER_INT);
echo "$integer => $result";
echo "<br>";

//sanitizzazione float
$float = "123";
$result = filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
echo $result;
echo "<br>";
var_dump($result);