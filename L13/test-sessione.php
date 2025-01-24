<?php
//Recupero la sessione 
session_start();
//Mostro il dato salvato nella pagina sessioni.php 
echo $_SESSION['nome'];