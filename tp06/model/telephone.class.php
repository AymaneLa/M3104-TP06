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

  public function getMarque() {
    return $this->marque;
      }

  public function getNom() {
    return $this->nom;
  }

  public function getPrix() {
    return $this->prix;
  }

  public function getDescription() {
    return $this->adresse;
  }

  public function getAdress() {
    return $this->adresse;
  }

  public function getDisponibilite() {
    return $this->disponibilite;
  }

  public function getImage() {
    return $this->image;
  }

}


?>
