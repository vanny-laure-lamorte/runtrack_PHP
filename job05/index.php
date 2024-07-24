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

for ($i =0; $i<=100; $i++){
   
    if ($i==42) {
        echo "LA PLATEFORME <br>"; 
    }
    elseif ($i>=0 && $i<=20){
        echo "<i>$i<i> <br>"; 
    }
    elseif ($i>=25 && $i<=50){
        echo "<u>$i<u> <br>";
    }
    else {
        echo "$i <br>"; 
    }
}

?>
    
</body>
</html>