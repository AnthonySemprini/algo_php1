<?php
class Ordinateur//class
{
 private $_marque;  //private n'est pas atteignable en dehors de la fonction
 private $_status;
 public function __construct($marque)
 {
    $this->_marque = $marque;
    $this->_status = 0;
 }
 public function getMarque()
 {
    return $this->_marque;
 }
 public function setMarque($newMarque)
 {
    $this->_marque = $newMarque;
 }
 public function getStatus()
 {
    return $this->_status;
 }
 public function setStatus($newStatus)
 { 
    $this->_status = $newStatus;
 }
 public function changeStatus()
 {
    $this->setStatus(1);
 }
}
$poste = new Ordinateur("Samsung");
// echo $poste->getMarque();
$poste->setMarque("Apple");
echo $poste->getStatus();
$poste->changeStatus();
echo "<br>". $poste->getStatus();