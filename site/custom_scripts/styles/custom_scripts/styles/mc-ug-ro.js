$(document).ready(function(){
  var faqItem = 1;

  // initialize Blazy plugin
  var bLazy = new Blazy({
    selector: '.lazyload-img',
    successClass: 'loaded-img',
    success: function(element){
      $('.hero-section .loading-gif').remove();
      $('.hero-section').removeClass('loading-hero-img');
    }
  });

  //Modals for circular images
  $('.open-overlay-1').click(function() {
    $('.section-2-overlay').hide();
    $('.section-2-info').hide();
    $('#overlay-1').show();
  });

  $('.open-overlay-2').click(function() {
    $('.section-2-overlay').hide();
    $('.section-2-info').hide();
    $('#overlay-2').show();
  });

  $('.open-overlay-3').click(function() {
    $('.section-2-overlay').hide();
    $('.section-2-info').hide();
    $('#overlay-3').show();
  });

  //Close Modal
  $('.section-2-overlay .close-button').click(function() {
    $('.section-2-info').show();
    $('.section-2-overlay').hide();
  });

  checkTabs();

  $('.hero-section').parallax({
    naturalWidth: 1366,
    naturalHeight: 742
  });

  $(window).on('scroll', function () {
    checkTabs();
  });

  $('input,textarea').focus(function(){
      $(this).data('placeholder',$(this).attr('placeholder'))
            .attr('placeholder','');
  }).blur(function(){
      $(this).attr('placeholder',$(this).data('placeholder'));
  });

  $('.blue-bg-slider').slick({
    prevArrow: '.page-slider .page-slider-nav-left',
    nextArrow: '.page-slider .page-slider-nav-right',
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('#video-1').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=1bh5KGUyTXU');
  });

  $('#video-2').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=fktPRVIaC9A');
  });

  $('#video-3').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=pz5ZAdOsSEM');
  });

  $('#video-4').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=Kkd4Yg3QulA');
  });

	$(document).on('lity:close', function(event, instance) {
		$('body').removeClass('stop-scrolling');
  });


  function checkTabs() {
      if (isElementInView('#circle-flip')) {
        $('#circle-flip .circle-flip').addClass('inView');
      }

      if (isElementInView('#section-6 h2')) {
        $('.square-panel-section-col-left').addClass('panel-slide-in');
        $('.square-panel-section-col-right').addClass('panel-slide-in');
      }
  }//checkTabs


  function isElementInView(element, fullyInView) {
    var pageTop = $(window).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).height();

    if (fullyInView === true) {
        return ((pageTop < elementTop) && (pageBottom > elementBottom));
    } else {
        return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
    }
  }//isElementInView

});
