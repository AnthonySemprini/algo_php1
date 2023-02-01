<h1>Exercice10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour reglée un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombrede billets de 10€ et 5€, de pieces de 2€ et 1€.</p>

<h2>Résultat</h2>

<?php

$aPayer = 152;
$verse = 200;
$rendu = $verse - $aPayer;

$array_of_bill = [20,10,5,2,1];

// while ($rendue > 0){

$array_of_bill = [20,10,5,2,1];
foreach ($array_of_bill as $billet ){
    echo "billet".$billet." : ". intdiv( $rendu , $billet)."<br>";
    $rendue = $rendu%$billet;
}



    // $nbBillet_20 = intdiv($rendue,20);
    // echo "Nb de Billet de 20€ à rendre : " . $nbBillet_20;

    // $reste = $rendue % 20;
    // echo " il reste a payer : " . $reste . " €";


