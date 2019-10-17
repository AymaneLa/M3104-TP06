<?php
// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$jukebox = new telephoneDAO($config['database_path']);



for($i=$firstId; $i<554;$i++){
    // Récupération de l'objet Music
    $m = $jukebox->get($i);
    // Ajout à la liste des images à afficher
    $list[$i] = $config['data_url'].'/img/'.$m->getCover();
  }

  $view= new View("main.view.php");
  $view->list=$list;
  $view->show();


?>
