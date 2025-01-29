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
        $mail->Host = '';//Indirizzo del server SMTP. 
        $mail->SMTPAuth = true;//Dichiaro che il mio server SMTP utilizza l'autenticazione. 
        $mail->Username = '';//Lo username SMTP non è altro che l'indirizzo email.
        $mail->Password = '';//Password per accedere alla casella di posta 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Utilizzo un protocollo sicuro e vado a criptare la richiesta SSL/TLS
        $mail->Port = 465;

        //Informazioni su mittente e destinatario 
        
        //Contenuto dell'email. 

    }catch(Exception $e){
        echo "Errore durante l'invio del messaggio: $mail->ErrorInfo";
    }   

}