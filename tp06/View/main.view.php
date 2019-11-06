<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>MobiFind</title>
  <link rel="stylesheet" href="../View/Design/style.css">

</head>
<body>
  <header>
    <h1>MobiFind</h1>
    <img src="../View/Design/logo.png" alt="">
  </header>

  <nav class="Contenu">
    <aside class="flex-aside">
      <h2>Tri par catégorie</h2>
      <div class=" divv">


      <section>

        <h4>- Par prix</h4>


        <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?prix=croissant">
           <h5> + Croissant </h5>
        </a>

        <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?prix=decroissant">
           <h5> - Decroissant </h5>
        </a>

    </section>

      <section class="Marque">
      <div class="erd">
        <h4> -Par marque </h4>
      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Apple">
        <h5> Apple </h5>
      </a>

      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Samsung">
        <h5> Samsung </h5>
      </a>

      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Xiaomi">
        <h5> Xiaomi </h5>
      </a>

      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=Samsung">
        <h5> Samsung </h5>
      </a>

      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?marque=OnePlus">
        <h5> OnePlus </h5>
        </a>

  </div>
    </section>

    </aside>

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


    </nav>
    </article>


</body>
</html>
