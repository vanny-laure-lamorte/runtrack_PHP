
<!-- Affichez tous les nombres de 0 à 1337 compris sauf 26, 37, 88, 1111 en mettant
un retour à la ligne entre chaque nombre -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
for ($i = 0; $i<1337; $i++){
    if ($i==26|| $i == 37 || $i == 88 || $i ==1111){
        continue;
    }
    else {
        echo "$i <br>";
    }
}
?>
</body>
</html>