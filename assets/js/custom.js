
/*== owl-carousel_js ==*/
$(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 20,
                nav: false,
                loop: true,
				mouseDrag:false,
				autoplay:true,
				autoplayTimeout:1000,
                responsive: {
                  991: {
                    items:2
                  },
                  767: {
                    items:2
                  },
                  575: {
                    items: 1
                  },
				  480: {
                    items: 1
                  },
				  0: {
                    items: 1
                  }
                }
              })
            })

/*== MagnificPopup_js ==*/

$('.you-vid').magnificPopup({
  type: 'iframe',
  iframe: {
  markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
          '</div>', 

  patterns: {
    youtube: {
      index: 'youtube.com/', 

      id: 'v=', 

      src: 'https://www.youtube.com/embed/%id%?autoplay=1' 
    },
    vimeo: {
      index: 'vimeo.com/',
      id: '/',
      src: 'https://player.vimeo.com/video/%id%?autoplay=1'
    },
    gmaps: {
      index: '//maps.google.',
      src: '%id%&output=embed'
    }


  },

  srcAction: 'iframe_src', 
}
  
});


/*== scrollTop_js ==*/ 
$(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	    $(".navbar").css({"background-color": "white",
		"transition": ".7s",
		});
	  }

	  else{
		  $(".navbar").css("background" , "transparent");  	
	  }
	 
  }) 
  
/*== scrollup_js ==*/

$(document).ready(function () {
	
	 "use strict";

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});
/*======================================
			The End
========================================			
*/