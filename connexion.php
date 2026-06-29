<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<title>Connexion</title>

<link rel="stylesheet" href="css/style_global.css">

</head>


<body>


<header>
     <nav>
            <a href="index.php">Accueil</a>
            <a href="matieres.php">Matières</a>
            <a href="fiches.php">Fiches</a>
            <a href="mes_fiches.php">mes_fiches</a>
            <a href="ajouter.php">Ajouter</a>
             <a href="connexion.php">connexion</a>
              <a href="deconnexion.php">deconnexion</a>
              </nav>

<h1>Connexion</h1>

</header>



<main>


<form action="traitement_connexion.php" method="POST">


<label>Email :</label>

<input type="email" name="email" required>



<label>Mot de passe :</label>

<input type="password" name="mot_de_passe" required>



<button type="submit">
Se connecter
</button>


</form>



<p>
Vous n'avez pas encore de compte ?
<a href="inscription.php">
S'inscrire
</a>
</p>


</main>


</body>

</html>