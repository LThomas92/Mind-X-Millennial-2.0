$ = jQuery.noConflict(); 

$( document ).ready(function() {
	$('.search-icon').on('click', function() {
		$(this).toggleClass('active');
	  });

	$('.hamburger-menu').click(function() {
		$('.site-header__popout-menu').toggleClass('site-header__popout-menu__active');
	});
	$('.main-navigation__close-icon').click(function() {
		$('.site-header__popout-menu').toggleClass('site-header__popout-menu__active');
	});

	$('.site-header__login').click(function() {
		$('.login-popup').addClass('login-popup__active');
		$('.register-popup').hide();
	});

	$('.login-popup__close-icon').click(function() {
		$('.login-popup').toggleClass('login-popup__active');
		$('.register-popup').show();
	});

	$('.site-header__register').click(function() {
		$('.register-popup').addClass('register-popup__active');
	});

	$('.register-popup__close-icon').click(function() {
		$('.register-popup').toggleClass('register-popup__active');
	});

	$('.search-icon').click(function() {
		$('.search-overlay').toggleClass('search-overlay__active');
		$(this).toggleClass('overlay-icon')
	});

});

