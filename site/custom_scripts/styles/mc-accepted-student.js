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

  $('.explore-messiah-btn').click(function() {
    $('html, body').animate({scrollTop: $("#section-1").offset().top}, 1000);
  });


  $('#move-in-video').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=ID8DEz9S2I8');
  });
  
	$(document).on('lity:close', function(event, instance) {
		$('body').removeClass('stop-scrolling');
	});	

  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
  
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
  
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  
  $(window).on('resize scroll', function() {

    if ($('#section-2 .content-box').isInViewport()) {
      $('#section-2 .content-box').addClass('inView');
    }
 
  });

// Set the date we're counting down to on the countdown timer
var countDownDate = new Date("Sep 1, 2019 08:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  $('#days').html(days);
  $('#hours').html(hours);
  $('#minutes').html(minutes);
  $('#seconds').html(seconds);
    
  if (distance < 0) {
    clearInterval(x);
  }
}, 1000);
  
});
