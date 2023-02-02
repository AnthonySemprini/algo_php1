<?php

class VoitureElec extends Voiture{//lie 2 fichier
  
    public int $autonomie;

    public function __construct(string $marque, string $modele, int $nbPorte, int $autonomie)
    {
        parent::__construct($marque, $modele, $nbPorte);
        $this->autonomie = 650;
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