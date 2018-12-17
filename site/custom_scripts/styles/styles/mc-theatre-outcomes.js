$(document).ready(function(){
 
  // initialize Blazy plugin
  var bLazy = new Blazy({
    selector: '.lazyload-img',
    successClass: 'loaded-img',
    success: function(element){
      $('.hero-bg').removeClass('loading-hero-img');
      $('.hero-bg .loading-gif').remove();
    }
  });

  $('.hero-bg').parallax({
    naturalWidth: 1440,
    naturalHeight: 609
  });

  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
  
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
  
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  
  $(window).on('resize scroll', function() {

    if ($('.section-1-inView').isInViewport()) {
      $('#section-1 .our-alumni-col').addClass('col-slide-in'); 
    }

    if ($('.section-5-inView').isInViewport()) {
      $('#section-5 .s5-col').addClass('col-slide-in');
    }

    if ($('#section-3').isInViewport()) {
      $('#section-3 .left-col img').addClass('inView');
      $('#section-3 .right-col').addClass('inView');
    }

    if ($('#section-2 .content-box').isInViewport()) {
      $('#section-2 .content-box').addClass('inView');
    }

    if ($('#section-4 .content-box').isInViewport()) {
      $('#section-4 .content-box').addClass('inView');
    }
 
  });
  
});
