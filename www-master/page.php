<?php

require_once "back/dicts.php"; //définition de $_TRANSLATOR dans ce fichier

function notfound() {
	echo file_get_contents("front/pages/404.html");
}

if(isset($_GET['page']) && isset($_GET['lang'])) {
	// récupération de la page si elle existe
	$page = "front/pages/".$_GET['page'].".html";
	$header = "front/static/header.html";
	$footer = "front/static/footer.html";
	if(file_exists($page)) {
		// on récupère le contenu
		$content = file_get_contents($header) . file_get_contents($page) . file_get_contents($footer);
		// on réalise le changement de langue
		echo $_TRANSLATOR->translate($_GET['lang'], $content);
	} else {
		notfound();
	}
} else {	
	notfound();
}