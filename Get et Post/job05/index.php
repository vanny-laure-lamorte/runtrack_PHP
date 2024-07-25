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
            <label for="largeur">Largeur: </label>
            <input name="largeur" id="largeur" value="" />
        </div>
        <div>
            <label for="hauteur">Hauteur: </label>
            <input name="hauteur" id="hauteur" value="" />
        </div>
        <div>
            <button>Envoyer</button>
        </div>
    </form>
</body>

</html>

<?php

$i = 0;
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];

    echo "<pre>";
    for ($i; $i < $largeur / 2; $i++) {
        echo str_repeat(" ", $largeur / 2 - 1 - $i);
        echo "/";
        echo str_repeat("_", $i * 2);
        echo "\\";
        echo "<br>";
    }

    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        echo str_repeat(" ", $largeur - 2);
        echo "|";
        echo "<br>";
    };

    echo "|";
    echo str_repeat("_", $largeur - 2);
    echo "|";

    echo "</pre>";
}

?>