<h1>Exercice4</h1>

<p> A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l'URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Resultat</h2>

<?php

// entete tableau
echo "<table>
<tr>
    <th>Pays</th>
    <th>Capitale</th>
    <th>Lien Wiki</>
</tr>";

$capitales =[
     "France"=>"Paris",
     "Allemagne"=>"Berlin",
     "USA"=>"Washington",
     "Italie"=>"Rome"
 ];
 
//corp tableau
foreach ($capitales as $key => $value){
        $key =strtoupper($key);
       echo  "<tr>" ,
        "<td>$key</td>",
        "<td>$value</td>",
        "</tr>";
    }
    echo "</table>";