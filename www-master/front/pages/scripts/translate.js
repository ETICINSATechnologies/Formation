function translate(after) {
	// récupération de la page
	var lang = window.location.search.replace("?", "");
	lang = lang.substr(lang.length-2, 2);
	// récupération du dictionnaire pour la traduction
	$.post("translate.php", 
		{
			action: 	'translate',
			lang: 		lang,
			content:    $('#translatable').html()
		},
		function(data, textString, jqXHR){
			obj = JSON.parse(data);
			if(obj.error) {
				alert("Asynchronous translation error ! Details : " + obj.data);
			} else {
				$('#translatable').html(obj.data);
			}
			after();
		});
}