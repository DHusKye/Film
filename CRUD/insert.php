<?php 

require 'dbYameteKudasai.php';
//Vérifie que le formulaire a bien été soumis via POST
if ($_SERVER['REQUEST_METHOD'] === "POST") {


// on vérifie que tous les champs attendus existent Et ne sont pas vides
    if (!empty($_POST['pseudoUtilisateur']) && !empty($_POST['nomUtilisateur']) && !empty($_POST['prenomUtilisateur']) && !empty($_POST['ageUtilisateur']) && !empty($_POST['sexeUtilisateur'])&& !empty($_POST['emailUtilisateur']) && !empty($_POST['mdpUtilisateur'])) {
        //on sécurise les données recues
        $pseudo = trim($_POST['pseudoUtilisateur']);
        $nom = trim($_POST['nomUtilisateur']);
        $prenom = trim($_POST['prenomUtilisateur']);  // trim enleve les epsace et caractere spéciaux
        $age = $_POST['ageUtilisateur'];
        $sexe = $_POST['sexeUtilisateur'];
        $email = $_POST['emailUtilisateur'];
        $mdp = sha1($_POST['mdpUtilisateur']); // on hash le mot de passe


        try {
            // Requete préparer pour éviter les injectinons SQL
            $sql = "INSERT INTO inscription (pseudoUtilisateur, nomUtilisateur, prenomUtilisateur, ageUtilisateur, sexeUtilisateur, emailUtilisateur, mdpUtilisateur) VALUE (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt ->execute([$pseudo, $nom, $prenom, $age, $sexe, $email, $mdp]);

            // Rediction vers l'accueil si tou s'est bien passé
            header("Location: pageInscription.php");
            exit;

        } catch (PDOException $e ) {
            // En cas d'erreur SQL , on affiche un message d'erreur lissible
        echo "<p style='color:red';>Erreur lors de l'ajout dans la base de données : </p>";
        echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";

        // optionnel : on peut enregister l'erreur dans un fichier log
        // file_putucontens('erreurs.log', $e->getMessage(), FILE_APPEND);

        } 

    }else {
           // si des champs sont mnquants ou vides
        echo "<p style='color:red;'> Tous les champs sont obligatoires.</p>";
        echo "<p><a href='pageInscription.php'> Retour</a></p>";

        
    }

}else{
    //si quelqu'un tente d'accéder au script sans POST
    echo "<p style='color:red;'>Méthode non autorisée.</p>";
    echo "<p><a href='pageInscription.php'> Retour</a></p>";
}


?>