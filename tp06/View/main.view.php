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
      <p>Tri par categorie</p>
      <a href="http://www-etu-info.iut2.upmf-grenoble.fr/~bekelen/tp06/tp06/controler/main.controler.php?prix " >
        <h4>Par prix</h4>

    </aside>

    <article class="">
      <p>Tous les telephones :</p>
      <?php
      foreach ($this->list as $id) {

        print(" <a href=\"http://www-etu-info.iut2.upmf-grenoble.fr/~laraicha/ProgWeb/tp06/tp06/controler/click.controler.php?ID=". $id->getId()."\">" );
        ?>
        <div class="">
          <h2>"<?=$id->getMarque()?>"</h2>
          <img src="<?=$id->getImage() ?>"   alt=""></a>
          <h3><?= $id->getPrix()?> </h3>
        </div>


        <?php  } ?>
      <section>
        <p>Un telephone</p>
      </section>

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </nav>
    </article>


  <footer> <p>Copyright</p> </footer>
</body>
</html>
