<?php 
 session_start();
 include_once "../Model/bdd.php";
 $bdd = new Bdd();
 
 include_once "../View/login.php";
 


//  Commande Select  
if (isset( $_POST["login"]) && isset($_POST["mdp"])){
    $sql = 'SELECT login, mdp, fk_role FROM user join role on fk_role = idrole where login = :login and mdp = :mdp ';
$sth = $bdd->prepare($sql);
$sth->execute(array(":login" => $_POST["login"], ":mdp" => $_POST["mdp"] ));
$res = $sth->fetch();
var_dump($res->errorinfo());
if ($res) {
    echo "<br>";
    echo "Bonjour ".$res['login'];
     $_SESSION["login"] = $_POST["login"];
     $_SESSION["role"] = $res["fk_role"];
}
}

// Parcours la base de données
// foreach($res as $ligne) {
//     echo "Login : ".$ligne['login']."<br>";
//     echo"Id : ".$ligne['mdp']."<br>";
//     echo "<br>";
// }
?>

