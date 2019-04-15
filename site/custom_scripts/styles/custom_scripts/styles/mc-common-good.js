$(document).ready(function(){

  var stickyTop = $('.menu-tabs').position().top;

  checkTabs();
  
    // initialize Blazy plugin
    var bLazy = new Blazy({
      selector: '.lazyload-img',
      successClass: 'loaded-img',
      success: function(element){
        $('.header-bg').removeClass('loading-hero-img');
        $('.header-bg .loading-gif').remove();
        setTimeout(function(){
          $('.cg-video .video-play').addClass('active');
        }, 400);
      }
    });
  
    $('.header-bg').parallax({
      naturalWidth: 600,
      naturalHeight: 400
    });

    $(window).on('scroll', function () {
      checkTabs();
      checkSticky();
    });

    $(window).resize(function(){
      $('.menu-tabs').removeClass('menu-sticky');
      stickyTop = $('.menu-tabs').position().top;
      checkSticky();
    });

    // show or hide sticky navigation bar at the top of the page
    function checkSticky() {

      var pos = $(window).scrollTop();
      if (pos > stickyTop) {
        $('.menu-tabs').addClass('menu-sticky');
        $(window).trigger('resize.px.parallax');
      } else {
        $('.menu-tabs').removeClass('menu-sticky');
      }
    }//checkSticky

    function checkTabs() {

      if (isElementInView('.eraci-panels')) {
        $('#section-2 .left-panels').addClass('slide-in');
        $('#section-2 .right-panels').addClass('slide-in');
      }
    
      if (isElementInView('#circle-flip')) {
        $('#circle-flip .circle-flip').addClass('inView');
      }

      if (isElementInView('#section-3 .top-row')) {
        $('#section-3 .blue-circle').addClass('inView');
        $('#section-3 .left-col-text-wrapper').addClass('inView');
        $('#section-3 .right-col-text-wrapper').addClass('inView');
        $('#section-3 .main-building-graphic').addClass('inView');
      }
      
  
      if (showInView('#section-2', '.cavs-item')) {
        if (showInView('#section-3', '.ew-item')) {
          if (showInView('#section-4', '.eraci-item')) {         
            if (showInView('#section-5', '.es-item')) {
              if (showInView('#section-1', '.yais-item')) {                                                   
              }                                                 
            }                                       
          }
        } 
      }   
      
    }//checkTabs
    
    function showInView(element, item) {
      var res = true;
      if (isElementInView(element, false)) {
        console.log(element);
        if(element === '#section-1'){
          $('.tab-item').removeClass('active');
        }
        else{
          $('.tab-item').removeClass('active');
          $(item).addClass('active');
        }
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

    /*  ====== scroll to sections ====== */
    $('.cavs-item').click(function() {
      $('.tab-item').removeClass('active');
      $(this).addClass('active');
      $('html, body').animate({scrollTop: $("#section-2").offset().top}, 1000);
    });

    $('.ew-item').click(function() {
      $('.tab-item').removeClass('active');
      $('.overview-of-about-item').addClass('active');
      $('html, body').animate({scrollTop: $("#section-3").offset().top}, 1000);
    });

    $('.eraci-item').click(function() {
      $('.tab-item').removeClass('active');
      $(this).addClass('active');
      $('html, body').animate({scrollTop: $("#section-4").offset().top}, 1000);
    });

    $('.es-item').click(function() {
      $('.tab-item').removeClass('active');
      $(this).addClass('active');
      $('html, body').animate({scrollTop: $("#section-5").offset().top}, 1000);
    });

    $('#cg-video').click(function() {
      $('body').addClass('stop-scrolling');
      var lightbox = lity('https://youtu.be/rxkampUuMMI');
    });

    $('#cg-video-mobile').click(function() {
      $('body').addClass('stop-scrolling');
      var lightbox = lity('https://youtu.be/rxkampUuMMI');
    });

});