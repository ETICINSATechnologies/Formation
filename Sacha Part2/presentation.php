<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="tools.js"></script>
    <title>Gran Torino</title>
</head>

<body>
<header>
    <a href="index.php" id="logo"></a>
    <nav>

        <ul>
            <button id = "mode" onclick='nuit()'></button>
            <button id = "translate" onclick='translateEng1()'></button>
            <li><a href="index.php" >Accueil</a></li>
            <li><a href="presentation.php">A propos</a></li>
            <li><a href="livreOr.php">Livre d'or</a></li>

            <?php if( isset($_SESSION['pseudo'])): ?>
                <li><a href="https://www.youtube.com/watch?v=FWtO0cfgewY#t=0m22s">Bienvenue <?=$_SESSION['pseudo']?></a></li>
                <li><a href="logout.php" >Deconnexion</a></li>
            <?php else: ?>
                <li><a href="inscription.php" >Inscription</a></li>
                <li><a href="login.php" >Connexion</a></li>
            <?php endif; ?>

        </ul>
    </nav>
</header>

<div class="clear"></div>

<div id = "main">
    <div id="content">
        <li><img onclick="reduire()" id = "image" img src="content2.jpg"/></li>
    </div>

    <div id ="linkMain">
        <li><a href="https://www.youtube.com/watch?v=_H82lClkKcY&list=PLie81AKPJh1KXEO8jI0o7YzpsqVRooEu4&index=2" style = "color: BLACK" >Cliquez ici </a></li>
    </div>


</div>

<footer>

    <section>
        <h3><b>Suivez-nous</b></h3>
        <ul class="social">
            <li><a href="https://www.facebook.com/GranTorinoFilm/"><img src="iconFacebook.png"/></a></li>
        </ul>
    </section>

</footer>

<footer class ="second">
    <p>©Copyright - Yolo Industrie, 2016</p>
</footer>


</body>





</html>