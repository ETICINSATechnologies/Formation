$(window).resize(function() {
	var windowHeight = $(window).height() - $(".ui.top.fixed.menu.stackable").height();
	var windowWidth = $(window).width();
	var ratioWindow = windowWidth/windowHeight;
	var imgHeight = $("#splash").height();
	var imgWidth = $("#splash").width();
	var ratioImg = imgWidth/imgHeight;

	if(ratioImg>ratioWindow){	//image trop large
		$(".cropper").attr("style", 'height:' + windowHeight +'px; width:auto; display:block; margin-left:-100%; margin-right:-100%; margin-top:-15px;');
		$("#splash").attr("style", "height:" + windowHeight +"px; display:block; margin-left:auto; margin-right:auto;");
	}
	else{	//image trop haute
		$(".cropper").attr("style", 'height:'+ windowHeight+ 'px; width:100%; overflow:hidden; margin-top:-15px;');
		$("#splash").attr("style", "width:100%;");
	}
});

$(document).ready(function() {
	var windowHeight = $(window).height() - $(".ui.top.fixed.menu.stackable").height();
	var windowWidth = $(window).width();
	var ratioWindow = windowWidth/windowHeight;
	var imgHeight = $("#splash").height();
	var imgWidth = $("#splash").width();
	var ratioImg = imgWidth/imgHeight;

	if(ratioImg>ratioWindow){	//image trop large
		$(".cropper").attr("style", 'height:' + windowHeight +'px; width:auto; display:block; margin-left:-100%; margin-right:-100%; margin-top:-15px;');
		$("#splash").attr("style", "height:" + windowHeight +"px; display:block; margin-left:auto; margin-right:auto;");
	}
	else{	//image trop haute
		$(".cropper").attr("style", 'height:'+ windowHeight+ 'px; width:100%; overflow:hidden; margin-top:-15px;');
		$("#splash").attr("style", "width:100%;");
	}
});