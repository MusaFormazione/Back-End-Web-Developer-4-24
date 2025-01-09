<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazie per aver inviato il messaggio</title>
</head>

<body>

    <?php

    // var_dump(empty($_POST['nome']));
    // var_dump(empty($_POST['email']));

    //Primo livello di verifica: Controllo che tutti i dati siano esistenti 
    if (!isset($_POST['email']) || !isset($_POST['messaggio'])) {
        //L'utente potrebbe essere finito in questa pagina, semplicemente incollando l'indirizzo. In questo caso i dati potrebbero essere mancanti e quindi rispedisco l'utente alla pagina dove c'è il Form da compilare 
        header('Location: index.php');
        exit;
    }

    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];
    //Secondo livello di verifica: Controllo che i valori dei dati esistano e non siano null 
    if (empty($email) || empty($messaggio)) {
        echo 'Devi compilare il form';
        echo '<script>
                    setTimeout(()=>{
                        location.href = "index.php";
                    },5000)
                </script>';
        exit;
    }

    //salvo il messaggio in un file
    $file = __DIR__.'/msg/.messaggio.txt';
    $fileContent = "Mittente: $email"."\r\n"."Messaggio: $messaggio"."\r\n";

    file_put_contents($file, $fileContent , FILE_APPEND);


    //invio una email:

    $a = 'test@example.com';
    $oggetto = 'Contatto dal sito';
    $headers = "From: $email"."\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
    $headers .= "CC: altrapersona@esempio.it"."\r\n";
    $headers .= "reply: $email"."\r\n";

    if(!mail($a, $oggetto, $messaggio, $headers)){
        echo "impossibile inviare il messaggio, ritenta più tardi";
        exit;
    }
    ?>

    <h1>Messaggio ricevuto</h1>
    <?php if (!empty($_POST['nome'])): ?>
        <h2>Ciao <?= $_POST['nome'] ?>!</h2>
    <?php endif; ?>
    <p>Abbiamo ricevuto il tuo messaggio: <?= $messaggio ?>!</p>
    <p>Ti contatteremo all'email: <?= $email ?></p>




</body>

</html>