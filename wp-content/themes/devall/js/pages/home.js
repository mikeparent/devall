jQuery(document).ready(function($){

	$('#quote_slider .slides').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		centerMode: true,
		centerPadding: 0,
		variableWidth: false,
		variableHeight: false,
		adaptiveHeight: true,
		arrows: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					arrows: false
				}
			}
		]
	});

	// Page navigator

	var parallaxInit = false;

	if(window.deviceSize() != 'mobile'){
		var parallaxOne = new window.Parallax('parallax_one', 0);
		var parallaxTwo = new window.Parallax('parallax_two', 0);
		var parallaxThree = new window.Parallax('parallax_three', 0);
	}

	// $(window).resize(function() {

	// 	if(window.deviceSize() != 'mobile'){
	// 		var parallaxHero = new window.Parallax('parallax_hero', 0, true);
	// 		var parallaxOne = new window.Parallax('parallax_one', 0);
	// 		var parallaxTwo = new window.Parallax('parallax_two', 0);
	// 		var parallaxThree = new window.Parallax('parallax_three', 0);
	// 	}

	// 	if(!parallaxInit){



	// 	}

	// });

});