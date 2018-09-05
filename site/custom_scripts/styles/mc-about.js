$(document).ready(function(){
  var stickyTop = $('.about-tabs').position().top;
  var faqItem = 1; 

  checkTabs();

  // initialize Blazy plugin
  var bLazy = new Blazy({
    selector: '.lazyload-img',
    successClass: 'loaded-img',
    success: function(element){
      $('.about-bg .loading-gif').remove();
	    setTimeout(function(){
        console.log('loaded image!');
        $('.about .about-video .about-play').addClass('active');
      }, 400);
    }
  });

  $('.about-bg').parallax({
    naturalWidth: 600,
    naturalHeight: 400
  });

  $('.our-campus-slider').slick({
    prevArrow: '.slider-controllers .prev',
    nextArrow: '.slider-controllers .next',
    /* autoplay: true, */
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  $('.our-history-slider').slick({
    prevArrow: '.our-history-slider-controllers .prev',
    nextArrow: '.our-history-slider-controllers .next',
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  $('.know-the-area-slider').slick({
    prevArrow: '.gtk-slider .gtk-slider-nav-left',
    nextArrow: '.gtk-slider .gtk-slider-nav-right',
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1200,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            slidesToScroll: 1,
        }
        },
        {
        breakpoint: 975,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            slidesToScroll: 1,
        }
        },
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 2,
            slidesToScroll: 1,
        }
        },
        {
        breakpoint: 538,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 1,
            slidesToScroll: 1,
        }
        }
    ]
  });

  $(window).on('scroll', function () {
    checkTabs();
    checkSticky();
  });

  $(window).resize(function(){
    $('.about-tabs').removeClass('about-sticky');
    stickyTop = $('.about-tabs').position().top;
    checkSticky();
  });   
  
  /*  ====== scroll to sections ====== */
  $('.overview-of-about-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#overview-of-about").offset().top}, 1000);
  });

  $('.explore-button').click(function() {
    $('.tab-item').removeClass('active');
    $('.overview-of-about-item').addClass('active');
    $('html, body').animate({scrollTop: $("#overview-of-about").offset().top}, 1000);
  });

  $('.our-campus-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#our-campus").offset().top}, 1000);
  });

  $('.faith-community-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#faith-community").offset().top}, 1000);
  });

  $('.see-anew-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#see-anew").offset().top + 80}, 1000);
  });

  $('.our-history-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#our-history").offset().top}, 1000);
  });
  /*  ====== END scroll to sections ====== */
  
  $('#overview-of-about-video').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=J7VGXEWJXsg');
  });
  
	$(document).on('lity:close', function(event, instance) {
		$('body').removeClass('stop-scrolling');
	});	


  // lightboxes on the see anew section
  $('.discerning-spirit').click(function() {
    $('.asa-overlay').hide();
    $('.about-sa-info').hide();
    $('#faith-intellect-overlay').show();
  });

  $('.real-world-creativity').click(function() {
    $('.asa-overlay').hide();
    $('.about-sa-info').hide();
    $('#discipline-imagination-overlay').show();
  });

  $('.authentic-power-to-lead').click(function() {
    $('.asa-overlay').hide();
    $('.about-sa-info').hide();
    $('#harmony-difference-overlay').show();
  });

  $('.an-ethic-of-servanthood').click(function() {
    $('.asa-overlay').hide();
    $('.about-sa-info').hide();
    $('#wisdom-expertise-overlay').show();
  });

  $('.passion-for-christian-community').click(function() {
    $('.asa-overlay').hide();
    $('.about-sa-info').hide();
    $('#worship-service-overlay').show();
  });

  $('.sense-of-calling').click(function() {
    $('.asa-overlay').hide();
    $('.about-sa-info').hide();
    $('#humility-aspiration-overlay').show();
  });

  $('.asa-overlay .close-button').click(function() {
    $('.about-sa-info').show();
    $('.asa-overlay').hide();
  });


  // show or hide sticky navigation bar at the top of the page
  function checkSticky() {

    var pos = $(window).scrollTop();
    if (pos > stickyTop) {
      $('.about-tabs').addClass('about-sticky');
      $(window).trigger('resize.px.parallax');
    } else {
      $('.about-tabs').removeClass('about-sticky');
    }
  }//checkSticky


  function checkTabs() {
    
    if (isElementInView('#fc-circle-flip')) {
      $('#fc-circle-flip .circle-flip').addClass('inView');  
    }

    if (isElementInView('#anew-circle-flip')) {
      $('#anew-circle-flip .circle-flip').addClass('inView');
    }

    if (showInView('#our-campus .campus-text-box', '.our-campus-item')) {
      if (showInView('#faith-community', '.faith-community-item')) {
        if (showInView('#overview-of-about', '.overview-of-about-item')) {         
          if (showInView('#see-anew', '.see-anew-item')) {          
            if (showInView('#our-history', '.our-history-item')) {                                                
            }                                            
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

  // modify style of point on the timeline every time we change the slide
  $('.our-history-slider-controllers .slide-controller').click(function(){
    var timeline_point = $('.our-history-slider').find('.slick-active').attr('data-name');
    $('.timeline').find('.active').removeClass('active');
    $('.timeline').find('.' + timeline_point).addClass('active');
  })
  
});
