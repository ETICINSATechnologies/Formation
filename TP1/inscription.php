<?php
/**
 * Created by PhpStorm.
 * User: charles-nicolas
 * Date: 20/10/16
 * Time: 00:11
 */
require ('fonctions.php');
if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    extract($_POST);
    if(verifPseudo($pseudo)){
        if(insertUser($pseudo, $mdp)) {
            connect($pseudo, $mdp);
        }
    }
}
if(!estConnecte()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <script src="hey.js"></script>
        <link rel="stylesheet" type="text/css" href="TPCSS.css"/>
    </head>
    <body>

    <form method="post" action="inscription.php">
        <p>
            <label id="pseu">Votre pseudo :</label><input type="text" name="pseudo" id="pseudo" size="30"
                                                          maxlength="15"/>
            <br/>
            <label id="pass" for="mdp">Votre Mot de Passe :</label>
            <input type="password" name="mdp" id="mdp"/>
        </p>
        <input type="submit" name="save" value="S'inscrire"/>
    </form>

    <div id="boutons">
        <button type="button" id="trad" name="Francais" onclick="trad(this, 'TP1');"> Français</button>
        <input type="checkbox" id="nuit" name="Jour" onclick="nuit(this);"> Mode nuit </input>
    </div>
    </body>
    </html>
    <?php
} else {
    header('Location: TP1.php');
}