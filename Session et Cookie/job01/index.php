
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
<?php

// Fonction qui permet d'initialiser une session
session_start(); 

// Incrementer le nombre de visite
if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}
$_SESSION["nbVisites"] ++;

// Reinitialiser le compteur si le bouton reset est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
}

// Afficher le nombre de visite
echo "Nombre de visites : " . $_SESSION['nbVisites'];

?>   
   <form method="post">
    <button type="submit" name="reset">RESET</button><br>
    </form>

</body>
</html>
