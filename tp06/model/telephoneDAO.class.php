<?php
 class TelephoneDAO{
   private $db;

   public function __construct($path){
     $database = 'sqlite:'.$path.'/muusic.db';
      try{
        $this->db= new PDO($database,'','');
      }

      catch (PDOException $e){
        die("erreur de connexion:".$database."--".$e->getMessage());
      }
   }

   public function get(int $id): Music {
     $reponse=$this->db->query("SELECT * FROM telephone WHERE nom=$id  ");
     $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Telephone");
     //var_dump($donnees); Test CHECK :OK !!!!
     $mobile= $donnees[0];
     return $mobile;
   }
}

//print($DB[0]->getTitre());




?>
