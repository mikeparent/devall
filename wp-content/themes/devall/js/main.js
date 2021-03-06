jQuery(document).ready(function($){

	window.deviceSize = function(){
    	if($('#is_mobile').css('display') == 'none') {
	    	return 'mobile';
	    }
	    if($('#is_tablet').css('display') == 'none') {
	        return 'tablet';
	    }
	    if($('#is_desktop').css('display') == 'none') {
	        return 'desktop';
	    }
	    if($('#is_large').css('display') == 'none') {
	        return 'large';
	    }
    };

	// HEADER MENU

	var header = $('header');

	var burger = $('.burger_menu');
	var menu = $('.main_menu');
		
	var service_squares = $('.squares_menu');
	var serv_menu = $('.services_menu');

	var nav_overlay = $('.nav_overlay');

	// possible conditions
		// Neither are open

		// menu open
		// services open

	function closeMenu(){
		burger.removeClass('is_open');
		header.removeClass('menu_open');
		menu.removeClass('menu_open');
	}

	function closeServices(){
		service_squares.removeClass('is_open');
		header.removeClass('services_open');
		serv_menu.removeClass('menu_open');
	}

	function toggleMenu(){
		if(burger.hasClass('is_open')){
			closeMenu();
		}else{
			closeServices();
			burger.addClass('is_open');
			header.addClass('menu_open');
			menu.addClass('menu_open');
		}
	}

	function toggleServices(){
		if(service_squares.hasClass('is_open')){
			closeServices();
		}else{
			closeMenu();
			service_squares.addClass('is_open');
			header.addClass('services_open');
			serv_menu.addClass('menu_open');
		}
	}

	$('#burger_click').on('click', function(){
		toggleMenu();
	});

	$('#services_click').on('click', function(){
		toggleServices();
	});

	$('nav h3').on('click', function(){

		if(window.deviceSize() == 'mobile'){
			$('nav ul').removeClass('is_open');
			$(this).next().addClass('is_open');
		}

	});

	var parallaxHero = new window.Parallax('parallax_hero', 0, true);

	// Slick Testimonials

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

	// var mainMenu = $('.main_menu');

	// $('#services_click').on('click', function(){
	// 	if(burger.hasClass('is-active')){
	// 		burger.removeClass('is-active');
	// 		header.removeClass('menu_open');
	// 		mainMenu.removeClass('open');
	// 	}else{
	// 		burger.addClass('is-active');
	// 		header.addClass('menu_open');
	// 		mainMenu.addClass('open');
	// 	}
	// });

	// ACCORDION 

	$('.accordion__item').click(function() {

		if($(this).hasClass('accordion__item--active')) {
			$(this).removeClass('accordion__item--active');
			$(this).find('.accordion__section').slideUp();
			$('.accordion__item').removeClass('accordion__item--inactive');
		} else {
			$('.accordion__item').removeClass('accordion__item--active').addClass('accordion__item--inactive');
			$('.accordion__section').slideUp();
			$(this).addClass('accordion__item--active');
			$(this).find('.accordion__section').slideDown();
		}
		
	});

	// GALLERY
	if($('.gallery__nav').length) {
		$('.gallery__holder').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.gallery__nav'
		});
		$('.gallery__nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.gallery__holder',
			dots: false,
			centerMode: false,
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 3
					}
				}
			]
		});
	} else {
		$('.gallery__holder').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
		});
	}

});

