<?php

session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="tools.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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


<div id = "main">
    <div id="content">
        <li><img onclick="reduire()" id = "image" src="content.jpg" /></li>
    </div>


    <div id="critics">

        <section></section>
        <section>
            <button onclick="enleverCritics()">Enlever Critiques</button>
        </section>

        <div class="clear"></div>


        <section>

            <h1>Ouest France</h1>
            <p>Clint Eastwood prend son rang dans le panthéon des maîtres.</p>

        </section>

        <section>

            <h1>Le Parisien</h1>
            <p>Passionnant, humaniste, drôle mais aussi déchirant.</p>
        </section>

        <section>

            <h1>Les Inrockuptibles</h1>
            <p>Clint se livre comme jamais.</p>
        </section>

    </div>



    <div class="clear"></div>

    <article >
        <img id = "image2" onclick="reduire2()" src="article.jpg"/>
    </article>



    <aside>
        <div id ="synopsis">

            <h2>Synopsis</h2>
            <ul>
                <li>Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Après des années de travail à la chaîne, il vit replié sur lui-même, occupant ses journées à bricoler, traînasser et siroter des bières.</li>
                <button onclick="enleverSynopsis()">Enlever</button>

            </ul>

        </div>
    </aside>

    <div class="clear"></div>

</div>



<footer>

    <section>
        <h3><b>Suivez-nous</b></h3>
        <ul class="social">
            <li><a href="https://www.facebook.com/GranTorinoFilm/"><img src="iconFacebook.png"/></a></li>
        </ul>
    </section>

    <section>

        <table>

            <tr>
                <th>Acteur</th>
                <th>Role</th>

            </tr>
            <tr>
                <td>Clint Eastwood</td>
                <td>Walt Kowalski</td>
            </tr>
            <tr>
                <td>Bee Vang </td>
                <td>Thao</td>
            </tr>
            <tr>
                <td>Ahney Her</td>
                <td>Sue</td>
            </tr>
        </table>

    </section>


</footer>

<footer class ="second">
    <p>©Copyright - Yolo Industrie, 2016</p>
</footer>

</body>

</html>