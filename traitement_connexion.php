<?php

session_start();

include "connexion_bd.php";


$email = $_POST['email'];

$mot_de_passe = $_POST['mot_de_passe'];



$sql = "SELECT * FROM utilisateurs 
WHERE email='$email' 
AND mot_de_passe='$mot_de_passe'";


$resultat = mysqli_query($connexion, $sql);



if(mysqli_num_rows($resultat) > 0)
{

    $utilisateur = mysqli_fetch_assoc($resultat);


    $_SESSION['id'] = $utilisateur['id'];

    $_SESSION['nom'] = $utilisateur['nom'];


    header("Location: index.php");

}
else
{

    echo "Email ou mot de passe incorrect";

}


?>