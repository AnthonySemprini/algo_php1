<h1>Exercice14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours)</p>

<h2>Resultat</h2>

<?php


$birthDate = new DateTime ("1985-01-17");$currentDate= new DateTime();

$result = $birthDate->diff($currentDate);
echo $result->format ('%Y ans');