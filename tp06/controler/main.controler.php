<?php
// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

include("../model/telephoneDAO.class.php");
// Creation de l'instace DAO
$mobils = new telephoneDAO($config['database_path']);



for($i=$firstId; $i<16;$i++){
    // Récupération de l'objet Music
    $m = $mobils->get($i);
    // Ajout à la liste des images à afficher
    $list[$i] = $m->getImage();
  }

  $view= new View("main.view.php");
  $view->list=$list;
  $view->show();


?>
