/**
 * JQuery is the javascript library used in many places across canvas.
 *
 * This script describes how you would change the text in the email box on the Canvas
 * Login page.  By default, the text in the box is "Email" but this script will allow you
 * to change this.
 *
 * When implementing this script, replace <replacement> with the text you want to appear.
 * For example, you may want to have that text be "A-Number" rather than "email".
 *
 *
 *
 **/
$(document).ready(function(){

  $.fn.exists = function(){return this.length>0;}

  if(window.location.pathname.search('login')){
    var sp = $('#login_form label[for=pseudonym_session_unique_id]>span');

    sp.text('Username');
  }

	$('#footer-links').append(" <a href='http://messiah.edu'>Messiah College</a></span>");

	//$('.crosslist_link').addClass('messiah_crosslist_link');
	//$('.messiah_crosslist_link').removeClass('messiah_crosslist_link');
	//$('.messiah_crosslist_link').attr('href','http://apps3.messiah.edu/canvas/index.php');

/*    if( $('.crosslist_link')[0] ) {
        $('.crosslist_link').hide();
        $('#right-side').append('<a class="btn button-sidebar-wide messiah_crosslist_link" href="https://apps3.messiah.edu/canvas/index.php"><i class="icon-off"></i> Combine Your Sections</a>');
    }

    if ( $('.reset_course_content_button').exists() ) {
        //$('.reset_course_content_button').arrt('id','reset_course_content_button');

        $('#right-side').prepend('<a class="btn button-sidebar-wide messiah_crosslist_link" href="https://apps3.messiah.edu/canvas/index.php"><i class="icon-off"></i> Combine Your Sections</a>');
        //$('#right-side-wrapper').prepend('<a class="btn button-sidebar-wide messiah_crosslist_link" href="https://apps3.messiah.edu/canvas/index.php"><i class="icon-off"></i> Combine Your Sections</a>');
    
    }
*/

   /* if ( $('.reset_course_content_button')[0] ) {
        //$('.reset_course_content_button').arrt('id','reset_course_content_button');

        $('#right-side').prepend('<a class="btn button-sidebar-wide messiah_crosslist_link" href="https://apps3.messiah.edu/canvas/index.php"><i class="icon-off"></i> Combine Your Sections</a>');
        //$('#right-side-wrapper').prepend('<a class="btn button-sidebar-wide messiah_crosslist_link" href="https://apps3.messiah.edu/canvas/index.php"><i class="icon-off"></i> Combine Your Sections</a>');
    
    }
  */
  
   // $('.messiah_crosslist_link').attr('target','_blank');

    // Remove Canvas Ticket option
    $("#help-dialog-options li").eq(2).remove();

    //$('#dashboard').prepend( "<div class='mc_alert'><h1>Ensemble is currently experiencing problems, ITS is working on the issue</h1></div>" );




  console.log("CANVABADGES: Loaded!");
  // NOTE: if pasting this code into another script, you'll need to manually change the
  // next line. Instead of assigning the value null, you need to assign the value of
  // the Canvabadges domain, i.e. "https://www.canvabadges.org". If you have a custom
  // domain configured then it'll be something like "https://www.canvabadges.org/_my_site"
  // instead.
  
  var protocol_and_host = "https://www.canvabadges.org";
  if(!protocol_and_host) {
    var $scripts = $("script");
    $("script").each(function() {
      var src = $(this).attr('src');
      if(src && src.match(/canvas_profile_badges/)) {
        var splits = src.split(/\//);
        protocol_and_host = splits[0] + "//" + splits[2];
      }
      var prefix = src && src.match(/\?path_prefix=\/(\w+)/);
      if(prefix && prefix[1]) {
        protocol_and_host = protocol_and_host + "/" + prefix[1];
      }
    });
  }
  if(!protocol_and_host) {
    console.log("CANVABADGES: Couldn't find a valid protocol and host. Canvabadges will not appear on profile pages until this is fixed.");
  }
  var match = location.href.match(/\/(users|about)\/(\d+)$/);
  if(match && protocol_and_host) {
    console.log("CANVABADGES: This page shows badges! Loading...");
    var user_id = match[2];
    var domain = location.host;
    var url = protocol_and_host + "/api/v1/badges/public/" + user_id + "/" + encodeURIComponent(domain) + ".json";
    $.ajax({
      type: 'GET',
      dataType: 'jsonp',
      url: url,
      success: function(data) {
        console.log("CANVABADGES: Data retrieved!");
        if(data.objects && data.objects.length > 0) {
          console.log("CANVABADGES: Badges found! Adding to the page...");
          var $box = $("<div/>", {style: 'margin-bottom: 20px;'});
          $box.append("<h2 class='border border-b'>Badges</h2>");
          for(idx in data.objects) {
            var badge = data.objects[idx];
            var $badge = $("<div/>", {style: 'float: left;'});
            var link = protocol_and_host + "/badges/criteria/" + badge.config_id + "/" + badge.config_nonce + "?user=" + badge.nonce;
            var $a = $("<a/>", {href: link});
            $a.append($("<img/>", {src: badge.image_url, style: 'width: 72px; height: 72px; padding-right: 10px;'}));
            $badge.append($a);
            $box.append($badge);
          }
          $box.append($("<div/>", {style: 'clear: left'}));
          $("#edit_profile_form,fieldset#courses,.more_user_information + div").after($box);
        } else {
          console.log("CANVABADGES: No badges found for the user: " + user_id + " at " + domain);
        }
      },
      error: function(err) {
        console.log("CANVABADGES: Badges failed to load, API error response");
        console.log(err);
      },
      timeout: 5000
    });
  } else {
    console.log("CANVABADGES: This page doesn't show badges");
  }
});