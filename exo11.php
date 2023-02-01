<h1>Exercice11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>

<h2>Resultat</h2>

<?php

//$jour = [ "lundi","mardi","mercerdi","jeudi","vendredi","samedi","dimanche"];
//$moi = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];

$date= "23-03-2018";
  echo date('l,F,o',strtotime($date));

  