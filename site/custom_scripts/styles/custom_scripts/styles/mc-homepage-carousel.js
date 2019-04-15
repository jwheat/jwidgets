$(document).ready(function(){
  var active = $('#mc-active').val();
  var cookie = getCookie('mc_student_type');
  console.log('cookie = ' + cookie);
  
  $('.show-undergrad').click(function(event) {
    $('.car2-sidebar').addClass("fadein");
    active = '.car2-undergrad';
    $(".car2-grad").addClass('inactive');
    $(".car2-undergrad").removeClass('inactive');
    $(".car2-sidebar-undergrad").show();
    $(".car2-sidebar-grad").hide();
    document.cookie = "mc_student_type=0; expires=Fri, 31 Dec 9999 23:59:59 GMT";
    showGrad(active);
  });

  $('.show-grad').click(function(event) {
    $('.car2-sidebar').addClass("fadein");
    active = '.car2-grad';
    $(".car2-grad").removeClass('inactive');
    $(".car2-undergrad").addClass('inactive');
    $(".car2-sidebar-undergrad").hide();
    $(".car2-sidebar-grad").show();
    document.cookie = "mc_student_type=1; expires=Fri, 31 Dec 9999 23:59:59 GMT";
    showGrad(active);
  });
  
  $('.car2-grad-button').click(function(event) {
    $('.car2-sidebar').removeClass("fadein");
    showGrad(active);
  });

  $('.car2-academics-button').click(function(event) {
    $('.car2-sidebar').removeClass("fadein");
    $(".carousel-2").addClass('inactive');
    $(".car2-academics").removeClass('inactive');
    reopen('#academics-slideout');
  });

  $('.car2-careers-button').click(function(event) {
    //$('.car2-slideout').removeClass("no-delay");
    $('.car2-sidebar').removeClass("fadein");
    $(".carousel-2").addClass('inactive');
    $(".car2-careers").removeClass('inactive');
    reopen('#careers-slideout');
  });

  $('.car2-abroad-button').click(function(event) {
    $('.car2-sidebar').removeClass("fadein");
    $(".carousel-2").addClass('inactive');
    $(".car2-abroad").removeClass('inactive');
    reopen('#abroad-slideout');
  });
  
  $('.car2-slideout').click(function(event) {
    $(this).removeClass("reopen");
    $(this).toggleClass("closed");
    $(this).addClass("no-delay");
    
    
    /*
    var reopen = $(this).hasClass("closed") == false;
    if (reopen) {
      $(this).attr("data-reopen", "1");
    } else {
      $(this).attr("data-reopen", "");
    }
    */
  });

  $('.car2-explore-button').click(function() {
    $('html, body').animate({scrollTop: $(".widget__homepage-seo").offset().top}, 1000);
  });   

}); 
  
  function reopen(id) {
    $('.car2-slideout').addClass("closed");
    $('.car2-slideout').removeClass("reopen");
    /*
    var reopen = $(id).attr("data-reopen") != "";
    if (reopen) {
      $(id).addClass("reopen");
      $(id).removeClass("closed");
    }
    */
  }//reopen

  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }//getCookie 

  function showGrad(active) {
    $(".carousel-2").addClass('inactive');
    $(active).removeClass('inactive');
    $('.car2-slideout').addClass("closed");
    $('.car2-slideout').removeClass("reopen");
  }//showGrad 
