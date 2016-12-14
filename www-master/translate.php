<?php

require_once "back/dicts.php";

// service

if(isset($_POST['action'])) {
	if(!strcmp($_POST['action'], 'translate')) {
		if(isset($_POST['lang']) && isset($_POST['content'])) {
			$data = $_TRANSLATOR->translate($_POST['lang'], $_POST['content']);
			die(json_encode(array('error' => false, 'data' => $data)));
		} else {
			die(json_encode(array('error' => true, 'data' => 'missing lang and/or content for action translate')));
		}
	} else {
		die(json_encode(array('error' => true, 'data' => 'unknown action in post')));
	}
} else {
	die(json_encode(array('error' => true, 'data' => 'missing action in post')));
}
