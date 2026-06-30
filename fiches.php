<?php

include "connexion_bd.php";


$id_matiere = $_GET['id'];


$sql = "SELECT * FROM fiches WHERE id_matiere='$id_matiere'";

$resultat = mysqli_query($connexion,$sql);


?>


<!DOCTYPE html>
<html>

<head>

<title>Fiches</title>

<link rel="stylesheet" href="css/style_global.css">

</head>


<body>


<?php include "includes/header.php"; ?>


<section class="fiches">


<h2>Nos fiches de révision</h2>


<?php


while($fiche = mysqli_fetch_assoc($resultat))
{


?>


<div class="carte">


<h3>

<?php echo $fiche['titre']; ?>

</h3>


<a href="voir_fiche.php?id=<?php echo $fiche['id']; ?>">

Voir le cours

</a>


</div>


<?php

}

?>


</section>


<?php include "includes/footer.php"; ?>


</body>

</html>