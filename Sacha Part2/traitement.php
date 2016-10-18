<?php
/**
 * Created by PhpStorm.
 * User: Kabar
 * Date: 13/10/2016
 * Time: 16:22
 */
    //session_start();
    $db = new PDO('mysql:host = localhost;dbname=bdbibliotheque', 'root', '');



    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $titreComm = $_POST['titreComm'];
    $comm = $_POST['comm'];


    $db->exec("INSERT INTO etictest(id,pseudo,email,password,titreComm,comm) VALUES('','$pseudo','$email','$password','$titreComm','$comm')");
    header('Location: livreOr.html');
?>

