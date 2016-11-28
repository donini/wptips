/*! WPTips - v1.0.0 - 
DONFramework - v1.1.0
2016-11-25
 * http://localhost/wptips
 * Copyright (c) Rodrigo Donini 2016; */
 ( function( window, undefined ) {
	'use strict';
	/*child hue*/
 } )( this );
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