<link rel="icon" type="image/png" href="https://jcris.alwaysdata.net/SAE203/ressources/images/logocomunique.png">


<?php
require_once('../../ressources/includes/connexion-bdd.php');


function tronquer($contenu) {
    $contenu = trim($contenu); // Supprimer les espaces au début et à la fin du contenu
    $longueur = strlen($contenu);
  
    if ($longueur > 30) {
      $contenuTronque = substr($contenu, 0, 30) . '[...]';
      return $contenuTronque;
    } else {
      return $contenu;
    }
  }

  
$commande = $clientMySQL->prepare('
    SELECT
        ar.id,
        ar.titre AS titre_article, 
        ar.chapo AS chapo_article,
        ar.contenu AS contenu_article,
        ar.image AS image_article,
        ar.lien_yt AS lien_yt_article,
        ar.date_creation AS date_creation_article,
        ar.auteur_id AS article_auteur_id, 
        CONCAT(auteur.nom, " ", auteur.prenom) AS auteur
    FROM article AS ar 
    LEFT JOIN auteur 
    ON ar.auteur_id = auteur.id;
');
$commande->execute();
$liste = $commande->fetchAll();

$pageCourante = "articles";
$racineURL = $_SERVER['REQUEST_URI'];

$URLCreation = "{$racineURL}/creation.php";
$nbrArt = $clientMySQL->query("SELECT COUNT(*) AS 'NbrArt' FROM article");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once("../ressources/includes/head.php"); ?>
    <title>Liste articles - Administration</title>
</head>

<body>
    <?php require_once('../ressources/includes/menu-principal.php'); ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 justify-between flex">
            <h1 class="text-3xl font-bold text-gray-900">Liste Articles</h1>
            <a href="<?php echo $URLCreation ?>" class="block font-bold rounded-md bg-indigo-600 py-2 px-4 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Ajouter un nouvel article</a>
        </div>
        <div class="mx-auto max-w-7xl ">
            <p class="text-gray-500">Nombre d'articles : <?php echo $nbrArt->fetch()["NbrArt"]; ?></p>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6">

            <div class="py-6">
                <table class="w-full bg-white rounded-lg overflow-hidden border-collapse shadow">
                    <head class="bg-gray-100">
                        <tr>
                            <th class="font-bold pl-8 py-4 text-left">Id</th>
                            <th class="font-bold pl-8 py-4 text-left">Image</th>
                            <th class="font-bold pl-8 py-4 text-left">Titre</th>
                            <th class="font-bold pl-8 py-4 text-left">Chapô</th>
                            <th class="font-bold pl-8 py-4 text-left">Contenu</th>
                            <th class="font-bold pl-8 py-4 text-left">Dâte de création</th>
                            <th class="font-bold pl-8 py-4 text-left">Auteur</th>
                            <th class="font-bold pl-8 py-4 text-left">Lien YouTube</th>
                            <th class="font-bold pl-8 py-4 text-left">Options</th>
                            <th class="pl-8 py-4"></th>
                        </tr>
                    </head>
                    <body>
                        <?php
                        foreach ($liste as $element) {
                            $lienEdition = "{$racineURL}/edition.php?id={$element["id"]}";
                            $lienDelete = "{$racineURL}/delete.php?id={$element["id"]}";
                            $dateCreation = new DateTime($element["date_creation_article"]);
                            $auteurArticle = $element["auteur"];
                            if (is_null($auteurArticle)) {
                                $auteurArticle = "/";
                            }
                        ?>
                            <tr class="hover:bg-gray-100 border-b-2 border-b-gray-100 last:border-b-0 first:border-t-2 first:border-t-gray-200">
                                <td class="pl-2 p-2 font-bold">
                                    <?php echo $element["id"]; ?>
                                </td>
                                <td class="pl-8 p-4">
                        <div class="w-40 h-40 ">
             <img src="<?php echo $element["image_article"]; ?>" alt="Image de l'article"  >
                        </div>   </td>
                                <td class="pl-8 p-4"><?php echo tronquer($element["titre_article"]); ?></td>
                                <td class="pl-8 p-4"><?php echo tronquer($element["chapo_article"]); ?></td>
                                <td class="pl-8 p-4"><?php echo tronquer($element["contenu_article"]); ?></td>
                                <td class="pl-8 p-4"><?php echo $dateCreation->format('d/m/Y H:i:s'); ?></td>
                                <td class="pl-8 p-4">
                                    <?php echo $auteurArticle; ?>
                                </td>
                                <td class="pl-4 p-2"><?php echo tronquer($element["lien_yt_article"]); ?></td>
                                <td class="pl-4 p-2 space-y-4 mt-12 text-center">
                                    <a href="<?php echo $lienEdition; ?>" class='font-bold text-blue-600'>Éditer</a>
                                    <a href="<?php echo $lienDelete; ?>" class='font-bold text-red-600  '>Supprimer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </body>
                </table>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>
