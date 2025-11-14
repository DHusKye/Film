<?php 
session_start();
require_once '../Corps/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
</head>

<body>
<h1>Bonjour a Toi, <?php echo $_SESSION['pseudoUtilisateur']; ?> </h1>

<a href="../CRUD/modifUser.php">Modifier Utilisateur</a>




</body>
</html>