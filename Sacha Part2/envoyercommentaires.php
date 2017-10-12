<?php

session_start();

require 'database.php';

$message = '';

if(isset($_POST['titreComm'],$_POST['comm']) && !empty($_POST['titreComm']) && !empty($_POST['comm'])) {


    $titre = htmlentities(trim($_POST['titreComm']));
    $comm = htmlentities(trim($_POST['comm']));
    $pseudo = htmlentities(trim($_SESSION['pseudo']));
    $date = date("Y-m-d H:i:s");


    $sql = "INSERT INTO tablecomm VALUES('','$titre','$comm','$pseudo','$date')";
    $stmt = $conn->prepare($sql);
    if( isset($_SESSION['pseudo'])){

        if($stmt->execute())
            $_SESSION['message'] = "Merci pour votre commentaire !";
        else
            $_SESSION['message'] = "Probleme lors de la création !";

    }
    else
        $_SESSION['message'] = "Veuillez-vous connecter :)";
}
?>

