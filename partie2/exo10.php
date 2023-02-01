<h1>Exercice</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit)</p>

<h2>Resultat</h2>

<?php

$genre = ["Monsieur","Madame","Autre"];

echo  "<label for='genreSelect'>Choix de genre:</label>
<select name='genre' id='genre'>";
foreach ($genre as $select){
    echo "<option value='$select'>$select</option>";
};
echo "</select>";

echo "<br>";

$nomsInput = ["Nom","Prenom","Ville","Rue","Code postale","E-mail"];

foreach ($nomsInput as $info ){
    echo  "<label for='$info'>$info</label><br>
    <input type='text' id='$info'><br>";
}

$Job = ["Developpeur Logiciel","Designer Web","Integrateur","Chef de projet"];

echo  "<label for='genreJob'>Choix:</label>
<select name='Job' id='Job'>";
foreach ($Job as $select){
    echo "<option value='$select'>$select</option>";}

    echo "<br>";
    
    echo "<input type='submit'>";