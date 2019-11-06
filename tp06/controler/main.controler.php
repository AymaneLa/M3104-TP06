
<?php
require_once("../framework/view.class.php");
// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

include("../model/telephoneDAO.class.php");
// Creation de l'instace DAO
$mobils = new telephoneDAO($config['database_path']);








  for($i=1;$i<17;$i++){
      // Récupération de l'objet Music
      $m = $mobils->get($i);
      // Ajout à la liste des images à afficher
      $list[$i] = $m;
    }
//---------------------------------------------Tri par marque-------------------------------------//
if(isset($_GET['prix'])){
  $string=$_GET['prix'];
  if(strcmp($string,"croissant") == 0){
    for($i=1;$i<17;$i++){  //Tri par bulle croissant
      for($j=1;$j<16;$j++){
        if($list[$j+1]->getPrix()<$list[$j]->getPrix()){
          $a=new Telephone();
          $a=$list[$j];
          $list[$j]=$list[$j+1];
          $list[$j+1]=$a;
        }

      }
    }
  } elseif (strcmp($string,"decroissant") == 0) {
      for($i=1;$i<17;$i++){  //Tri par bulle décroissant
        for($j=1;$j<16;$j++){
          if($list[$j+1]->getPrix()>$list[$j]->getPrix()){
            $a=new Telephone();
            $a=$list[$j];
            $list[$j]=$list[$j+1];
            $list[$j+1]=$a;
          }
        }
      }

  }
}
//---------------------------------------------------------------------------------------------------//


  $view= new View("../View/main.view.php");
  $view->list=$list;
  $view->show();


?>
