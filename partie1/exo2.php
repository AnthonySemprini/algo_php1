<h1>Exercice2</h1>

<p>A partir de oa phrase de l'exercice 1, écrire l'instruction 
    permettant de compter le nombre de mots contenus dans cell-ci.</p>

    <h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui"; 
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";