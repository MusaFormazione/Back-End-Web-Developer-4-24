<?php
//Utilizzo la variabilità in semplicemente per evitare di scrivere il tempo più volte. 
$time = 30;
//Utilizzo ini set per impostare una durata della sessione e la stessa durata sarà impostata anche per il cookie. 
ini_set('session.gc_maxlifetime', $time);
ini_set('session.cookie_lifetime', $time);

//Se la sessione non esiste ancora la sto avviando, altrimenti la sto recuperando. 
session_start();

//Salvo un dato nella sessione. 
$_SESSION['nome'] = 'Michele';

?>
<!-- Cliccando su questo link verrai portato in una seconda pagina che accede alla sessione e mostra se il dato è ancora disponibile oppure no.  -->
<a href="test-sessione.php">Verifica i dati della sessione</a>


<!-- Qui sotto c'è un semplice timer per mostrare il tempo che scorre, e sapere se la sessione è terminata o meno.  -->
<div id="time"></div>

<script>

let count = <?=$time?>;

const timer = setInterval(function() {
    count--;
    if(count == 0){
        document.getElementById("time").innerHTML = 'Sessione Terminata';
        clearInterval(timer);
        return;
    }
    document.getElementById("time").innerHTML = count;
}, 1000)

</script>