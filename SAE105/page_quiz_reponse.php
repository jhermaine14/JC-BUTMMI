<?php
    $couleur_bulle_classe = "violet"; 
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/page_quiz.css">
    <link rel="stylesheet" href="ressources/css/bulle.css">
    <title>QUIZ (correction)</title>

</head>

<body>
    <section class="conteneur-1280">
            <?php require_once('./ressources/includes/header.php'); ?>  
            <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
            <main class="conteneur-principal">
                <h1 class="titre-page">QUIZ</h1>
                    <div>
                        <ol>
                            <li class="textesgras">1/ Sur combien d'années dure le BUT MMI ?</li><br>
                            <div>
                                <span>Réponse = 3 ans</span>
                            </div><br>

                            <li class="textesgras">2/Combien y a-t-il de parcours ?</li><br>
                            <div>
                                <span>Réponse = 3 parcours</span>
                            </div><br>

                            <li class="textesgras">3/ Combien d'heures y a-t-il au total dans la formation ?</li><br>
                            <div>
                                <span>Réponse = 2600 heures</span>
                            </div><br>

                            <li class="textesgras">4/ Combien y a-t-il d'heures de projet tutoré dans la formation ?</li><br>
                            <div>
                                <span>Réponse = 600 heures</span>
                            </div><br>

                            <li class="textesgras">5/ Quel est la signification de MMI ?</li><br>
                            <div>
                                <span>Réponse = Métiers du multimédia et de l'internet</span>
                            </div><br>

                            <li class="textesgras">6/ Quelles sont les matières enseignées en BUT MMI ?</li><br>
                            <div>
                                <span>Réponse = Toutes les matieres si dessus</span>
                            </div><br>

                            <li class="textesgras">7/ A quel moment est-il possible de faire un stage ?</li><br>
                            <div>
                                <span>Réponse = En deuxième année</span>
                            </div><br>

                            <li class="textesgras">8/ Quel est la date des JPO ?</li><br>
                            <div>
                                <span>Réponse = 11 février 2023</span>
                            </div><br>
                            
                            <li class="textesgras">9/ A quel moment est-il possible de faire de l'alternance ?</li><br>
                            <div>
                                <span>Réponse = En troisième année</span>
                            </div><br>

                            <li class="textesgras">10/ Avec quel bac peut-on accéder au BUT MMI ?</li><br>
                            <div>
                                <span>Réponse = Avec n'importe quel bac</span>
                            </div><br>
                        </ol>
                    </div>
                    <form action="page_quiz.php">
                        <input class="boutton" type="submit" value="Revenir au questionnaire"/>
                    </form>
            </main>
    </section>
</body>
</html>