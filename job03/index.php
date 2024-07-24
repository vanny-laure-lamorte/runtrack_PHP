
<!-- Affichez tous les nombres compris entre 0 et 1337 en mettant un retour à la 
ligne entre chaque nombre.
Le nombre 42 doit être en gras et souligné. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
for ($i=0 ; $i < 1338; $i ++){
    if( $i == 42 ) {
        echo "<strong><u>$i</u></strong><br>";
    }
    else {
        echo "{$i} <br>"; 
    }
}
?>
   
</body>
</html>
