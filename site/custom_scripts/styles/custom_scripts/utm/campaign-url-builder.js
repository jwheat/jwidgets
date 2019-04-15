$(document).ready(function(){
  
  $(".input-field").keyup(function() {
    setUrl();
  });

  $(".check-field").click(function() {
    setUrl();
  });

  $(".select-field").click(function() {
    setUrl();
  });

  function setUrl() {
    var websiteUrl = $("#website_url").val();
    var sourceUrl = $("#utm_source").val();
    var mediumUrl = $("#utm_medium").val();
    var campaignUrl = $("#utm_campaign").val();
    var termUrl = $("#utm_term").val();
    var contentUrl = $("#utm_content").val();
    
    var utmCheck = $("#utm_check").is(":checked");
    var utmsCheck = $("#utms_check").is(":checked");

    var campaignCta = $("#campaign-cta").val();
    var studentType = $("#student-type").val();
    
    var resultUrl = '';
    if (websiteUrl != '') {
      resultUrl = websiteUrl + '?'
    }
    var arr = new Array();
    if (sourceUrl != '') {
      if (utmCheck) {
        arr.push('utm_source=' + encodeURIComponent(sourceUrl));
      }
      if (utmsCheck) {
        arr.push('utms_source=' + encodeURIComponent(sourceUrl));
      }
    }
    if (mediumUrl != '') {
      if (utmCheck) {
        arr.push('utm_medium=' + encodeURIComponent(mediumUrl));
      }
      if (utmsCheck) {
        arr.push('utms_medium=' + encodeURIComponent(mediumUrl));
      }
    }
    if (campaignUrl != '') {
      if (utmCheck) {
        arr.push('utm_campaign=' + encodeURIComponent(campaignUrl));
      }
      if (utmsCheck) {
        arr.push('utms_campaign=' + encodeURIComponent(campaignUrl));
      }
    }
    if (termUrl != '') {
      if (utmCheck) {
        arr.push('utm_term=' + encodeURIComponent(termUrl));
      }
      if (utmsCheck) {
        arr.push('utms_term=' + encodeURIComponent(termUrl));
      }
    }
    if (contentUrl != '') {
      if (utmCheck) {
        arr.push('utm_content=' + encodeURIComponent(contentUrl));
      }
      if (utmsCheck) {
        arr.push('utms_content=' + encodeURIComponent(contentUrl));
      }
    }
    if (campaignCta != '') {
      arr.push('cta=' + encodeURIComponent(campaignCta));
    }
    if (studentType != '') {
      arr.push('type=' + encodeURIComponent(studentType));
    }
		
    resultUrl = resultUrl + arr.join('&');
    $("#result-url").val(resultUrl);
  }//setUrl
  
});
