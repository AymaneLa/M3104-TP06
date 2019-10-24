<?php

class Telephone {

  private $id;
  private $marque;
  private $nom;
  private $prix;
  private $description;
  private $adresse;
  private $disponibilite;
  private $image;

  public function getId() {
    return $this->id;
  }

  public function getMarque() {
    return $this->marque;
      }

  public function getNom() {
    return $this->nom;
  }

  public function getPrix() {
    return ("Prix : ".$this->prix."0€");
  }

  public function getDescription() {
    return $this->description;
  }

  public function getAdress() {
    return ("Adresse : ".$this->adresse);
  }

  public function getDisponibilite() {
    return ("Disponibilité : ".$this->disponibilite);
  }

  public function getImage() {
    return $this->image;
  }

}


?>
