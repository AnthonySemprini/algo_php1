<h2>Exercice</h2>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (francais->"salut",anglais->"hello", espagnol->"hola")</p>

<h2>Resultat</h2>

<?php

$tableauPrenomLang = [
   "Henry"=>"Francais",
    "Harry"=>"Anglais",
    "Maria"=>"Espagnole", 
];
foreach (
    $tableauPrenomLang as $key => $value){
        echo "$key => $value<br>";
    }
$tableauBjrLang = [
    "Francais"=>"Salut",
    "Anglais"=>"Hello",
    "Espagnole"=>"Hola",
];
foreach (
    $tableauBjrLang as $key => $value){
        echo "$key => $value<br>";
    }
    echo "<br>";

    // foreach (
    //     $tableauBjrLang as 
    // )

echo $tableauPrenomLang["Henry"] ."<br>";
echo $tableauBjrLang[$tableauPrenomLang["Henry"]]." Henry"."<br>";

echo $tableauPrenomLang["Harry"] ."<br>";
echo $tableauBjrLang[$tableauPrenomLang["Harry"]]."Harry" ."<br>";

echo $tableauPrenomLang["Maria"] ."<br>";
echo $tableauBjrLang[$tableauPrenomLang["Maria"]]."Maria" ."<br>";



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


foreach ($tableauPrenomLang as $key => $value){
        echo "$key => $value<br>";
        echo $tableauBjrLang[$value] . " " . $key ."<br>";
    }