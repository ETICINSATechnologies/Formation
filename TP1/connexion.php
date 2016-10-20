<?php
require ('fonctions.php');
if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    extract($_POST);
    connect($pseudo, $mdp);
}

if(!estConnecte()) {
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

    <form method="post" action="connexion.php">
        <p>
            <label id="pseu">Votre pseudo :</label><input type="text" name="pseudo" id="pseudo" size="30"
                                                          maxlength="15"/>
            <br/>
            <label id="pass" for="mdp">Votre Mot de Passe :</label>
            <input type="password" name="mdp" id="mdp"/>
        </p>
        <input type="submit" name="save" value="Se connecter"/>
        <a href="inscription.php"> <input type="button" value="S'inscrire"/></a>
    </form>

    <div id="boutons">

        <input type="checkbox" id="nuit" name="Jour" onclick="nuit(this);"> Mode nuit </input>
    </div>
    </body>
    </html>
    <?php
} else {
    header('Location: TP1.php');
}