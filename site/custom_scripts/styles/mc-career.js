$(document).ready(function(){
  var ALL_ENTRY_ID = '1896';
  var loaded = false;
  var directoryData;
  var employmentRateAnimate = false;
  var employmentRateTimer;
  var employmentRateCurrent;
  var employmentRateMax;
  var industriesRepresentedAnimate = false;
  var industriesRepresentedTimer;
  var industriesRepresentedCurrent = new Array();
  var industriesRepresentedMax = new Array();
  var industriesRepresentedStep = 0;
  var industriesRepresentedMaxSteps = 100;
  var salaryRangeAnimate = false;
  var salaryRangeTimer;
  var salaryRangeCurrent = new Array();
  var salaryRangeMax = new Array();
  var salaryRangeStep = 0;
  var salaryRangeMaxSteps = 100;
  var graduateProfessionalTimers = new Array();
  var activeData;
  var departmentFilter = ALL_ENTRY_ID;
  var folder = $('#mc-folder').val();

  jQuery("#grad-rate-desc").fitText(1.4, { minFontSize: '18px', maxFontSize: '40px' });
 
  //var url = 'http://www.messiah.edu/a/cache/career-directory.json';
  var url = '//www.messiah.edu/a/cache/career-directory.json';
  $.ajax({
    url: url,
    dataType: 'jsonp',
    jsonpCallback: 'directory_data',
    jsonp: 'callback',
    success: function (data) {
      directoryData = data;
      var images = new Array()
      for (var i = 0; i < directoryData.length; i++) {
        var data = directoryData[i];
        data.selected = '';
        if (data.entry_id == ALL_ENTRY_ID) {
          data.selected = 'selected';
        }
        $("#department-template").tmpl(data).appendTo("#departments");
        
        //preload images
        var image = new Image();
        image.src = folder + 'img/career/fi-' + data.entry_id + '.png';
        images.push(image);
      }
      images.length = 0;
      filterData();
      $('#loading').hide();
      $('#loaded').show();
      loaded = true;
      checkAnimations();
      
      $('.logos').flexslider({
        controlNav: false,
        animation: "slide",
        animationLoop: false,
        itemWidth: 300,
        itemMargin: 5
      });
    },
    error: function(jqXHR, textStatus, errorThrown) { 
      console.log(textStatus);
      //alert(textStatus);
    }
  });
  
  $(window).on('scroll', function () {
    if (loaded) {
      checkAnimations();
    }
  });  

  $('.filter-text').click(function(event) {
    $(".filter-button").trigger('click');
  });
    
  $('.filter-button').click(function() {
    if ($(this).hasClass('open')) {
      $(this).removeClass('open');
      $(this).addClass('close');

      var height = $('.filters-open').height();
      $('.filters-open').css("overflow", "hidden");
      $('.filters-open').height(0);
      $('.filters-open').show();
      $('.filters-open').addClass("filters-transition");
      $('.filters-open').height(height);
    } else {
      $(this).removeClass('close');
      $(this).addClass('open');

      var height = $('.filters-open').height();
      $('.filters-open').css("overflow", "hidden");
      $('.filters-open').height(height);
      $('.filters-open').addClass("filters-transition");
      $('.filters-open').height(0);
    }
  });
  
  $(".filters-open").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
    if ($('.filter-button').hasClass('open')) {
      $('.filters-open').hide();
    }
    $('.filters-open').removeClass("filters-transition");
    $('.filters-open').height('');
    $('.filters-open').css("overflow", "");
  });  
  
  $(document).on('click', ".filter-data", function(event) {
    var filter = $(this).attr('data-filter');
    if (filter != departmentFilter) {
      departmentFilter = filter;
      $('#filter-department').show();
      $('#departments li').removeClass('selected');
      $(this).parent().addClass('selected');
    }
  });
  
  $('.start-here').click(function() {
    $('html, body').animate({scrollTop: $(".employment-rate").offset().top}, 1000);
  });
  
  $('.read-story').click(function() {
    var index = $(this).attr('data-index');    
    showPeekPreview(index);
  });

  $('#filter-department').click(function() {
    if (departmentFilter != '') {
      $('#filter-department').hide();
      filterData();
      checkAnimations();
      $('html, body').animate({scrollTop: $(".employment-rate").offset().top}, 1000);
    }
  });
  
  $(document).on('click', "#peek-close", function(event) {
    hidePeek();
  });
  
  $(document).on('click', "#peek-overlay", function(event) {
    hidePeek();
  });
    
  $(document).on('click', ".info-link", function(event) {
    showPeekPreview('4');
  });
    
  function filterData() {
    for (var i = 0; i < directoryData.length; i++) {
      var data = directoryData[i];
      if (data.entry_id == departmentFilter) {
        activeData = data;
        employmentRateAnimate = true;
        clearInterval(employmentRateTimer);
        $('#employment-rate').text('0%');
        employmentRateMax = parseInt(data.employment_rate);
        employmentRateCurrent = 0;
        $(".grad-students").empty();
        for (var j = 1; j <= 100; j++) {
          var employmentRateData = new Object();
          employmentRateData.index = j;
          if (j % 2 == 1) {
            employmentRateData.gender = 'grad-female';
          } else {
            employmentRateData.gender = 'grad-male';
          }
          $("#grad-students-template").tmpl(employmentRateData).appendTo(".grad-students");
        }

        if (departmentFilter == ALL_ENTRY_ID) {
          $(".grad-industries").show();
          industriesRepresentedAnimate = true;
          clearInterval(industriesRepresentedTimer);
          industriesRepresentedStep = 0;
          var industriesRepresented = data.industries_represented.split(',');
          industriesRepresentedCurrent.length = 0;
          industriesRepresentedMax.length = 0;
          for (var j = 1; j <= industriesRepresented.length; j++) {
            $('.bar-' + j).css("height", '0%');
            $('#graph-value-' + j).html(industriesRepresented[j - 1] + '%');
            industriesRepresentedCurrent.push(0);
            var value = industriesRepresented[j - 1] * 4;
            if (data.industries_graph_percent != '') {
              var divider = parseInt(data.industries_graph_percent) / 5;
              value = Math.round(value / divider);
            }
            industriesRepresentedMax.push(value);
          }
        } else {
          $(".grad-industries").hide();
        }

        for (var j = 0; j < graduateProfessionalTimers.length; j++) {
          var timer = graduateProfessionalTimers[j];
          $('#school-information-' + timer.data.id).text('0%');
          graduateProfessionalTimers[j].stop();
          graduateProfessionalTimers[j].data = null;
          graduateProfessionalTimers[j] = null;
        }
        graduateProfessionalTimers.length = 0;
        
        $("#grad-schools-attended").empty();
        if (departmentFilter == ALL_ENTRY_ID) {
          var graduateProfessionalSchoolInformation = data.graduate_professional_school_information.split(',');
          for (var j = 1; j <= graduateProfessionalSchoolInformation.length; j++) {
            $('#school-information-' + j).text('0%');
            var animateData = new Object();
            animateData.id = j;
            animateData.current = 0;
            animateData.max = graduateProfessionalSchoolInformation[j - 1];
            animateData.animate = animateData.max > 0;
            var timer = new MessiahTimer(40, graduateProfessionalTimerCallback, animateData);
            graduateProfessionalTimers.push(timer);
          }
          $(".grad-info").show();
          //$(".grad-info-alt").hide();
        } else {
          $('#grad-school-rate').text(data.grad_school_rate + '%');
          var gradSchoolsAttended = data.grad_schools_attended.split('|');
          for (var j = 0; j < gradSchoolsAttended.length; j++) {
            var gradSchoolsAttendedData = new Object();
            gradSchoolsAttendedData.name = gradSchoolsAttended[j];
            $("#grad-schools-attended-template").tmpl(gradSchoolsAttendedData).appendTo("#grad-schools-attended");
          }
          $(".grad-info").hide();
          //$(".grad-info-alt").show();
        }
        
        if (data.entry_id == ALL_ENTRY_ID) {
          $("#where-grads-work").removeClass("columns-3");
          $("#where-grads-work").addClass("columns-4");
          $(".grad-work-caption-all").show();
          $(".grad-work-caption-dep").hide();
        } else {
          $("#where-grads-work").removeClass("columns-4");
          $("#where-grads-work").addClass("columns-3");
          $(".grad-work-caption-dep").text('Here is a sample of what some of our 2018 ' + data.entry_title + ' grads are doing and where they work.');
          $(".grad-work-caption-all").hide();
          $(".grad-work-caption-dep").show();
        }
        $("#where-grads-work").empty();
        if (data.where_grads_work != '') {
          $(".grad-work").show();
          var whereGradsWork = data.where_grads_work.split('|');
          whereGradsWork.sort();
          for (var j = 0; j < whereGradsWork.length; j++) {
            var whereGradsWorkData = new Object();
            whereGradsWorkData.name = whereGradsWork[j];
            $("#where-grads-work-template").tmpl(whereGradsWorkData).appendTo("#where-grads-work");
          }
        } else {
          $(".grad-work").hide();
        }
        
        if (data.entry_id == ALL_ENTRY_ID) {
          salaryRangeAnimate = true;
          clearInterval(salaryRangeTimer);
          salaryRangeStep = 0;
          var salaryRange = data.salary_range.split(',');
          salaryRangeCurrent.length = 0;
          salaryRangeMax.length = 0;
          for (var j = 1; j <= salaryRange.length; j++) {
            $('#salary-range-' + j).css("height", '0%');
            $('#salary-range-' + j + '-value').text(salaryRange[j - 1] + '%');
            salaryRangeCurrent.push(0);
            var value = salaryRange[j - 1] * 2;
            salaryRangeMax.push(value);
          }

          $(".marketplace").show();
        } else {
          $(".marketplace").hide();
        }
        
        if (data.logo_1 != '') {
          $("#logo-1").attr("src", "http://www.messiah.edu/images/" + data.logo_1);
          $("#logo-2").attr("src", "http://www.messiah.edu/images/" + data.logo_2);
          $("#logo-3").attr("src", "http://www.messiah.edu/images/" + data.logo_3);
          $("#logo-4").attr("src", "http://www.messiah.edu/images/" + data.logo_4);
          $("#logo-5").attr("src", "http://www.messiah.edu/images/" + data.logo_5);
          $("#logo-6").attr("src", "http://www.messiah.edu/images/" + data.logo_6);
          $("#logo-7").attr("src", "http://www.messiah.edu/images/" + data.logo_7);
          $("#logo-8").attr("src", "http://www.messiah.edu/images/" + data.logo_8);
          $("#logo-9").attr("src", "http://www.messiah.edu/images/" + data.logo_9);
          $("#logo-10").attr("src", "http://www.messiah.edu/images/" + data.logo_10);
          $(".logos").show();
        } else {
          $(".logos").hide();
        }

        if (departmentFilter == ALL_ENTRY_ID) {
          $("#alumni-1-name").text(data.alumni_1_name);
          $("#alumni-2-name").text(data.alumni_2_name);
          $("#alumni-3-name").text(data.alumni_3_name);
          
          $('#alumni-1-image').css('background-image','url(http://www.messiah.edu/images/' + data.alumni_1_image + ')');
          $('#alumni-2-image').css('background-image','url(http://www.messiah.edu/images/' + data.alumni_2_image + ')');
          $('#alumni-3-image').css('background-image','url(http://www.messiah.edu/images/' + data.alumni_3_image + ')');

          $("#alumni-1-title").text(data.alumni_1_title);
          $("#alumni-2-title").text(data.alumni_2_title);
          $("#alumni-3-title").text(data.alumni_3_title);

          $(".alumni").show();
        } else {
          $(".alumni").hide();
        }
        
        if (data.entry_id == ALL_ENTRY_ID) {
          $(".department-title").hide();
        } else {
          $(".department-title").html("Department of " + data.entry_title);
          $(".department-title").show();
        }
        break;
      }
    }
  }//filterData
  
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

  function employmentRateTimerEvent() {
    employmentRateCurrent++;
    $('#employment-rate').text(employmentRateCurrent + '%');
    $('#grad-students-' + employmentRateCurrent).addClass('active');
    var angle = (360 / 100) * employmentRateCurrent;
    $('#employment-rate-circle').attr('stroke-dasharray', parseInt(angle) + ', 20000');
    if (employmentRateCurrent == employmentRateMax) {
      clearInterval(employmentRateTimer);
    }
  }//employmentRateTimerEvent
  
  function industriesRepresentedTimerEvent() {
    industriesRepresentedStep++;
    for (var i = 1; i <= industriesRepresentedCurrent.length; i++) {
      var max = industriesRepresentedMax[i - 1];
      var step = max / industriesRepresentedMaxSteps;
      var current = industriesRepresentedCurrent[i - 1] + step;
      industriesRepresentedCurrent[i - 1] = current;
      $('.bar-' + i).css("height", Math.round(current) + '%');
    }
    if (industriesRepresentedStep == industriesRepresentedMaxSteps) {
      clearInterval(industriesRepresentedTimer);
      for (var i = 1; i <= industriesRepresentedCurrent.length; i++) {
        var max = industriesRepresentedMax[i - 1];
        $('.bar-' + i).css("height", max + '%');
      }
    }
  }//industriesRepresentedTimerEvent

  function salaryRangeTimerEvent() {
    salaryRangeStep++;
    for (var i = 1; i <= salaryRangeCurrent.length; i++) {
      var max = salaryRangeMax[i - 1];
      var step = max / salaryRangeMaxSteps;
      var current = salaryRangeCurrent[i - 1] + step;
      salaryRangeCurrent[i - 1] = current;
      $('#salary-range-' + i).css("height", Math.round(current) + '%');
    }
    if (salaryRangeStep == salaryRangeMaxSteps) {
      clearInterval(salaryRangeTimer);
      for (var i = 1; i <= salaryRangeCurrent.length; i++) {
        var max = salaryRangeMax[i - 1];
        $('#salary-range-' + i).css("height", max + '%');
      }
    }
  }//salaryRangeTimerEvent

  function graduateProfessionalTimerCallback(timer) {
    timer.data.current++;
    $('#school-information-' + timer.data.id).text(timer.data.current + '%');
    if (timer.data.current == timer.data.max) {
      timer.stop();
    }
  }//graduateProfessionalEvent

  function checkAnimations() {
    if (loaded) {
      if (employmentRateAnimate) {
        if (isElementInView('#employment-rate', false)) {
          employmentRateTimer = setInterval(employmentRateTimerEvent, 15);
          employmentRateAnimate = false;
        }
      }
      if (industriesRepresentedAnimate) {
        if (isElementInView('.bar-1', false)) {
          industriesRepresentedTimer = setInterval(industriesRepresentedTimerEvent, 15);
          industriesRepresentedAnimate = false;
        }
      }
      if (salaryRangeAnimate) {
        if (isElementInView('#salary-range-1', false)) {
          salaryRangeTimer = setInterval(salaryRangeTimerEvent, 15);
          salaryRangeAnimate = false;
        }
      }
      
      for (var j = 0; j < graduateProfessionalTimers.length; j++) {
        var timer = graduateProfessionalTimers[j];
        if (timer.data.animate) {
          if (isElementInView('#school-information-' + timer.data.id, false)) {
            timer.data.animate = false;            
            timer.start();
          }
        }
      }
    }
  }//checkAnimations

  function showPeekPreview(index) {
    switch(index) {
      case '1':
        var name = activeData.alumni_1_name;
        var title = activeData.alumni_1_title;
        var image = activeData.alumni_1_image;
        var story = activeData.alumni_1_story;
        break;
      case '2':
        var name = activeData.alumni_2_name;
        var title = activeData.alumni_2_title;
        var image = activeData.alumni_2_image;
        var story = activeData.alumni_2_story;
        break;
      case '3':
        var name = activeData.alumni_3_name;
        var title = activeData.alumni_3_title;
        var image = activeData.alumni_3_image;
        var story = activeData.alumni_3_story;
        break;
    } 
    
    if (index != '4') {
      story = story.replace(/\<br\/\>/g, '');
      $("#peek-info").hide();
      $("#peek-story").show();
      $("#peek-large-image").attr('src', 'http://www.messiah.edu/images/' + image);
      $("#peek-title").text(name);
      $("#peek-category").text(title);
      $("#peek-overview").html(story);
    } else {
      $("#peek-story").hide();
      $("#peek-info").show();
    }
    $("#peek-close").show();
    $('body').addClass('stop-scrolling');
  }//showPeekPreview

  function hidePeek() {
    $("#peek-close").hide();
    $('body').removeClass('stop-scrolling');
  }//hidePeek
  
});
