$(document).ready(function() {
    $('div[id^="fade"]').each( function(i){
		$(this).transition({
			animation  : 'fade',
			duration   : '0'
		});

    	$(this).visibility({
    		onBottomVisible: function(){
    			$(this).transition({
    				animation : 'fade up',
    				duration : '800ms'
    			});
    		}
    	});
    });
});
    