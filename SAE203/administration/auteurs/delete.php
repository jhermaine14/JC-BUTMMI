<?php

require_once ('../../ressources/includes/connexion-bdd.php');

if(isset($_GET["id"])){

    $id=$_GET["id"];

    $delete=$clientMySQL->prepare("DELETE FROM auteur WHERE id= ?");
    $delete->execute(array($id));

    header("location:index.php");

}

?>

