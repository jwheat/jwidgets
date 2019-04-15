var MCCampaignCTA = function (writeLog) {
  this.writeLog = writeLog;
};

MCCampaignCTA.prototype.getUrlParameter = function(sParam) { 
  var sPageURL = decodeURIComponent(window.location.search.substring(1));
  var sURLVariables = sPageURL.split('&'); 
  var sParameterName;
  var i;
  var res;

  res = '';
  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] === sParam) {
      res = sParameterName[1] === undefined ? true : sParameterName[1];
      break;
    }
  }
  return res;
};//getUrlParameter
     
MCCampaignCTA.prototype.getCookie = function(cname) {
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
};//getCookie

MCCampaignCTA.prototype.setCookie = function(value) {
  document.cookie = value + "; expires=Fri, 31 Dec 9999 23:59:59 GMT";
};//setCookie

MCCampaignCTA.prototype.log = function(message) {
  if (this.writeLog) {
    console.log(message);
  }
}//log

MCCampaignCTA.prototype.startTimer = function(message) {
  this.timer = setInterval(this.timerEvent, 30 * 1000);
}//startTimer

MCCampaignCTA.prototype.timerEvent = function() {
  mcCampaign.log('timerEvent');
  clearInterval(mcCampaign.timer);
  $('.cta-overlay').show();
  mcCampaign.setCookie('messiah_campaign_lightbox=0');
}//timerEvent

var mcCampaign = new MCCampaignCTA(true);

$(document).ready(function(){
  var showBar  = false;
  var ctaParam = mcCampaign.getUrlParameter('cta');
  mcCampaign.log('cta param = ' + ctaParam);
  if (ctaParam == '1') {
    mcCampaign.setCookie('messiah_campaign_cta=1');
    showBar = true;
  } else {
    var ctaCookie = mcCampaign.getCookie('messiah_campaign_cta');
    mcCampaign.log('cta cookie = ' + ctaCookie);
    if (ctaCookie == '1') {
      showBar = true;
    }
  }
  
  if (showBar) {
    $("#mc-cta-sticky-template").tmpl('').appendTo("body");
    $("#mc-cta-overlay-template").tmpl('').appendTo("body");
    var lightboxCookie = mcCampaign.getCookie('messiah_campaign_lightbox');
    mcCampaign.log('lightbox cookie = ' + lightboxCookie);
    if (lightboxCookie != '0') {
      mcCampaign.startTimer();
    }
  }
  
  $(document).on('click', '.cta-close', function() {
    $('.cta-overlay').hide();
  });
});
  

