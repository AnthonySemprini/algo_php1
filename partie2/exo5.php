<h1>Exercice5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>

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
    <form>
        <label for="fname">Nom</label><br>
        <input type="text" id="fname"><br>
        
        <label for="lname">Prenom</label><br>
        <input type="text" id="lname"><br>

        <label for="city">Ville</label><br>
        <input type="text" id="city"><br>
    </form>




</body>
</html>
 
<?php

$nomsInput = ["Nom","Prenom","Ville"];

echo "<form> 
        

