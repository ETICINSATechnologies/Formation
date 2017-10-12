<?php

session_start();

if(isset($_SESSION['pseudo'])){
    header("Location: index.php");
}


require 'database.php';


$message = '';
if(!empty($_POST['pseudo']) && !empty($_POST['pass'])) {

    $con=mysqli_connect("localhost","root","","bdbibliotheque");
    $pseudo = htmlentities(trim($_POST['pseudo']));
    $password = htmlentities(trim($_POST['pass']));
    $password = md5($password);

    $records = mysqli_query($con,"SELECT * FROM login WHERE pseudo='$pseudo'&&password='$password'");
    $rows = mysqli_num_rows($records);

    if($rows ==1){
        $donnees = mysqli_fetch_array($records);
        $_SESSION['pseudo'] = $donnees['pseudo'];
        header("Location: index.php");

    }


     else

        $message = "Desole cela n'a pas fonctionné";


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
            <li><a href="inscription.php" >Inscription</a></li>
            <li><a href="login.php" >Connexion</a></li>

        </ul>
    </nav>
</header>


<div class = "marge">

    <h1>Login :</h1>
    <?php if(!empty($message))?>
    <p><?= $message ?></p>

    <form method="post" action="login.php">

        <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" />
        <input type="password" name="pass" id="pass" placeholder="Password" />
        <input type="submit" value="Envoyer"  />


    </form>
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
