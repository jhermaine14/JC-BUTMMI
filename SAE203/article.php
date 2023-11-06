<link rel="icon" type="image/png" href="https://jcris.alwaysdata.net/SAE203/ressources/images/logocomunique.png">


<?php
$couleur_bulle_classe = "rose";
$page_active = "index";

require_once('./ressources/includes/connexion-bdd.php');
//fait par Matéo Conégan

if (isset($_GET['id'])) {
    $articleId = $_GET['id'];
    
    $articleCommand = $clientMySQL->prepare('SELECT * FROM article WHERE id = :id');
    $articleCommand->execute([
        'id' => $articleId,
    ]);
    $article = $articleCommand->fetch();
} else {
    // Redirige vers la page d'accueil si rien
    header("Location: accueil.php");
    exit();
}

$auteurCommand = $clientMySQL->prepare('SELECT * FROM auteur WHERE id = :id');
$auteurCommand->execute([
    'id' => 2,
]);
$auteur = $auteurCommand->fetch();

// Fonction pour extraire l'identifiant
function extractVideoId($url)
{
    $videoId = "";
    $pattern = '/^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=([a-zA-Z0-9_-]+))(?:\S+)?$/';
    if (preg_match($pattern, $url, $matches)) {
        $videoId = $matches[1];
    }
    return $videoId;
}

?>





<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo getenv('CHEMIN_BASE') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">

    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/article.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php require_once('./ressources/includes/header.php'); ?>
</head>

<body>
    <?php require_once('./ressources/includes/header.php'); ?>
    <?php require_once('./ressources/includes/bulle.php'); ?>

    <section>
        <main class="conteneur-principal conteneur-1280">
            <img class="image_article" src="<?php echo $article["image"]; ?>" alt="<?php echo $article["titre"]; ?>">

            <h1 class="titre-page"><?php echo $article["titre"]; ?></h1>

            <p class="chapo"><?php echo $article["chapo"]; ?></p>
            <p class="realisation"> 

Par  <?php echo $auteur["prenom"].' '.$auteur["nom"]; ?>. 
 Publié le <?php echo $article["date_creation"]; ?> <i class="fas fa-stopwatch icon-chronometre"></i> 
</p> 
    <p class="contenu"> 
        <?php  echo $article["contenu"];?> 
        </p> 
       
        <article class="youtube-video-conteneur">
    <?php
    // Extrait l'identifiant 
    $videoId = extractVideoId($article["lien_yt"]);
    // Générer l'URL Embed Player
    $embedUrl = "https://www.youtube.com/embed/" . $videoId;
    ?>
    <div class="youtube-video">
        <iframe width="560" height="315" src="<?php echo $embedUrl; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</article>

        </main>
    </section> 
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>

</html>