<h1>Exercice3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction
    permettant de remplacer le mot "aujoud'hui" pr le mot "demain". 
    Afficher l'ancienne et la nouvelle phrase.
</p>

<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";
echo $chaineDeCaracteres."<br>";
$chaineDeCaracteres = str_replace("aujourd'hui","demain",$chaineDeCaracteres);
echo $chaineDeCaracteres;
