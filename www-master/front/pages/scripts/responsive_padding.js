$(window).resize(function() {
	var header = $(".ui.top.fixed.menu.stackable");
	$("body").attr('style', 'padding-top:' + (header.height() + 15) +'px;');
	if(header.height()>60){	/*On dé-fixe le menu lorsqu'il est en stack*/
		header.attr("class", "ui top menu stackable");
	}
});
$(document).ready(function() {
	var header = $(".ui.top.fixed.menu.stackable");
	$("body").attr('style', 'padding-top:' + (header.height() + 15) +'px;');
	if(header.height()>60){	/*On dé-fixe le menu lorsqu'il est en stack*/
		header.attr("class", "ui top menu stackable");
	}
});