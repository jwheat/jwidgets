$(document).ready(function(){

  var slide;

  $('.coll-img').click(function() {
      console.log("entered!");
	$('body').addClass('stop-scrolling');
	slide = parseInt($(this).attr('data-slide'));
    showSlide(true);
  });

  $('#lightbox-photo-grid .lb-slider-nav-left').click(function() {
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

  $('#lightbox-photo-grid .lb-slider-nav-right').click(function() {
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

  $('.close-button').click(function() {
    $('body').removeClass('stop-scrolling');
    $('.lb-s7-slide').removeClass('visible');
    $('#lightbox-photo-grid').removeClass('visible');
    $('.lightbox').delay(500).hide(0);
    $('.lb-s7-slide').delay(500).show(0);
  });

  function showSlide(animate)
  {
    if (slide == '3') {
        var lightbox = lity('//www.youtube.com/watch?v=yZ5C9jmlrlQ');
    } else {
        $('#lightbox-photo-grid').show();
        $('.lb-s7-slide').hide();
        $('.slide-' + slide).show();
        if (animate) {
            $('.lb-s7-slide').addClass('visible');
            $('#lightbox-photo-grid').addClass('visible');
        }
    }
  }//showSlide

});