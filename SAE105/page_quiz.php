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
    <title>QUIZ</title>

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
                                <input type="radio" id="contactChoice1" name="q1"> 
                                <label for="contactChoice1">3 ans </label>

                                <input type="radio" id="contactChoice2" name="q1">
                                <label for="contactChoice2">2 ans </label>

                                <input type="radio" id="contactChoice3" name="q1">
                                <label for="contactChoice3">4 ans</label>
                            </div><br>

                            <li class="textesgras">2/ Combien y a-t-il de parcours ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q2"> 
                                <label for="contactChoice1">1</label>

                                <input type="radio" id="contactChoice2" name="q2">
                                <label for="contactChoice2">2</label>

                                <input type="radio" id="contactChoice3" name="q2">
                                <label for="contactChoice3">3</label>

                                <input type="radio" id="contactChoice3" name="q2">
                                <label for="contactChoice3">4</label>
                            </div><br>

                            <li class="textesgras">3/ Combien d'heures y a-t-il au total dans la formation ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q3"> 
                                <label for="contactChoice1">300 heures</label>

                                <input type="radio" id="contactChoice2" name="q3">
                                <label for="contactChoice2">50 heures</label>

                                <input type="radio" id="contactChoice3" name="q3">
                                <label for="contactChoice3">1000 heures</label>

                                <input type="radio" id="contactChoice3" name="q3">
                                <label for="contactChoice3">2600 heures</label>
                            </div><br>

                            <li class="textesgras">4/ Combien y a-t-il d'heures de projet tutoré dans la formation ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q4"> 
                                <label for="contactChoice1">30 heures</label>

                                <input type="radio" id="contactChoice2" name="q4">
                                <label for="contactChoice2">100 heures</label>

                                <input type="radio" id="contactChoice3" name="q4">
                                <label for="contactChoice3">600 heures</label>

                                <input type="radio" id="contactChoice3" name="q4">
                                <label for="contactChoice3">150 heures</label>
                            </div><br>

                            <li class="textesgras">5/ Quel est la signification de MMI ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q5"> 
                                <label for="contactChoice1">Métiers du multimédia et de l'internet </label>

                                <input type="radio" id="contactChoice2" name="q5">
                                <label for="contactChoice2">Multimédia et Métiers de l'Internet</label>

                                <input type="radio" id="contactChoice3" name="q5">
                                <label for="contactChoice3">Métiers du Multimédia et fr l'Image/label>
                            </div><br>

                            <li class="textesgras">6/ Quelles sont les matières enseignées en BUT MMI ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q6"> 
                                <label for="contactChoice1">Anglais</label>

                                <input type="radio" id="contactChoice2" name="q6">
                                <label for="contactChoice2">L'audiovisuel pur le numérique </label>

                                <input type="radio" id="contactChoice3" name="q6">
                                <label for="contactChoice3">Le web</label>

                                <input type="radio" id="contactChoice3" name="q6">
                                <label for="contactChoice3">La communication pour le numérique</label>

                                <input type="radio" id="contactChoice3" name="q6">
                                <label for="contactChoice3">Le graphisme</label>

                                <input type="radio" id="contactChoice3" name="q6">
                                <label for="contactChoice3">Toutes les matières ci dessus </label>
                            </div><br>

                            <li class="textesgras">7/ A quel moment est-il possible de faire un stage ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q7"> 
                                <label for="contactChoice1">1ère année</label>

                                <input type="radio" id="contactChoice2" name="q7">
                                <label for="contactChoice2">2ème année</label>

                                <input type="radio" id="contactChoice3" name="q7">
                                <label for="contactChoice3">3ème année</label>
                            </div><br>

                            <li class="textesgras">8/ Quel est la date des JPO ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q8"> 
                                <label for="contactChoice1">11 Février 2023</label>

                                <input type="radio" id="contactChoice2" name="q8">
                                <label for="contactChoice2">23 Février 2023</label>

                                <input type="radio" id="contactChoice3" name="q8">
                                <label for="contactChoice3">20 Janvier 2023</label>
                            </div><br>

                            <li class="textesgras">9/ A quel moment est-il possible de faire de l'alternance ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q9"> 
                                <label for="contactChoice1">En 1ère année</label>

                                <input type="radio" id="contactChoice2" name="q9">
                                <label for="contactChoice2">En 2ème année</label>

                                <input type="radio" id="contactChoice3" name="q9">
                                <label for="contactChoice3">En 3ème année</label>
                            </div><br>

                            <li class="textesgras">10/ Avec quel bac peut-on accéder au BUT MMI ?</li><br>
                            <div>
                                <input type="radio" id="contactChoice1" name="q10"> 
                                <label for="contactChoice1">Les bacs professionels</label>

                                <input type="radio" id="contactChoice2" name="q10">
                                <label for="contactChoice2">Tous les bacs sont acceptées</label>

                                <input type="radio" id="contactChoice3" name="q10">
                                <label for="contactChoice3">Les bacs généraux</label>

                                <input type="radio" id="contactChoice3" name="q10">
                                <label for="contactChoice3">Les bacs technologiques</label>
                            </div><br>
                        </ol>
                    </div>
                    <form action="page_quiz_reponse.php">
                        <input class="boutton" type="submit" value="Valider"/>
                    </form>
            </main>
    </section>

    <?php require_once('./ressources/includes/footer.php'); ?>


</body>
</html>