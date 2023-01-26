<h1>Exercice4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est un palindrome.</p>

<h2>Résultat</h2>

<?php

$chaineDeCaracteres=" engage le jeu que je le gagne";
$chaineDeCaracteres = strtolower($chaineDeCaracteres);
echo $chaineDeCaracteres."<br>";
$chaineDeCaracteres = str_replace(" ", "", $chaineDeCaracteres);
echo $chaineDeCaracteres."<br>";
$chaineDeCaracteres = strrev($chaineDeCaracteres);
echo $chaineDeCaracteres;