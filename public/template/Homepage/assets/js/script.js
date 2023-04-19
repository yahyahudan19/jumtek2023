/* -----------------------------------------------------------------------------



File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function() {

	"use strict";

	var Taeled = {
		init: function() {
			this.Basic.init();  
		},

		Basic: {
			init: function() {

				this.preloader();
				this.BackgroundImage();
				this.Animation();
				this.StickyHeader();
				this.MobileMenu();
				this.SideInner();
				this.cartArea();
				this.searchPopUp();
				this.scrollTop();
				this.MianSlider();
				this.CircleProgress();
				this.PortfolioGrid();
				this.videoBox();
				this.counterUp();
				this.TestimonialSlider();
				this.serviceSlide();
				this.PortfolioSlider2();
				this.SkillProgress();
				this.MemberSocial();
				this.PortfolioSlider3();
				this.partnerslide();
				this.PriceRangeHandle();
				this.blogSlider();
				this.singleProductSlide();
				this.SingleProductCarousel();
				this.SingleProductBottomCarousel();
				this.ProductZoom();
				this.HoverParallax();
				this.GoogleMap();

			},
			preloader: function (){
				$(window).on('load', function() {
					$('#preloader').addClass('loaded');
					if ($('#preloader').hasClass('loaded')) {
						$('.spinner').delay(1000).queue(function () {
							$(this).remove();
						});
					}
				});
			},
			BackgroundImage: function (){
				$('[data-background]').each(function() {
					$(this).css('background-image', 'url('+ $(this).attr('data-background') + ')');
				});
			},
			Animation: function (){
				if($('.wow').length){
					new WOW({
						offset: 100,
						mobile: true
					}).init()
				}
			},
			StickyHeader: function (){
				jQuery(window).on('scroll', function() {
					if (jQuery(window).scrollTop() > 250) {
						jQuery('.main-header').addClass('sticky-on')
					} else {
						jQuery('.main-header').removeClass('sticky-on')
					}
				})
			},
			MobileMenu: function (){
				$('.open_mobile_menu').on("click", function() {
					$('.mobile_menu_wrap').toggleClass("mobile_menu_on");
				});
				$('.open_mobile_menu').on('click', function () {
					$('body').toggleClass('mobile_menu_overlay_on');
				});
				if($('.mobile_menu li.dropdown ul').length){
					$('.mobile_menu li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-caret-right"></span></div>');
					$('.mobile_menu li.dropdown .dropdown-btn').on('click', function() {
						$(this).prev('ul').slideToggle(500);
					});
				}
				$(".dropdown-btn").on("click", function () {
					$(this).toggleClass("toggle-open");
				});
			},
			SideInner: function (){
				$('.sidebar-switcher').on("click", function() {
					$('.taeled-side-inner').toggleClass("sidebar-on");
				});
				$('.sidebar-switcher').on('click', function () {
					$('body').toggleClass('body-ovelay');
				});
			},
			cartArea: function (){
				$('.cart-dropdown').on('click', function() {
					$('.tel-head-cart').toggleClass('cart-on');
				});
			},
			searchPopUp: function (){
				if($('.search-box-outer').length) {
					$('.search-box-outer').on('click', function() {
						$('body').addClass('search-active');
					});
					$('.close-search').on('click', function() {
						$('body').removeClass('search-active');
					});
				}
			},
			scrollTop: function (){
				$(window).on("scroll", function() {
					if ($(this).scrollTop() > 250) {
						$('.scrollup').fadeIn();
					} else {
						$('.scrollup').fadeOut();
					}
				});

				$('.scrollup').on("click", function()  {
					$("html, body").animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			},
			MianSlider: function (){
				jQuery('#slider-main').owlCarousel({
					items: 1,
					margin: 0,
					loop: true,
					nav: false,
					dots: false,
					navSpeed: 800,
					autoplay: true,
					smartSpeed: 2000,
					animateOut: 'fadeOut',
					animateIn: 'fadeIn',
				});
			},
			CircleProgress: function (){
				if($('.count-box').length){
					$('.count-box').appear_c(function(){
						var $t = $(this),
						n = $t.find(".count-text").attr("data-stop"),
						r = parseInt($t.find(".count-text").attr("data-speed"), 10);
						if (!$t.hasClass("counted")) {
							$t.addClass("counted");
							$({
								countNum: $t.find(".count-text").text()
							}).animate({
								countNum: n
							}, {
								duration: r,
								easing: "linear",
								step: function() {
									$t.find(".count-text").text(Math.floor(this.countNum));
								},
								complete: function() {
									$t.find(".count-text").text(this.countNum);
								}
							});
						}
					},{accY: 0});
				};
				if($('.dial').length){
					$('.dial').appear_c(function(){
						var elm = $(this);
						var color = elm.attr('data-fgColor');  
						var perc = elm.attr('value'); 
						var thickness = elm.attr('thickness');  
						elm.knob({ 
							'value': 0, 
							'min':0,
							'max':100,
							'skin':'tron',
							'readOnly':true,
							'thickness':thickness,
							'dynamicDraw': true,
							'displayInput':false
						});
						$({value: 0}).animate({ value: perc }, {
							duration: 3500,
							easing: 'swing',
							progress: function () { elm.val(Math.ceil(this.value)).trigger('change');
						}
					});
					},{accY: 0});
				}
			},
			videoBox: function (){
				jQuery('.video_box').magnificPopup({
					disableOn: 200,
					type: 'iframe',
					mainClass: 'mfp-fade',
					removalDelay: 160,
					preloader: false,
					fixedContentPos: false,
				});
			},
			PortfolioGrid: function (){
				var $grid = $('.grid').imagesLoaded( function() {
					$grid.masonry({
						percentPosition: true,
						itemSelector: '.grid-item',
						columnWidth: '.grid-sizer'
					}); 
				});
			},
			counterUp: function (){
				jQuery('.count').counterUp({
					delay: 50,
					time: 2000,
				});
			},
			TestimonialSlider: function (){
				$('.testimonial-slider-details').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					fade: true,
					asNavFor: '.testimonial-author-item'
				});
				$('.testimonial-author-item').slick({
					slidesToShow: 5,
					slidesToScroll: 1,
					vertical:true,
					centerMode: true,
					asNavFor: '.testimonial-slider-details',
					dots: false,
					focusOnSelect: true,
					verticalSwiping:true,
				});
			},
			serviceSlide: function (){
				$('#service-slider').owlCarousel({
					margin:30,
					responsiveClass:true,
					nav: false,
					dots: false,
					loop:true,
					center: true,
					autoplay: true,
					smartSpeed: 1000,
					responsive:{
						0:{
							items:1,
						},
						400:{
							items:1,
						},
						600:{
							items:1,
						},
						700:{
							items:1,
						},
						1000:{
							items:3,

						}
					},
				});
			},
			PortfolioSlider2: function (){
				jQuery('#portfolio-slider-2').owlCarousel({
					items: 1,
					loop: true,
					nav: false,
					dots: true,
					autoplay: false,
					navSpeed: 800,
					smartSpeed: 1000,
					animateOut: 'slideOutUp',
					animateIn: 'slideInUp',
				});
			},
			SkillProgress: function (){
				if ($(".progress-bar").length) {
					var $progress_bar = $('.progress-bar');
					$progress_bar.appear();
					$(document.body).on('appear', '.progress-bar', function() {
						var current_item = $(this);
						if (!current_item.hasClass('appeared')) {
							var percent = current_item.data('percent');
							current_item.css('width', percent + '%').addClass('appeared').parent().append('<span>' + percent + '%' + '</span>');
						}

					});
				};
			},
			MemberSocial: function (){
				$('.member-social-btn').click( function(){
					if ( $(this).hasClass('current') ) {
						$(this).removeClass('current');
					} else {
						$('member-social-btn.current').removeClass('current');
						$(this).addClass('current');    
					}
				});
			},
			PortfolioSlider3: function (){
				if ($('#portfolio-slide-wrap4').length) {
					$('#portfolio-slide-wrap4').owlCarousel({
						loop:true,
						margin:30,
						nav:true,
						smartSpeed: 500,
						autoplay: 0,
						navText: [ '<span class="fas fa-arrow-left"></span>', '<span class="fas fa-arrow-right"></span>' ],
						responsive:{
							0:{
								items:1
							},
							480:{
								items:1
							},
							600:{
								items:1
							},
							700:{
								items:1
							},
							800:{
								items:2
							},
							900:{
								items:3
							},
							1024:{
								items:3
							}
						}
					});    		
				}
			},
			partnerslide: function (){
				$(window).on('load',function(){
					$('#partner-slideid').owlCarousel({
						margin:30,
						responsiveClass:true,
						nav: false,
						dots: false,
						loop:true,
						autoplay: false,
						smartSpeed: 1000,
						responsive:{
							0:{
								items:2,
							},
							400:{
								items:2,
							},
							600:{
								items:2,
							},
							700:{
								items:3,
							},
							1000:{
								items:4,

							},
							1300:{
								items:5,

							},
						},
					})
				});
			},
			PriceRangeHandle: function (){
				if ($("#slider-range").length) {
					$( "#slider-range" ).slider({
						range: true,
						min: 0,
						max: 3000,
						values: [ 0, 1500 ],
						slide: function( event, ui ) {
							$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
						}
					});
				};
				if ($("#amount").length) {
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
						" - $" + $( "#slider-range" ).slider( "values", 1 ) );
				};
				$('.q-count').prop('disabled', true);
				$(document).on('click','.plus',function(){
					$('.q-count').val(parseInt($('.q-count').val()) + 1 );
				});
				$(document).on('click','.minus',function(){
					$('.q-count').val(parseInt($('.q-count').val()) - 1 );
					if ($('.q-count').val() == 0) {
						$('.q-count').val(1);
					}
				});
			},
			blogSlider: function (){
				jQuery('#blod_slide').owlCarousel({
					items: 1,
					loop: true,
					nav: true,
					dots: false,
					autoplay: false,
					navSpeed: 800,
					smartSpeed: 1000,
					animateOut: 'fadeOut',
					navText:["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
				});
			},
			singleProductSlide: function(){
				if($("#shopproduct_single").length > 0){
					$('#shopproduct_single').slick({
						dots: false,
						arrows: false,
						speed: 800,
						infinite: false,
						autoplay: false,
						slidesToShow: 3,
						slidesToScroll: 3,
						vertical: true,
						draggable: false,
					});

					$(document).on('click', '.td-product-show .thumb_nav .slick-prev', function(){
						$('#shopproduct_single').slick('slickPrev');
					});

					$(document).on('click', '.td-product-show .thumb_nav .slick-next', function(){
						$('#shopproduct_single').slick('slickNext');
					});

					$('.td-product-show .owl-thumb-item:first-of-type').addClass('thumb-active');

					$(document).on('click', '.td-product-show .owl-thumb-item' ,function(){
						$('.td-product-show .owl-thumb-item').removeClass('thumb-active');
						$(this).addClass('thumb-active');
					});
				}
			},
			SingleProductCarousel: function(){
				if($("#td-product-single-carousel").length > 0){
					$('#td-product-single-carousel').owlCarousel({
						loop:false,
						margin:0,
						nav:false,
						dots: false,
						items: 1,
						mouseDrag: false,
						thumbs: true,
						thumbsPrerendered: true
					});
				}
			},
			SingleProductBottomCarousel: function(){
				if($("#product_thumb").length > 0){
					$('#product_thumb').slick({
						dots: false,
						arrows: false,
						speed: 800,
						infinite: false,
						autoplay: false,
						slidesToShow: 3,
						slidesToScroll: 1,
						draggable: false,
					});

					$(document).on('click', '.td-product-show .thumb_nav .slick-prev', function(){
						$('#product_thumb').slick('slickPrev');
					});

					$(document).on('click', '.td-product-show .thumb_nav .slick-next', function(){
						$('#product_thumb').slick('slickNext');
					});

					$('.td-product-show .owl-thumb-item:first-of-type').addClass('thumb-active');

					$(document).on('click', '.td-product-show .owl-thumb-item' ,function(){
						$('.td-product-show .owl-thumb-item').removeClass('thumb-active');
						$(this).addClass('thumb-active');
					});

				}
			},
			ProductZoom: function(){
				$('.td-shop-product-item').each(function(){
					$(this).find('img').zoomIt();
				});
			},
			HoverParallax: function(){
				if ($('.scene').length > 0 ) {
					$('.scene').parallax({
						scalarX: 10.0,
						scalarY: 10.0,
					}); 
				}
			},
			GoogleMap: function (){
				if ( $('#taeled_map').length ){
					var $lat = $('#taeled_map').data('lat');
					var $lon = $('#taeled_map').data('lon');
					var $zoom = $('#taeled_map').data('zoom');
					var $marker = $('#taeled_map').data('marker');
					var $info = $('#taeled_map').data('info');
					var $markerLat = $('#taeled_map').data('mlat');
					var $markerLon = $('#taeled_map').data('mlon');
					var map = new GMaps({
						el: '#taeled_map',
						lat: $lat,
						lng: $lon,
						scrollwheel: false,
						scaleControl: true,
						streetViewControl: false,
						panControl: true,
						disableDoubleClickZoom: true,
						mapTypeControl: false,
						zoom: $zoom,
					});
					map.addMarker({
						lat: $markerLat,
						lng: $markerLon,
						icon: $marker,    
						infoWindow: {
							content: $info
						}
					})
				}
			},

		}	
	}
	jQuery(document).ready(function (){
		Taeled.init();
	});

})();