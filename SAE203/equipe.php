<link rel="icon" type="image/png" href="https://jcris.alwaysdata.net/SAE203/ressources/images/logocomunique.png">

<?php
$couleur_bulle_classe = "violet";
$page_active = "equipe";

require_once('./ressources/includes/connexion-bdd.php');

$listeAuteursCommande = $clientMySQL->prepare('SELECT * FROM auteur');
$listeAuteursCommande->execute();
$listeAuteurs = $listeAuteursCommande->fetchAll();

$auteur = $listeAuteursCommande->fetch();

$nbrAut=$clientMySQL->query("SELECT COUNT(*) AS 'NbrAut' FROM auteur");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo getenv('CHEMIN_BASE') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipe de Rédaction - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">
    <link rel="stylesheet" href="ressources/css/equipe.css">
    <link rel="stylesheet" href="ressources/css/global.css">

    
</head>

<body>
    <section>
        <?php require_once('./ressources/includes/header.php'); ?>
        <?php require_once('./ressources/includes/bulle.php'); ?>

        <main class="conteneur-principal conteneur-1280">
            <h1 class="titre-page">Les <?php echo $nbrAut->fetch()["NbrAut"]; ?> Auteurs du Site :</h1>
            <section class="liste-membres">
                <?php foreach ($listeAuteurs as $auteur) { ?>
                    
                    <a  href='<?php echo $auteur['lien_twitter'];?>' <?php echo $auteur["id"]; ?> style="text-decoration:none">

                    <div class="image">

                    <img
                        class="img__img"
                        src='<?php echo $auteur['lien_avatar']; ?>' 
                        loading="lazy"
                        width='316' 
                        height='400' 
                        alt='<?php echo "Portrait {$auteur['prenom']}"; ?>' 
                    />
                        <div class="image__overlay">
                            <div class="image__title">Twitter</div>
                        </div>
                   </div>
 
                        <section class='noms'>
                            <?php echo $auteur["prenom"]; ?> 
                            <?php echo $auteur["nom"]; ?>
                        </section>
                        
                    
                    
                    </a>
                <?php } ?>
            </section>
        </main>

        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>