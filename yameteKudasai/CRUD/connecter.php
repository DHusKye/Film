<?php 
session_start();
if (!isset($_SESSION['mdpUtilisateur'])) {
    header("Location: pageDeConnexion.php");
}   
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="deconnexion.php"><button>Déconnexion</button></a>
    
</body>
</html>