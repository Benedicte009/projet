<?php


include "connexion_bd.php";



$nom = $_POST['nom'];

$email = $_POST['email'];

$mot_de_passe = $_POST['mot_de_passe'];



$sql = "INSERT INTO utilisateurs
(nom, email, mot_de_passe)

VALUES

('$nom','$email', '$mot_de_passe')";



$resultat = mysqli_query($connexion, $sql);



if($resultat)

{

    echo "
    <h2>Inscription réussie !</h2>

    <a href='connexion.php'>
    Se connecter
    </a>
    ";

}

else

{

    echo "Erreur lors de l'inscription";

}



?>