jQuery(window).load(function() {

		if(jQuery('#slider') > 0) {

        jQuery('.nivoSlider').nivoSlider({

        	effect:'fade',

    });

		} else {

			jQuery('#slider').nivoSlider({

        	effect:'fade',

    });

		}

});

// NAVIGATION CALLBACK

var ww = jQuery(window).width();

jQuery(document).ready(function() { 

	jQuery(".sitenav li a").each(function() {

		if (jQuery(this).next().length > 0) {

			jQuery(this).addClass("parent");

		};

	})

	jQuery(".toggleMenu").click(function(e) { 

		e.preventDefault();

		jQuery(this).toggleClass("active");

		jQuery(".sitenav").slideToggle('fast');

	});

	adjustMenu();

})

// navigation orientation resize callbak

jQuery(window).bind('resize orientationchange', function() {

	ww = jQuery(window).width();

	adjustMenu();

});

var adjustMenu = function() {

	if (ww < 981) {

		jQuery(".toggleMenu").css("display", "block");

		if (!jQuery(".toggleMenu").hasClass("active")) {

			jQuery(".sitenav").hide();

		} else {

			jQuery(".sitenav").show();

		}

		jQuery(".sitenav li").unbind('mouseenter mouseleave');

	} else {

		jQuery(".toggleMenu").css("display", "none");

		jQuery(".sitenav").show();

		jQuery(".sitenav li").removeClass("hover");

		jQuery(".sitenav li a").unbind('click');

		jQuery(".sitenav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {

			jQuery(this).toggleClass('hover');

		});

	}

}

jQuery(document).ready(function() {

  	jQuery('.srchicon').click(function() {

			jQuery('.searchtop').toggle();

			jQuery('.topsocial').toggle();

		});	

});

// Animation JS //

// .bounce, .flash, .pulse, .shake, .swing, .tada, .wobble, .bounceIn, .bounceInDown, .bounceInLeft, .bounceInRight, .bounceInUp, .bounceOut, .bounceOutDown, .bounceOutLeft, .bounceOutRight, .bounceOutUp, .fadeIn, .fadeInDown, .fadeInDownBig, .fadeInLeft, .fadeInLeftBig, .fadeInRight, .fadeInRightBig, .fadeInUp, .fadeInUpBig, .fadeOut, .fadeOutDown, .fadeOutDownBig, .fadeOutLeft, .fadeOutLeftBig, .fadeOutRight, .fadeOutRightBig, .fadeOutUp, .fadeOutUpBig, .flip, .flipInX, .flipInY, .flipOutX, .flipOutY, .lightSpeedIn, .lightSpeedOut, .rotateIn, .rotateInDownLeft, .rotateInDownRight, .rotateInUpLeft, .rotateInUpRight, .rotateOut, .rotateOutDownLeft, .rotateOutDownRight, .rotateOutUpLeft, .rotateOutUpRight, .slideInDown, .slideInLeft, .slideInRight, .slideOutLeft, .slideOutRight, .slideOutUp, .rollIn, .rollOut, .zoomIn, .zoomInDown, .zoomInLeft, .zoomInRight, .zoomInUp

jQuery.noConflict();

jQuery(document).ready(function(){

jQuery(window).scroll(function(){

    // This is then function used to detect if the element is scrolled into view

    function elementScrolled(elem)

    {

        var docViewTop = jQuery(window).scrollTop();

        var docViewBottom = docViewTop + jQuery(window).height();

        var elemTop = jQuery(elem).offset().top;

        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));

    }

    // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element

	if (jQuery('.servicebox').length > 0) {

    if(elementScrolled('.servicebox')) {

        var els = jQuery('.servicebox'),

            i = 0,

            f = function () {

                jQuery(els[i++]).addClass('fadeInUp');

                if(i < els.length) setTimeout(f, 400);

            };

        f();

    }}



	if (jQuery('.featuresbox').length > 0) { 

	if(elementScrolled('.featuresbox')) {

        var els = jQuery('.featuresbox'),

            i = 0,

            f = function () {

                jQuery(els[i++]).addClass('fadeInUp');

                if(i < els.length) setTimeout(f, 400);

            };

        f();

    }}	

	

	if (jQuery('.home_section2_content').length > 0) { 

	if(elementScrolled('.home_section2_content')) {

        var els = jQuery('.home_section2_content'),

            i = 0,

            f = function () {

                jQuery(els[i++]).addClass('fadeInLeft');

                if(i < els.length) setTimeout(f, 400);

            };

        f();

    }}				

	

});

});



jQuery(document).ready(function() {

        jQuery('.logo h2, .slide_info h2').each(function(index, element) {

            var heading = jQuery(element);

            var word_array, last_word, first_part;

            word_array = heading.html().split(/\s+/); // split on spaces

            last_word = word_array.pop();             // pop the last word

            first_part = word_array.join(' ');        // rejoin the first words together

            heading.html([first_part, ' <span>', last_word, '</span>'].join(''));

        });
        jQuery('.header').attr('data-height',jQuery('.header').height());
        if(jQuery('.sidebar-menu').length){                
            jQuery('.sidebar-menu li .active').parents('li').each(function(){jQuery(this).addClass('active');console.log(jQuery(this).attr('class'));});
            jQuery('.sidebar-menu').parents('.elementor-column').prev('.elementor-column').before(jQuery('.sidebar-menu').clone());
            jQuery('.sidebar-menu:first').removeClass('sidebar-menu-original').addClass('sidebar-menu-clone').wrap('<div class="elementor-column"></div>').wrap('<div class="elementor-column-wrap"></div>');
                   
        }
});	


jQuery(window).load(function(){
    //setTimeout(function(){
    jQuery('.page-preloader').fadeOut('500',function(){
        jQuery('.page-preloader').remove();
    });
    jQuery('.sidebar-menu-original').hcSticky({
        stickTo: jQuery('.sidebar-menu-original').parents('.elementor-widget-wrap'),
        top:parseInt(jQuery('.header').attr('data-height'),10)
    }); 
    //},500);
    
});
jQuery(window).scroll(function(){
    var h = parseInt(jQuery('.header').attr('data-height'),10);
    var s = jQuery(window).scrollTop();
    
    if(jQuery('#wpadminbar').length>0){
        h = h + jQuery('#wpadminbar').height();
    }
    
    if(h<=s && !jQuery('body').hasClass('stick')){
        jQuery('body').addClass('stick');
        jQuery('.stick-padding').height(h);
        if(jQuery('#wpadminbar').length>0){
            jQuery('.header').css({'top':jQuery('#wpadminbar').height()});
        }
        else{
            jQuery('.header').css({'top':0});
        }
    }
    if(h>s && jQuery('body').hasClass('stick')){
        jQuery('body').removeClass('stick');
        jQuery('.header').removeAttr('style');
        jQuery('.header').attr('data-height',jQuery('.header').height());
    }
});