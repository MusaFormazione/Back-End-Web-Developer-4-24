<?php
echo "<p>get:</p>";
echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo "<p>post:</p>";
echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo "<p>cookie:</p>";
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

echo "<p>server:</p>";
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';