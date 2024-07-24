<!-- Affichez les nombres de 1 à 100 en mettant un retour à la ligne.
Si le nombre est un multiple de 3, affichez “Fizz”
Si le nombre est un multiple de 5, affichez “Buzz”
Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for ($i=0; $i <=100; $i++) {  

        if($i%5 ==0 && $i%3==0){
            echo"FizzBuzz <br>";
        }
        elseif ($i%3 ==0){
            echo "Fizz <br>";
        }
        elseif($i%5==0){
            echo "Buzz <br>";
        }
        else {
            echo "$i<br>";
        }
    }
    ?>


    
</body>
</html>