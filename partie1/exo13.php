<h1>Exercice13</h1>

<p>Calculer la moyenne générale d'un éléve dont les notes sont renseignées dans un tableau(pas de coefficient). Ell devra etre affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

// $notes = '10,12,8,19,3,16,11,13,9,10';



$notesTab = array (10,12,8,19,3,16,11,13,9);

echo "les notes obtenues sont : ";
foreach($notesTab as $note ){
    echo $note .", ";
}
echo "<br>";
echo "Total : " . array_sum($notesTab) ."<br>";
echo "Moyenne : ".round(array_sum($notesTab)/count($notesTab),2)."<br>";


//echo "je sais faire une somme : <br>";
//foreach($notesTab as $note ){
  //  $sumNotes = $sumNotes + $note;

    //echo $sumNotes ."<br>";
//}

