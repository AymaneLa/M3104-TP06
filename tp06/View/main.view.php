<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../View/Design/style.css">
  <title>MobiFind</title>
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
        <img src="<?=$id->getImage() ?>"   alt=""></a>
        <h3><?= $id->getPrix()?> </h3>

        <?php  } ?>
<<<<<<< HEAD
=======


>>>>>>> 1518b4af2a537be2cb9e6b5d1717e9b7effeddd2
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
