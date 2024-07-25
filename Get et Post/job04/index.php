<!-- Créez un formulaire de connexion de type POST (se demander, pourquoi pas
GET ?) ayant deux champs username et password.
Après validation du formulaire :
➔ Si le username est “John” et le password est “Rambo” afficher “ce n'est
pas ma guerre”
➔ Sinon afficher “votre pire cauchemar” -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="nombre">Nombre</label>
            <input name="nombre" id="nombre" value="Enter a value..." />
        </div>    
        <div>
            <button>Envoyer</button>
        </div>
    </form>
</body>

</html>

<?php


// is_numeric permet de vérifier qu'il s'agit d'un chiffre
if (isset($_GET['nombre'])){
   $nombre = $_GET['nombre']; 
if (is_numeric($nombre)){

   if ($nombre %2 == 0) {
    echo "Nombre pair"; 
   }
   else {
    echo "Nombre impair";
   }

} else {
    echo "Please enter a digit.";
}   
   
}



?>