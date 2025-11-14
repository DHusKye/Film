<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Château de Dimitrescu - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/accueil.css"> 
</head>
<body>

    <audio id="myAudio" autoplay loop>
        <source src="../ImageResidentEvil/wind-blowing-sfx-09-423678.mp3" type="audio/mpeg"> 
    </audio>

    <audio id="Rire">
        <source src="../ImageResidentEvil/screaming-woman-in-the-basement.mp3" type="audio/mpeg">
    </audio>

    <img class="background-video" src="../ImageResidentEvil/Resident-Evil-Chateau_20210501001947-768x432 (1).jpg">

    <video class="background-video opacite" autoplay loop muted playsinline>
        <source src="../ImageResidentEvil/vecteezy_heavy-snow-storm-loop_2019415.mp4" type="video/mp4">
    </video>

    <div class="page-container d-flex flex-column align-items-center justify-content-center vh-100">
        
        <h1 class="main-text text-center">Inscrivez vos enfants chez nous</h1>
        
        <div id="enterButtonContainer">
            <a href="pageIndex.php">
                <img id="enterButton" src="../ImageResidentEvil/unnamed-removebg-preview (3).png" class="enter-button btn btn-lg text-uppercase mt-4">
            </a>
        </div>
        
        <img class="logo" src="../ImageResidentEvil/Capture_d_écran_21-10-2025_165237_www.canva.com-removebg-preview.png">

    </div>
    
    <script>
        // Récupération de tous les éléments
        let audRire = document.getElementById("Rire");
        let audAmbiance = document.getElementById("myAudio");
        let videoSnow = document.querySelector(".background-video.opacite");
        let btnEntrer = document.getElementById("enterButton"); 

        // Initialisation de l'Ambiance et des Vidéos (Doit être forcé même si 'autoplay' est présent)
        audAmbiance.play().catch(error => {});
        videoSnow.play().catch(error => {});
        
        // Configuration initiale du volume
        audAmbiance.volume = 0.3;
        audRire.volume = 0.7;

        // Logique au Clic
        btnEntrer.addEventListener('click', function() {
            
            // Jouer le cri
            audRire.currentTime = 0; 
            audRire.play().catch(error => {});
            
            // Démuter l'audio d'ambiance
            if (audAmbiance) {
                if (audAmbiance.muted) {
                    audAmbiance.muted = false;
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>