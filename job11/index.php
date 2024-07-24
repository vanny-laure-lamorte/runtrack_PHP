
<!-- Créez une fonction nommée “occurrences()”.
Cette fonction prend en paramètre une chaîne de caractères nommée
“$str” et un caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”. -->

<?php

use LDAP\Result;

function occurences($str, $char){
return substr_count($str, $char); 
}

$result = occurences("Je suis une pomme et une poire", 'e');

echo $result;

?>