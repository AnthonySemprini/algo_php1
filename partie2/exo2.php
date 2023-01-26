    <h1>Exercice2</h1>

    <p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays
affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
 
<h2>Résultat</h2>



<!--tableau html
    
<table>
    <tr>
        <th>Pays</th>
        <th>Capitale</th>
    </tr>
    <tr>
        <td>France</td>
        <td>Paris</td>
    </tr>
    <tr>
        <td>Allemagne</td>
        <td>Berlin</td>
    </tr>
    <tr>
        <td>USA</td>
        <td>Washington</td>
    </tr>
    <tr>
        <td>Italie</td>
        <td>Milan</td>
    </tr>
</table> -->


<?php

// entete tableau
echo "<table>
<tr>
    <th>Pays</th>
    <th>Capitale</th>
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