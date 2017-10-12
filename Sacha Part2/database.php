<?php $serveur = 'localhost';
$username = 'root';
$password = '';
$database = 'bdbibliotheque';

try{
$conn = new PDO("mysql:host=$serveur;dbname=$database;",$username,$password);
}catch (PDOException $e){
die("CONNECTION FAILED");
}
