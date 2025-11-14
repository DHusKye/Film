<?php
    session_start();
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <!-- Logo et titre à gauche -->
        <a class="navbar-brand" href="../Page/pageIndex.php">
            <i class="fas fa-film"></i>
            CinéMania
        </a>

        <!-- Boutons à droite -->
        <div class="ms-auto d-flex gap-3">
            <?php
                if(!isset($_SESSION['id'])) {
                    echo ' <a href="../Page/pageDeConnexion.php" class="btn btn-connexion">Connexion</a>';
                    echo ' <a href="../Page/pageInscription.php" class="btn btn-inscription">Inscription</a>';
                } else{
                    echo '<a href="../CRUD/deconnexion.php" class="btn btn-connexion">Deconnexion</a>';
                    echo '<a href="../page/modifUser.php" class="btn btn-inscription">Profil</a>';
                }
            ?>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
