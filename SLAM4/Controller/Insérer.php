<?php 
 session_start();
 include "../Model/bdd.php";
 $bdd = new Bdd();
 $themes= $bdd->getThemes();
 include_once "../View/Insérer.php";
 
 ?>