<?php
session_start();
require_once './includes/connection.php';

//Preparo la sessione inserendo la chiave logged_in con valore inizialmente impostato a false. 
//Quando l'utente effettuerà il login, questo valore cambierà e verrà adoperato per nascondere o mostrare determinati contenuti 
$_SESSION['logged_in'] = false;


class ResponseObject
{
    public readonly bool $success;
    public readonly string $message;

    public function __construct(bool $success, ?string $message)
    {
        $this->success = $success;
        $this->message = $message ?? '';
    }
}

function register(string $nome, string $email, string $password): ResponseObject
{

    global $db;
    $role = 'customer';//Il ruolo è definito statico per una questione di sicurezza

    if (empty($nome) || empty($email) || empty($password))
        return new ResponseObject(false, 'Mancano alcuni campi');

    try {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utenti (nome, email, role, password) VALUES (:nome, :email, :role, :password)";
        $query = $db->prepare($sql);

        $query->bindParam(':nome', $nome, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

        $result = $query->execute();

        if ($result) {
            header('Location: login.php?message=Account Creato!');
        }
        return new ResponseObject(true, null);

    } catch (PDOException $e) {

        //Controllo se il codice di errore ricevuto equivale a quello per la chiave duplicata. 
        if ($e->getCode() == 23000) {
            return new ResponseObject(false, 'Utente già registrato');
        }

        return new ResponseObject(false, 'Errore: ' . $e->getMessage());
    }

}

function login(string $email, string $password): ResponseObject
{

    global $db;

    if (empty($email) || empty($password))
        return new ResponseObject(false, 'Mancano alcuni campi');

    //recuperare l'utente per verificare la password
    $sql = 'SELECT * FROM utenti WHERE email = :email';
    $query = $db->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);

    if (!$query->execute())
        return new ResponseObject(false, 'Errore nella richiesta, riprova più tardi');

    $rows = $query->fetchALL();


    //In questo caso, se la query non restituisce i risultati, significa che l'utente non è stato trovato, quindi con buona probabilità l'email fornita non è presente e quindi comunichiamo all'utente che le credenziali sono errate
    //Se l'utente viene trovato abbiamo un numero di righe come risultato superiore a zero In caso contrario, l'utente non è stato trovato
    if (count($rows) == 0 )
        return new ResponseObject(false, 'Credenziali errate.');
    
    $user = $rows[0];
    //verifica password
    if(!password_verify($password, $user['password']))
        return new ResponseObject(false, 'Credenziali errate.');
    
    
    $_SESSION['logged_in'] = true;
    $_SESSION['user'] = [
        'nome' => $user['nome'],
        'email' => $user['email'],
        'role' => $user['role']
    ];
    

    header('Location: dashboard.php');
    return new ResponseObject(true, null);
}

function isLoggedIn(){
    return $_SESSION['logged_in'];
}

function logout(){
    session_unset();//rimuove tutti i dati in $_SESSION
    session_destroy();
    setcookie(session_name(),'',time() - 3600,'/');
    $_SESSION['logged_in'] = false;

    header('Location: index.php');
}