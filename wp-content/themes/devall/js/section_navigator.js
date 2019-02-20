jQuery(document).ready(function($){

	// CSS

	/* How to use

		add the class mbp_section to sections you want to be navagatable
	
	*/

	function fillLines(container){
		var lines = $(container).find('.vertical_line');
		lines.each(function(){

			setTimeout(function() {
			    $(this).addClass('fill');
			}, 1000);

		});
	}

	function sectionNavigator(){

		// Create navigator elements

		var naviagtor = $('<div class="mbp_section_navigator"></div>');
		var sectionsElem = $('.mbp_section');

		var sections = [];

		sectionsElem.each(function(i){

			var span = $('<span></span>');

			sections.push({
				top: $(this).offset().top - $(window).height(),  //- 300,
				height: $(this).height(),
				bottom: ( $(this).offset().top - $(window).height() ) + $(this).outerHeight(),
				current: false,
				filled: false,
				span: span,
				container: sectionsElem[i]
			});

			naviagtor.append(span);

		});

		sections[0].span.addClass('current');

		$('body').append(naviagtor);

		// onclick

		$('.mbp_section_navigator span').on('click', function(){

			$('html,body').animate({
	        	scrollTop: sections[$(this).index].top},
	        'slow');

		});

		var lastScrollPos = 0;
		var scrollDirection;

		window.addEventListener("scroll", function(){

			var scroll = this.scrollY;

			if(scroll > lastScrollPos){
				scrollDirection = 'down';
			}else{
				scrollDirection = 'up';
			}

			if(scrollDirection == 'down'){

				$('.vertical_line').each(function(){

					var top = $(this).offset().top - (($(window).height() / 4) * 3);

					if(scroll > top){
						if(!$(this).hasClass('fill')){
							$(this).addClass('fill');
						}
					}

				});

				$('.horizonal_line').each(function(){

					var top = $(this).offset().top - (($(window).height() / 4) * 3);

					if(scroll > top){
						if(!$(this).hasClass('fill')){
							$(this).addClass('fill');
						}
					}
					
				});

			}else{

				$('.vertical_line').each(function(){

					var top = $(this).offset().top - (($(window).height() / 6) * 3);

					if(scroll < top){
						if(!$(this).removeClass('fill')){
							$(this).removeClass('fill');
						}
					}

				});

				$('.horizonal_line').each(function(){

					var top = $(this).offset().top - (($(window).height() / 6) * 3);

					if(scroll < top){
						if(!$(this).removeClass('fill')){
							$(this).removeClass('fill');
						}
					}
					
				});

			}

			// dots

			var reachedDot = false;
			var navDots = $('.mbp_section_navigator');

			if(scroll < sections[0].top){
				if(!navDots.hasClass('hide')){
					navDots.addClass('hide');
				}
			}else{
				if(navDots.hasClass('hide')){
					navDots.removeClass('hide');
				}
			}

			for(i=0; i<sections.length; i++){
				sections[i].span.removeClass('current');
				// if is on screen...
				if(scroll > sections[i].top && scroll < sections[i].bottom){
					sections[i].span.addClass('current');
				}
			}

			lastScrollPos = scroll;

		});

	}

	sectionNavigator();

	// todo: click handlers for the circles to naviate to

});