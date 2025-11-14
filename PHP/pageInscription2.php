<?php 
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=residentEvil", "root", "root");
if(isset($_POST['envoi'])){    // lorsque l'on clique sur le bouton envoie , la fonction if commence a partie de la en eexplicquant que si on clique sur envoie la fonction commence
    if(!empty($_POST['nomUtilisateur']) && !empty($_POST['mdpUtilisateur']) && !empty($_POST['prenomUtilisateur']) && !empty($_POST['ageUtilisateur']) && !empty($_POST['emailUtilisateur'])){

        $pseudo = htmlspecialchars($_POST['nomUtilisateur']) ;
        $mdp = sha1($_POST['mdpUtilisateur']);
        $prenom = htmlspecialchars($_POST['prenomUtilisateur']);
        $age = (int) $_POST['ageUtilisateur'];
        $email = htmlspecialchars($_POST['emailUtilisateur']);

        $insertionUtilisateur = $pdo->prepare('INSERT INTO utilisateur(nomUtilisateur, mdpUtilisateur, prenomUtilisateur, ageUtilisateur, emailUtilisateur) VALUES(?, ?, ?, ?, ?)') ;
        $insertionUtilisateur->execute(array($pseudo, $mdp, $prenom, $age, $email));

        $recupUtilisateur = $pdo->prepare('SELECT * FROM utilisateur WHERE nomUtilisateur = ? AND mdpUtilisateur = ?');
        $recupUtilisateur->execute(array($pseudo, $mdp));
        if($recupUtilisateur->rowCount() > 0){   
            $_SESSION['nomUtilisateur'] = $pseudo;
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

    <div class="page-container d-flex flex-column align-items-center justify-content-center vh-100">

    <div class="d-flex">

        
        
        
        <form action="#" method="POST"> 

            <img class="encadrement" src="../ImageResidentEvil/Gemini_Generated_Image_7pkgtx7pkgtx7pkg-removebg-preview.png">
            
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
        

        <a href="pageIndex.php">
        <button>> 
            Retour
        </button>
    </a> 
    
    </div>

    </div> 


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</body>
</html>