<?php
session_start();
include_once "../view/header.php" ; 



include "../Model/bdd.php";

$bdd = new Bdd();



if (isset($_POST["subb"])){
    $id = $_GET["serie"];
    $bdd->InsertEpisodes($_POST["episode"],$_POST["nom"],$_POST["resumer"],$_POST["durer"],$id);
    
}
$serie= $bdd->selectSeries($_GET["serie"]); 
$episodes= $bdd->getEpisodes();
include_once "../View/episode.php";
?>




