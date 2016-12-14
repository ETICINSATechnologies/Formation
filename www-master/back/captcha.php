<?php

session_start();

require_once 'securimage/securimage.php';
require_once 'mailer/Mailer.php';

function make_response($data = "", $good = false) {
	return array("good" => $good, "data" => $data);
}

function check_input() {
	if(!preg_match('/\w+/', $_POST['in_lastname'])) { // vérification du nom
		return false;
	}
	if(!preg_match('/\w+/', $_POST['in_firstname'])) { // vérification du prenom
		return false;
	}
	if(!preg_match('/\w+/', $_POST['in_firm'])) { // vérification du societe
		return false;
	}
	if(!preg_match('/\d{10}/', $_POST['in_phone'])) { // vérification du telephone
		return false;
	}
	if(!preg_match('/[\w\-.]+@[\w\-.]+/', $_POST['in_mail'])) { // vérification du mail
		return false;
	}
	if(!preg_match('/\w+/', $_POST['in_subject'])) { // vérification du sujet
		return false;
	}
	if(!preg_match('/\w+/', $_POST['in_message'])) { // vérification du message
		return false;
	}
	if(!preg_match('/\d+/', $_POST['in_budget']) && $_POST['in_budget'] != "") { // vérification du budget
		return false;
	}	
	if(!preg_match('/\w+/', $_POST['in_duration']) && $_POST['in_duration'] != "") { // vérification du durée
		return false;
	}
	return true;
}

$response = make_response();

if(isset($_POST['action'])) {
	if(!strcmp($_POST['action'], 'make')) {
		$response = make_response(Securimage::getCaptchaHtml(), true);		
	} else if(!strcmp($_POST['action'], 'check')) {	// Captcha validation
		$image = new Securimage();
		if ($image->check($_POST['captcha_code']) == true) {
			if(check_input()) {
				$mailer = new Mailer();
				$sent = $mailer->SendMail(
					array("responsable-dsi@etic-insa.com", "president@etic-insa.com", "responsable-unite-daffaires@etic-insa.com", "vice-president@etic-insa.com"), 
					new NewRequestMail(),
					array(
						"LASTNAME" 	=> htmlentities($_POST['in_lastname']),
						"FIRSTNAME" => htmlentities($_POST['in_firstname']),
						"FIRM" 		=> htmlentities($_POST['in_firm']),
						"PHONE" 	=> htmlentities($_POST['in_phone']),
						"EMAIL" 	=> htmlentities($_POST['in_mail']),
						"SUBJECT" 	=> htmlentities($_POST['in_subject']),
						"MESSAGE" 	=> htmlentities($_POST['in_message']),
						"BUDGET" 	=> htmlentities($_POST['in_budget']),
						"DURATION" 	=> htmlentities($_POST['in_duration'])
						));
				if($sent) {
					$response = make_response("request_sent", true);
				} else {
					$response = make_response("mail_error");
				}
			} else {
				$response = make_response("input_fields_error");
			}
		} else {
			$response = make_response("invalid_captcha");
		}
	}
} else {
	$response = make_response("missing_action");
}

die(json_encode($response));
