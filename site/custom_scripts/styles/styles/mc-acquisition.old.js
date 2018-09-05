var mcAcquisition = new Object();
$(document).ready(function(){
  mcAcquisition.writeLog = true;

  acquisitionLog('start');

  mcAcquisition.cookieSource = acquisitionCookie('messiah_utm_source');
  mcAcquisition.cookieMedium = acquisitionCookie('messiah_utm_medium');
  mcAcquisition.cookieCampaign = acquisitionCookie('messiah_utm_campaign');
  mcAcquisition.cookieContent = acquisitionCookie('messiah_utm_content');

  acquisitionLog('cookies');
  acquisitionLog(mcAcquisition.cookieSource);
  acquisitionLog(mcAcquisition.cookieMedium);
  acquisitionLog(mcAcquisition.cookieCampaign);
  acquisitionLog(mcAcquisition.cookieContent);

  //mcAcquisition.timer = setInterval(acquisitionTimerEvent, 500);
  acquisitionLog('set timeout');
  setTimeout(acquisitionTimerEvent, 500);

  function acquisitionCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  };//acquisitionCookie

  function acquisitionSetField(elementId, value) {
    var result = false;
    var element =  document.getElementById(elementId);
    if (typeof(element) != 'undefined' && element != null) {
      acquisitionLog(elementId + ' exists!');
      acquisitionLog('value = ' + value);
      var old = document.getElementById(elementId).value;
      acquisitionLog('old = ' + old);
      document.getElementById(elementId).value = value;
      value = document.getElementById(elementId).value;
      acquisitionLog('new = ' + value);
      result = true;
    } else {
      acquisitionLog(elementId + ' not found!');
    }
    return result;
  };//AcquisitionSetField

  function acquisitionLog(message) {
    if (mcAcquisition.writeLog) {
      console.log('[acquisition] ' + message);
    }
  };//acquisitionLog

  function acquisitionTimerEvent() {
    var restart = true;
    acquisitionLog('timer event');
    
    try {
      //https://www.messiah.edu/grad-rfi
      acquisitionSetField('form_question_c035c2d9-a01c-4d98-81ff-2c6a73c4ecbf', window.location.href);
      acquisitionSetField('form_50bd5f18-41bc-4796-bc49-753db517334d', mcAcquisition.cookieSource);
      acquisitionSetField('form_69d8f837-5a8e-4fe7-9e1c-fa10bb8d0271', mcAcquisition.cookieCampaign);
      acquisitionSetField('form_8e3c253b-d61a-48f3-870c-4e9af158e83b', mcAcquisition.cookieContent);
      var result = acquisitionSetField('form_a508f1c3-ec5d-4630-8087-a8e8ad69a1f9', mcAcquisition.cookieMedium);
      if (result) {
        acquisitionLog('clear timeout');
        restart = false;
        //clearInterval(mcAcquisition.timer);
        document.getElementById("form_14cd4132-281d-4739-ae56-ee0719bae625").placeholder = "First Name*";
        document.getElementById("form_5a6e67af-4878-413f-9588-5104e94ded3b").placeholder = "Last Name*";
        document.getElementById("form_a16a8730-c037-4491-a01d-d989dcd4af17").placeholder = "Email*";
        document.getElementById("form_9d8a2ea2-b75b-4350-b6a1-b46f2f717188").placeholder = "Verify Email Address*";
        document.getElementById("form_75df7d7c-c082-4941-a305-7ad8acd9bf7c").placeholder = "Phone Number";
      }

      //https://www.messiah.edu/request-info
      acquisitionSetField('form_94cd53af-6cc9-41ad-8bb1-f2f3168edf7b', mcAcquisition.cookieSource);
      acquisitionSetField('form_c76775fa-1af9-4f65-9b8f-39a2c8ebe241', mcAcquisition.cookieCampaign);
      acquisitionSetField('form_d78d962b-1335-4bb5-913b-d492549dd0cc', mcAcquisition.cookieContent);
      var result = acquisitionSetField('form_3a5b4723-38b9-451b-af0d-75aa908aaca0', mcAcquisition.cookieMedium);
      if (result) {
        acquisitionLog('clear timeout');
        restart = false;
        //clearInterval(mcAcquisition.timer);
      }
    } catch(err) {
      console.log(err);
    }

    if (restart) {
      acquisitionLog('reset timeout');
      setTimeout(acquisitionTimerEvent, 500);
    }
  }; //acquisitionTimerEvent

});
