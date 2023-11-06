<?php
    $couleur_bulle_classe = "rouge";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUR LES MÉDIAS</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/media.css">

</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Les actualités et les évènements important du BUT et de l'IUT CY Paris Université dans les médias.</h1>

        <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
    
    <section class="liste-video medtext">

        <article class="video-conteneur">
            <p class="medtext">La nouvelle réforme: le BUT MMI</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/oiEbQF7qfBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </article>

        <article class="video-conteneur">
            <p class="medtext">Pourquoi étudier à l'IUT CYU ?</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SyjF4h2Zb7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </article>

        <article class="video-conteneur">
            <p class="medtext">Job interview en anglais au département MMI</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/t72pdxpNjyc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </article>

        <article class="video-conteneur">
            <p class="medtext">L'importance de l'IUT dans les études supérieures</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xD4wshE0hEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </article>
        
    </section>

        </main>
    </section>

    <?php
         require_once('./ressources/includes/footer.php');
    ?>

</body>



</html>