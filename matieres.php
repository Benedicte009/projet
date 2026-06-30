<?php

include("connexion_bd.php");

$resultat = mysqli_query($connexion, "SELECT * FROM matieres");

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<title>Les matières</title>

<link rel="stylesheet" href="css/style_global.css">

</head>


<body>


<?php include("includes/header.php"); ?>


<section class="matieres">


<h2>Liste des matières</h2>


<div class="liste-matieres">


<?php

while($matiere = mysqli_fetch_assoc($resultat))
{

?>

<a href="fiches.php?id_matiere=<?php echo $matiere['id']; ?>" class="carte">

<?php echo $matiere['nom_matiere']; ?>

</a>


<?php

}

?>


</div>


</section>



<?php include("includes/footer.php"); ?>


</body>

</html>