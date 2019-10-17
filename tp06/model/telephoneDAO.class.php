<?php
 class TelephoneDAO{
   private $db;

   public function __construct($path){
     $database = 'sqlite:'.$path.'/telephones.db';
      try{
        $this->db= new PDO($database,'','');
      }

      catch (PDOException $e){
        die("erreur de connexion:".$database."--".$e->getMessage());
      }
   }

   public function get(int $id): Telephone {
     $reponse=$this->db->query("SELECT * FROM telephone WHERE id=$id  ");
     $donnees=$reponse-> fetchAll(PDO::FETCH_CLASS,"Telephone");
     //var_dump($donnees); Test CHECK :OK !!!!
     $mobile= $donnees[0];
     return $mobile;
   }
}

//print($DB[0]->getTitre());




?>
