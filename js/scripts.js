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
		// SAVE ID'S
		var homeID = $('#home-animation');
		var numbersID = $('#numbers');


		if (homeID.length) {
		var homeSvg = $('#home-animation').offset().top - 400;
			if (top > homeSvg) {
				$('.homesvg').attr("class", "homesvg show");
				$('.fade-in').addClass('show');
			}
		}

		if (numbersID.length) {
			var numbers = $('#numbers').offset().top - 500;
			if (top > numbers) {
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

				$('.numeros').removeClass('count');
				$('.fade-in').addClass('show');
			}
		}
	});

	var numbers3ID = $('#numbers3');
	if (numbers3ID.length) {
		$('.count').each(function() {
			var $this = $(this),
			countTo = $this.attr('data-count');
			$({
				countNum: $this.text()
			}).animate({
				countNum: countTo
				},{
					duration: 2300,
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

		$('.numeros').removeClass('count');
		$('.fade-in').addClass('show');
	}

//
	var numbers2ID = $('#numbers2');
	if (numbers2ID.length) {
		//var numbers2 = $('#numbers2').offset().top - 500;
		$('.count').each(function () {
			$(this).prop('Counter',0).animate({
				Counter: $(this).text()
			}, {
				duration: 1400,
				easing: 'swing',
				step: function (now) {
					$(this).text(Math.ceil(now));
				}
			});
		});

		$('.numeros').removeClass('count');
		$('.fade-in').addClass('show');
	}

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
		adaptiveHeight: true,
		dotsClass: 'custom_paging',
		customPaging: function (slider, i) {
			//FYI just have a look at the object to find available information
			//press f12 to access the console in most browsers
			//you could also debug or look in the source
			console.log(slider);
			return  (i + 1) + '/' + slider.slideCount;
		}
	});

// VIDEOS SLIDER
	var $slider = $('.slider-video');
	if ($slider.length) {
		var currentSlide;
		var slidesCount;
		var sliderCounter = document.createElement('div');
		sliderCounter.classList.add('slider__counter');

		var updateSliderCounter = function(slick, currentIndex) {
			currentSlide = slick.slickCurrentSlide() + 1;
			slidesCount = slick.slideCount;
			$(sliderCounter).html(currentSlide + ' / <span class="c-light-gray">' + slidesCount + '</span>');
		};

		$slider.on('init', function(event, slick) {
			$slider.append(sliderCounter);
			updateSliderCounter(slick);
			$(sliderCounter).html('1 / <span class="c-light-gray">1</span>');

		});

		$slider.on('afterChange', function(event, slick, currentSlide) {
			updateSliderCounter(slick, currentSlide);
		});

		$slider.slick();
	}
	
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
		$('[data-toggle="tooltip"]').tooltip();
	});


// SCROLL TOP
	// $('a[href*="#"]')
	//   // Remove links that don't actually link to anything
	//   .not('[href="#"]')
	//   .not('[href="#0"]')
	//   .click(function(event) {
	// 	// On-page links
	// 	if (
	// 	  location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname
	// 	) {
	// 	  // Figure out element to scroll to
	// 	  var target = $(this.hash);
	// 	  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	// 	  // Does a scroll target exist?
	// 	  if (target.length) {
	// 		// Only prevent default if animation is actually gonna happen
	// 		event.preventDefault();
	// 		$('html, body').animate({
	// 		  scrollTop: target.offset().top
	// 		}, 1000, function() {
	// 		  // Callback after animation
	// 		  // Must change focus!
	// 		  var $target = $(target);
	// 		  $target.focus();
	// 		  if ($target.is(":focus")) { // Checking if the target was focused
	// 			return false;
	// 		  } else {
	// 			$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	// 			$target.focus(); // Set focus again
	// 		  }
	// 		});
	// 	  }
	// 	}
	//   });

// IF GET PAGE, PAINT  BLUE MENU
	var pathname = window.location.href;
	var url = pathname.substring(0, pathname.lastIndexOf('/'));

	var inversion = url + '/inversion.php';
	var credito = url + '/credito.php';
	var conocenos = url + '/conocenos.php';
	var blog = url + '/blog.php';

	switch(pathname) {
		case inversion :
			$(".has-menu li:nth-child(1) a").addClass('c-blue');
			break;
		case credito :
			$(".has-menu li:nth-child(2) a").addClass('c-blue');
			break;
		case conocenos :
			$(".has-menu li:nth-child(3) a").addClass('c-blue');
			break;
		case blog :
			$(".has-menu li:nth-child(4) a").addClass('c-blue');
			break;
	}
