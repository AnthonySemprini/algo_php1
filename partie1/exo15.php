<h1>Exercice15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Resultat</h2>

<?php

class Personne
{
    private $nom;
    private $prenom;
    private $dateBirth;
    public function __construct($nom,$prenom,$dateBirth)
    {
       $this->nom = $nom;
       $this->prenom = $prenom;
       $this->dateBirth = new datetime ($dateBirth);//datetime converti la date en age    
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($newNom)
    {
        $this->nom = $newNom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($newPrenom)
    {
        $this->prenom = $newPrenom;
    }
    public function getAge()
    {
        return $this->dateBirth;
    }
    public function setDateBirth($newDateBirth)
    {
        $this->dateBirth = $newDateBirth;
    }

    public function ageReel() { //pour calcul l'age
        $currentDate= new DateTime();
        $result = $this->dateBirth->diff($currentDate);
        return $result->format ('%Y ans');
    }

    public function __toString() // pour afficher
    {
        return "NOM : ".$this->nom."<br>".
        " PRENOM : ".$this->prenom."<br>".
        "Age : ".$this->ageReel();
    }

}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;

$p2 = new Personne("DUCHEMIN", "Alice", "1995-01-17");



echo $p2;

//Acces Modifiers

//public- la propriété ou la méthode est accessible de partout. C'est par défaut

//protected- la propriété ou la méthode est accessible au sein de la classe et par les classes dérivées de cette classe

//private- la propriété ou la méthode est UNIQUEMENT accessible au sein de la classe