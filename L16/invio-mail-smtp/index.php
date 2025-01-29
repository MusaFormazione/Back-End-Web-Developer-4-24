<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Scrivici un'email. </h2>
<form action="send_mail.php" method="POST">
    
    <input type="text" placeholder="Nome" name="name" required>
    
    <input type="email" placeholder="E-mail" name="email" required>
    
    <p>Messaggio:</p>
    <textarea name="message" required></textarea>

    <button>Invia</button>
</form>
</body>
</html>