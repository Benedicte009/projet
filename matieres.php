<?php
include "connexion_bd.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<title>Matières</title>
<link rel="stylesheet" href="css/style_global.css">
</head>

<body>

<header>
<h1>Les Matières</h1>
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

<h2>Liste des matières</h2>

<?php

$sql = "SELECT * FROM matieres";
$resultat = mysqli_query($connexion, $sql);

while($row = mysqli_fetch_assoc($resultat))
{
    echo "<div>";
    echo "<h3>" . $row['nom_matiere'] . "</h3>";
    echo "</div>";
}

?>

</main>

</body>
</html>