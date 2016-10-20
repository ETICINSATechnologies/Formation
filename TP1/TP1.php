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
    <title>TP1 - Etic</title>
    <script src="hey.js"></script>
    <link rel="stylesheet" type="text/css" href="TPCSS.css"/>
</head>

<body>
    <a href="TP1.php"><div id="accueil" class="menu">Accueil</div></a>
    <a href="Présentation.php"><div id="presentation" class="menu">Présentation</div></a>
    <a href="Livre%20d'or.php"><div id="livreOr" class="menu">Livre d'Or</div>
        <a href="deconnexion.php"><div id="deco" class="menu"><?php echo($_SESSION['pseudo']); ?>, se déconnecte</div></a>

    <br/>
    <br/>
    <div id="pic1">
        <img src = "src/img/9545a00df89565676729ab86077aaa21_large.jpeg" alt = "Inception"  title = "Clique pour changer la taille de l'image" name = "grand" onclick="agrandirOuReduire(this);"/>
    </div>



    <br/>
    <br/>
    <hr/>
    <br/>
    <br/>


    <div id="synopsis"><p>
        <h3>Synopsis</h3>
    Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets
    les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve et que son esprit est particulièrement vulnérable.
    Très recherché pour ses talents dans l’univers trouble de l’espionnage industriel, Cobb est aussi devenu un fugitif traqué dans le monde entier
    qui a perdu tout ce qui lui est cher. Mais une ultime mission pourrait lui permettre de retrouver sa vie d’avant – à condition qu’il puisse
    accomplir l’impossible : l’inception. Au lieu de subtiliser un rêve, Cobb et son équipe doivent faire l’inverse : implanter une idée dans l’esprit
    d’un individu. S’ils y parviennent, il pourrait s’agir du crime parfait. Et pourtant, aussi méthodiques et doués soient-ils, rien n’aurait pu
    préparer Cobb et ses partenaires à un ennemi redoutable qui semble avoir systématiquement un coup d’avance sur eux. Un ennemi dont seul Cobb aurait
    pu soupçonner l’existence.
    </p></div>

    <div id="gif">
        <img src = "src/img/toupie.gif" alt = "Inception" id="toupie"  title = "Clique pour changer la taille de l'image" style="height: 400px; width : 640px;" name = "petit" onclick="agrandirOuReduire(this);"/>
    </div>
    <br/>
    <br/>
    <hr/>
    <br/>
    <br/>
    <div id="image">
        <img src = "src/img/inception_cinema_slide.jpg" alt = "Inception" id="cast"  title = "Clique pour changer la taille de l'image" style="height: 400px; width : 640px;" name = "petit" onclick="agrandirOuReduire(this);"/>
    </div>

    <div id="casting">
            <table>
                <caption><strong>Casting</strong></caption> <br/>
                <tr>
                    <td>Leonardo DiCaprio</td>
                    <td>Dom Cobb</td>
                </tr>
                <tr>
                    <td>Marion Cotillard</td>
                    <td>Mall</td>
                </tr>
                <tr>
                    <td>Ellen Page</td>
                    <td>Ariane</td>
                </tr>
                <tr>
                    <td>Cilian Murphy</td>
                    <td>Robert Fischer</td>
                </tr>
                <tr>
                    <td>Michael Caine</td>
                    <td>Miles</td>
                </tr>
                <tr>
                    <td>Joseph Gordon-Levitt</td>
                    <td>Artuhr</td>
                </tr>
                <tr>
                    <td>Ken Watanabe</td>
                    <td>Saito</td>
                </tr>
                <tr>
                    <td>Tom Hardy</td>
                    <td>Eames</td>
                </tr>
            </table>
    </div>

    <div id="boutons">
        <a href="deconnexion.php"><button>Se déconnecter</button></a>
        <button type="button" id="trad" name="Francais" onclick="trad(this, 'TP1');"> Français </button>
        <input type="checkbox" id="nuit" name="Jour" onclick="nuit(this);"> Mode nuit </input>
    </div>







</body>

</html>