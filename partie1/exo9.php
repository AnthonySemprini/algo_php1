<H1>Exercice9</H1>

<p>Nous souhaitons savoir si une personne etst imposable en fonction de son age et de son sexe. <br>
Si la personne est une femme dont l'age est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable(sinon ce n'est pas le cas,"non imposable").  </p>

<h2>Résultat</h2>

<?php

// opérateurs de comparaison en PHP :
// https://www.php.net/manual/fr/language.operators.comparison.php


$age = 10;
$sexe = 'M';
// if(($age >= 35 and $sexe = "F") or 
//     ($age >= 20 and $sexe = "M")){
//     $resultrat = "La personne est imposable";
//     echo $resultrat;
// }else {
//     echo "la personne n'est pas imposable";
//   }


if($sexe == "F") {
    echo "je suis une femme";
    if ($age>=18 and $age<=35){
        echo "  imposable!!!!!!!!";
    }else{
        echo " qui habite un pays dit paradis fiscal!!!";
    }

}else {
    echo "je suis un homme";
    if ($age>=20){
        echo "  imposable!!!!!!!!";
    }else{
        echo " qui habite un pays dit paradis fiscal!!!";
    }


}