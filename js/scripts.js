// BURGER MENU
	$('.first-button').on('click', function () {
		$('.animated-icon1').toggleClass('open');
	});

// WINDOW SIZE
	var header = $('header').outerHeight();
	$('.hero-nav').css({'padding-top' : header}); // padding-top para el hero-nav
	$('body').css({'top' : header}); // padding-top para el header

	$(window).on('resize', function(){
		var header = $('header').outerHeight();
		$('.hero-nav').css({'padding-top' : header}); // padding-top para el hero-nav on resize
		$('body').css({'top' : header}); // padding-top para el header
	});
$('.homesvg').addClass('show');

// ON SCROLL
	$(window).scroll(function() {
		var top = $(window).scrollTop();
		var homeSvg = $('#home-animation').offset().top - 400;
		var numbers = $('#numbers').offset().top - 500;

		if (top > homeSvg) {
			$('.homesvg').attr("class", "homesvg show");
		} if (top > numbers) {
			$('.count').each(function() {
			  var $this = $(this),
			    countTo = $this.attr('data-count');

			  $({
			    countNum: $this.text()
			  }).animate({
			      countNum: countTo
			    },

			    {
			      duration: 2000,
			      easing: 'linear',
			      step: function() {
			        $this.text(commaSeparateNumber(Math.floor(this.countNum)));
			      },
			      complete: function() {
			        $this.text(commaSeparateNumber(this.countNum));
			        //alert('finished');
			      }
			    }
			  );

			});

			function commaSeparateNumber(val) {
			  while (/(\d+)(\d{3})/.test(val.toString())) {
			    val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
			  }
			  return val;
			}

			// $('.count').each(function () {
			// 	$(this).prop('Counter',0).animate({
			// 		Counter: $(this).text()
			// 	}, {
			// 		duration: 2000,
			// 		easing: 'swing',
			// 		step: function (now) {
			// 			$(this).text(Math.ceil(now));
			// 		}
			// 	});
			// });
			
			$('.numeros').removeClass('count');
			$('.fade-in').addClass('show');
		}
	});

// HERO MENU
	$(".triggerMenu").click(function(event) {
		event.preventDefault();
		$(this).toggleClass("open");
		$(".hero-nav").toggleClass("show");
		$("body").toggleClass("overflow-active");
		$("html").toggleClass("html-overflow-active");
		$("#aside-menu").toggleClass("aside-overflow-active");
		$("#orange-menu").toggleClass("show");
		$(".blue-nav-mask").toggleClass("hide");
	});

	$(".hero-nav-close").click(function(event) {
		event.preventDefault();
		$(".blue-nav-mask").addClass("hide");
		$(".hero-nav").removeClass("show");
		$("body").removeClass("overflow-active");
		$("html").removeClass("html-overflow-active");
		$("#aside-menu").removeClass("aside-overflow-active");
		$("#orange-menu").removeClass("show");
	});

	$(".blue-nav-mask").click(function(event) {
		event.preventDefault();
		$(".blue-nav-mask").addClass("hide");
		$(".hero-nav").removeClass("show");
		$("body").removeClass("overflow-active");
		$("html").removeClass("html-overflow-active");
		$("#aside-menu").removeClass("aside-overflow-active");
		$("#orange-menu").removeClass("show");
	});

// HOME HERO SLIDER SLIDER
	$('.slider-img').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		fade: true,
		adaptiveHeight: true
	});

// GALLERY SLIDER
	$('.slider-img-txt').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		fade: true,
		adaptiveHeight: true
	});

// LOGOS SLIDER
	$('.slider-logos').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 2,
		dots: true,
		arrows: false,
		adaptiveHeight: true,
		autoplay: false,
		autoplaySpeed: 2000,
		responsive: [
		{
		breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		},
		]
	});

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})

// INPUT ONLY  NUMBERS
	// document.getElementById("integer").addEventListener("input", allowOnlyDigits);
	//
	// function allowOnlyDigits() {
	// 	if (this.validity.valid) {
	// 		this.setAttribute('current-value', this.value.replace(/[^\d]/g, ""));
	// 	}
	// 	this.value = this.getAttribute('current-value');
	// }

// SCROLL TOP
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
		// On-page links
		if (
		  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
		  &&
		  location.hostname == this.hostname
		) {
		  // Figure out element to scroll to
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		  // Does a scroll target exist?
		  if (target.length) {
			// Only prevent default if animation is actually gonna happen
			event.preventDefault();
			$('html, body').animate({
			  scrollTop: target.offset().top
			}, 1000, function() {
			  // Callback after animation
			  // Must change focus!
			  var $target = $(target);
			  $target.focus();
			  if ($target.is(":focus")) { // Checking if the target was focused
				return false;
			  } else {
				$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
				$target.focus(); // Set focus again
			  };
			});
		  }
		}
	  });