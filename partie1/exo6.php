<h1>Exercice6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à regler à partir de la quantité
    d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20%->0.2)
</p>

<h2>Résultat</h2>

<?php

$prixHT = 9.99;
echo "Prix unitaire de l'article : $prixHT € <br>";
$nbArticles = 5;
echo "Quantité : $nbArticles <br>";
$totalHT = $nbArticles * $prixHT;
$tauxTVA = 0.20;
echo "Taux de TVA : $tauxTVA<br>";
$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
echo "Le total TTC est de $totalTTC €";