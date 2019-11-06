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
      print("<h3>".$this->mobil->getPrix()."</h3>");
      print("<h3>Description : "."</h3>"."<p>".$this->mobil->getDescription()."</p>");
<<<<<<< HEAD
      print("<h3>".$this->mobil->getAdress()."</h3>");
      print("<h3>".$this->mobil->getDisponibilite()."</h3>");
=======
      print("<h3>Adresse : "."</h3>".$this->mobil->getAdress()."</h3>");
      print("<h3>Dispoibilité : "."</h3>".$this->mobil->getDisponibilite()."</h3>");
>>>>>>> d979d7d5237f435e1c395ac3f4dc3ed0a68a0214
      ?>
    </article>
  </body>
</html>
