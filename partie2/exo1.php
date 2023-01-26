<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo PHP 2 : exo 1</title>
    <style>
        body {}
        h1   {}
        p    {}
    </style>
</head>
<body>
    
    <h1>Exercice1</h1>
    
    <p>Crée une fonction personnalisée ConvertirMajRouge() permettant de transformer une chaine de caractere pasée en argument en majuscule et en rouge.Vous devrez apppeler la fonction comme suis:convertirMajRouge($texte);</p>
    
    <h2>Resultat</h2>
    
    <?php

    $texte = "mon texte en pararmetre";
    $texte = strtoupper($texte);
   // echo $texte;
    

    function ConvertirMajRouge(string $texteRed){
          
        echo "<p style=color:red>".$texteRed ."</p>";
    };

   echo ConvertirMajRouge($texte);

    ?>

    <!-- <p>mon texte en pararmetre</p> -->
    <!--<p style="color:white;">mon texte en pararmetre</p>-->

</body>
<!--majuscule
https://www.php.net/manual/fr/function.strtoupper.php-->
<!-- crée fonction
https://www.w3schools.com/php/php_functions.asp -->
</html>