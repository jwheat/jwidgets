$(document).ready(function(){
  var stickyTop = $('.student-life-tabs').position().top;
  var faqItem = 1;
  //CHANGE--
  var slideId = 1;
  //--CHANGE
  
  checkTabs();

  // initialize Blazy plugin
  var bLazy = new Blazy({
    selector: '.lazyload-img',
    successClass: 'loaded-img',
    success: function(element){
      $('.fs-bg .loading-gif').remove();
    }
  });

  $('.fs-bg').parallax({
    naturalWidth: 600,
    naturalHeight: 400
  });

  $(window).on('scroll', function () {
    checkTabs();
    checkSticky();
  });

  $(window).resize(function(){
    $('.student-life-tabs').removeClass('sl-sticky');
    stickyTop = $('.student-life-tabs').position().top; 
    checkSticky();
  });   
  
  $('.explore-button').click(function() {
    $('.tab-item').removeClass('active');
    $('.life-on-campus-item').addClass('active');
    $('html, body').animate({scrollTop: $("#life-on-campus").offset().top}, 1000);
  });

  $('.life-on-campus-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#life-on-campus").offset().top}, 1000);
  });

  $('.welcome-home-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#welcome-home").offset().top}, 1000);
  });

  $('.resident-life-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#resident-life").offset().top}, 1000);
  });

  $('.diversity-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#diversity").offset().top}, 1000);
  });

  $('.support-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#support").offset().top}, 1000);
  });

  $('.coll-img').click(function() {
    //$('#lightbox-photo-grid').show();
  });
  
  $('#life-on-campus-video').click(function() {
    $('body').addClass('stop-scrolling');
    var lightbox = lity('https://www.youtube.com/watch?v=0EG-VDD9R-k');
  });

  $('.coll-large').click(function() {
    $('body').addClass('stop-scrolling');
    var lightbox = lity('https://www.youtube.com/watch?v=ID8DEz9S2I8');
  });
  
  $('#lightbox-photo-grid .close-button').click(function() {
    $('.lightbox').hide();
  });
  
  $('.fan-experience').click(function() {
    $('.sl-wtd-overlay').hide();
    $('.sl-wtd-info').hide();
    $('#fan-experience-overlay').show();
  });

  $('.sport-related-activities').click(function() {
    $('.sl-wtd-overlay').hide();
    $('.sl-wtd-info').hide();
    $('#sport-related-activities-overlay').show();
  });

  $('.clubs-and-organizations').click(function() {
    $('.sl-wtd-overlay').hide();
    $('.sl-wtd-info').hide();
    $('#clubs-and-organizations-overlay').show();
  });
  
  $('.campus-traditions').click(function() {
    $('.sl-wtd-overlay').hide();
    $('.sl-wtd-info').hide();
    $('#campus-traditions-overlay').show();
  });

  $('.on-campus').click(function() {
    $('.sl-wtd-overlay').hide();
    $('.sl-wtd-info').hide();
    $('#on-campus-overlay').show();
  });

  $('.off-campus-adventures').click(function() {
    $('.sl-wtd-overlay').hide();
    $('.sl-wtd-info').hide();
    $('#off-campus-adventures-overlay').show();
  });

  $('.sl-wtd-overlay .close-button').click(function() {
    $('.sl-wtd-info').show();
    $('.sl-wtd-overlay').hide();
  });

  $('#bittner-video').click(function() {
    $('body').addClass('stop-scrolling');
    var lightbox = lity('//www.youtube.com/watch?v=wPgaK4IzVpw');
  });

  $('#naugle-video').click(function() {
    $('body').addClass('stop-scrolling');
    var lightbox = lity('//www.youtube.com/watch?v=anievPDbnoc');
  });

  $('#witmer-video').click(function() {
    $('body').addClass('stop-scrolling');
    var lightbox = lity('https://youtu.be/UCv8plJzIXA');
  });
  
  $(document).on('lity:close', function(event, instance) {
    $('body').removeClass('stop-scrolling');
  }); 
  //CHANGE--
  $('.sl-wtd-slide-nav-button').click(function() {
    slideId = $(this).attr('data-id');
    setCampusTraditionImage();
  });

  $('.slide-list li a').click(function() {
    slideId = $(this).attr('data-id');
    setCampusTraditionImage();
  });
  
  $('.sl-wtd-nav-left').click(function() {
     slideId--;
     if (slideId == 0) {
       slideId = 7;
     }
    setCampusTraditionImage();
  });
   
  $('.sl-wtd-nav-right').click(function() {
     slideId++;
     if (slideId == 8) {
       slideId = 1;
     }
    setCampusTraditionImage();
  });
  //--CHANGE
  // $('.sl-slider-nav-left').click(function() {
  //   $('#sl-faq-item-' + faqItem).hide();
  //   faqItem--;
  //   if (faqItem == 0) {
  //     faqItem = 4;
  //   }
  //   $('#sl-faq-item-' + faqItem).show();
  // });

  // $('.sl-slider-nav-right').click(function() {
  //   $('#sl-faq-item-' + faqItem).hide();
  //   faqItem++;
  //   if (faqItem == 4) {
  //     faqItem = 1;
  //   }
  //   $('#sl-faq-item-' + faqItem).show();
  // });

  function checkSticky() {
    var pos = $(window).scrollTop();
    if (pos > stickyTop) {
      $('.student-life-tabs').addClass('sl-sticky');
      $(window).trigger('resize.px.parallax');
    } else {
      $('.student-life-tabs').removeClass('sl-sticky');
    }
  }//checkSticky

  function checkTabs() {
    if (isElementInView('.sl-left-col')) {
      $('.sl-left-col').addClass('sl-slide-in');
    }
    if (isElementInView('.sl-right-col')) {
      $('.sl-right-col').addClass('sl-slide-in');
    }
    if (isElementInView('.sl-dining')) {
      $('.sl-left-col-dining').addClass('sl-slide-in'); 
    }
    if (isElementInView('.sl-dining')) {
      $('.sl-right-col-dining').addClass('sl-slide-in');
    }
    
    if (isElementInView('#sl-circle-flip')) {
      $('.sl-circle-flip').addClass('inView');
    }

    if (showInView('#support h2', '.support-item')) {
      if (showInView('#diversity h2', '.diversity-item')) {
        if (showInView('#resident-life h2', '.resident-life-item')) {
          if (showInView('#welcome-home h2', '.welcome-home-item')) {
            if (showInView('#life-on-campus h2', '.life-on-campus-item')) {
              if (showInView('#life-on-campus', '.life-on-campus-item')) {
                if (showInView('#what-to-do', '.life-on-campus-item')) {
                  if (showInView('#welcome-home', '.welcome-home-item')) {
                    if (showInView('#resident-life', '.resident-life-item')) {
                      if (showInView('#faq', '.resident-life-item')) {
                        if (showInView('#dining', '.resident-life-item')) {
                          if (showInView('#diversity', '.diversity-item')) {
                            if (showInView('#support', '.support-item')) {
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
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

// slick slider
  $('#sl-faq-items').slick({
    infinite: true,
  });
  //CHANGE--
  function setCampusTraditionImage() {
    $('.slide-list li a').removeClass('active');
    $('.sl-wtd-slide img').hide();
    $('.slide-nav-text').hide();
    $('#campus-tradition-slide-' + slideId).show()
    $('.sl-wtd-slide-nav-button').removeClass('active');
    $('#slide-nav-button-' + slideId).addClass('active');
    $('#slide-item-' + slideId).addClass('active');
    $('#slide-nav-text-' + slideId).show();
  }//showCampusTraditionImage
  //--CHANGE
});