
<!-- 
Job01
a. Créer une variable
contenant la chaîne de caractères suivante “LaPlateforme”. Affichez le
contenu de la variable.
b. Créer deux autres variables. L’une contenant la
chaîne de caractères suivante : “Vive” et l’autre “!”. Affichez “Vive LaPlateforme !” en concaténant l’ensemble des variables.
c. Créez maintenant une variable contenant pour valeur le chiffre 6.
Affichez son contenu. Ajoutez 4 à la variable et affichez à nouveau le contenu.
d. Créez une dernière variable et affectez-lui “true”. Affichez son contenu.
Affectez-lui “false” et affichez à nouveau le contenu. -->


<?php
$nom = "Lamorte";
$prenom = "Vanny";
$age = 30;

echo "Je m'appelle ".$nom. " ".$prenom. " et j'ai ".$age. " ans <br>";

$ajout = 6;
$age = $age+ $ajout;

echo "Je m'appelle ".$nom. " ".$prenom. " et j'ai ".$age. " ans <br>";

$age = $age + 4; 

echo "Je m'appelle ".$nom. " ".$prenom. " et j'ai ".$age. " ans <br>";

$bool = true;
echo $bool;

$bool = false;
echo $bool;

?>
