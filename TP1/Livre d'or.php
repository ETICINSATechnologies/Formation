<?php
require('fonctions.php');
if(!estConnecte()){
    header('Location: connexion.php');
}
if(!empty($_POST) && !empty($_POST['Commentaires'])){
    extract($_POST);
    insertComm($Commentaires, $_SESSION['pseudo']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livre d'or</title>
    <script src="hey.js"></script>
    <link rel="stylesheet" type="text/css" href="TPCSS.css"/>
</head>
<body>
<a href="TP1.php"><div id="accueil" class="menu">Accueil</div></a>
<a href="Présentation.php"><div id="presentation" class="menu">Présentation</div></a>
<a href="Livre%20d'or.php"><div id="livreOr" class="menu">Livre d'Or</div>
    <a href="deconnexion.php"><div id="deco" class="menu"><?php echo($_SESSION['pseudo']); ?>, se déconnecte</div></a>

    <form method="post" action="Livre%20d'or.php">
        <p>
            <label  id="comm" for="Commentaires">Un commentaire ?</label>
            <br/>
            <textarea name="Commentaires" id="Commentaires"></textarea> <br/>
            <input type="submit" value="Envoyer" />
        </p>
    </form>

    <?php afficher(); ?>

    <div id="boutons">
        <button type="button" id="trad" name="Francais" onclick="trad(this, 'TP1');"> Français </button>
        <input type="checkbox" id="nuit" name="Jour" onclick="nuit(this);"> Mode nuit </input>
    </div>
</body>
</html>