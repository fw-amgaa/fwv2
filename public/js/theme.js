;(function($) {
    "use strict";
    
    
    var navbar=$('header');
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	navbar.affix({
	  offset: {
	    top: 1
	  }
	});


	navbar.on('affix.bs.affix', function() {
		if (!navbar.hasClass('affix')){
			navbar.addClass('animated slideInDown');
			$('body').addClass('fixed');
		}
	});

	navbar.on('affixed-top.bs.affix', function() {
	  	navbar.removeClass('animated slideInDown');
        $('body').removeClass('fixed');
	  	
	});
    
    var navbar2=$('.business_menu');
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	navbar2.affix({
	  offset: {
	    top: 1080
	  }
	});


	navbar2.on('affix.bs.affix', function() {
		if (!navbar2.hasClass('affix')){
			navbar2.addClass('animated slideInDown');
			$('body').addClass('fixed');
		}
	});

	navbar2.on('affixed-top.bs.affix', function() {
	  	navbar2.removeClass('animated slideInDown');
        $('body').removeClass('fixed');
	  	
	});
    
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider(){
        if ( $('#main_slider').length ){
            $("#main_slider").revolution({
                sliderType:"standard",
                sliderLayout:"fullscreen",
                lazyLoad:"on", 
                delay:9000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable:true,
                        hide_onmobile:true,
                        hide_onleave:true,
                        hide_under:767,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 60,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 60,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"normal",
                        hide_onleave:false,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:40,
                        space:10,
                        
                    }
                },
                responsiveLevels:[4096,1360,1199,992,768,480,360],
                gridwidth:[1400,1300,1170,720,480,290,340],
                gridheight:[950,800,800,600,600,700],
                lazyType:"none",
                shadow:0,
                spinner:"off",
                stopLoop:"on",
                stopAfterLoops:0,
                shuffle:"off",
                autoHeight:"on",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider();
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function business_slider(){
        if ( $('#business_slider').length ){
            $("#business_slider").revolution({
                sliderType:"standard",
                sliderLayout:"fullscreen",
                lazyLoad:"on", 
                delay:9000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable: true,
                        hide_onmobile:true,
                        hide_onleave:true,
                        hide_under:767,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 60,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 60,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable:true,
                        hide_onmobile:false,
                        style:"normal",
                        hide_onleave:false,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:40,
                        space:10,
                        
                    }
                },
                responsiveLevels:[4096,1360,1199,992,768,480,360],
                gridwidth:[1400,1300,1170,720,480,290,340],
                gridheight:[950,800,800,600,600,700],
            })
        }
    }
    business_slider();
    
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slidertwo(){
        if ( $('#main_slider2').length ){
            $("#main_slider2").revolution({
                sliderType:"standard",
                sliderLayout:"fullscreen",
                delay:6500,
                disableProgressBar:"on",
                lazyLoad:"on", 
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "vertical",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    tabs: {
                        style:"uranus",
                        wrapper_padding:0,
                        width:32, 
                        height:32,
                        wrapper_color:"transparent",
                        enable:true,
                        tmp:'<div class="tp-tab-wrapper"><div class="tp-tab-number">{{param1}}</div></div>',
                        visibleAmount: 5,
                        hide_onmobile: true,
                        hide_onleave:false,
                        direction:"vertical",
                        position:"inner",
                        space:10,
                        h_align:"right",
                        v_align:"center",
                        h_offset:60,
                        v_offset:0
                    }
                },
                responsiveLevels:[4096,1366,1199,992,768,480,360],
                gridwidth:[1400,1300,1170,720,480,290,340],
                gridheight:[1080,800,800,600,600,700],
                shadow:0,
                spinner:"spinner3",
                stopLoop:"off",
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    }
    main_slidertwo()
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function portfolio_slider(){
        if ( $('#portfolio-slider').length ){
            $("#portfolio-slider").revolution({
                sliderType:"fullscreen",
                sliderLayout:"auto",
                delay:10000,
                disableProgressBar:"on",
                lazyLoad:"on", 
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "vertical",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"Gyges",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:false,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        left: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:135,
                            v_offset:45
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:115,
                            v_offset:45
                        }
                    },
                    tabs: {
                        style:"uranus",
                        wrapper_padding:0,
                        width:32, 
                        height:32,
                        wrapper_color:"transparent",
                        enable:true,
                        tmp:'<div class="tp-tab-wrapper"><div class="tp-tab-number">{{param1}}</div></div>',
                        visibleAmount: 5,
                        hide_onmobile: true,
                        hide_under:550,
                        hide_onleave:false,
                        direction:"vertical",
                        position:"inner",
                        space:10,
                        h_align:"right",
                        v_align:"center",
                        h_offset:60,
                        v_offset:0
                    }
                },
                responsiveLevels:[4096,1400,1199,992,767,480],
                gridwidth:[1170,1000,1000,750,450,290],
                gridheight:[950,900,900,850,800,700],
            })
        }
    }
    portfolio_slider();
    
    /*----------------------------------------------------*/
    /*  Portfolio Slider2
    /*----------------------------------------------------*/
    function portfolioSlider(){
        if ( $('.portfolio_slider').length ){
            $('.portfolio_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav:true,
                autoplay: true,
                smartSpeed: 1500,
                dots:false,
                navContainer:".portfolio_slider",
                navText: ['<i class="ti-arrow-left"></i>','<i class="ti-arrow-right"></i>'],
                responsiveClass: true,
            })
        }
    }
    portfolioSlider();
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function multi_slider(){
        if ( $('#multi_slider').length ){
            $("#multi_slider").revolution({
                sliderType:"standard",
                sliderLayout:"fullscreen",
                delay:9000,
                disableProgressBar:"on",
                lazyLoad:"on", 
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "vertical",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"Gyges",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:0,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:0,
                            v_offset:0
                        }
                    }
                },
                responsiveLevels:[4096,1450,1199,992,767,480],
                gridwidth:[1400,1170,1000,750,450,290],
                gridheight:[1080,800,768,750,550,480],
                shadow:0,
                spinner:"spinner3",
                stopLoop:"off",
                shuffle:"off",
                autoHeight:"on",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    multi_slider();
    
   
    /*---------------------------------------
			SKILLS PROGRESS BAR
	---------------------------------------*/
	try {
		jQuery('#bt-ourskill').appear(function () {
			jQuery('.bt-skillholder').each(function () {
				jQuery(this).find('.bt-skillbar').animate({
					width: jQuery(this).attr('data-percent')
				}, 2500);
			});
		});
	} catch (err) {}
	/* -------------------------------------
      // Skill - end
    ---------------------------------------*/
    
    /*----------------------------------------------------*/
    /* Submenu js
    /*----------------------------------------------------*/
    
    var dropToggle =$('.off_menu .nav > li').has('ul').children('a');


	dropToggle.on('click',function(){
		dropToggle.not(this).closest('li').find('ul').slideUp(700);
		$(this).closest('li').children('ul').slideToggle(700);
		return false;
	});
    
    /*--- 
    Search Form for Navigation
    ---*/
    $('.nav_searchFrom').on('click',function(){
        $('.searchForm').toggleClass('show');
        $('body').toggleClass('show');
        return false
    });
    $('.form_hide').on('click',function(){
        $('.searchForm').removeClass('show')
        $('body').removeClass('show');
    });
    
    /*----------------------------------------------------*/
    /* Offcanvas Menu js
    /*----------------------------------------------------*/
    
    function offcanvasActivator(){
        if ( $('.bar_menu').length ){
            $('.bar_menu').on('click', function(){
                $('.offcanvas_menu').toggleClass('open')
            });
            $('.closer_icon').on('click',function(){
                $('.offcanvas_menu').removeClass('open')
            })
        }
    }
    offcanvasActivator();
    
    $(window).on("load",function(){
            $(".off_menu .nav").mCustomScrollbar({
                mouseWheelPixels: 50,
                scrollInertia: 0,
            });
        });
    
    $(window).on("load",function(){
        $(".sub-menu").mCustomScrollbar({
            mouseWheelPixels: 0,
            scrollInertia: 0,
            setHeight: "false"
        });
    });
    $(window).on("load",function(){
        $(".offcanvas_menu").niceScroll({
            scrollspeed: 50,
            mousescrollstep: 30,
            cursorcolor: "transparent",
            cursorwidth: "0px",
            cursorminheight: 32,
            cursorborderradius: "0px", 
            smoothscroll: true,
        });
    });

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    
    
    /*----------------------------------------------------*/
    /*  portfolio_isotope
    /*----------------------------------------------------*/
    function latest_project(){
        if ( $('.l_project_inner,#portfolio,.blog_main_item_inner').length ){
            // Activate isotope in container
            $(".l_project_inner,#portfolio,.blog_main_item_inner").imagesLoaded( function() {
                $(".l_project_inner,#portfolio,.blog_main_item_inner").isotope({
                    itemSelector: ".l_p_i,.project,.main_blog_item",
                    layoutMode: 'masonry',
                }); 
            }); 
            // Add isotope click function
            $(".latest_menu ul li,.port_fillter li").on('click',function(){
                $(".latest_menu ul li,.port_fillter li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".l_project_inner,#portfolio,.blog_main_item_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    latest_project();
    
    /*----------------------------------------------------*/
    /*  Ms portfolio_isotope
    /*----------------------------------------------------*/
    function latest_project1(){
        if ( $('.lt_project').length ){
            // Activate isotope in container
            $(".lt_project").imagesLoaded( function() {
                $(".lt_project").isotope({
                    itemSelector: ".l_p_i",
                    layoutMode: 'masonry',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                }); 
            });
            // Add isotope click function
            $(".latest_menu ul li").on('click',function(){
                $(".latest_menu ul li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".lt_project").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    latest_project1();
    
    /*----------------------------------------------------*/
    /*  portfolio_Massonry
    /*----------------------------------------------------*/
    function portfolio_Massonry(){
        if ( $('.portfolio_masonry').length ){
            // Activate isotope in container
            $(".portfolio_masonry").imagesLoaded( function() {
                $(".portfolio_masonry").isotope({
                    itemSelector: ".portfolio_m_item",
                    layoutMode: 'masonry',
                    masonry: {
                        columnWidth: '.portfolio-sizer',
                        gutter: 0
                    }
                }); 
            }); 
        }
    }
    portfolio_Massonry();
    
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function customer_slider(){
        if ( $('#c_slider').length ){
            $('#c_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 2,
                nav:false,
                autoplay: false,
                dots: false,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    767: {
                        items: 2,
                    }
                }
            })
        }
    }
    customer_slider();
    
    /*---------------------------------------
			passion_slider
	---------------------------------------*/
    function passionSlider(){
        var passion_slider = $(".passion_slider");
        if( passion_slider.length ){
            passion_slider.owlCarousel({
                loop:true,
                margin:0,
                items: 1,
                dots:false,
                nav:true,
                navContainer:".agency-right-side",
                autoplay: true,
                smartSpeed: 2000,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']
            })
        }
    }
    passionSlider();
    
    /*---------------------------------------
			testimonial_slider_two
	---------------------------------------*/
    function testslidertwo(){
        var test_s = $(".test_slider_two");
        if( test_s.length ){
            test_s.owlCarousel({
                loop:true,
                margin:30,
                items: 1,
                nav:false,
                dots: false,
                autoplay: true,
                smartSpeed: 2000
            })
        }
    }
    testslidertwo();
     /*---------------------------------------
			testimonial_slider_two
	---------------------------------------*/
    
    /*---------------------------------------
			partner_slider
	---------------------------------------*/
    function partnerSlider(){
        var p_s = $(".partner_slider, .happy_clients_slider");
        if( p_s.length ){
            p_s.owlCarousel({
                loop:true,
                margin:0,
                items: 1,
                nav:false,
                dots: true,
                autoplay: true,
                smartSpeed: 1000
            })
        }
    }
    partnerSlider();
     /*---------------------------------------
			partner_slider
	---------------------------------------*/
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function clients_slider(){
        if ( $('.clients_logo_slider').length ){
            $('.clients_logo_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 6,
                nav:false,
                autoplay: true,
                dots: false,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                    },
                    400: {
                        items: 4,
                    },
                    600: {
                        items: 5,
                    },
                    768: {
                        items: 6,
                    }
                }
            })
        }
    }
    clients_slider();
    
    
    /*----------------------------------------------------*/
    /*  Clients Slider2
    /*----------------------------------------------------*/
    function clients_slider2(){
        if ( $('.clients_slider2_active').length ){
            $('.clients_slider2_active').owlCarousel({
                loop:true,
                margin: 0,
                items: 6,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots: false,
                navContainerClass:".clients_slider2_inner",
                navText: ['<i class="ti-arrow-left"></i>','<i class="ti-arrow-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    600: {
                        items: 4,
                    },
                    800: {
                        items: 6,
                    }
                }
            })
        }
    }
    clients_slider2();
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function ttm_slider(){
        if ( $('.saying_ttm_slider').length ){
            $('.saying_ttm_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 3,
                nav:false,
                autoplay: true,
                dots: false,
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    }
                }
            })
        }
    }
    ttm_slider();
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function blog_slider1(){
        if ( $('.blog_image_slider').length ){
            $('.blog_image_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav:true,
                autoplay: false,
                dots: false,
                smartSpeed: 1500,
                navContainerClass: '.blog_image_slider',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
            })
        }
    }
    blog_slider1();
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function do_slider(){
        if ( $('.do_slider,.blog_slider').length ){
            $('.do_slider,.blog_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav:false,
                autoplay: false,
                smartSpeed: 1500,
                dots: false,
                navContainerClass: '.do_slider',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
            })
        }
    }
    do_slider();
    
    /*----------------------------------------------------*/
    /*  Saying Slider
    /*----------------------------------------------------*/
    function saying_slider(){
        if ( $('.saying_slider').length ){
            $('.saying_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 1,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots: false,
                navContainer: '.saying_slider',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
            })
        }
    }
    saying_slider();
    
    /*---------------------------------------
			testimonial_slider
	---------------------------------------*/
    function testslider(){
        var test_slider = $(".testimonial_slider");
        if( test_slider.length ){
            test_slider.owlCarousel({
                loop:true,
                margin:0,
                items: 1,
                nav:true,
                dots: false,
                autoplay: true,
                smartSpeed: 2000,
                navText: ['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>']
            })
        }
    }
    testslider();
    
    /*---------------------------------------
			testimonial_slider
	---------------------------------------*/
    function c_office_slider(){
        var c_office_slider = $(".c_office_slider");
        if( c_office_slider.length ){
            c_office_slider.owlCarousel({
                loop:true,
                margin:0,
                items: 1,
                nav:true,
                dots: false,
                autoplay: true,
                smartSpeed: 2000,
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
            })
        }
    }
    c_office_slider();
    
    /*---------------------------------------
			port-carousel area
	---------------------------------------*/
    function portSlider(){
        var port_s = $(".port-carousel");
        if( port_s.length ){
            port_s.owlCarousel({
                loop:true,
                margin:30,
                items: 4,
                nav:true,
                autoplay: true,
                navText: ['<i class="lnr lnr-arrow-left"></i>','<i class="lnr lnr-arrow-right"></i>'],
                smartSpeed: 2000,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    700: {
                        items: 3,
                    },
                    992: {
                        items: 4,
                    }
                }
            })
        }
    }
    portSlider();
    
    /*---------------------------------------
			port-carousel area
	---------------------------------------*/
    function portSlider2(){
        var port_Two = $(".port-carousel_two");
        if( port_Two.length ){
            port_Two.owlCarousel({
                loop:true,
                margin:0,
                items: 4,
                nav:false,
                autoplay: true,
                smartSpeed: 2000,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    700: {
                        items: 3,
                    },
                    992: {
                        items: 4,
                    }
                }
            })
        }
    }
    portSlider2();
    
    /*----------------------------------------------------*/
    /*  Screenshot Slider
    /*----------------------------------------------------*/
    function customer_slider_two(){
        if ( $('#c_slider2').length ){
            $('#c_slider2').owlCarousel({
                loop:true,
                margin: 0,
                items: 2,
                autoplay: true,
                nav:true,
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                smartSpeed: 1500,
                dots:false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    767: {
                        items: 2,
                    }
                }
            })
        }
    }
    customer_slider_two();
    
    /*=========== parallax js =========*/
    if($(window).width()>768){
        $('.single_img_area').parallax("50%", 0.2);
    }
    
    
    /*----------------------------------------------------*/
    /*  Image popup
    /*----------------------------------------------------*/
    $('.image_pop').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});
    

    $('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
    
    
    /*-------------------------------------------------------------------------------
	  Full screen sections 
	-------------------------------------------------------------------------------*/
    if ($('.pagepiling').length > 0){
      	$('.pagepiling').pagepiling({
    		scrollingSpeed: 280,
		    loopBottom:true,
            anchors: ['first', 'second', 'third', 'four','five'],
            menu: '#menu',
            navigation:false,
		    afterLoad: function(anchorLink, index){
		    	if (index == 2 || index == 4 || index == 6){   /* 2, 4, 6, - sections with white bacgkgrounds */
		            $('.full_page_menu,#fullpage_footer,#menu,#arrow').removeClass('content-white');
		            $('#pp-nav').removeClass('white');
		    	}
		    	else{
	            	$('.full_page_menu,#fullpage_footer,#menu,#arrow').addClass('content-white');
	            	$('#pp-nav').addClass('white');
	            }
	            
	            
  			}
		});
    
        
        /*-------------------------------------------------------------------------------
		   Scroll into sections 
		/-------------------------------------------------------------------------------*/



		$('.pp-scrollable').on('scroll', function () {
    		var scrollTop =$(this).scrollTop();
    		if (scrollTop > 100 ) {
    			$('.full_page_menu,#fullpage_footer').removeClass('content-white');
    		}
    		else{
    			$('.full_page_menu,#fullpage_footer').addClass('content-white');
    		}
		});



		/*-------------------------------------------------------------------------------
		   Scroller navigation
		/-------------------------------------------------------------------------------*/



		$('#pp-nav').remove().appendTo('.animsition').prepend('<div class="pp-nav-up fa fa-angle-up"></div>').append('<div class="pp-nav-down fa fa-angle-down"></div>').addClass('white right-boxed hidden-xs');

		$('.pp-nav-up').on('click', function(){
			$.fn.pagepiling.moveSectionUp();
		});

		$('.pp-nav-down').on('click', function(){
			$.fn.pagepiling.moveSectionDown();
		});
    } 
    
    
    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    
    if ( $('#mapBox').length ){
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: $lat,
            lng: $lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: $zoom,
                styles: [
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            },
                            {
                                "hue": "#ff0000"
                            }
                        ]
                    }
                ]
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
    
    
    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    
    if ( $('#fullp_map').length ){
        var $lat = $('#fullp_map').data('lat');
        var $lon = $('#fullp_map').data('lon');
        var $zoom = $('#fullp_map').data('zoom');
        var $marker = $('#fullp_map').data('marker');
        var $info = $('#fullp_map').data('info');
        var $markerLat = $('#fullp_map').data('mlat');
        var $markerLon = $('#fullp_map').data('mlon');
        var map = new GMaps({
            el: '#fullp_map',
            lat: $lat,
            lng: $lon,
            scrollwheel: false,
            scaleControl: false,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: $zoom,
                styles: [
                    {
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            },
                            {
                                "saturation": "-100"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 40
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            },
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#4d6059"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#4d6059"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#4d6059"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#4d6059"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#4d6059"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#2b3638"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#2b3638"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#24282b"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#24282b"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    }
                ]
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
        
    /*Footer Widget Height*/
    function footerWidgetHeight(){
        if($(window).width()>768){
            $('.row .f_widget').css( "height", function(){
                return Math.max($('.row .widget1').height(), $('.row .widget2').height(), $('.row .widget3').height(), $('.row .widget4').height())
            }) 
        }
    }
    footerWidgetHeight();
    
    
    /*------------- preloader js --------------*/
    $(window).load(function() { // makes sure the whole site is loaded
        $('.loader-container').fadeOut(); // will first fade out the loading animation
        $('.loader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(150).css({'overflow':'visible'})
    });
    
})(jQuery)