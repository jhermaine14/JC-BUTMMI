<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<?php

if($_POST)
{
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['textarea']))
    {
        //données envoyées dans $_POST
        $email=$_POST['email'];


        
        $sujet=$_POST["textarea"];

        mail("jhamsantos2003@gmail.com","Objet mail",$sujet, $email);



        //Message envoyé....
        echo "Votre email est envoyé";
        mail("$email","Confirmation", 'Votre mail est envoyé');
    }
    else{
        echo "remplissez les champs";
    }
}




?>

<form action="index.php">
                        <input class="boutton" type="submit" value="Revenir"/>
                    </form>
        
                    </html>