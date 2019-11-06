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
    <aside class="">
      <h3>Tri par catégorie</h3>
      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~laraicha/ProgWeb/tp06/tp06/controler/main.controler.php?prix">
        <h4>- Par prix</h4>

    </aside>

    <article class="">
      <?php
      foreach ($this->list as $id) {

        print(" <a href=\"http://www-etu-info.iut2.upmf-grenoble.fr/~laraicha/ProgWeb/tp06/tp06/controler/click.controler.php?ID=". $id->getId()."\">" );
        ?>
        <div class="Images">
          <h2><?=$id->getMarque()?> <?=$id->getNom()?></h2>
          <img src="<?=$id->getImage() ?>"   alt=""></a>
          <h3>Prix : <?=$id->getPrix()?>0€</h3>
        </div>


        <?php  } ?>

      <section>
        <p>Un telephone</p>
      </section>


    </nav>
    </article>


</body>
</html>
