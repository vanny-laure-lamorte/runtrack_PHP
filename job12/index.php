<?php 

function leetspeak($string){

    
    $convert = [
        "a" =>"4", 
        "e" =>'3', 
        "i" =>"1", 
        "o" =>"0",
        "s" =>"5", 
        "t" =>"7", 
        "b" =>"8", 
        "g" =>"9"
    ]; 

    // Convertir la chaine en minuscules pour correspondre aux clés du tableau de correspondance
    $string = strtolower($string); 

    // Remplacer les lettres par leurs équivalents en leet speak
    $leetString = strtr($string, $convert);

    return $leetString; 
}

// Afficher la chaine de caractère après l'avoir convertie 
echo leetspeak("Je suis pomme")


?>