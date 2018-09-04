$(document).ready(function(){
	$.fn.exists = function(){return this.length>0;}

        // Create Bridge carousel
        if ($(window).width() < 767) { // mobile
          
          $('#content .alt_gallery ul.slides li img').each(function(i, e) {
            $(e).attr('src', $(e).data('mobile-src'));
            console.log(i, e);
          });
          
          if ($('.alt_gallery').exists()) {
          window.jpslider = new JpSlide('.alt_gallery', {
            slideOffset: 4,
            slideGap: 10
          });
          }
          $(window).resize(function() {
            window.jpslider.update();
          });
          
          
        }  else  { // desktop */
          if ($('.alt_gallery').exists()) {
              $(".alt_gallery").flexslider ({
                      animation: "slide",
                      //smoothHeight: true,
                      slideshow: false,
                      useCSS: false,
                      controlNav: false,
                      selector: ".slides > li"
              });
          }
          $('ul.flex-direction-nav').css('height', 0);
        };
});