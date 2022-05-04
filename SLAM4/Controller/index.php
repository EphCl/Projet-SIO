<?php 
 session_start();
 include "../Model/bdd.php";
 $bdd = new Bdd();
 $themes= $bdd->getThemes();
 $series= $bdd->getSeries();
 


 $title = "Bienvenue";   
 include_once "../View/index.php"
 
?>

