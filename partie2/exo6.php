<h1>exercice6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.
Exemple :
$elements = array("Monsieur","Madame","Mademoiselle");
alimenterListeDeroulante($elements);</p>

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
    <!-- <label for="genreSelect">Choix de genre:</label>

    <select name="genre" id="genre">
     <option value=""> --svp select un genre--</option>
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
        <option value="Autre">Autre</option>
    </select> -->
</body>
</html>

<?php

$genre = ["Monsieur","Madame","Autre"];

echo  "<label for='genreSelect'>Choix de genre:</label>
<select name='genre' id='genre'>";
foreach ($genre as $select){
    echo "<option value='$select'>$select</option>";

};
echo "</select>";