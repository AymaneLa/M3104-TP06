
<?php
require_once("../framework/view.class.php");
// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

include("../model/telephoneDAO.class.php");
// Creation de l'instace DAO

$mobils = new telephoneDAO($config['database_path']);


  for($i=0;$i<16;$i++){
      // Récupération de tous les objets Music
      $m = $mobils->get($i+1);
      // Ajout à la liste des telephones à afficher
      $list[$i] = $m;
    }


//---------------------------------------------Tri par prix, méthode TRIX PAR BULLE-------------------------------------//
if(isset($_GET['prix'])){
  $string=$_GET['prix'];
  if(strcmp($string,"croissant") == 0){   //si "croissant" spécifié
    for($i=1;$i<17;$i++){
      for($j=0;$j<15;$j++){
        if($list[$j+1]->getPrix()<$list[$j]->getPrix()){  //Tri par prix croissant
          $a=new Telephone();
          $a=$list[$j];          //technique de permutation
          $list[$j]=$list[$j+1];
          $list[$j+1]=$a;
        }

      }
    }
  } elseif (strcmp($string,"decroissant") == 0) { //sinon si "decroissant" spécifié
      for($i=1;$i<17;$i++){
        for($j=0;$j<15;$j++){
          if($list[$j+1]->getPrix()>$list[$j]->getPrix()){
            $a=new Telephone();
            $a=$list[$j];        //technique de permutation
            $list[$j]=$list[$j+1];
            $list[$j+1]=$a;
          }
        }
      }
  }
}
//---------------------------------------------------------------------------------------------------//


//--------------------------------Par marque---------------------------------------------//
if(isset($_GET['marque'])){
  $string=$_GET['marque'];
  if(strcmp($string,"Apple") == 0){ //si Apple spécifié
    for($i=0;$i<16;$i++){
      if($list[$i] != null && strcmp($list[$i]->getMarque(),"APPLE") != 0 ){
        unset($list[$i]);  //on supprime de la liste tous les téléphones non APPLE
    }
   }
  }elseif (strcmp($string,"Samsung") == 0) { //si Samsung spécifié
    for($i=0;$i<16;$i++){
      if($list[$i] != null && strcmp($list[$i]->getMarque(),"SAMSUNG") != 0 ){
        unset($list[$i]);  //on supprime de la liste tous les téléphones non Samsung
      }
    }
  } elseif (strcmp($string,"Huawei") == 0) {  //si Huawei spécifié
    for($i=0;$i<16;$i++){
      if($list[$i] != null && strcmp($list[$i]->getMarque(),"HUAWEI") != 0 ){
        unset($list[$i]); //on supprime de la liste tous les téléphones non Huawei
      }
    }
  } elseif (strcmp($string,"OnePlus") == 0) {  //si OnePlus spécifié
    for($i=0;$i<16;$i++){
      if($list[$i] != null && strcmp($list[$i]->getMarque(),"ONEPLUS") != 0 ){
        unset($list[$i]); //on supprime de la liste tous les téléphones non OnePlus
      }
    }
  } elseif (strcmp($string,"Xiaomi") == 0) {  //si Xiaomi spécifié
    for($i=0;$i<16;$i++){
      if($list[$i] != null && strcmp($list[$i]->getMarque(),"XIAOMI") != 0 ){
        unset($list[$i]); // on supprime de la liste tous les téléphones non Xiaomi
      }
    }
  }
 }


//---------------------------------------------------------------------------------------------------//

// ---------------------Déclenchement de la view avec les paramètres initialisés---------------------//

  $view= new View("../View/main.view.php");
  $view->list=$list;
  $view->show();
//---------------------------------------------------------------------------------------------------//


?>
