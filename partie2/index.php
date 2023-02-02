<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voiture Exo POO</title>
</head>
<body>
    <?php
    require "Voiture.php";//appel un fichier
    require "VoitureElec.php";

    $v1 = new Voiture("Peugeot", "408",5);

    $v2 = new Voiture("renault","modus",5);
    
    
    $v1->demarrer();
    $v1->accelerer(15);
    $v1->accelerer(50);
    $v1->freiner(65);
    $v1->stopper();


    ?>
    
</body>
</html>