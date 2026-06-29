<?php

$message = "";

if(isset($_POST['ajouter'])){

    $matiere = $_POST['matiere'];
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];

    $message = "La fiche a été ajoutée avec succès !";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ajouter une fiche - StudyFlow</title>

    <link rel="stylesheet" href="css/style_global.css">

</head>

<body>

<header>

    <h1>StudyFlow</h1>

    <nav>
         <a href="index.php">Accueil</a>
            <a href="matieres.php">Matières</a>
            <a href="fiches.php">Fiches</a>
            <a href="mes_fiches.php">mes_fiches</a>
            <a href="ajouter.php">Ajouter</a>
             <a href="connexion.php">connexion</a>
              <a href="inscription.php">inscription</a>
             
    </nav>

</header>

<section class="ajouter">

    <h2>Ajouter une fiche</h2>

    <form method="POST">

        <input type="text" name="matiere" placeholder="Nom de la matière" required>

        <input type="text" name="titre" placeholder="Titre de la fiche" required>

        <textarea name="contenu" placeholder="Écris le contenu de la fiche..." required></textarea>

        <button type="submit" name="ajouter">
            Ajouter
        </button>

    </form>

    <p class="message">
        <?php echo $message; ?>
    </p>

</section>

<footer>

    <p>© 2026 StudyFlow - Site de révision pour étudiants</p>

</footer>

</body>
</html>