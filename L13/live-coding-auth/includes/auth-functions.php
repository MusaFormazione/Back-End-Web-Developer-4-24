<?php
session_start();
require_once './includes/connection.php';


class ResponseObject{
    public function __construct(bool $success, ?string $message) {
        $this->success = $success;
        $this->message = $message ?? '';
    }
}

function register(string $nome, string $email, string $password): ResponseObject {

    global $db;
    $role = 'customer';//Il ruolo è definito statico per una questione di sicurezza

    if (empty($nome) || empty($email)|| empty($password)) 
    return new ResponseObject(false,'Mancano alcuni campi');

    try {

        var_dump($db);

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utenti (nome, email, role, password) VALUES (:nome, :email, :role, :password)";
        $query = $db->prepare($sql);

        $query->bindParam(':nome', $nome, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result) {
            header('Location: login.php');
        }
        return new ResponseObject(true, null);

    }catch (PDOException $e) {

        //Controllo se il codice di errore ricevuto equivale a quello per la chiave duplicata. 
        if($e->getCode() == 23000){
            return new ResponseObject(false, 'Utente già registrato');
        }

        return new ResponseObject(false, 'Errore: ' . $e->getMessage());
    }

}

function login()
{

}

function isLoggedIn()
{

}