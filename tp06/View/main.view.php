<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>MobiFind</title>
  <link rel="stylesheet" href="../View/Design/style.css">

</head>
<body>
  <header>
    <h1>-</h1>
    <img src="../View/Design/logo.png" alt="">
  </header>


<!--/////////////////////////// Bar de navigation avec les options de trix /////////////////////////////////////              -->

<aside class="flex-aside">
<ul>
  <li class="dropdown">
    <h3> Par marque </h3>
    <div class="dropdown-content7">

    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?prix=croissant">
      Croissant -- ++    <!-- Lien vers le main controller qui fera l'affichage croissante -->
    </a>

    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?prix=decroissant">
      Deroissant ++ --  <!-- Lien vers le main controller qui fera l'affichage décroissante -->
    </a>

    </div>
  </li>
  <li class="dropdown">
    <h3> Par marque </h3>
  <div class="dropdown-content2">

    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Apple">
      Apple
    </a>
    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Samsung">
      Samsung
    </a>
    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Xiaomi">
      Xiaomi
    </a>
    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Huawei">
      Huawei
    </a>
    <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=OnePlus">
      OnePlus
    </a>
  </li>
 </div>
</ul>
</aside>
​<!--////////////////////////////////////////////////////////////////////////////////              -->

<!--/////////////////////////// Affichage de tous les téléphones  /////////////////////////////////////              -->


    <article class="">
      <?php
      foreach ($this->list as $id) {

        print(" <a href=\"http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/click.controler.php?ID=". $id->getId()."\">" );
        ?>
        <div class="Images">
          <h2><?=$id->getMarque()?> <?=$id->getNom()?></h2>
          <img src="<?=$id->getImage() ?>"   alt=""></a>
          <h3>Prix : <?=$id->getPrix()?>0€</h3>
        </div>


        <?php  } ?>

<!--////////////////////////////////////////////////////////////////////                                      -->

  </article>
 </body>
</html>
