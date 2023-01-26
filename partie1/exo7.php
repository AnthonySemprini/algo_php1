<h1>Exercice7</h1>

<p>Ecrire un algorithme permettant de renvoyer la categorie d'un enfant en fonction de son age: <br>
-Poussin: entre 6 et 7 ans <br>
-Pupille: entre 8 et 9 ans <br>
-Minime: entre 10 et 11 ans <br>
-Cadet: à partir de 12 ans <br>
-Si la catyegorie n'est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

$age = 10;
if ($age < 0 ){
    echo "veuillez naitre avant de vouloir faire du sport";
} elseif ($age <= 7){
    $resultat = 'Poussin'; 
} elseif ($age <= 9){
    $resultat = 'Pupille';
} elseif ($age <= 11){
    $resultat = 'Minime';
} elseif ($age <= 17)  {
    $resultat = 'Cadet';
} else {
    echo "Age invalide";
}
echo "La personne qui a $age ans est : $resultat<br>";