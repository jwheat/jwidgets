$(document).ready(function(){
  var stickyTop = $('.devo-tabs').position().top;
  var faqItem = 1;

  checkTabs();

  // initialize Blazy plugin
  var bLazy = new Blazy({
    selector: '.lazyload-img',
    successClass: 'loaded-img',
    success: function(element){
      $('.hero-section .loading-gif').remove();
    }
  });

  $('.transforming-lives').slick({
    centerMode: true,
    centerPadding: '10px',
    slidesToShow: 3,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            centerMode: true,
            centerPadding: '30px', 
            slidesToShow: 1
        }
        }
    ]
  });

  $('.hero-section').parallax({
    naturalWidth: 600,
    naturalHeight: 400
  });

  $(window).on('scroll', function () {
    checkTabs();
    checkSticky();
  });

  $(window).resize(function(){
    $('.devo-tabs').removeClass('tabs-sticky');
    stickyTop = $('.devo-tabs').position().top; 
    checkSticky();
  });  

  /*  ====== section-2 events ====== */
  $('.open-overlay-1').click(function() {
    $('.fp-overlay').hide();
    $('.fp-info').hide();
    $('#overlay-1').show(); 
  });

  $('.open-overlay-2').click(function() {
    $('.fp-overlay').hide();
    $('.fp-info').hide();
    $('#overlay-2').show();
  });

  $('.open-overlay-3').click(function() {
    $('.fp-overlay').hide();
    $('.fp-info').hide();
    $('#overlay-3').show();
  });

  $('.open-overlay-4').click(function() {
    $('.fp-overlay').hide();
    $('.fp-info').hide();
    $('#overlay-4').show();
  });

  $('.fp-overlay .close-button').click(function() {
    $('.fp-info').show();
    $('.fp-overlay').hide();
  });

   /*  ====== scroll to sections ====== */
   $('.why-give-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#why-give").offset().top + 80}, 1000);
  });

  $('.explore-button').click(function() {
    $('.tab-item').removeClass('active');
    $('html, body').animate({scrollTop: $("#why-give").offset().top + 80}, 1000);
  });

  $('.fundraising-priorities-item').click(function() {
    $('fundraising-priorities-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#fp").offset().top + 80}, 1000);
  });

  $('.ways-to-give-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#ways-to-give").offset().top + 80}, 1000);
  });

  $('.transforming-lives-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#transforming-lives").offset().top + 80}, 1000);
  });
  /*  ====== END scroll to sections ====== */

  $('#transforming-lives-video').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=mnB3hGPpCDA');
  });
  
	$(document).on('lity:close', function(event, instance) {
		$('body').removeClass('stop-scrolling');
  });	
  
  // show or hide sticky navigation bar at the top of the page
  function checkSticky() {

    var pos = $(window).scrollTop();
    if (pos > stickyTop) {
      $('.devo-tabs').addClass('tabs-sticky');
      $(window).trigger('resize.px.parallax');
    } else {
      $('.devo-tabs').removeClass('tabs-sticky');
    }
  }//checkSticky

  function checkTabs() {
    
    if (isElementInView('#section-circle-flip')) {
      $('#section-circle-flip .circle-flip').addClass('inView');  
    }

    if (isElementInView('#ways-to-give h2')) {
      $('.ways-to-give-col-left').addClass('panel-slide-in');
      $('.ways-to-give-col-right').addClass('panel-slide-in'); 
    }

    if (showInView('#why-give', '.why-give-item')) {
      if (showInView('#fp', '.fundraising-priorities-item')) {         
        if (showInView('#ways-to-give', '.ways-to-give-item')) {          
          if (showInView('#transforming-lives', '.transforming-lives-item')) {                                                
          }                                            
        }                                       
      }
    } 
    
  }//checkTabs

  function showInView(element, item) {
    var res = true;
    if (isElementInView(element, false)) {
      $('.tab-item').removeClass('active');
      $(item).addClass('active');
      res = false;
    }
    return res;
  }//showInView

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
