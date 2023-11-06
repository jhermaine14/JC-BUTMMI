<?php
    $couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/bullecouleur.css">


    <!-- Vous n'avez pas besoin de fichiers sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php
         require_once('./ressources/includes/header.php');
        ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
                <section class="liste-articles">
                
                    <section class = "art">
                        <img src="ressources/images/IMG_6897.png" alt=""/>
                        <section class="text">
                            <h1 class="arttitre">Développement web</h1>
                            <p>Initialiser les étudiants et les étudiantes aux bases de la programmation de pages HTML. On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, le cours enseigne également les normes d'accessibilités comme le contraste de couleurs ou encore la taille des polices d'écriture.</p>
                        </section>
                    </section>

                    <section class = "art">
                        <img src="ressources/images/IMG_6897.png" alt=""/>
                        <section class="text">
                            <h1 class="arttitre">Développement web</h1>
                            <p>Initialiser les étudiants et les étudiantes aux bases de la programmation de pages HTML. On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, le cours enseigne également les normes d'accessibilités comme le contraste de couleurs ou encore la taille des polices d'écriture.</p>
                        </section>
                    </section>

                    <section class = "art">
                        <img src="ressources/images/IMG_6897.png" alt=""/>
                        <section class="text">
                            <h1 class="arttitre">Développement web</h1>
                            <p>Initialiser les étudiants et les étudiantes aux bases de la programmation de pages HTML. On y apprend les langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, le cours enseigne également les normes d'accessibilités comme le contraste de couleurs ou encore la taille des polices d'écriture.</p>
                        </section>
                    </section>

                </section>
                
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            11/02/2023, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>

            </section>
                           
        </main>

    </section>

    <?php
         require_once('./ressources/includes/footer.php');
        ?>
</body>

</html>