<?php

function calcul($nombre1, $op, $nombre2){

   switch ($op) {
    case "+": 
        $result = $nombre1 + $nombre2;
        echo "<br>";
        break;    
        
    case "-": 
        $result = $nombre1 - $nombre2;
        echo "<br>";
        break;

    case "x": 
        $result = $nombre1 * $nombre2;
        echo "<br>";
        break;

    case "/": 
        $result = $nombre1 / $nombre2;
        echo "<br>";
        break;
    default: 
        echo "Error"; 
    }

    echo "$nombre1 $op $nombre2 = $result <br>";
}

calcul(1, "+", 2); 
calcul(1, "x", 2); 
calcul(1, "-", 2); 
calcul(1, "/", 2); 

?>