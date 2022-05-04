<?php   
if (isset($_POST["sub"] )){
    include_once "../Model/bdd.php";
    $bdd =  new Bdd();
    $bdd->Update($_POST["theme"],$_POST["new"]);
}
    header('Location: Changer.php');
    

?>
