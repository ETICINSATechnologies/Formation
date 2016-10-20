<?php
require('fonctions.php');
if(!estConnecte()){
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Présentation</title>
    <script src="hey.js"></script>
    <link rel="stylesheet" type="text/css" href="TPCSS.css"/>
</head>
<body>
<a href="TP1.php"><div id="accueil" class="menu">Accueil</div></a>
<a href="Présentation.php"><div id="presentation" class="menu">Présentation</div></a>
<a href="Livre%20d'or.php"><div id="livreOr" class="menu">Livre d'Or</div>
    <a href="deconnexion.php"><div id="deco" class="menu"><?php echo($_SESSION['pseudo']); ?>, se déconnecte</div></a>

    <h1 id="titre">Qui a crée ce site ?</h1>

    <p>
        <figure>
            <img src = "src/img/trollface.png" alt = "Très bonne question"  title = "Clique pour changer la taille de l'image" style="height: 400px; width : 640px;" name = "petit" onclick="agrandirOuReduire(this);"/>
        </figure>
    </p>
    <div id="boutons">
        <button type="button" id="trad" name="Francais" onclick="trad(this, 'TP1');"> Français </button>
        <input type="checkbox" id="nuit" name="Jour" onclick="nuit(this);"> Mode nuit </input>
    </div>
</body>
</html>