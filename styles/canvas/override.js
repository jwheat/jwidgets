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
  if(window.location.pathname.search('login')){
    var sp = $('#login_form label[for=pseudonym_session_unique_id]>span');

    sp.text('Username');
  }

	$('#footer-links').append("<span> | <a href='http://messiah.edu'>Messiah College</a></span>");

	//$('.crosslist_link').addClass('messiah_crosslist_link');
	//$('.messiah_crosslist_link').removeClass('messiah_crosslist_link');
	//$('.messiah_crosslist_link').attr('href','http://apps3.messiah.edu/canvas/index.php');

    if( $('.crosslist_link')[0] ) {
        $('.crosslist_link').hide();
        $('#right-side').append('<a class="btn button-sidebar-wide messiah_crosslist_link" href="https://apps3.messiah.edu/canvas/index.php"><i class="icon-off"></i> Combine Your Sections</a>');
    }
    $('.messiah_crosslist_link').attr('target','_blank');

    //$('#dashboard').prepend( "<div class='mc_alert'><h1>Ensemble is currently experiencing problems, ITS is working on the issue</h1></div>" );
});