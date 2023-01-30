<h1>Exercice9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);</p>

<h2>Resultat</h2>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!--<div>
    <input type="radio" id= "Masculin">
    <label for="Masculin">Masculin</label><br>
    <input type="radio" id= "Feminin">
    <label for="Feminin">Feminin</label><br>
    <input type="radio" id= "Autre">
    <label for="Autre">Autre</label>

   </div> -->
</body>
</html>

<?php

$Genre = ["Masculin","Feminin","Autre"];


foreach ($Genre as $radioGenre){
    echo "<input type='radio' id= '$radioGenre'>".
    "<label for='$radioGenre'> $radioGenre </label><br>";
}
echo "</radio>";

