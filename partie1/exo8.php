<h1>Exercice8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre
    passé en paramétre sous la forme:
</p>

<h2>Résultat</h2>

<?php

$table = 8;
$multi = 1;

while($multi <= 10) {
//   on staoque le résultat de la multiplication dans la variable $resultat
    $resultat = $multi * $table;

    // stockage du calcul et mise en forme sous format de string stoqué dans une variable $reponse
    // concatenation : l'opérateur . permet de coller plusieur chaine de charactère ensemble de maniè_re a n'en former qu'une.
    // https://www.php.net/manual/fr/language.operators.string.php
    $reponse = $table ." x " . $multi . " = " . $resultat." <br>";
    // affichage de la réponse au travers de la fonction echo
    echo $reponse;
    $multi++;
}
