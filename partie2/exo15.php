<h1>Exercice</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.
Affichage
L’adresse elan@elan-formation.fr est une adresse e-mail valide
L’adresse contact@elan est une adresse e-mail invalide</p>

<h2>Resultat</h2>

<?php
  $emailV = "elan@elan-formation.fr";
  $emailN = "contact@elan";

  // Valider l'email
  if(filter_var($emailN, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
  }else{
    echo "L'adresse e-mail n'est pas valide";
  }
?>
// filter_var — Filtre une variable avec un filtre spécifique
// FILTER_VALIDATE_EMAIL defini si email valide ou non