<?php 
session_start();

require '../CRUD/dbYameteKudasai.php';  //  connecter a la base de donnee

if(isset($_POST['envoi'])){    // lorsque l'on clique sur le bouton envoie , la fonction if commence a partie de la en eexplicquant que si on clique sur envoie la fonction commence
    if ( !empty($_POST['pseudoUtilisateur']) && !empty($_POST['nomUtilisateur']) && !empty($_POST['prenomUtilisateur']) && !empty($_POST['ageUtilisateur']) && !empty($_POST['sexeUtilisateur'])&& !empty($_POST['emailUtilisateur']) && !empty($_POST['mdpUtilisateur'])) {
        
        $pseudo = htmlspecialchars($_POST['pseudoUtilisateur']) ;
        $nom = htmlspecialchars($_POST['nomUtilisateur']);
        $prenom = htmlspecialchars($_POST['prenomUtilisateur']);
        $age = (int) $_POST['ageUtilisateur'];
        $sexe = htmlspecialchars($_POST['sexeUtilisateur']);
        $email = htmlspecialchars($_POST['emailUtilisateur']);
        $mdp = password_hash($_POST['mdpUtilisateur'], PASSWORD_DEFAULT);  // on hash le mot de passe pour la securite

        $insertionUtilisateur = $pdo->prepare('INSERT INTO inscription(pseudoUtilisateur, nomUtilisateur, prenomUtilisateur, ageUtilisateur, sexeUtilisateur, emailUtilisateur, mdpUtilisateur) VALUES(?, ?, ?, ?, ?, ?, ?)') ;
        $insertionUtilisateur->execute(array($pseudo, $nom, $prenom, $age, $sexe, $email, $mdp));

        $recupUtilisateur = $pdo->prepare('SELECT * FROM inscription WHERE pseudoUtilisateur = ? AND mdpUtilisateur = ?');
        $recupUtilisateur->execute(array($pseudo, $mdp));
        if($recupUtilisateur->rowCount() > 0){   
            $_SESSION['pseudoUtilisateur'] = $pseudo;
            $_SESSION['mdpUtilisateur'] = $mdp;
            $_SESSION['id'] = $recupUtilisateur->fetch()['id'];     //on recuperer user et on recupr tout les donnes de cette utilsiateur et la on veut que l'id de lutilisateur
            header('Location: pageDeConnexion.php');  // une fois que l'utilisateur est inscrit on le redirige vers la page d'accueil en lui passant son id en parametre d'url
        }

    }else {
        echo "Veuillez remplir tout les champs d'inscription";
    }
}

?>










<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inscription2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>inscription</title>
</head>
<body>

     <h1>Inscription</h1> 

     
     <a href="pageDeConnexion.php"><button>Retour Connexion</button></a>

     <a href="pageIndex.php"><button>Retour accueil</button></a>
     
    <div class="page-container d-flex flex-column align-items-center justify-content-center vh-100">

    <div class="d-flex">

        
        <form action="" method="POST"> 
            <div class="mb-3">
                <label for="username" class="login-label">Pseudo</label>
                <input type="text" class="form-control login-input" name="pseudoUtilisateur"  required>
            </div>
            
            <div class="mb-3">
                <label for="username" class="login-label">Nom</label>
                <input type="text" class="form-control login-input" name="nomUtilisateur"  required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="login-label1">Prenom</label>
                <input type="text" class="form-control login-input1" name="prenomUtilisateur" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="login-label1">Age</label>
                <input type="number" class="form-control login-input1" name="ageUtilisateur" required>
            </div>
            
            <div class="mb-3">
                <label for="username" class="login-label">Sexe</label>
                <input type="text" class="form-control login-input" name="sexeUtilisateur"  required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="login-label1">Email</label>
                <input type="email" class="form-control login-input1" name="emailUtilisateur" required>
            </div>

            <div class="mb-3">
                <label for="password" class="login-label1">Mot de passe</label>
                <input type="password" class="form-control login-input1" name="mdpUtilisateur" required>
            </div>
            
            <div class="d-grid mt-4">
                <button type="submit" name="envoi" class="btn btn-danger text-uppercase login-btn">
                    valider mon Inscription
                </button>
            </div>
        </form>
    
    </div>

    </div> 


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>