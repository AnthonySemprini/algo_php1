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

    public function setautonomie($autonomie)
    {
        $this->autonomie = $autonomie;

        return $this;
    }
    public function getInfos() {
        return parent::getInfos()."Autonomie : $this->autonomie km<br>";
    }

}
//require "Voiture.php"; appel la page lier avec extends

//$v1elec = new VoitureElec ("tesla","modelS",5,650);

//echo $v1elec;


