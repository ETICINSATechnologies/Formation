<?php

require_once "mailer/MailTemplate.php";

class NewRequestMail extends MailTemplate {

	// -- consts
	const NAME = 'new_request_mail';
	// -- attributes

	// -- functions

	public function __construct() {
		parent::__construct(
			//__________________________________________________________________________________________________________________________________________
			// -- subject ------------------------------------------------------------------------------------------------------------------------------
			"[Site web] - Nouvelle demande de devis",
			//__________________________________________________________________________________________________________________________________________
			// -- plain text body ----------------------------------------------------------------------------------------------------------------------
			"\n".
			"Une nouvelle demande de devis a été réalisée sur le site d'ETIC.\n".
			"\n".
			"Détail de la demande :\n".
			"----------------------------------------------------------------\n".
			"Demande de -{LASTNAME}- -{FIRSTNAME}- de la société -{FIRM}-\n".
			"\n".
			"Contact : téléphone : -{PHONE}- | email : -{EMAIL}-\n".
			"\n".
			"Sujet : -{SUBJECT}-\n".
			"\n".
			"Message :\n".
			"\n".
			"-{MESSAGE}-".
			"\n".
			"Champs optionnels : budget : -{BUDGET}-€ | durée : -{DURATION}- semaines\n".
			"----------------------------------------------------------------\n".
			"\n",
			//__________________________________________________________________________________________________________________________________________
			// -- plain text body ---------------------------------------------------------------------------------------------------------------------- 			
			"\n".
			"Une nouvelle demande de devis a été réalisée sur le site d'ETIC.<br>\n".
			"<br>\n".
			"Détail de la demande :<br>\n".
			"----------------------------------------------------------------<br>\n".
			"Demande de <b>-{LASTNAME}-</b> <b>-{FIRSTNAME}-</b> de la société <b>-{FIRM}-</b><br>\n".
			"<br>\n".
			"Contact : téléphone : <b>-{PHONE}-</b> | email : <b>-{EMAIL}-</b><br>\n".
			"<br>\n".
			"Sujet : <b>-{SUBJECT}-</b><br>\n".
			"<br>\n".
			"Message :<br>\n".
			"<br>\n".
			"-{MESSAGE}-<br>".
			"<br>\n".
			"Champs optionnels : budget : <b>-{BUDGET}-€</b> | durée : <b>-{DURATION}- semaines </b><br>\n".
			"----------------------------------------------------------------<br>\n".
			"\n",
			//__________________________________________________________________________________________________________________________________________
			// attachments -----------------------------------------------------------------------------------------------------------------------------
			array() // no attachment here
			);
	}
}