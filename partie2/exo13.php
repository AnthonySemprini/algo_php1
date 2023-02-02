<H1>Exercice13</H1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un
véhicule.
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :</p>

<h2>Resultat</h2>

<?php

class Voiture 
{
    public $marques;
    public $modele;
    public $nbPortes;
    public $vitesseActuel;

    public function getMarques()
    {
        return $this->marques;
    }
    public function setMarques($newMarques)
    {
        $this->marques = $newMarques;
    }

    public function getmodele()
    {
        return $this->modele;
    }
    public function setmodele($newmodele)
    {
        $this->modele = $newmodele;
    }

    public function getnbPortes()
    {
        return $this->nbPortes;
    }
    public function setnbPortes($newnbPortes)
    {
        $this->nbPortes = $newnbPortes;
    }

    public function getvitesseActuel()
    {
        return $this->vitesseActuel;
    }
    public function setvitesseActuel($newvitesseActuel)
    {
        $this->vitesseActuel = $newvitesseActuel;
    }

    

















   
                    

}
