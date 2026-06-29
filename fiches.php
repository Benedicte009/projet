<?php
include "connexion_bd.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Fiches</title>
<link rel="stylesheet" href="css/style_global.css">
</head>

<body>

<header>
<h1>Fiches de révision</h1>

<nav>
    <a href="index.php">Accueil</a>
    <a href="matieres.php">Matières</a>
    <a href="fiches.php">Fiches</a>
    <a href="mes_fiches.php">Mes fiches</a>
    <a href="connexion.php">Connexion</a>
    <a href="inscription.php">Inscription</a>
</nav>
</header>

<main>

<h2>Toutes les fiches</h2>

<?php

$sql = "
SELECT fiches.titre, fiches.contenu, matieres.nom_matiere
FROM fiches
INNER JOIN matieres
ON fiches.id_matiere = matieres.id
";

$resultat = mysqli_query($connexion, $sql);

while($row = mysqli_fetch_assoc($resultat))
{
    echo "<div style='border:1px solid black; padding:10px; margin:10px;'>";

    echo "<h3>" . $row['titre'] . "</h3>";
    echo "<p><strong>Matière :</strong> " . $row['nom_matiere'] . "</p>";
    echo "<p>" . $row['contenu'] . "</p>";

    echo "</div>";
}

?>

</main>

</body>
</html>