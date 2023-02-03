<?php
class VoitureElec extends Voiture{//lie 2 fichier
    
    public int $autonomie;
    
    public function __construct(string $marque, string $modele, int $nbPorte, int $autonomie)
    {
        parent::__construct($marque, $modele, $nbPorte);
        $this->autonomie = $autonomie;
    }
    public function getautonomie()
    {
        return $this->autonomie;
    }
    public function setautonomie($newautonomie)
    {
        $this->autonomie = $newautonomie;
    }
}
//require "Voiture.php"; appel la page lier avec extends

//$v1elec = new VoitureElec ("tesla","modelS",5,650);

//echo $v1elec;


