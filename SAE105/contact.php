<?php
    $couleur_bulle_classe = "jaune";
    $formulaire_soumis = false;

    if($_POST) {
        $formulaire_soumis = true;
     //validation du remplissage duform  
    }
?>
<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">

    <link rel="stylesheet" href="ressources/css/contact.css">
</head>

<body>
    <section class="conteneur-1280">
    
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
          <section class="contactez-nous">
                <p class="titre-page">Plus d'infos sur la formation ?</p>
                <h1 class="titre-page"> Contactez-nous !</h1>
                <p><span class="textesgras"> 
               La formation s'ouvre à tout les bacheliers,</span>pour rappel. Avoir des connaisances en programmation ou en design ou encore en audiovisuel n'est pas obligatoire mais reste un bon atout, car il faut aimer la curiosité dans cette formation pluridisciplinaire.<span class="textesgras">Il est également possible de faire la formation après une reprise d'études ou une réorientation. </span><p>



           </section>
         
            

      
    <section class="contact-ligne">
      <h2 class="titre-formulaire">Nous contacter en ligne</h2>

    <form action="contactrecup.php" method="post">
        <!--Contenu du Formulaire-->
        <div>
        <article>
                 <label class="textesgras" for="prenom">Prénom</label>
        </div>
                <input type="text" id="prenom" name="prenom" required>
    </article>
    
    <article>
        <div>
                 <label class="textesgras" for="nom">Nom de famille</label>
        </div>
                  <input type="text" id="nom" name="nom" required>
    </article>
        

<div>
    <label class="textesgras"for="email">Adresse e-mail</label>
</div>
<input type="email" id="email" name="email" required>


<div>
    <label class="textesgras"for=mess>Message</label>
</div>


     <div>
        <textarea name="textarea"
   rows="10" cols="50" id="mess"></textarea>
     </div> 
    
     </section>

    <article>
     <!---identification de l'internaute-->
<div>
    <label class="textesgras"for=jesuis>Je suis</label>
</div>

        
          
            <input type="radio" id="non" name="choix" value="non" checked>
            <label for="non">Je ne souhaite pas le préciser</label>
          
            <input type="radio" id="etu" name="choix" value="etu">
            <label for="etu">Etudiant/ Etudiante</label>
        
            <input type="radio" id="Parent" name="choix" value="Parent">
            <label for="Parent">Parent</label>
            
        </article>
        <br>
        <article>
         
        <button class="cadre-bouton"
        type="submit" name="btn">
    
          ENVOYER
        </button>
      
        </form>
</article>
        
 <!---Contacte par courrier-->

        <article>

             <p class="textes contact-ligne ">Nous contacter par courrier</p>

            <h4 class="adresse"> IUT de Cergy Pontoise </h4> 
                
               <p class="adresse"> Département Métiers du Multimédia et de l'Internet (MMI)</p>
                
               <p class="adresse"> 34 Bis Boulevard Henri Bergson</p>
                
               <p class="adresse"> 95200 Sarcelles</p>
             
        </article>
        

    </section>
        </main>
    </section>

    <?php require_once('./ressources/includes/footer.php'); ?>

</body>

</html>