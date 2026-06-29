<?php

$serveur = "127.0.0.1";
$utilisateur = "root";
$mot_de_passe = "";
$nom_base = "studyflow";
$port = 3305;


$connexion = mysqli_connect(
    $serveur,
    $utilisateur,
    $mot_de_passe,
    $nom_base,
    $port
);


if (!$connexion) {

    die("Erreur de connexion : " . mysqli_connect_error());

}

?>