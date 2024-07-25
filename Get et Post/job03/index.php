
<!-- Créez un formulaire de connexion de type POST (se demander, pourquoi pas GET ?) ayant deux champs username et password. Après validation du formulaire : Si le username est “John” et le password est “Rambo” afficher “ce n'est
pas ma guerre” Sinon afficher “votre pire cauchemar” -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input name="username" id="username" value="Enter a value..." />
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" id="password" value="Enter a value..." />
        </div>
        <div>
            <button>Envoyer</button>
        </div>
    </form>


</body>

</html>
<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = ($_POST['username']);
    $password  = ($_POST['password']);

    if ($username =="John" && $password=="Rambo"){
        echo "Ce n'est pas ma guerre"; 
    }
    else {
        echo"Votre pire cauchemard"; 
    }
}



?>