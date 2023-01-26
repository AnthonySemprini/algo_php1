<h1>Exercice5</h1>

<p>Ecrire un algorthme qui declare une valeur en francs et qui la convertit en euros. 
    Attention, la valeur générée devra être arrondie à 2 décimale. 
</p>

<h2>Résultat</h2>

<?php


$chaineDeCarateres ="Montant en francs :";
echo $chaineDeCarateres;
$Francs = "100";
echo "$Francs <br>";
$TauxDeChange = "0.1524";
$Euros = $TauxDeChange * $Francs;
echo "$Francs francs = $Euros €" ;