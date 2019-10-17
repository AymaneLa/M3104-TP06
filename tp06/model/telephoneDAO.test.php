<?php
require_once('telephone.class.php');
require_once('telephoneDAO.class.php');

// Récupération des données de configuration
$config = parse_ini_file('../config/config.ini');

// Creation de l'instace DAO
$jukebox = new telephoneDAO($config['database_path']);

$m = $jukebox->get(1);
var_dump($m);
?>
