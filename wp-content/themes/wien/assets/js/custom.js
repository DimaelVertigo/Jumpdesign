/*
 *
 *		CUSTOM.JS
 *
 */

(function($){

	'use strict';

	// DETECT TOUCH DEVICE //
	function is_touch_device() {
		return !!('ontouchstart' in window) || ( !! ('onmsgesturechange' in window) && !! window.navigator.maxTouchPoints);
	}


	// SHOW/HIDE MOBILE MENU //
	function show_hide_mobile_menu() {

		$("#mobile-menu-button").on("click", function(e) {

			e.preventDefault();

			$("#mobile-menu").slideToggle(300);

		});

	}


	// MOBILE MENU //
	function mobile_menu() {

		if ($(window).width() < 992) {

			if ($("header .menu").length > 0) {

				if ($("#mobile-menu").length < 1) {

					$("header .menu").clone().attr({
						id: "mobile-menu",
						class: ""
					}).insertAfter(".header");

					$("#mobile-menu ul").removeClass("dropdown-menu");

					$("#mobile-menu .megamenu > a").on("click", function(e) {

						e.preventDefault();

						$(this).toggleClass("open").next("div").slideToggle(300);

					});

					$("#mobile-menu .dropdown > a").on("click", function(e) {

						e.preventDefault();

						$(this).toggleClass("open").next("ul").slideToggle(300);

					});

				}

			}

		} else {

			$("#mobile-menu").hide();

		}

	}


	// EQUALIZE HEADER ELEMENTS HEIGHT //

	function max2(a, b){
		if ( undefined === a ){ a = 0; }
		if ( undefined === b ){ b = 0; }
		if ( a > b ){
			return a;
		} else {
			return b;
		}
	}

	function equalize_header() {

		var $logoHolder = $('header .logo-holder');
		var $navHolder = $('header .nav-holder');
		var $searchButtonHolder = $('header .search-button-holder');
		var $mobileMenuButtonHolder = $('header .mobile-menu-button-holder');

		var $logo = $('header .logo-holder .logo-wrapper');
		var $nav = $('header .nav-holder nav');
		var $searchButton = $('header .search-button-holder .search-button');
		var $mobileMenuButton = $('header .mobile-menu-button-holder .mobile-menu-button');

		var logoHeight = $logo.outerHeight(true);
		var navHeight = $nav.outerHeight(true);
		var searchButtonHeight = $searchButton.outerHeight(true);
		var mobileMenuButtonHeight = $mobileMenuButton.outerHeight(true);

		$logoHolder.css('height', '');
		$navHolder.css('height', '');
		$searchButtonHolder.css('height', '');
		$mobileMenuButtonHolder.css('height', '');


		var equalizedHeight = max2( max2( max2( logoHeight,navHeight ), searchButtonHeight ), mobileMenuButtonHeight);

		$logoHolder.css('height', equalizedHeight);
		$navHolder.css('height', equalizedHeight);
		$searchButtonHolder.css('height', equalizedHeight);
		$mobileMenuButtonHolder.css('height', equalizedHeight);

	}

	function sticky() {

		if ($(window).width() > 991) {

			var $logoHolder = $('header .logo-holder');
			var $navHolder = $('header .nav-holder');
			var $searchButtonHolder = $('header .search-button-holder');

			$('header').on('fixed.shira.scrollfix unfixed.shira.scrollfix', function (e) {

		        equalize_header();
				
		        $logoHolder.css('-webkit-transition', 'all 0.3s').css('transition', 'all 0.3s');
		        $navHolder.css('-webkit-transition', 'all 0.3s').css('transition', 'all 0.3s');
		        $searchButtonHolder.css('-webkit-transition', 'all 0.3s').css('transition', 'all 0.3s');

		        var headerHeight = $('#page-wrapper > header').outerHeight();
	
		        $('#page-wrapper > header.header + header.header').animate({
					height: headerHeight-50
				}, 220);

		    })

		    $('header').on('unfixed.shira.scrollfix', function (e) {

		        $logoHolder.css('-webkit-transition', 'none').css('transition', 'none');
		        $navHolder.css('-webkit-transition', 'none').css('transition', 'none');
		        $searchButtonHolder.css('-webkit-transition', 'none').css('transition', 'none');

		    })

		    // apply scrollfix

			var headerHeight = $('#page-wrapper > header').outerHeight();

			$("header").scrollFix({
				fixClass: "header-sticky",
				fixTop: 0,
				fixOffset: 1,
				unfixOffset: 1
			});

		}

		// ???
		var sticky_point = 200;
		if ($(this).scrollTop() > sticky_point){
			$(".elements-menu").addClass("elements-menu-sticky");
		} else {
			$(".elements-menu").removeClass("elements-menu-sticky");
		}

	}


	// SEARCH //
	function header_search() {

		var inputWidth = '240px',
			inputWidthReturn = '34px';

		$('#search-form input[type="text"]').focus(function () {
			$(this).css('cursor', 'text');
			$(this).val(function () {
				$(this).addClass('open').attr('placeholder', 'Search...');
			}),
				$(this).animate({
					width: inputWidth
				}, "fast");
		});
		$('#search-form input[type="text"]').blur(function () {
			$(this).css('cursor', 'pointer');
			$(this).removeClass('open').animate({
				width: inputWidthReturn
			}, "fast");
			$(this).attr('placeholder', '').val('');
		});

	}


	// PROGRESS BARS // 
	function progress_bars() {

		$(".progress .progress-bar:in-viewport").each(function() {

			if (!$(this).hasClass("animated")) {
				$(this).addClass("animated");
				$(this).animate({
					width: $(this).attr("data-width") + "%"
				}, 2000);
			}

		});

	}


	// CHARTS //
	function pie_chart() {

		$(".pie-chart:in-viewport").each(function() {

			$(this).easyPieChart({
				animate: 1500,
				lineCap: "square",
				lineWidth: $(this).attr("data-line-width"),
				size: $(this).attr("data-size"),
				barColor: $(this).attr("data-bar-color"),
				trackColor: $(this).attr("data-track-color"),
				scaleColor: "transparent",
				onStep: function(from, to, percent) {
					$(this.el).find(".pie-chart-details .value").text(Math.round(percent));
				}
			});

		});

	}

	// COUNTER //
	function counter() {

		$(".counter .counter-value:in-viewport").each(function() {
			if (!$(this).hasClass("animated")) {
				$(this).addClass("animated");
				$(this).jQuerySimpleCounter({
					start: 0,
					end: $(this).attr("data-value"),
					duration: 2000
				});
			}

		});

	}

	// SHOW/HIDE GO TOP //
	function show_hide_go_top() {

		if ($(window).scrollTop() > $(window).height()/2) {
			$("#go-top").fadeIn(300);
		} else {
			$("#go-top").fadeOut(300);
		}

	}




	// TABLE BOOTSTRAP //
	function bootstrap_table_class() {

		$('.page-content table, .post-content table').addClass('table');
		
	}

	// CONTACT TOGGLE //
	function contact_toggle() {

		$(".contact-toggle a").on("click", function(e){

			e.preventDefault();
			$(".contact-content").slideToggle(300);
			$(".contact-toggle").toggleClass("open");

		})

	}


	// SMOOTH SCROLLING //
	function smooth_scrolling() {

		$('.elements-menu a[href*=#]:not([href=#])').on("click", function() {

			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);

					return false;

				}

			}

		});

	}


	// GO TOP //
	function go_top() {

		$("#go-top").on("click", function () {
			$("html, body").animate({
				scrollTop: 0
			}, 800);
			return false;
		});

	}

	// ANIMATIONS //
	function animations() {

		var animate = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 100,
			mobile: false,
			live: true
		})

		animate.init();

	}

	// DOCUMENT READY //
	$(document).ready(function(){

		// MENU //
		$("header .menu").superfish({
			delay: 500,
			animation: {
				opacity: 'show',
				height: 'show'
			},
			speed: 'fast',
			autoArrows: true
		});


		// SHOW/HIDE MOBILE MENU //
		show_hide_mobile_menu();


		// MOBILE MENU //
		mobile_menu();


		// SEARCH //
		header_search();


		// FANCYBOX //
		$(".fancybox").fancybox({});

		$(".fancybox-portfolio-gallery").attr("rel","group").fancybox({
			prevEffect: 'none',
			nextEffect: 'none'
		});

		$(".fancybox-blog-gallery").attr("rel","group").fancybox({
			prevEffect: 'none',
			nextEffect: 'none'
		});

		// BxSLIDER //
		$(".services-slider ul").bxSlider({
			mode: 'horizontal',
			speed: 800,
			infiniteLoop: true,
			hideControlOnEnd: false,
			pager: true,
			pagerType: 'full',
			controls: false,
			auto: true,
			pause: 4000,
			autoHover: true,
			useCSS: false,
			slideWidth: 350,
			minSlides: 1,
			maxSlides: 4,
			moveSlides: 1,
			slideMargin: 30
		});

		$(".features-slider ul").bxSlider({
			mode: 'fade',
			speed: 800,
			infiniteLoop: true,
			hideControlOnEnd: false,
			pager: true,
			pagerType: 'full',
			controls: true,
			auto: true,
			pause: 4000,
			autoHover: true,
			useCSS: false
		});

		$(".testimonial-slider ul").bxSlider({
			mode: 'fade',
			speed: 800,
			infiniteLoop: true,
			hideControlOnEnd: false,
			pager: true,
			pagerType: 'full',
			minSlides: 2,
			controls: false,
			auto: true,
			pause: 4000,
			autoHover: true,
			useCSS: false
		});

		$(".images-slider ul").bxSlider({
			mode: 'horizontal',
			speed: 500,
			infiniteLoop: true,
			hideControlOnEnd: false,
			pager: false,
			pagerType: 'full',
			controls: true,
			auto: true,
			pause: 4000,
			autoHover: true,
			useCSS: false
		});

		$(".images-slider-2 ul").bxSlider({
			mode: 'horizontal',
			speed: 500,
			infiniteLoop: true,
			hideControlOnEnd: false,
			pager: true,
			pagerType: 'full',
			controls: false,
			auto: true,
			pause: 4000,
			autoHover: true,
			useCSS: false
		});


		$('.map').each(function(){

			var zoom = parseInt($(this).attr('data-zoom'));
			var address = $(this).attr('data-address');
			var description = $(this).attr('data-description');

			// GOOGLE MAPS //
			$(this).gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: zoom,
				markers: [{
					address: address,
					html: description
				}],
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				}
			});

		});



		$('.tab-content .tab-pane').first().addClass('active in');

		// ISOTOPE //
		$(".isotope").each( function(){

			var container = $(".isotope");

			$(this).imagesLoaded( function() {

				container.isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.8s'
				});

				$(".filter li a").on("click", function () {
					$(".filter li a").removeClass("active");
					$(this).addClass("active");

					var selector = $(this).attr("data-filter");
					container.isotope({
						filter: selector
					});

					return false;
				});

				$(window).resize(function () {
					container.isotope();
				});

			});
		});



		// CONTACT FORM VALIDATE & SUBMIT //
		// VALIDATE //
		/**********************************************************************************************************************/
		/* FRESHFACE CONTACT FORM EDIT START
		 /**********************************************************************************************************************/
		$('.ff-contact-form').each(function(){
			var $contactForm = $(this);
			var $messages = $(this).find('.ff-contact-messages');

			var validationName = $(this).find('.ff-validation-name').html();

			var validationEmail = $(this).find('.ff-validation-email').html();
			var validationEmailFormat = $(this).find('.ff-validation-email-format').html();


			var validationSubject = $(this).find('.ff-validation-subject').html();

			var validationMessage= $(this).find('.ff-validation-message').html();
			var validationMessageMinlength = $(this).find('.ff-validation-message-minlength').html();


			$(this).validate({
				rules: {
					name: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					subject: {
						required: true
					},
					message: {
						required: true,
						minlength: 10
					}
				},
				messages: {
					name: {
						required: validationName
					},
					email: {
						required: validationEmail,
						email: validationEmailFormat
					},
					subject: {
						required: validationSubject
					},
					message: {
						required: validationMessage,
						minlength: validationMessageMinlength
					}
				},

				// SUBMIT //
				submitHandler: function(form) {



					var serializedContent = $contactForm.serialize();


					var data = {};
					data.formInput = serializedContent;
					data.contactInfo = $contactForm.find('.ff-contact-info').html();

					frslib.ajax.frameworkRequest('contactform-send-ajax', null, data, function( response ) {
						var result = '';
						if( response == 'true' ) {
							result = '<div class="alert alert-success">' + $messages.find('.ff-message-send-ok').html() + '</div>';
							$contactForm.clearForm();
						} else {
							result = '<div class="alert alert-success">' + $messages.find('.ff-message-send-wrong').html() + '</div>';
						}


						$contactForm.find("#alert-area").html(result);


						$contactForm.find("#alert-area").show(500);
						setTimeout( function(){

							$contactForm.find("#alert-area").hide(500);

						},4000);
					});
				}
			});
		});


		// SHOW/HIDE GO TOP
		show_hide_go_top();


		// GO TOP //
		go_top();


		// YOUTUBE PLAYER //
		$(".background-youtube-video .player").each(function(){
			$(this).YTPlayer();
		});

		// CONTACT TOGGLE //
		contact_toggle();


		// SMOOTH SCROLLING //
		smooth_scrolling();


		// SCROLLSPY //
		$("body").scrollspy({
			target: '.elements-menu'
		});


		// ANIMATIONS //
		animations();

	});

	// WINDOW LOAD // 

    $(window).load(function(){
		
		// equalize_header(); not needed probably

	});

	// WINDOW SCROLL //
	$(window).scroll(function(){

		progress_bars();
		pie_chart();
		counter();
		show_hide_go_top();

	});

	$(document).ready(function(){

		progress_bars();
		pie_chart();
		counter();
		show_hide_go_top();
		sticky();
		equalize_header();
		bootstrap_table_class();

	});


	// WINDOW RESIZE //
	$(window).resize(function(e) {

		mobile_menu();
		equalize_header();

	});

})(window.jQuery);