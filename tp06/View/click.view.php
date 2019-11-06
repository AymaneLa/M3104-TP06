<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Informations</title>
    <link rel="stylesheet" href="../View/Design/clickView.css">
  </head>
  <body>

    <header>
      <h1>MobiFind</h1>
      <img src="../View/Design/logo.png" alt="">
    </header>

    <article class="">



      <?php
      print("<h2>".$this->mobil->getMarque()." ".$this->mobil->getNom()."</h2>");
      print("<img src=\"".$this->mobil->getImage()."\" alt=\"\">");
      print("<h3>Prix : ".$this->mobil->getPrix()."0€</h3>");
      print("<h3>Description : ".$this->mobil->getDescription()."</h3>");
      print("<h3>Adresse : ".$this->mobil->getAdress()."</h3>");
      print("<h3>Disponibilité : ".$this->mobil->getDisponibilite()."</h3>");
      ?>
    </article>
  </body>
</html>
