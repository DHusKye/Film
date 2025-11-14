<?php
session_start();
require '../CRUD/dbYameteKudasai.php';

// Vérifier que l'utilisateur est connecté
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    echo "❌ Vous devez être connecté pour accéder à cette page.<br>";
    echo '<a href="pageDeConnexion.php">Se connecter</a>';
    exit;
}

$id = $_SESSION['id'];
$donnes = [];

// Récupérer les données de l'utilisateur
try {
    $tableaux = $pdo->prepare('SELECT * FROM inscription WHERE id = ?');
    $tableaux->execute([$id]);
    $donnes = $tableaux->fetch(PDO::FETCH_ASSOC);
    
    if (!$donnes) {
        echo "❌ Utilisateur introuvable (ID: $id)<br>";
        echo '<a href="pageDeConnexion.php">Se reconnecter</a>';
        exit;
    }
    
    // 🔍 DEBUG - Retirez après test
    // echo "✅ Données chargées :<br>";
    // var_dump($donnes);
    // echo "<hr>";
    
} catch(PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['envoi'])) {
    
    if (!empty($_POST['pseudoUtilisateur']) && !empty($_POST['nomUtilisateur']) && !empty($_POST['prenomUtilisateur']) && !empty($_POST['ageUtilisateur']) && !empty($_POST['sexeUtilisateur']) && !empty($_POST['emailUtilisateur'])) {
        
        $pseudo = htmlspecialchars($_POST['pseudoUtilisateur']);
        $nom = htmlspecialchars($_POST['nomUtilisateur']);
        $prenom = htmlspecialchars($_POST['prenomUtilisateur']);
        $age = (int) $_POST['ageUtilisateur'];
        $sexe = htmlspecialchars($_POST['sexeUtilisateur']);
        $email = htmlspecialchars($_POST['emailUtilisateur']);
        
        if (!empty($_POST['mdpUtilisateur'])) {
            $mdp = password_hash($_POST['mdpUtilisateur'], PASSWORD_DEFAULT);
            $stmt = $pdo->prepare('UPDATE inscription SET pseudoUtilisateur = ?, nomUtilisateur = ?, prenomUtilisateur = ?, ageUtilisateur = ?, sexeUtilisateur = ?, emailUtilisateur = ?, mdpUtilisateur = ? WHERE id = ?');
            $stmt->execute([$pseudo, $nom, $prenom, $age, $sexe, $email, $mdp, $id]);
        } else {
            $stmt = $pdo->prepare('UPDATE inscription SET pseudoUtilisateur = ?, nomUtilisateur = ?, prenomUtilisateur = ?, ageUtilisateur = ?, sexeUtilisateur = ?, emailUtilisateur = ? WHERE id = ?');
            $stmt->execute([$pseudo, $nom, $prenom, $age, $sexe, $email, $id]);
        }
        
        $_SESSION['pseudoUtilisateur'] = $pseudo;
        
        header('Location: ../Page/pageIndex.php');
        exit;
        
    } else {
        echo "❌ Tous les champs sont obligatoires";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        
        
        
        <form action="" method="POST">
            
            <input type="hidden" name="id" value='<?php  echo $donnes['id']; ?>'>
            <input type="text" name="pseudoUtilisateur" value='<?php  echo $donnes['pseudoUtilisateur']; ?>'>
            <input type="text" name="nomUtilisateur" placeholder="Nom" value='<?php echo $donnes['nomUtilisateur']; ?>'>
            <input type="text" name="prenomUtilisateur" placeholder="Prenom" value='<?php echo $donnes['prenomUtilisateur']; ?>'>
            <input type="number" name="ageUtilisateur" placeholder="Age" value='<?php echo $donnes['ageUtilisateur'];?>'>
            <select name="sexeUtilisateur" id=" value='<?php echo $donnes['sexeUtilisateur']; ?>'">
                <option value="">Sexe</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            <input type="text" name="emailUtilisateur" value='<?php  echo $donnes['emailUtilisateur']; ?>'>
            <input type="password" name="mdpUtilisateur" value='<?php  echo $donnes['mdpUtilisateur']; ?>'>
            <input type="submit" value="Modifier" name="envoi">
            
    </form>

    </body>
</html>
