<?php
session_start();



function verifPseudo($pseudo){
    $link = mysqli_connect("localhost", "root", "", "ETIC");
    $count = mysqli_num_rows(mysqli_query($link, "SELECT * FROM User WHERE UName = '".$pseudo."' ;"));
    mysqli_close($link);
    return ($count == 0);
}

function insertUser($pseudo, $mdp){
    $link = mysqli_connect("localhost", "root", "", "ETIC");
    $bool = mysqli_query($link, "INSERT INTO User(UName, MdP) VALUES ('".$pseudo."', '".md5($mdp)."') ;");
    mysqli_close($link);
    return $bool;
}

function insertComm($contenu, $pseudo){
    $link = mysqli_connect("localhost", "root", "", "ETIC");
    $bool = mysqli_query($link, 'INSERT INTO Comments(Contenu, UName) VALUES ("'.$contenu.'", "'.$pseudo.'") ;');
    mysqli_close($link);
    return $bool;
}

function connect($pseudo, $mdp){

    $link = mysqli_connect("localhost", "root", "", "ETIC");
    $cnt = mysqli_num_rows(mysqli_query($link, "SELECT * FROM User WHERE UName='".$pseudo."' AND MdP='".md5($mdp)."'"));
    mysqli_close($link);
    if($cnt==1){
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['mdp'] = $mdp;
        return true;
    } else {
        return false;
    }

}

function estConnecte(){
    return (!empty($_SESSION) && !empty($_SESSION['pseudo']) && !empty($_SESSION['mdp']));
}

function afficher(){
    $link = mysqli_connect("localhost", "root", "", "ETIC");
    $query = "SELECT * FROM Comments ORDER BY DateEnvoi DESC";
    date_default_timezone_set("Europe/Paris");

    if ($result = mysqli_query($link, $query)) {

        /* Get field information for all fields */
        while ($line = mysqli_fetch_row($result)) {
            echo($line[2].":
            <p> 
            ".$line[1]."
            </p>
            <p>
            ".date("D. j à H:i",strtotime($line[3]))."
            </p>
            <br/>
             ");
        }
        mysqli_free_result($result);
    }
    mysqli_close($link);
}
