$( document ).ready(function() {
	$('.nm-search').click(function(e) {
		if ( $('#searchform').is(':visible') == true ) {
			$('#search-demo-container .container').fadeOut('slow');
		}
		else {
			$('#search-demo-container .container').fadeIn('slow');
		}
	});

	$( ".nm-lang" ).click(function(e) { 
		if ( $('.languages').is(':visible') == true ) {
			$('.languages').fadeOut('slow');
		}
		else {
			$('.languages').fadeIn('slow');
		}
	});
});