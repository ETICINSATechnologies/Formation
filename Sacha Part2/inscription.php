

<?php

session_start();

if(isset($_SESSION['pseudo'])){
    header("Location: index.php");
}


require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['pseudo']) && !empty($_POST['pass'])) {


    $pseudo = htmlentities(trim($_POST['pseudo']));
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['pass']));
    $password = md5($password);
    $sql = "INSERT INTO login VALUES('','$pseudo','$password','$email')";
    $stmt = $conn->prepare($sql);
    if($stmt->execute())
        $message = "Compte crée";
    else
        $message = "Probleme lors de la création";
}
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
        <li><img onclick="reduire()" id = "image" img src="content4.jpg" /></li>
    </div>

    <div id = formulaire2>
        <?php if(!empty($message))?>
            <p><?= $message ?></p>
        <h1>Rejoins-nous !</h1>
        <form method="post" action="inscription.php">
            <p>
                <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" />

                <br />
                <input type="email" name="email" id="email" placeholder="Email" />

                <br />
                <input type="password" name="pass" id="pass"  placeholder="Mot de passe"/>

                <br />
                <input type="submit" value="Envoyer" />
            </p>
        </form>
    </div>
</div>

<div id = remplirChamp></div>

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
