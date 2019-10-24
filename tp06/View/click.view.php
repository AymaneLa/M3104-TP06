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
<<<<<<< HEAD
      <h2>ONEPLUS 7T Pro</h2>
      <h3>Prix</h3>
      <h3>Description</h3>
      <h3>Adresse</h3>
      <h3>Disponibilité</h3>
      <img src="../data/images/ONEPLUS 7T Pro.jpeg" alt="">

=======
      <?php
      print("<h2>".$this->mobil->getNom()."</h2>");
      print("<h3>".$this->mobil->getPrix()."</h3>");
      print("<h3>".$this->mobil->getDescription()."</h3>");
      print("<h3>".$this->mobil->getAdress()."</h3>");
      print("<h3>".$this->mobil->getDisponibilite()."</h3>");
      print("<img src=\"".$this->mobil->getImage()."\" alt=\"\">");
      ?>
>>>>>>> 559c6b33a07c5232ddd7a727a04f3c1a10e7db03
    </article>
  </body>
</html>
