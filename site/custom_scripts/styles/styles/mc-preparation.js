$(document).ready(function(){
  var slideIndex;
  var slideLeft;
  var slideCount;
  var slideMax;
  var xDown = null;
  var yDown = null;
  
  calcSlides();
  
  document.addEventListener('touchstart', handleTouchStart, false);        
  document.addEventListener('touchmove', handleTouchMove, false);

  $(window).resize(function() {
    calcSlides();
    $('.slides').removeClass("slider-transition");
    $('.slides').removeClass("slider-transition-1");
    $('.slides').removeClass("slider-transition-2");
    $('.slides').removeClass("slider-transition-3");
    $('.slides').removeClass("slider-transition-4");
    $('.slides').css('left', '0');
  });
  
  $('.start-here').click(function() {
    $('html, body').animate({scrollTop: $(".prep-programs").offset().top}, 1000);
  });

  $('.prev').on('click', function(){
    programPrev();
  })

  $('.next').on('click', function(){
    programNext();
  })
  
  $(".slides").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
    $('.slides').removeClass("slider-transition");
    $('.slides').removeClass("slider-transition-1");
    $('.slides').removeClass("slider-transition-2");
    $('.slides').removeClass("slider-transition-3");
    $('.slides').removeClass("slider-transition-4");
  });  
  
  $('.slide-circle').click(function() {
    var id = $(this).attr('data-id');
    var contentId = '#slide-' +  id + '-content';
    var height = $(contentId).height();
    $(contentId).addClass('open');
    $(contentId).css("overflow", "hidden");
    $(contentId).height(0);
    $(contentId).show();
    $(contentId).addClass("content-transition");
    $(contentId).height(height);
    
    var height = $('#slider-main').height();
    $('#slider-main').removeClass('open');
    $('#slider-main').css("overflow", "hidden");
    $('#slider-main').height(height);
    $('#slider-main').addClass("content-transition");
    $('#slider-main').height(0);
  });

  $("#slider-main").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
    if ($(this).hasClass('open')) {
    } else {
      $('#slider-main').hide();
    }
    $('#slider-main').removeClass("content-transition");
    $('#slider-main').height('');
    $('#slider-main').css("overflow", "");
  });

  $(".slide-content").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
    if ($(this).hasClass('open')) {
    } else {
      $(this).hide();
    }
    $(this).removeClass("content-transition");
    $(this).height('');
    $(this).css("overflow", "");
  });
  
  $('.close-slide-button').click(function() {
    var height = $('#slider-main').height();
    $('#slider-main').addClass('open');
    $('#slider-main').css("overflow", "hidden");
    $('#slider-main').height(0);
    $('#slider-main').show();
    $('#slider-main').addClass("content-transition");
    $('#slider-main').height(height);
    
    var id = $(this).attr('data-id');
    var contentId = '#slide-' +  id + '-content';
    var height = $(contentId).height();
    $(contentId).removeClass('open');
    $(contentId).css("overflow", "hidden");
    $(contentId).height(height);
    $(contentId).addClass("content-transition");
    $(contentId).height(0);
  });
  
  $('#internship-tab').click(function() {
    showTab(this, '#internship');
  });

  $('#service-learning-tab').click(function() {
    showTab(this, '#service-learning');
  });

  $('#off-campus-programs-tab').click(function() {
    showTab(this, '#off-campus-programs');
  });

  $('#leadership-tab').click(function() {
    showTab(this, '#leadership');
  });
  
  $('#undergraduate-research-tab').click(function() {
    showTab(this, '#undergraduate-research');
  });

  function calcSlides() {
    slideIndex = 0;
    slideLeft = 0;
    slideCount = $('.slides-container').width() / 220;
   
    if ((8 % slideCount) == 0) {
      slideMax = 8 / slideCount;
    } else {
      slideMax = Math.ceil(8 / slideCount);
    }
    slideMax = slideMax - 1;
    $('.prev').css("visibility", "hidden");
    $('.next').css("visibility", "visible");
  }//calcSlides
  
  function moveSlides() {
    if (slideIndex == 0) {
      $('.prev').css("visibility", "hidden");
    } else {
      $('.prev').css("visibility", "visible");
    }
    if (slideIndex == slideMax) {
      $('.next').css("visibility", "hidden");
    } else {
      $('.next').css("visibility", "visible");
    }
    var left = slideLeft + 'px';
    $('.slides').addClass("slider-transition");
    $('.slides').addClass("slider-transition-" + slideCount);
    $('.slides').css('left', left);
  }//moveSlides
  
  function handleTouchStart(evt) {                                         
    xDown = evt.touches[0].clientX;                                      
    yDown = evt.touches[0].clientY;                                      
  }//handleTouchStart                                               

  function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if (Math.abs( xDiff ) > 50) {
        if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {//most significant
            if ( xDiff > 0 ) {
                //left swipe
                programNext();
            } else {
                //right swipe
                programPrev();
            }                       
        } else {
            if ( yDiff > 0 ) {
                //up swipe
            } else { 
                //down swipe
            }                                                                 
        }
        //reset values
        xDown = null;
        yDown = null; 
    }        
  }//handleTouchMove    
  
  function programPrev() {
    if (slideIndex == 0) {
      return;
    }
    if ($('.slides').hasClass('slider-transition')) {
      return;
    }
    slideIndex--;
    slideLeft = slideLeft + (slideCount * 220);
    moveSlides();
  }//programPrev

  function programNext() {
    if (slideIndex == slideMax) {
      return;
    }
    if ($('.slides').hasClass('slider-transition')) {
      return;
    }
    slideIndex++;
    slideLeft = slideLeft - (slideCount * 220);
    moveSlides();
  }//programNext
  
  function showTab(tab, id) {
    $('.learning-tab').removeClass('active');
    $('.learning-content').hide();
    $(id).show();
    $(tab).addClass('active');
    if (window.screen.width <= 768) {
      $('html, body').animate({scrollTop: $(id).offset().top}, 1000);
    }
  }//showTab
  
});
