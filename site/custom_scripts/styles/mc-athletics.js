$(document).ready(function(){
  var stickyTop = $('.athletics-tabs').position().top;
  var slide;

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

  $('.wild-crowd').slick({
      centerMode: true,
      centerPadding: '50px',
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

  $('.group-fitness').slick({    
    centerMode: true,
    centerPadding: '50px',
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            centerPadding: '40px',
            slidesToShow: 2,
            slidesToScroll: 2,
        }
        },
        {
        breakpoint: 480,
        settings: {
            centerPadding: '30px',
            slidesToShow: 1,
            slidesToScroll: 1,
        }
        }
    ]
  });

  checkTabs();

  $(window).on('scroll', function () {
    checkTabs();
    checkSticky();
  });

  $(window).resize(function(){
    $('.athletics-tabs').removeClass('ath-sticky');
    stickyTop = $('.athletics-tabs').position().top;
    checkSticky();
  });

  $('.explore-button').click(function() {
    $('.tab-item').removeClass('active');
    $('.sports-item').addClass('active');
    $('html, body').animate({scrollTop: $("#sports").offset().top}, 1000);
  });

  $('.sports-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#sports").offset().top}, 1000);
  });

  $('.physical-fitness-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#physical-fitness").offset().top}, 1000);
  });

  $('.game-day-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#game-day").offset().top}, 1000);
  });

  $('.sports-camps-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#sports-camps").offset().top}, 1000);
  });

  $('.sports-ministry-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#sports-ministry").offset().top}, 1000);
  });

  $('.change-ath').click(function() {
    var id = $(this).attr('data-id');
		$('body').addClass('stop-scrolling');
    $('#lightbox-links').show();
    $('.change-ath').removeClass('active');
    $('.ath-item-content').hide();
    switch(id) {
      case '1':
        $('#ath-item-1').addClass('active');
        $('.ath-item-content-1').show();
        break;
      case '2':
        $('#ath-item-2').addClass('active');
        $('.ath-item-content-2').show();
        break;
      case '3':
        $('#ath-item-3').addClass('active');
        $('.ath-item-content-3').show();
        break;
    }
  });

  $('.coll-img').click(function() {
		$('body').addClass('stop-scrolling');
		slide = parseInt($(this).attr('data-slide'));
    showSlide(true);
  });

  $('#lightbox-photo-grid .ath-slider-nav-left').click(function() {
    if (slide == 1) {
      slide = 10;
    } else {
      if (slide == 4) {
        slide = 2;
      } else {
        slide--;
      }
    }
    showSlide(false);
  });

  $('#lightbox-photo-grid .ath-slider-nav-right').click(function() {
    if (slide == 10) {
      slide = 1;
    } else {
      if (slide == 2) {
        slide = 4;
      } else {
        slide++;
      }
    }
    showSlide(false);
  });
  
	$(document).on('lity:close', function(event, instance) {
		$('body').removeClass('stop-scrolling');
	});

  $('.close-button').click(function() {
		$('body').removeClass('stop-scrolling');
    $('.lb-ath-slide').removeClass('visible');
    $('#lightbox-photo-grid').removeClass('visible');
    $('.lightbox').delay(500).hide(0);
    $('.lb-ath-slide').delay(500).show(0);
  });

  function checkSticky() {
    var pos = $(window).scrollTop();
    if (pos > stickyTop) {
      $('.athletics-tabs').addClass('ath-sticky');
      if (window.screen.width > 766) { 
        $('#sports').addClass('ath-sticky-sports');
      }
      $(window).trigger('resize.px.parallax');
    } else {
      $('.athletics-tabs').removeClass('ath-sticky');
      $('#sports').removeClass('ath-sticky-sports');
    }
  }//checkSticky

  function checkTabs() {
    if (isElementInView('.ath-left-col')) {
      $('.ath-left-col').addClass('ath-slide-in');
    }
    if (isElementInView('.ath-right-col')) {
      $('.ath-right-col').addClass('ath-slide-in');
    }
      
    if (showInView('#sports-ministry h2', '.sports-ministry-item')) {
      if (showInView('#sports-camps h2', '.sports-camps-item')) {
        if (showInView('#game-day h2', '.game-day-item')) {
          if (showInView('#physical-fitness h2', '.physical-fitness-item')) {
            if (showInView('#sports h2', '.sports-item')) {
              if (showInView('#sports', '.sports-item')) {
                if (showInView('#physical-fitness', '.physical-fitness-item')) {
                  if (showInView('#game-day', '.game-day-item')) {
                    if (showInView('#sports-camps', '.sports-camps-item')) {
                      if (showInView('#sports-ministry', '.sports-ministry-item')) {
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

  function showSlide(animate)
  {
		if (slide == '3') {
			var lightbox = lity('//www.youtube.com/watch?v=yZ5C9jmlrlQ');
		} else {
			$('#lightbox-photo-grid').show();
			$('.lb-ath-slide').hide();
      $('.slide-' + slide).show();
      if (animate) {
        $('.lb-ath-slide').addClass('visible');
        $('#lightbox-photo-grid').addClass('visible');
      }
        
		}
  }//showSlide
  
});
