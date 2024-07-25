
<!-- Développez un algorithme qui affiche le nombre d’arguments $_GET. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        Name: <input type="text" name ="prenom">
        Prenom: <input type="text" name="nom">
        Age: <input type="text" name="30">
        <input type="submit">
    </form>
</body>

</html>

<?php

// Compte tous les get dans la page html
echo count($_GET); 

// isset — Détermine si une variable est déclarée et est différente de null
if (isset($_GET['prenom']) && isset($_GET["nom"]))
echo "Nom de l'étudiant: " .$_GET['prenom'].$_GET['nom'];
?>