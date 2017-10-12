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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script src="commentaires.js"></script>
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
        <li><img onclick="reduire()" id = "image" img src="content3.jpg" /></li>
    </div>


    <div id = formulaire>
            <h1>Messages !</h1>
        <?php if( isset($_SESSION['message'])):?>
        <p><?=$_SESSION['message']?></p>
        <?php endif; ?>
        <form method="post" action="livreOr.php" class ="formulaire">
            <div class = "return"></div>
            <p>

                <br />
                <input type="text" name="titreComm" id="titreComm" class = "titreComm" placeholder="Titre"/>



                <br />
                <textarea name="comm" id="comm" rows="10" cols="50" class="comm"  placeholder="Commentaire"></textarea>

                <br />
                <input type="submit" value="Envoyer" />
            </p>
        </form>
    </div>
</div>

<div class = "afficher"></div>

<section></section>

<div class="clear"></div>

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