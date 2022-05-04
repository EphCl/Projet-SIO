<?php   
if (isset($_POST["sub"] )){
    include_once "../Model/bdd.php";
    $bdd =  new Bdd();
    $bdd->Delete($_POST["theme"]);
}
    header('Location: Supprimer.php');
    

?>
