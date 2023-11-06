<?php
require_once('../../ressources/includes/connexion-bdd.php');

$pageCourante = "articles";

$formulaire_soumis = !empty($_POST);
$entree_mise_a_jour = array_key_exists("id", $_GET);

$entite = null;
if ($entree_mise_a_jour) {
    // On cherche l'article à éditer
    $commande = $clientMySQL->prepare('SELECT * FROM article WHERE id = :id');
    $commande->execute([
        "id" => $_GET["id"]
    ]);

    $entite = $commande->fetch();
}

if ($formulaire_soumis) {
    // On met à jour l'article existant
    $commande = $clientMySQL->prepare("
        UPDATE article
        SET titre = :titre, chapo = :chapo, contenu = :contenu, date_creation = :date_creation, auteur_id = :auteur_id, image = :image, lien_yt = :lien_yt
        WHERE id = :id
    ");

    $commande->execute([
        "titre" => $_POST["titre"],
        "chapo" => $_POST["chapo"],
        "contenu" => $_POST["contenu"],
        "date_creation" => $_POST["date_creation"],
        "auteur_id" => $_POST["auteur_id"],
        "image" => $_POST["image"],
        "lien_yt" => $_POST["lien_yt"],
        "id" => $_POST["id"]
    ]);

    // Redirection vers index.php
    header("Location: index.php");
    exit();
} else {
    // modification
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $commande = $clientMySQL->prepare("
            INSERT INTO article (titre, chapo, contenu, date_creation, auteur_id, image, lien_yt)
            VALUES (:titre, :chapo, :contenu, :date_creation, :auteur_id, :image, :lien_yt)
        ");

        $commande->execute([
            "titre" => $_POST["titre"],
            "chapo" => $_POST["chapo"],
            "contenu" => $_POST["contenu"],
            "date_creation" => $_POST["date_creation"],
            "auteur_id" => $_POST["auteur_id"],
            "image" => $_POST["image"],
            "lien_yt" => $_POST["lien_yt"]
        ]);
        header("Location: index.php");
        exit();
    }
}

$racineURL = $_SERVER['REQUEST_URI'];
$URLindex = "{$racineURL}/index.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>

    <title>Editer - Administration</title>
</head>

<body>
    <?php include_once '../ressources/includes/menu-principal.php'; ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Editer</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="py-6">
                <form method="POST" action="" class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                    <section class="grid gap-6">
                        <?php if ($entree_mise_a_jour) : ?>
                            <input type="hidden" value="<?php echo $entite['id']; ?>" name="id">
                        <?php endif; ?>
                        <div class="col-span-12">
                            <label for="titre" class="block text-lg font-medium text-gray-700">Titre</label>
                            <input type="text" name="titre" value="<?php echo $entite['titre']; ?>" id="titre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div class="col-span-12">
                            <label for="chapo" class="block text-lg font-medium text-gray-700">Chapô</label>
                            <textarea name="chapo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="chapo"><?php echo $entite['chapo']; ?></textarea>
                        </div>
                        <div class="col-span-12">
                            <label for="contenu" class="block text-lg font-medium text-gray-700">Contenu</label>
                            <textarea name="contenu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="contenu"><?php echo $entite['contenu']; ?></textarea>
                        </div>
                        <div class="col-span-12">
                            <label for="date_creation" class="block text-lg font-medium text-gray-700">Date</label>
                            <input type="datetime-local" name="date_creation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="date_creation" value="<?php echo $entite['date_creation']; ?>">
                        </div>
                        <div class="col-span-12">
                            <label for="auteur_id" class="block text-lg font-medium text-gray-700">ID Auteur</label>
                            <input type="text" name="auteur_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="auteur_id" value="<?php echo $entite['auteur_id']; ?>">
                        </div>
                        <div class="col-span-12">
                            <label for="image" class="block text-lg font-medium text-gray-700">Url image</label>
                            <input type="text" name="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="image" value="<?php echo $entite['image']; ?>">
                        </div>
                        <div class="col-span-12">
                            <label for="lien_yt" class="block text-lg font-medium text-gray-700">Url Youtube</label>
                            <input type="text" name="lien_yt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="lien_yt" value="<?php echo $entite['lien_yt']; ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <button type="submit" class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Modifier</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>