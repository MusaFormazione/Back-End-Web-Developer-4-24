<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD'] = 'POST'){


    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
    die('Tutti i campi sono obbligatori');

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    $mail = new PHPMailer(true);

    try{
        //Configurazione server Smtp 
        $mail->isSMTP();
        $mail->Host = 'gnldm1022.siteground.biz';//Indirizzo del server SMTP. 
        $mail->SMTPAuth = true;//Dichiaro che il mio server SMTP utilizza l'autenticazione. 
        $mail->Username = 'info@captain-edward.tech';//Lo username SMTP non è altro che l'indirizzo email.
        $mail->Password = '$54z_fq2~G1#';//Password per accedere alla casella di posta 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Utilizzo un protocollo sicuro e vado a criptare la richiesta SSL/TLS
        $mail->Port = 465;

        //Informazioni su mittente e destinatario
        $mail->setFrom('info@captain-edward.tech','Sito web');//E-mail del mittente (Ho inserito anche il nome del mittente)
        $mail->addAddress('ricezione@captain-edward.tech');//Email del destinatario. 
        $mail->addAddress('bonopor804@kuandika.com'); 
        
        //Contenuto dell'email. 
        $mail->isHTML();//Il contenuto dell'e-mail ora accetta l'HTML
        $mail->Subject = 'Messaggio inviato dal sito';//L'oggetto dell'e-mail. 
        $mail->Body = "
            <h1>Nuovo messaggio:</h1>
            <p><b>Nome:</b>$name</p>
            <p><b>E-mail:</b>$email</p>
            <p><b>Messaggio:</b>$message</p>
        ";//Il contenuto dell'email. 
        $mail->AltBody = "Nome: $name\nEmail: $email\nMessaggio: $message";//Contenuto alternativo per i client e-mail che non supportano l'HTML

        //Invia la mail. 
        $mail->send();
        echo 'Messaggio inviato con successo';
    }catch(Exception $e){
        echo "Errore durante l'invio del messaggio: $mail->ErrorInfo";
    }   

}else{
    echo "Richiesta non valida";
}