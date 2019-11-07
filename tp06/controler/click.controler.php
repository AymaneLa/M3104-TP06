<?php
require_once("../model/telephone.class.php");
require_once("../framework/view.class.php");
// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

include("../model/telephoneDAO.class.php");
// Creation de l'instace DAO

//-------------Recupertaion de telephone choisi-----------//
  if(isset($_GET['ID'])){
      $id=$_GET['ID'];
  } else{
      $id=2;  // si ID vide, affichage de l'iPhone n#2  par défaut
  }

  if($id){
    $mobils = new telephoneDAO($config['database_path']);
    $phone= $mobils->get($id);   // récuperation du télephone de la base de données
  }
  //-----------------------------------------------------------//


//---------Affichage de recommandations de 3 autres telephones aléatoirs--------//
  $p=0;
  for($i=0;$i<3; $i++){   // on affiche que 3 télephones dans la liste de recommandation
    $rand1=rand(1,15);     // génerateur d'un int compris entre 1 et 15 (1-15 = tous les telephone)
    if($rand1 != $id && $p != $rand1){
      $m = $mobils->get($rand1);   // on récupère l'objet  aléatoire télephone
      $list[$i] = $m;
      $p=$rand1;      // vérifier qu'on affiche pas le meme télephone deux fois et qu'on affiche pas dans la liste le meme telephone choisi
    }
  }
//-----------------------------------------------------------//


// ---------------------Déclenchement de la view avec les paramètres initialisés---------------------//
  $view= new View("../View/click.view.php");
  $view->mobil=$phone;
  $view->list2=$list;
  $view->show();
//---------------------------------------------------------------------------------------------------//

?>
