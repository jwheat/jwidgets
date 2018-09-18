$(document).ready(function(){
  var faqItem = 1;

  // simulates receiving a cookie value to display the different versions of the page
  /* Cookies.set('mc_student_type', '2'); */ // => graduate version active and undergraduate hidden
  var pageVersion = Cookies.get('mc_student_type'); // => 'cookie value'

  console.log('page version: ' + pageVersion);
  if (pageVersion == 2){
    var stickyTop = $('.graduate-tabs').position().top;
  }
  else{
    var stickyTop = $('.undergraduate-tabs').position().top;
  }

  // initialize Blazy plugin
  var bLazy = new Blazy({
    selector: '.lazyload-img',
    successClass: 'loaded-img',
    success: function(element){
      $('.hero-section .loading-gif').remove();
      $('.hero-section').removeClass('loading-hero-img');
    }
  });

  checkTabs();

  $('.hero-section').parallax({
    naturalWidth: 1366,
    naturalHeight: 742
  });

  $(window).on('scroll', function () {
    checkTabs();
    checkSticky();
  });

  $('input,textarea').focus(function(){
      $(this).data('placeholder',$(this).attr('placeholder'))
            .attr('placeholder','');
  }).blur(function(){
      $(this).attr('placeholder',$(this).data('placeholder'));
  });

  $(window).resize(function(){
    if (pageVersion == 2){
      $('.graduate-tabs').removeClass('tabs-sticky');
      stickyTop = $('.graduate-tabs').position().top;  
    }
    else{
      $('.undergraduate-tabs').removeClass('tabs-sticky');
      stickyTop = $('.undergraduate-tabs').position().top;
    }
    checkSticky();
  });

  $('.hero-btn').click(function(){
    if (pageVersion == 2){
      $('#graduate-students').fadeOut(function(){
        $('#undergraduate-students').fadeIn(function(){
          jQuery(window).trigger('resize').trigger('scroll');
          bLazy.revalidate();
        });
      });

      stickyTop = $('.undergraduate-tabs').position().top;
      pageVersion = 1;
    }
    else{
      $('#undergraduate-students').fadeOut(function(){
        $('#graduate-students').fadeIn(function(){
          jQuery(window).trigger('resize').trigger('scroll');
          bLazy.revalidate();
        });
      });

      stickyTop = $('.graduate-tabs').position().top;
      pageVersion = 2;
    }
  });

  /*  ====== why messiah section events ====== */
  $('.open-overlay-1').click(function() {
    $('.why-messiah-overlay').hide();
    $('.why-messiah-info').hide();
    $('#overlay-1').show(); 
  });

  $('.open-overlay-2').click(function() {
    $('.why-messiah-overlay').hide();
    $('.why-messiah-info').hide();
    $('#overlay-2').show();
  });

  $('.open-overlay-3').click(function() {
    $('.why-messiah-overlay').hide();
    $('.why-messiah-info').hide();
    $('#overlay-3').show();
  });

  $('.open-overlay-4').click(function() {
    $('.why-messiah-overlay').hide();
    $('.why-messiah-info').hide();
    $('#overlay-4').show();
  });

  $('.why-messiah-overlay .close-button').click(function() {
    $('.why-messiah-info').show();
    $('.why-messiah-overlay').hide();
  });

   /*  ====== academic opportunities events ====== */
   $('.ao-overlay-1').click(function() {
    $('.academic-opportunities-overlay').hide();
    $('.ao-info').hide();
    $('#ao-overlay-1').show(); 
  });

  $('.ao-overlay-2').click(function() {
    $('.academic-opportunities-overlay').hide();
    $('.ao-info').hide();
    $('#ao-overlay-2').show();
  });

  $('.ao-overlay-3').click(function() {
    $('.academic-opportunities-overlay').hide();
    $('.ao-info').hide();
    $('#ao-overlay-3').show();
  });

  $('.ao-overlay-4').click(function() {
    $('.academic-opportunities-overlay').hide();
    $('.ao-info').hide();
    $('#ao-overlay-4').show();
  });

  $('.ao-overlay-5').click(function() {
    $('.academic-opportunities-overlay').hide();
    $('.ao-info').hide();
    $('#ao-overlay-5').show();
  });

  $('.ao-overlay-6').click(function() {
    $('.academic-opportunities-overlay').hide();
    $('.ao-info').hide();
    $('#ao-overlay-6').show();
  });

  $('.academic-opportunities-overlay .close-button').click(function() {
    $('.ao-info').show();
    $('.academic-opportunities-overlay').hide();
  });

  /*  ====== scroll to sections ====== */
  //graduate
  $('.overview-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#overview").offset().top + 80}, 1000);
  });

  $('.our-programs-item').click(function() {
    $('our-programs-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#our-programs").offset().top + 80}, 1000);
  });

  $('.why-messiah-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#why-messiah").offset().top + 80}, 1000);
  });

  $('.graduate-school-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#graduate-school").offset().top + 80}, 1000);
  });

  // undergraduate
  $('.what-do-you-want-to-study-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#what-do-you-want-to-study").offset().top + 80}, 1000);
  });

  $('.accelerated-options-item').click(function() {
    $('our-programs-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#accelerated-options").offset().top + 80}, 1000);
  });

  $('.academics-opportunities-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#academics-opportunities").offset().top + 80}, 1000);
  });

  $('.academic-support-item').click(function() {
    $('.tab-item').removeClass('active');
    $(this).addClass('active');
    $('html, body').animate({scrollTop: $("#academic-support").offset().top + 80}, 1000);
  });

  $('.explore-button').click(function() {
    $('.tab-item').removeClass('active');
    if (pageVersion == 2)
      $('html, body').animate({scrollTop: $("#overview").offset().top + 80}, 1000);
    else
      $('html, body').animate({scrollTop: $("#overview-2").offset().top + 80}, 1000);
  });
  /*  ====== END scroll to sections ====== */

  $('#overview-of-academics-video').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=YSuNrHC6Xtc');
  });

  $('#career-video-play').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=noqir6a6BRg');
  });

  $('#sustainability-video-play').click(function() {
		$('body').addClass('stop-scrolling');
		var lightbox = lity('https://www.youtube.com/watch?v=UQXD0jrQjkw');
  });
  
	$(document).on('lity:close', function(event, instance) {
		$('body').removeClass('stop-scrolling');
  });	
  
  // show or hide sticky navigation bar at the top of the page
  function checkSticky() {

    var pos = $(window).scrollTop();
    if (pageVersion == 2){
      if (pos > stickyTop) {
        $('.graduate-tabs').addClass('tabs-sticky');
        $(window).trigger('resize.px.parallax');
      } else {
        $('.graduate-tabs').removeClass('tabs-sticky');
      }
    }else {
      if (pos > stickyTop) {
        $('.undergraduate-tabs').addClass('tabs-sticky');
        $(window).trigger('resize.px.parallax');
      } else {
        $('.undergraduate-tabs').removeClass('tabs-sticky');
      }
    }

  }//checkSticky

  function checkTabs() {
    if(pageVersion == 2){

      if (isElementInView('#section-circle-flip')) {
        $('#section-circle-flip .circle-flip').addClass('inView');  
      }
  
      if (isElementInView('#our-programs h2')) {
        $('.our-programs-col-left').addClass('panel-slide-in');
        $('.our-programs-col-right').addClass('panel-slide-in'); 
      }
  
      if (showInView('#overview', '.overview-item')) {
        if (showInView('#our-programs', '.our-programs-item')) {         
          if (showInView('#why-messiah', '.why-messiah-item')) {          
            if (showInView('#graduate-school', '.graduate-school-item')) {                                                
            }                                            
          }                                       
        }
      }

    }
    else{
      if (isElementInView('#circle-flip')) {
        $('#circle-flip .circle-flip').addClass('inView');  
      }

      if (isElementInView('#accelerated-options h2')) {
        $('.square-panel-section-col-left').addClass('panel-slide-in');
        $('.square-panel-section-col-right').addClass('panel-slide-in'); 
      }

      if (showInView('#overview-2', '')){
        if (showInView('#what-do-you-want-to-study', '.what-do-you-want-to-study-item')) {
          if (showInView('#accelerated-options', '.accelerated-options-item')) {         
            if (showInView('#academics-opportunities', '.academics-opportunities-item')) {          
              if (showInView('#academic-support', '.academic-support-item')) {                                                
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
      if(element == '#overview-2'){
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
  
});
