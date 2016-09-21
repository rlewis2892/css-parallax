$(document).ready(function(){
	/*$('.navbar').addClass('navbar-inverse');*/

	/* on home page ONLY, swap out navabar classes if user scrolls down 50 px */
	$(window).on('scroll', function() {

		if($(window).scrollTop() > 50) {
			$('.navbar').addClass('navbar-default').removeClass('navbar-inverse');
		}

		/* when user scrolls back up, reset navbar*/
		if($(window).scrollTop() <= 50) {
			$('.navbar').addClass('navbar-inverse').removeClass('navbar-default');
		}

	});
});