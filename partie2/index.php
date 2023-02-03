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
    
    /*spl_autoload_register(function($class_name){
        require $class_name . '.php';
    });*/
    //autoload permet de mettre les page.php dans le bonne ordre

    $v1 = new Voiture("Peugeot", "408",5);

    $v2 = new Voiture("renault","modus",5);
    
    $v1elec = new VoitureElec ("tesla","modelS",5,650);
    
  /*$v1->demarrer();
  $v1->accelerer(45);
  $v1->freiner(20);
  $v1->getInfos();
  $v1elec->demarrer();*/
  $v1elec->getInfos();
  
    ?>
    
</body>
</html>