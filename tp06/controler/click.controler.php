<?php
require_once("../model/telephone.class.php")
require_once("../framework/view.class.php");
// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

include("../model/telephoneDAO.class.php");
// Creation de l'instace DAO



  if(isset($_GET['ID'])){
      $id=$_GET['ID'];
  } else{
      $id=2;
  }

  if($id){
    $mobils = new telephoneDAO($config['database_path']);
    $phone= $mobils->get($id);
  }

  $view= new View("../framework/view.class.php");
  $view->mobil=$phone;
  $view->show();
?>
