(function($) {
	"use strict";

	$( window ).load(function() {

		$('body.loadpage:before').hide();
		if ( $('body').hasClass('loadpage') ) {
			$('body').removeClass('loadpage');
		}

		$('body').find('.section').each( function() {
			var $section = $(this);
			new Waypoint({
				element: $section[0],
				handler: function(direction) {
					//console.log(this);
					var $element = $(this.element);
					$element.find('.animated').each(function() {
						var $animate = $(this).attr('data-animate');
						if ( typeof $animate !== "undefined" ){
							$(this).addClass($animate);
						};

			    	});
				},
				offset: '70%',
			});
		});


		// Header Style 3
		if ( $('body.style-v3').length > 0 ) {
    		var $menu = $('body.style-v3').find('#navbar .navbar-nav'),
    			//index = Math.round($item_menu.length/2),
    			//$parent = $item_menu.slice(index, index + 1),
    			$logo = $('body.style-v3').find('#logo');
    		$logo.imagesLoaded(function() {
	    		$menu.css( {"padding-right": $logo.find('img').outerWidth()/2 + 30})
	    		.next().css( {"padding-left": $logo.find('img').outerWidth()/2 + 30, "padding-right": 0});

	    		$logo.find('a').css( {"margin-left": - $logo.find('img').outerWidth()/2});
    		});

		} // End Header Style 3

	});


	$(document).ready(function() {

		// Hover Menu
		$('.navbar-nav > li .mega-menu').addClass('animated animation-duration-5');
		$('.navbar-nav > li .dropdown').addClass('animated animation-duration-5');

		$(".navbar-nav > li").hover(function(){
		    	$(this).children().addClass('fadeInUpMenu');
		    }, function(){
		    	$(this).children().removeClass('fadeInUpMenu');
		});

		// Nivo Slider;
		var $slider = $('#banner .slider-wrapper');
		if ($slider.length > 0 ) {
			$slider.imagesLoaded(function() {
				$slider.find('.nivoSlider').nivoSlider({
					pauseTime: 10000,
				    beforeChange: function(){
				    },
				    afterChange: function(){
				    	$slider.find('.nivo-caption').find('.animated').each(function() {
				    		$(this).addClass($(this).attr('data-animate'));
				    	});
				    },
				    slideshowEnd: function(){
				    },
				    lastSlide: function(){
				    },
				    afterLoad: function(){
				    	$slider.find('.nivo-caption').find('.animated').each(function() {
				    		$(this).addClass($(this).attr('data-animate'));
				    	});
				    },
				});

			});
		}// End Nivo


		// Services
		var $check_click = false;
		$('.section.services').on('click', 'li.service:not(.active)', function (e) {
			e.preventDefault();

			var $this = $(this);

			if ( !$this.hasClass('active') ) {
				$('.section.services').find('li.service').removeClass('active');
				$this.addClass('active');

				$('.section.services').find('li.service .animated').addClass('bullets');
				$this.find('.animated').removeClass('bullets');

			}

			$check_click = true;
		});

		$('.section.services').on('click', 'li.service.active', function (e) {

			$check_click = true;
		});

		$('.section.services').on('click', function (e) {
			if ( $check_click == false ) {
				e.preventDefault();
				$('#services-item').find('li.service').removeClass('active');
			}
			$check_click = false;
		});


		// Load Menus
		var $menus = $('#menus');
		if ( $menus.length > 0 ) {

			// filter items
			$menus.find('.filter').on('click', 'button', function() {
				var $this = $(this),
					filterValue = $this.attr('data-filter');

				$this.addClass('active');
				$this.siblings('.active').removeClass('active');

				if ( filterValue == '*' ) filterValue = '.menu-item';

				$menus.find('.menu-item').not(filterValue).fadeOut(1000);
				$menus.find(filterValue).fadeIn(1000);

				setTimeout(function(){ Waypoint.refreshAll(); }, 1500);

				return false;
			});
		}


		// Flickity slider
		if ( $('.gallery-about').length > 0 ) {
			$('.gallery-about .gallery-flickity').imagesLoaded(function() {
				$('.gallery-about .gallery-flickity').flickity({
					freeScroll: true,
					contain: true,
					// disable previous & next buttons and dots
					prevNextButtons: false,
					pageDots: false,
				});
			});
		}

		function gallery_flickity($gallery) {

			if ( $gallery.length > 0 ) {
				$gallery.imagesLoaded(function() {
					$gallery.flickity({
					  // options
						wrapAround: true,
						imagesLoaded: true,
						resize: false,
						arrowShape: {
							  x0: 25,
							  x1: 60, y1: 35,
							  x2: 70, y2: 35,
							  x3: 35
							}
					});
				});
			}
		}

		// Load Gallery
		$('.widget-gallery').on('click', 'a.gallery-ajax', function(e){
			e.preventDefault();

			var $this = $(this),
				$url = $this.attr('data-url'),
				$modal = $($this.attr('data-target'));

			$modal.addClass('animated');

			if ( $modal.find('.gallery').length < 1 ) {

				$( document ).ajaxStart(function() {
					$('body').addClass('loadpage');
				});
				$( document ).ajaxStop(function() {
					//$('body').removeClass('loadpage');
				});

				$.ajax({
					url: $url,
					cache: false,
				}).done(function( html ) {

					var $element = $(html).find('.gallery');

					$modal.find('.modal-body').html( $element );

					// This Share
					//stButtons.locateElements();

					gallery_flickity($modal.find('.gallery-flickity'));

				})

				.fail(function() {
					location.reload();
				})
				.always(function(html) {
					var $gallery = $modal.find('.gallery'),
					settle = 1;

					$gallery.on( 'settle', function() {
						if ( settle == 1 ) {
							$('body').removeClass('loadpage');
							$modal.addClass('fadeInDown');
						}
						settle ++;
					});
				});

			} else {
				$modal.addClass('fadeInDown');
			}

		});

		var $galleries = $('#galleries');
		if ( $galleries.length > 0 ) {

			// filter items
			 $galleries.find('.filter').on('click', 'button', function() {
				var $this = $(this),
					filterValue = $this.attr('data-filter'),
					$item = $galleries.find('[class^="col"].active');

				$this.addClass('active');
				$this.siblings('.active').removeClass('active');

				$item.css('height', $item.find('.inner')
						.innerHeight())
						.removeClass('active');

				if ( filterValue == '*' ) filterValue = '.gallery-item';

				$galleries.find('.gallery-item').not(filterValue).fadeOut(1000);
				$galleries.find(filterValue).fadeIn(1000);

				return false;
			});


			// Close gallery
			$galleries.on('click', '.gallery-v1 .close', function(e){
				e.preventDefault();

				var $this = $(this),
					$parent = $this.parents('.gallery-item');

					$parent.css('height', $parent.find('.inner')
							.innerHeight())
							.removeClass('active');

			});

			// Load detail
			$galleries.on('click', 'a.gallery-ajax', function(e){
				e.preventDefault();

				var $this = $(this),
					$parent = $this.parents('.gallery-item'),
					$url = $this.attr('data-url');

				if ( $this.parents('.galleries-v2').length > 0 ) {

					var $modal = $parent.find('.modal');

					if ( $modal.length > 0 )
						$modal.addClass('animated');

					if ( $parent.find('.modal-body .gallery').length < 1 ) {

						$( document ).ajaxStart(function() {
							$('body').addClass('loadpage');
						});
						$( document ).ajaxStop(function() {
							//$('body').removeClass('loadpage');
						});

						$.ajax({
							url: $url,
							cache: false,
						}).done(function( html ) {

							var $element = $(html).find('.gallery');

							$parent.find('.modal-body').html( $element );

							// This Share
							//stButtons.locateElements();

							gallery_flickity($parent.find('.gallery-flickity'));

						})

						.fail(function() {
							location.reload();
						})
						.always(function(html) {
							var $gallery = $modal.find('.gallery'),
							settle = 1;

							$gallery.on( 'settle', function() {
								if ( settle == 1 ) {
									$('body').removeClass('loadpage');
									$modal.addClass('fadeInDown');
								}
								settle ++;
							});
						});

					} else {

						$modal.addClass('fadeInDown');
					}

				} else {

					if ( $parent.hasClass('active') ) {
						return false;

					} else {

						$parent.siblings('.active').css('height', $parent.find('.inner')
								.innerHeight())
								.removeClass('active');
					}

					if ( $parent.find('.gallery').length < 1 ) {

						$parent.css('height', $parent.find('.inner').innerHeight());

						$( document ).ajaxStart(function() {
							$('body').addClass('loadpage');
						});
						$( document ).ajaxStop(function() {
							//$('body').removeClass('loadpage');
						});

						$.ajax({
							url: $url,
							cache: false,
						}).done(function( html ) {

							var $element = $(html).find('.gallery');

							$parent.append( $element );

							//This Share
							//stButtons.locateElements();

							// Flickity slider
							gallery_flickity($parent.find('.gallery-flickity'));

						})

						.fail(function() {
							location.reload();
						})
						.always(function(html) {
							var $gallery = $parent.find('.gallery'),
								settle = 1;

							$gallery.on( 'settle', function() {
								if ( settle == 1 ) {

									$('body').removeClass('loadpage');

									var $height = $gallery.innerHeight() + $parent.innerHeight();

									$parent.css("height", $height ).addClass('active');
								}
								settle ++;
							});

						});

					} else {
						var $gallery = $parent.find('.gallery'),
							$height = $gallery.innerHeight() + $parent.innerHeight();

						$parent.css("height", $height ).addClass('active');
					}
				}

			});
		}

		// Submit Form
		$("#contactform").submit(function(event){
		    var $this = $(this);

			$.ajax({
				type: "POST",
				data: $this.serialize(),
				url: '../php/contact.php',
				cache: false,
			}).done(function( html ) {
				if ( $this.find('.alert').length < 1 ) {
					$this.append('<div role="alert" class="alert alert-success"><strong>'+ html +'</strong></div>');
					$this.find('.alert').hide().toggle(350).delay(10000).toggle(350);
				} else {
					$this.find('.alert').html('<strong>'+ html +'</strong>').hide().toggle(350).delay(10000).toggle(350);
				}
			})
			.fail(function() {

				if ( $this.find('.alert').length < 1 ) {
					$this.append('<div role="alert" class="alert alert-danger"><strong>Please Try Again Latter.</strong></div>');
					$this.find('.alert').hide().toggle(350).delay(10000).toggle(350);

				} else {
					$this.find('.alert').html('<strong>Please Try Again Latter.</strong>').hide().toggle(350).delay(10000).toggle(350);
				}

			})
			.always(function(html) {});

			//event.preventDefault();
			return false;
		});
	});


	// Filter Sticky
	var $filter = $('#filter'),
		$footer = $('#footer'),
		$check = false;
	if ($filter.length > 0) {
		new Waypoint.Sticky({
		  element: $filter[0],
		  wrapper: '<div class="filter-sticky" />',
		  stuckClass: 'filter-stuck',
		  offset: '0'
		});

		new Waypoint({
			element: $footer[0],
			handler: function(direction) {
				//console.log(direction);

				if ( direction == 'down' && $filter.hasClass('filter-stuck') ) {
					$filter.removeClass('filter-stuck');
					$check = true;

				} else if ( $check && direction == 'up' ) {
					$filter.addClass('filter-stuck');
					$check = false;

				} else $check = false;
			},
			offset: '70%',
		});
	}


	// Style v2 Header Sticky
	var $header_inner = $('.style-v2 .header-inner, .style-v3 .header-inner');
	if ($header_inner.length > 0) {
		new Waypoint.Sticky({
		  element: $header_inner[0],
		  wrapper: '<div class="header-sticky" />',
		  stuckClass: 'header-stuck',
		  offset: '0'
		});
	}

})(jQuery);


var mtheme_maps = {
		LatLng: "51.5042389, -0.1061977",
		desc_contact: "<p> Email: noreply@gmail.com<br>Phone: +800 - 568 - 8989<br>96 Isabella ST, London, SE 1 8DD</p>"
	},

	$map_canvas = document.getElementById("map-canvas");

if ( typeof mtheme_maps !== "undefined" && $map_canvas != null) {

	function initialize() {

		var grayStyles = [ /*{
			featureType : "all",
			stylers : [ {
				saturation : -100
			}, {
				lightness : 47
			}, {
				gamma : 0.34
			} ]
		},*/ ];

		var $LatLng = mtheme_maps.LatLng.split(", ");

		var mapOptions = {
			center : new google.maps.LatLng($LatLng[0], $LatLng[1]),
			zoom : 13,
			styles : grayStyles,
		};

		var map = new google.maps.Map(document.getElementById("map-canvas"),
				mapOptions);

		var marker = new google.maps.Marker({
			map : map,
			position : map.getCenter(),
			icon: '../assets/imgs/icon-map.png',

		});

		var infowindow = new google.maps.InfoWindow();
		infowindow.setContent(mtheme_maps.desc_contact);
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map, marker);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize());
}


// porduct carousel on modal
jQuery(document).ready(function($) {
			//set here the speed to change the slides in the carousel
			$('#myCarousel').carousel({
							interval: 5000
			});

//Loads the html to each slider. Write in the "div id="slide-content-x" what you want to show in each slide
			$('#carousel-text').html($('#slide-content-0').html());

			//Handles the carousel thumbnails
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel').carousel(id);
			});


			// When the carousel slides, auto update the text
			$('#myCarousel').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
//
jQuery(document).ready(function($) {
			$('#myCarousel1').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel1').carousel(id);
			});
			$('#myCarousel1').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel2').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel2').carousel(id);
			});
			$('#myCarousel2').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel3').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel3').carousel(id);
			});
			$('#myCarousel3').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel4').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel4').carousel(id);
			});
			$('#myCarousel4').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel5').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel5').carousel(id);
			});
			$('#myCarousel5').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel6').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel6').carousel(id);
			});
			$('#myCarousel6').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel7').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel7').carousel(id);
			});
			$('#myCarousel7').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel8').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel8').carousel(id);
			});
			$('#myCarousel8').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel9').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel9').carousel(id);
			});
			$('#myCarousel9').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel10').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel10').carousel(id);
			});
			$('#myCarousel10').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel11').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel11').carousel(id);
			});
			$('#myCarousel11').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});


jQuery(document).ready(function($) {
			$('#myCarousel13').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel13').carousel(id);
			});
			$('#myCarousel13').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel14').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel14').carousel(id);
			});
			$('#myCarousel14').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel15').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel15').carousel(id);
			});
			$('#myCarousel15').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel16').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel16').carousel(id);
			});
			$('#myCarousel16').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel17').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel17').carousel(id);
			});
			$('#myCarousel17').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel18').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel18').carousel(id);
			});
			$('#myCarousel18').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel19').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel19').carousel(id);
			});
			$('#myCarousel19').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel20').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel20').carousel(id);
			});
			$('#myCarousel20').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel21').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel21').carousel(id);
			});
			$('#myCarousel21').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel22').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel22').carousel(id);
			});
			$('#myCarousel22').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});

jQuery(document).ready(function($) {
			$('#myCarousel23').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel23').carousel(id);
			});
			$('#myCarousel23').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});


jQuery(document).ready(function($) {
			$('#myCarousel24').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel24').carousel(id);
			});
			$('#myCarousel24').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});



jQuery(document).ready(function($) {
			$('#myCarousel25').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel25').carousel(id);
			});
			$('#myCarousel25').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});


jQuery(document).ready(function($) {
			$('#myCarousel26').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel26').carousel(id);
			});
			$('#myCarousel26').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
jQuery(document).ready(function($) {
			$('#myCarousel27').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel27').carousel(id);
			});
			$('#myCarousel27').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
jQuery(document).ready(function($) {
			$('#myCarousel28').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel28').carousel(id);
			});
			$('#myCarousel28').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
jQuery(document).ready(function($) {
			$('#myCarousel29').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel29').carousel(id);
			});
			$('#myCarousel29').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});


jQuery(document).ready(function($) {
			$('#myCarousel31').carousel({
							interval: 5000
			});
			$('#carousel-text').html($('#slide-content-0').html());
		 $('[id^=carousel-selector-]').click( function(){
					var id = this.id.substr(this.id.lastIndexOf("-") + 1);
					var id = parseInt(id);
					$('#myCarousel31').carousel(id);
			});
			$('#myCarousel31').on('slid.bs.carousel', function (e) {
							 var id = $('.item.active').data('slide-number');
							$('#carousel-text').html($('#slide-content-'+id).html());
			});
});
jQuery(document).ready(function($) {
	$('#myCarouse45').carousel({
					interval: 5000
	});
	$('#carousel-text').html($('#slide-content-0').html());
 $('[id^=carousel-selector-]').click( function(){
			var id = this.id.substr(this.id.lastIndexOf("-") + 1);
			var id = parseInt(id);
			$('#myCarouse45').carousel(id);
	});
	$('#myCarouse45').on('slid.bs.carousel', function (e) {
					 var id = $('.item.active').data('slide-number');
					$('#carousel-text').html($('#slide-content-'+id).html());
	});
});

jQuery(document).ready(function($) {
	$('#myCarousel12').carousel({
					interval: 5000
	});
	$('#carousel-text').html($('#slide-content-0').html());
 $('[id^=carousel-selector-]').click( function(){
			var id = this.id.substr(this.id.lastIndexOf("-") + 1);
			var id = parseInt(id);
			$('#myCarousel12').carousel(id);
	});
	$('#myCarousel12').on('slid.bs.carousel', function (e) {
					 var id = $('.item.active').data('slide-number');
					$('#carousel-text').html($('#slide-content-'+id).html());
	});
});

jQuery(document).ready(function($) {
	$('#myCarousel130').carousel({
					interval: 5000
	});
	$('#carousel-text').html($('#slide-content-0').html());
 $('[id^=carousel-selector-]').click( function(){
			var id = this.id.substr(this.id.lastIndexOf("-") + 1);
			var id = parseInt(id);
			$('#myCarousel130').carousel(id);
	});
	$('#myCarousel130').on('slid.bs.carousel', function (e) {
					 var id = $('.item.active').data('slide-number');
					$('#carousel-text').html($('#slide-content-'+id).html());
	});
});



jQuery(document).ready(function($) {
	$('#myCarousel72').carousel({
					interval: 5000
	});
	$('#carousel-text').html($('#slide-content-0').html());
 $('[id^=carousel-selector-]').click( function(){
			var id = this.id.substr(this.id.lastIndexOf("-") + 1);
			var id = parseInt(id);
			$('#myCarousel72').carousel(id);
	});
	$('#myCarousel72').on('slid.bs.carousel', function (e) {
					 var id = $('.item.active').data('slide-number');
					$('#carousel-text').html($('#slide-content-'+id).html());
	});
});
