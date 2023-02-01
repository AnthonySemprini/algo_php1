<h1>Exercice15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Resultat</h2>

<?php

class personne
{
    private $Nom;
    private $Prenom;
    private $DateBirth;
    public function __construct($Nom,$Prenom,$DAteBirth)
    {
       $this->Nom = $Nom;
       $this->Prenom = $Prenom;
       $this->DateBirth = new datetime ($DAteBirth);//datetime converti la date en age    
    }
    public function __toString()
    {
        return "NOM : ".$this->Nom. 
        " PRENOM : ".$this->Prenom;
    }
  public function getNom()
    {
        return $this->Nom;
    }
 public function setNom($newNom)
    {
    $this->Nom = $newNom;
    }
 public function getPrenom()
    {
        return $this->Prenom;
    }
public function setPrenom($newPrenom)
    {
    $this->Prenom = $newPrenom;
    }
 public function getAge()
    {
        return $this->DateBirth;
    }
 public function setDateBirth($newDateBirth)
    {
    $this->DateBirth = $newDateBirth;
    }
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;

$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");


echo $p1;
