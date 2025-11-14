<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Road+Rage&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/restauration.css">
    <link rel="stylesheet" href="../neigeTombante/neigeTombante.css">
    <link rel="stylesheet" href="../CSS/contour.css">
    <link rel="icon" href="../CSS/Logo.png">
    <link rel="stylesheet" href="../CSS/header.css">


    <title>Restauration</title>
</head>


<body class="mb-5">
    

    
    <header class="positionRelative">
    
        <nav class="navbar main-navbar navbar-expand-lg sticky-top p-3" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center navbar-gauche" href="#">
                    <img src="../ImageResidentEvil/Logo.png" alt="Logo" class="navbar-logo">
                    <span class="navbar-title ms-3">Orphelinat</span>
                </a>
    
                <div class="d-flex navbar-centre-links me-auto ms-5">
                    <a href="#link1" class="mystery-box mx-1"><span class="box-text">Lien 1</span></a>
                    <a href="#link2" class="mystery-box mx-1"><span class="box-text">Lien 2</span></a>
                    <a href="#link3" class="mystery-box mx-1"><span class="box-text">Lien 3</span></a>
                </div>
    
                <div class="d-flex navbar-right">
                    <a href="#register" class="nav-button register-btn btn me-2">Inscris toi</a>
                    <a href="#login" class="nav-button login-btn btn">Login</a>
                </div>
            </div>
        </nav>
    </header>






    <!-- Bouton de réglage de neige -->

    <section class="controls" aria-label="Réglages de la neige">
        <label>Densité <input id="density" type="range" min="0" max="0.0006" step="0.00002" value="0.00022" /></label>
        <label>Vent <input id="wind" type="range" min="0" max="5.0" step="0.05" value="1.0" /></label>
        <label>Vitesse <input id="speed" type="range" min="0" max="2.0" step="0.05" value="1.0" /></label>
        <button id="toggle">⏸︎ Pause</button>
    </section>

    <canvas id="snow-canvas" aria-hidden="true"></canvas>





    <!-- Premier Cadre -->






    <div class="frame-neon mt-5">
                <!-- Coins lumineux -->
        <div class="corner-glow top-left"></div>
        <div class="corner-glow top-right"></div>
        <div class="corner-glow bottom-left"></div>
        <div class="corner-glow bottom-right"></div>
    
        <div class="d-flex justify-content-around mt-5 mb-5">

            <div class="image-zoom">
                <img class="imageTaillePremier" src="../ImageResidentEvil/Cuisine/gateau.jpg" alt="Gateau Résident Evil">
            </div>

            <div class="d-flex flex-column align-items-center ">

                <div class="mt-3">
                    <h1 class="text-light texteTitre">Happy Fucking Birthday</h1>
                </div>

                <div class="mt-5" ><p class="text-light texteParagraphe ">
                Gâteau d’anniversaire a base de vanille de putois et placo. <br> Soupçon de prepuce et boyaux confit au sucre.</p>
                </div>

            </div>
        </div>
    </div>





    <!-- Deuxieme Cadre -->





    
        <div class="d-flex justify-content-around flex-row-reverse mt-5">

            <div class="image-zoom">
                <img class="imageTailleDeuxieme" src="../ImageResidentEvil/Cuisine/bouillonDeTripes.webp" alt="Gateau Résident Evil">
            </div>

            <div class="d-flex flex-column align-items-center ">

                <div class="mt-3">
                    <h1 class="text-light texteTitre">Bouilon de tripes d’enfant</h1>
                </div>

                <div class="mt-5" ><p class="text-light texteParagraphe ">
                Bon bouillon de trips d’enfants de moins de 10ans à la vapeur. <br> Petite sauce à la smegma naturelle.</p>
                </div>

            </div>

        </div>
    




    <!-- Troisieme Cadre -->





    <div class="frame-neon mt-5">
                    <!-- Coins lumineux -->
            <div class="corner-glow top-left"></div>
            <div class="corner-glow top-right"></div>
            <div class="corner-glow bottom-left"></div>
            <div class="corner-glow bottom-right"></div>
        
        <div class="d-flex justify-content-around mt-5 mb-5">

            <div class="image-zoom">
                <img class="imageTailleTroisieme" src="../ImageResidentEvil/Cuisine/tableRond.jpg" alt="Gateau Résident Evil">
            </div>

            <div class="d-flex flex-column align-items-center ">

                <div class="mt-3">
                    <h1 class="text-light texteTitre">Table rond à volonté</h1>
                </div>

                <div class="mt-5" ><p class="text-light texteParagraphe ">
                Buffet à volonté de tout les origine d’enfants. <br> Les etoiles jaunes sont bien cuit (pour un debut <br>chez nous si vous avez au gout).</p>
                </div>

            </div>

        </div>
    </div>




    <!-- Quatrieme Cadre -->




    <div class="d-flex justify-content-around flex-row-reverse mt-5">

        <div class="image-zoom">
            <img class="imageTailleQuatrieme" src="../ImageResidentEvil/Cuisine/puréeCafardeuse.jpg" alt="Gateau Résident Evil">
        </div>

        <div class="d-flex flex-column align-items-center ">

            <div class="mt-3">
                <h1 class="text-light texteTitre">Purée cafardeus</h1>
            </div>

            <div class="mt-5" ><p class="text-light texteParagraphe ">
            Petit fromage pour les gourmand(e)s avec les vers <br>solitaire des enfants.</p>
            </div>

        </div>

    </div>




    <!-- Cinquieme Cadre -->




    <div class="frame-neon mt-5">
                    <!-- Coins lumineux -->
            <div class="corner-glow top-left"></div>
            <div class="corner-glow top-right"></div>
            <div class="corner-glow bottom-left"></div>
            <div class="corner-glow bottom-right"></div>

        <div class="d-flex justify-content-around mt-5 mb-5 ">

            <div class="image-zoom">
                <img class="imageTailleCinquieme" src="../ImageResidentEvil/Cuisine/versDeFromage.png" alt="Gateau Résident Evil">
            </div>

            <div class="d-flex flex-column align-items-center ">

                <div class="mt-3">
                    <h1 class="text-light texteTitre">Vers de fromage</h1>
                </div>

                <div class="mt-5" ><p class="text-light texteParagraphe ">
                Petit fromage pour les gourmand(e)s avec les vers <br> solitaire des enfants.</p>
                </div>

            </div>

        </div>
    </div>




    <!-- Sixieme Cadre -->




    <div class="d-flex justify-content-around flex-row-reverse mt-5">

        <div class="image-zoom">
            <img class="imageTailleSixieme" src="../ImageResidentEvil/Cuisine/leDernierRepas.webp" alt="Gateau Résident Evil">
        </div>

        <div class="d-flex flex-column align-items-center ">

            <div class="mt-3">
                <h1 class="text-light texteTitre">Le dernier repas</h1>
            </div>

            <div class="mt-5" ><p class="text-light texteParagraphe ">
            Repas de votre choix sur la liste ramener a votre lit <br>avant votre deces.On est pas non plus des boniche.</p>
            </div>

        </div>

    </div>
   






<script src="../neigeTombante/neigeTombante.js"></script> 

</body>
</html>