<?php
session_start();
require '../CRUD/dbYameteKudasai.php';  // Connexion à la base de données

if(isset($_POST['envoi'])){
    // Vérification que les champs ne sont pas vides
    if(!empty($_POST['pseudoUtilisateur']) && !empty($_POST['mdpUtilisateur'])){
        
        $pseudo = htmlspecialchars($_POST['pseudoUtilisateur']);
        $mdp = $_POST['mdpUtilisateur'];

        // Préparer la requête pour récupérer l'utilisateur avec le pseudo donné
        $recupUtilisateur = $pdo->prepare('SELECT * FROM inscription WHERE pseudoUtilisateur = ?');
        $recupUtilisateur->execute(array($pseudo));
        $user = $recupUtilisateur->fetch();

        // Vérifier si l'utilisateur existe
        if($user) {
            // L'utilisateur existe, vérifier le mot de passe
            if(password_verify($mdp, $user['mdpUtilisateur'])) {
                // Le mot de passe est correct
                $_SESSION['pseudoUtilisateur'] = $pseudo;
                $_SESSION['id'] = $user['id'];

                header('Location: pageIndex.php');
                exit();  // Toujours appeler exit après un header de redirection
            } else {
                // Mot de passe incorrect
                echo "Votre mot de passe est incorrect.";
            }
        } else {
            // Pseudo incorrect
            echo "Votre pseudo est incorrect.";
        }

    } else {
        echo "Les champs ne sont pas complets.";
    }
}
?>









<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/pageDeConnexion.css">
</head>
<body>
    <?php include '../Corps/header.php'; ?>

     <h1 class="lien">Login</h1> 

    <div class="page-container d-flex flex-column align-items-center justify-content-center vh-100">
    <div class="background_encadrement"></div> 
    
   
        <a href="pageInscription.php"><button>Retour inscription</button></a>

        <a href="pageIndex.php"><button>Retour accueil</button></a>


        <form action="" method="POST"> 
            <div class="mb-3">
                <label for="pseudo" class="login-label">Pseudo</label>
                <input type="text" class="form-control login-input" name='pseudoUtilisateur' required>
            </div>
                
            <div class="mb-3">
                <label for="password" class="login-label1">Mot de passe</label>
                <input type="password" class="form-control login-input1" name="mdpUtilisateur" required>
            </div>
                
            <div class="d-grid mt-4">
                <button type="submit" name="envoi" class="btn btn-danger text-uppercase login-btn">
                    Connexion
                </button>
            </div>
        </form>
       
    </div>


</body>
</html>