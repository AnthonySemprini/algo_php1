<h1>Exercice7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.
Exemple :
genererCheckbox($elements);
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

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
    
</body>
</html>
<div>
    <input type="checkbox" name="choix1" id="choix1">
    <label for="choix1">choix 1</label><br>
    <input type="checkbox" name="choix2" id="choix2">
    <label for="choix2">choix 2</label><br>
    <input type="checkbox" name="choix3" id="choix3">
    <label for="choix3">choix 3</label>
</div>

<?php

$choix = ["choix1","choix2","choix3"];

foreach ($choix as $checkChoix){
   echo <input type="checkbox" name="choix1" id="choix1">
    <label for="choix1">choix 1</label><br>
}

