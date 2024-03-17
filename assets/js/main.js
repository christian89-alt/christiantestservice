(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var burgerMenu = function() {

		$('.js-colorlib-nav-toggle').on('click', function(event) {
			event.preventDefault();
			var $this = $(this);
			if( $('body').hasClass('menu-show') ) {
				$('body').removeClass('menu-show');
				$('#colorlib-main-nav > .js-colorlib-nav-toggle').removeClass('show');
			} else {
				$('body').addClass('menu-show');
				setTimeout(function(){
					$('#colorlib-main-nav > .js-colorlib-nav-toggle').addClass('show');
				}, 900);
			}
		})
	};
	burgerMenu();



})(jQuery);

// Portfolio isotope and filter
var portfolioIsotope = $('.portfolio-container').isotope({
	itemSelector: '.portfolio-item',
	layoutMode: 'fitRows'
});

$('#portfolio-flters li').on('click', function () {
	$("#portfolio-flters li").removeClass('filter-active');
	$(this).addClass('filter-active');

	portfolioIsotope.isotope({filter: $(this).data('filter')});
});

})(jQuery);
