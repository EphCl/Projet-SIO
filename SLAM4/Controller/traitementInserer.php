<?php
if (isset($_POST["sub"] )){
    include_once "../Model/bdd.php";
    $bdd =  new Bdd();
    $bdd->Insert($_POST["theme"]);
    
    header('Location: Insérer.php');
    
}
?>
