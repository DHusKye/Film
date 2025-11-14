<?php 
require 'dbResidentEvil.php';
//  var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'] ;
    $nom = $_POST['nomUtilisateur']; ;
    $prenom = $_POST['prenomUtilisateur']; ;
    $age = $_POST['ageUtilisateur'] ;
    $sexe = $_POST['sexeUtilisateur'];
    $email = $_POST['emailUtilisateur'];
    
    if (!empty($id) && !empty($nom) && !empty($prenom) && !empty($age) && !empty($sexe) && !empty($email)){

        try {

            $sql = "UPDATE utilisateur SET nomUtilisateur = ?, prenomUtilisateur = ?, ageUtilisateur = ?, sexeUtilisateur = ?, emailUtilisateur = ? WHERE id = ?";

            $stmt = $pdo->prepare($sql);
            
            $stmt->execute([$nom, $prenom, $age, $sexe, $email, $id]);
                header('Location: pageInscription.php');
                exit;
            } 
            catch (PDOException $e){
                 echo "Ton Erreur " . $e. " !";
            }     
          
    }else{

        echo "Y te manque des champs non remplie";
    }
        }
?>