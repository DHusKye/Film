<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=residentEvil", "root", "root");

// var_dump($_POST);

if(isset($_POST['envoi'])){
 if(!empty($_POST['nomUtilisateur']) && !empty($_POST['mdpUtilisateur'])){
    $pseudo = htmlspecialchars($_POST['nomUtilisateur']);
    $mdp = sha1($_POST['mdpUtilisateur']);

    $recupUtilisateur = $pdo->prepare('SELECT * FROM utilisateur WHERE nomUtilisateur = ? AND mdpUtilisateur = ? ');
    $recupUtilisateur->execute(array($pseudo, $mdp));

    if($recupUtilisateur->rowCount() > 0){
        $_SESSION['nomUtilisateur'] = $pseudo;
        $_SESSION['mdpUtilisateur'] = $mdp;
        $_SESSION['id'] = $recupUtilisateur->fetch()['id'];

        header('Location: connecter.php');

    }else {
        echo"Votre mots de passe ou pseudo est mauvais";
    }

 }else {
    echo "Tes champs ne sont pas complet";
 }

}



?>









<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Château de Dimitrescu - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/pageDeConnexion.css">

    <link href="https://fonts.googleapis.com/css2?family=Nosifier&display=swap" rel="stylesheet">
</head>
<body>
    <img class="background-image" src="../ImageResidentEvil/Resident-Evil-Villagehomme.jpg">

     <h1>Login</h1> 
    <div class="page-container d-flex flex-column align-items-center justify-content-center vh-100">
    <div class="background_encadrement"></div> 
      <img class="encadrement" src="../ImageResidentEvil/Gemini_Generated_Image_7pkgtx7pkgtx7pkg-removebg-preview.png">
    
   
        <form action="" method="POST"> 
            <div class="mb-3">
                <label for="username" class="login-label">Nom d'utilisateur</label>
                <input type="text" class="form-control login-input" name='nomUtilisateur' required>
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

    <a href="pageIndex.php">
        <button>> 
            Retour
        </button>
    </a> 
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>