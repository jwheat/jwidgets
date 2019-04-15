$(function() {
    
  $('.open-overlay-1').click(function() {
    $('.section-6-overlay').hide();
    $('.section-s6-info').hide();
    $('#overlay-1').show(); 
  });

  $('.open-overlay-2').click(function() {
    $('.section-6-overlay').hide();
    $('.section-s6-info').hide();
    $('#overlay-2').show();
  });

  $('.open-overlay-3').click(function() {
    $('.section-6-overlay').hide();
    $('.section-s6-info').hide();
    $('#overlay-3').show();
  });

  $('.open-overlay-4').click(function() {
    $('.section-6-overlay').hide();
    $('.section-s6-info').hide();
    $('#overlay-4').show();
  });

  $('.open-overlay-5').click(function() {
    $('.section-6-overlay').hide();
    $('.section-s6-info').hide();
    $('#overlay-5').show(); 
  }); 

  $('.open-overlay-6').click(function() {
    $('.section-6-overlay').hide();
    $('.section-s6-info').hide();
    $('#overlay-6').show();
  });

  $('.section-6-overlay .close-button').click(function() {
    $('.section-s6-info').show();
    $('.section-6-overlay').hide();
  });
});