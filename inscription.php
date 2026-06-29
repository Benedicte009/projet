<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<title>Inscription</title>

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
              <a href="inscription.php">inscription</a>
              </nav>
              
<h1>Créer un compte</h1>

</header>


<main>

<form action="traitement_inscription.php" method="POST">


<label>Nom :</label>

<input type="text" name="nom" required>


<label>Email :</label>

<input type="email" name="email" required>


<label>Mot de passe :</label>

<input type="password" name="mot_de_passe" required>


<button type="submit">
S'inscrire
</button>


</form>

</main>


</body>

</html>