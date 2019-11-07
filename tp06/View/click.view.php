<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?=$this->mobil->getNom()?> </title>
    <link rel="stylesheet" href="../View/Design/clickView.css">
  </head>
  <body>

    <header>
      <h1>MobiFind</h1>
      <img src="../View/Design/logo.png" alt="">
    </header>

       <article class="">

<!--/////////////////////////// Navigation vers la page d'acceuil /////////////////////////////////////              -->

      <ul>
        <li style="float:right"><a class="active" href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php">Acceuil</a></li>
      </ul>
<!--//////////////////////////////////////////////// -->


<!--/////////////////////////// Affichage du téléphone sélectionné /////////////////////////////////////              -->

      <?php
      print("<h2>".$this->mobil->getMarque()." ".$this->mobil->getNom()."</h2>");
      print("<img src=\"".$this->mobil->getImage()."\" alt=\"\">");
      print("<h3>".$this->mobil->getPrix()."€</h3>");

      print("<p>".$this->mobil->getDescription()."</p>");
      ?>
      <br>
      <br>
      <br>
<!--//////////////////////////////////////////////// -->


<!--//////////////// Table pour les catégories adresse et disponiblité /////////////////// -->
      <table style="width:100%">

      <tr>
      <th>Adresse :</th>
      <th>Dispoibilité :</th>
      </tr>

      <?php
      print("<tr>");
      print("<td>".$this->mobil->getAdress()."</td>");
      print("<td>".$this->mobil->getDisponibilite()."</td>");
       ?>
      </tr>
      </table>
<!--//////////////////////////////////////////////// -->

      <br>
      <br>
      <br>
      <br>
      <br>

<!--/////////////////////////// Liste des recommandations /////////////////////////////////////              -->

      <h2> Recommandations </h2>

      <div class="Images">

      <?php
      foreach ($this->list2 as $id) {  // parcours de la liste contenant les 3 téléphones aléatoires
        print("<div>");
        print(" <a href=\"http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/click.controler.php?ID=". $id->getId()."\">" );
        ?>

          <h2><?=$id->getMarque()?> <?=$id->getNom()?></h2>
          <img src="<?=$id->getImage() ?>"   alt=""></a>
        </div>

        <?php  } ?>
     </div>

<!--//////////////////////////////////////////////// -->

    </article>
  </body>
</html>
