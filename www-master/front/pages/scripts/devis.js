$(document).ready(function(){
	// retrieve captcha
	$.post(
		"back/captcha.php", 
		{
			action: 	'make'
		},
		function(data, textString, jqXHR){
			obj = JSON.parse(data);
			if(obj.good) {
				$('#captcha_container').html(obj.data);
				$('#captcha_container label').remove();
				$('#captcha_code').remove();
			} else {
				$('#captcha_container').html(
					'<div class="ui negative message"> \
					  <div class="header"> \
					    {DEVIS_ERROR_CAPTCHA_HEADER} \
					  </div> \
					  <p>{DEVIS_ERROR_CAPTCHA_MESSAGE} \
					</p></div>');
			}
		}
	);
});

function reset() {
	$("#in_lastname").val('');
	$("#in_firstname").val('');
	$("#in_firm").val('');
	$("#in_mail").val('');
	$("#in_phone").val('');
	$("#in_subject").val('');
	$("#in_message").val('');
	$("#in_budget").val('');
	$("#in_duration").val('');
	$("#in_captcha").val('');
}

function submit() {
	$('.field.error').attr('class', 'field');
	if(check_input()) {
		$.post({
			url : "back/captcha.php", 
			data :
			{
				action: 		'check',
				in_lastname: 	$("#in_lastname").val(),
				in_firstname: 	$("#in_firstname").val(),
				in_firm: 		$("#in_firm").val(),
				in_mail: 		$("#in_mail").val(),
				in_phone: 		$("#in_phone").val(),
				in_subject: 	$("#in_subject").val(),
				in_message: 	$("#in_message").val(),
				in_budget: 		$("#in_budget").val().trim(),
				in_duration: 	$("#in_duration").val().trim(),
				captcha_code: 	$("#in_captcha").val()
			},
			success : function(data, textString, jqXHR){
				obj = JSON.parse(data);
				if(obj.good) {
					form_success();
				} else {
					form_failure(obj.data);
				}
			},
			error : function() {
				form_failure('Erreur interne du serveur / Internal server error');
			}
		});
		reset();
	}
}

function check_input() {
	// test des entrées requises
	var in_lastname 	= $("#in_lastname").val();
	if(!re_test("[A-Za-z\\-\\s]+", in_lastname, function(){
		field_error("#field_lastname", "Le nom ne doit pas être vide");
	})){ return false; }
	var in_firstname 	= $("#in_firstname").val();
	if(!re_test("[A-Za-z\\-\\s]+", in_firstname, function(){
		field_error("#field_firstname", "Le prénom ne doit pas être vide");
	})){ return false; }
	var in_firm 		= $("#in_firm").val();
	if(in_firm.length <= 0){
		field_error("#field_firm", "La nom de la société ne doit pas être vide"); 
		return false; 
	}
	var in_mail 		= $("#in_mail").val();
	if(!re_test("[\\w\\-\\.]+@[\\w-]+\\.\\w+", in_mail, function(){
		field_error("#field_mail", "Le mail entré est invalide");
	})){ return false; }
	var in_phone 		= $("#in_phone").val();
	if(!re_test("\\d{10}", in_phone, function(){
		field_error("#field_phone", "Le numéro de téléphone entré ne correspond pas au format : 0000000000");
	})){ return false; }
	var in_subject 		= $("#in_subject").val();
	if(!re_test("[\\w\-\\.]+", in_subject, function(){
		field_error("#field_subject", "Le sujet ne doit pas être vide");
	})){ return false; }
	var in_message 		= $("#in_message").val();
	if(in_message.length <= 0){ 
		field_error("#field_message", "Le message ne doit pas être vide");
		return false; 
	}
	var captcha_code 	= $("#in_captcha").val();
	if(!re_test("\\w+", captcha_code, function(){
		field_error("#field_captcha", "Le code captcha ne doit pas être vide");
	})){ return false; }
	// test des entrées optionnelles
	var in_budget 		= $("#in_budget").val();
	if(!re_test("\\d*", in_budget, function(){
		field_error("#field_budget", "Le montant du budget doit être entré en chiffres seulement (pas de devise), ou rester vide");
	})){ return false; }
	var in_duration 	= $("#in_duration").val();
	if(!re_test("\\d*", in_duration, function(){
		field_error("#field_duration", "La durée de mission estimée doit être entrée en chiffres seulement, ou rester vide");
	})){ return false; }
	// on retourne vrai si tout s'est bien passé
	return true;
}

function re_test(pattern, string, fail) {
	var ok = true;
	var re = new RegExp(pattern);
	if(!re.test(string)) {
		fail();
		ok = false;
	}
	return ok;
}

function field_error(fieldId, error) {
	// on passe le field en erreur
	$(fieldId).attr('class', 'field error');
	// on ajoute un message d'erreur
	$('#errors_container').append(
	'<div class="ui negative message"> \
  		<i class="close black icon"></i> \
  		<div class="header"> \
    		Erreur \
  		</div> \
  		<p>'+error+'</p> \
  		</div>');
	// enable message close action
	$('.message .close').on('click', function(){
    	$(this).closest('.message').transition('fade');
  	});
}

function form_success() {
	//alert('success');
	// on ajoute un message d'erreur
	$('#errors_container').html(
	'<div class="ui success message"> \
  		<i class="close black icon"></i> \
  		<div class="header"> \
    		Demande envoyée / Request sent \
  		</div> \
  		</div>');
	// enable message close action
	$('.message .close').on('click', function(){
    	$(this).closest('.message').transition('fade');
  	});
}

function form_failure(data) {
		// on ajoute un message d'erreur
	$('#errors_container').html(
	'<div class="ui negative message"> \
  		<i class="close black icon"></i> \
  		<div class="header"> \
    		An error occurred : ' + data +
  		'</div> \
  		</div>');
	// enable message close action
	$('.message .close').on('click', function(){
    	$(this).closest('.message').transition('fade');
  	});
}
