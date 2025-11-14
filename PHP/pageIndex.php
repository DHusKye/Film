<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphelinat du Château Dimitrescu (Bootstrap)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../CSS/index.css"> 
    
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>

</head>

<body>
    
    <nav class="navbar main-navbar navbar-expand-lg sticky-top p-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center navbar-gauche" href="#">
                <img src="../ImageResidentEvil/Capture_d_écran_21-10-2025_165237_www.canva.com-removebg-preview.png" alt="Logo" class="navbar-logo">
                <span class="navbar-title ms-3">Orphelinat</span>
            </a>

            <div class="d-flex navbar-centre-links me-auto ms-5">
                <a href="#link1" class="mystery-box mx-1"><span class="box-text">Lien 1</span></a>
                <a href="#link2" class="mystery-box mx-1"><span class="box-text">Lien 2</span></a>
                <a href="#link3" class="mystery-box mx-1"><span class="box-text">Lien 3</span></a>
            </div>

            <div class="d-flex navbar-right">
                <a href="pageInscription2.php" class="nav-button register-btn btn me-2">Inscris toi</a>
                <a href="pageDeConnexion.php" class="nav-button login-btn btn">Connexion</a>
            </div>
        </div>
    </nav>

    <div class="bebe_pendu">
        <img src="../ImageResidentEvil/bebe pendue.png" class="bebe-image w-100 h-100" alt="Bébé pendu">
    </div>

    <img class="Bebe" src="../ImageResidentEvil/freepik__a-childs-broken-porcelain-doll-with-vacant-black-e__26280-removebg-preview.png">

    <img src="../ImageResidentEvil/Fleche-removebg-preview.png" class="fleche-gauche" alt="Flèche directionnelle">
    <img src="../ImageResidentEvil/Fleche-removebg-preview.png" class="fleche-haut" alt="Flèche directionnelle">
    <img src="../ImageResidentEvil/Fleche-removebg-preview.png" class="fleche-droit" alt="Flèche directionnelle">
    <img src="../ImageResidentEvil/Fleche-removebg-preview.png" class="fleche-bas" alt="Flèche directionnelle">

    <img class="lady" src="../ImageResidentEvil/DameBlanche.png" alt="dame_blanche">
    
    <div class="text-bulle shadow-lg">
        <span class="typewriter-text">
        Au-delà de la rouille et des brumes du Château Dimitrescu, le véritable accueil s'attend pas dans le hall. Il réside dans le silence glacial de ses couloirs. Chut. Vous êtes enfin chez vous.
        </span>
    </div>

    <a href="pageTableaux.php" class="action-text text-enfant">Enfant pris à charge</a>
    <a href="pageInscriptionEnfant.php" class="action-text text-inscription">Inscrit ton Enfant</a>
    <a href="pageProf.php" class="action-text text-prof">Information Prof</a>
    <a href="pageRestauration.php" class="action-text text-restauration">Restauration</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>