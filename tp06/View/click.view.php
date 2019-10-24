<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Informations</title>
    <link rel="stylesheet" href="Design/clickView.css">
  </head>
  <body>

    <header>
      <h1>MobiFind</h1>
      <img src="../Design/logo.png" alt="">
    </header>

    <article class="">



      <?php
      print("<h2>".$this->mobil->getNom()."</h2>");
      print("<h3>".$this->mobil->getPrix()."</h3>");
      print("<p>".$this->mobil->getDescription()."</p>");
      print("<h3>".$this->mobil->getAdress()."</h3>");
      print("<h3>".$this->mobil->getDisponibilite()."</h3>");
      print("<img src=\"".$this->mobil->getImage()."\" alt=\"\">");
      ?>
    </article>
  </body>
</html>
