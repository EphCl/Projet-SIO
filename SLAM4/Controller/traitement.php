<?php
if (isset($_POST["nom"]) && isset($_POST["nbepisode"]) && isset($_POST["theme"]) && isset($_POST["Synopsis"])){
    include_once "../Model/bdd.php";
    $bdd =  new Bdd();

    $bdd->insertSerie($_POST["nom"],$_POST["nbepisode"],$_POST["Synopsis"],$_POST["theme"]);

    header('Location: index.php');
}




?>