$(document).ready(function(){
  var loaded = false;
  var directoryData;
  var departmentFilter = 389;
  var scrollToAlumni = false;
  
  filterData();
  
  $('.start-here').click(function() {
    $('html, body').animate({scrollTop: $("#loaded").offset().top}, 1000);
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
      //$('.filters-open').hide();
    }
  });
  
  $(".filters-open").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function() {
    if ($('.filter-button').hasClass('open')) {
      $('.filters-open').hide();
      $('.filters-open').removeClass("filters-transition");
      $('.filters-open').height('');
      $('.filters-open').css("overflow", "");
    } else {
      $('.filters-open').removeClass("filters-transition");
      $('.filters-open').height('');
      $('.filters-open').css("overflow", "");
    }
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
  
  $('#filter-department').click(function() {
    if (departmentFilter != '') {
      $('#filter-department').hide();
      scrollToAlumni = true;
      filterData();
    }
  });
  
  $(document).on('click', '.read-more', function() {
    var entryId = $(this).attr('data-entry-id');    
    showPeekPreview(entryId);
  });

  $(document).on('click', "#peek-close", function(event) {
    hidePeek();
  });
  
  $(document).on('click', "#peek-overlay", function(event) {
    hidePeek();
  });
    
  function filterData() {
    $('#loading').show();
    $('#loaded').css({"visibility":"hidden"});

    //var url = 'http://www.messiah.edu/mcapi/?directoryID=8&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=' + departmentFilter;
    var url = '//www.messiah.edu/mcapi/?directoryID=8&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=' + departmentFilter;
    $.ajax({
      url: url,
      dataType: 'jsonp',
      jsonpCallback: 'directory_data',
      jsonp: 'callback',
      success: function (data) {
        $('#alumni-items').empty();

        directoryData = data;
        for (var i = 0; i < directoryData.length; i++) {
          var data = directoryData[i];
          if (data.image != '') {
            $("#alumni-item-template").tmpl(data).appendTo("#alumni-items");
          }
        }
        $('#loading').hide();
        $('#loaded').css({"visibility":""});
        loaded = true;
        if (scrollToAlumni) {
          $('html, body').animate({scrollTop: $("#loaded").offset().top}, 1000); 
        }
      },
      error: function(jqXHR, textStatus, errorThrown) { 
        console.log(textStatus);
        //alert(textStatus);
      }
    });
  }//filterData
  
  function showPeekPreview(entryId) {
    for (var i = 0; i < directoryData.length; i++) {
      var data = directoryData[i];
      if (data.entry_id == entryId) {
        var profile = data.profile.replace(/\<br\/\>/g, '');
            
        $("#peek-close").show();
        $("#peek-large-image").attr('src', 'http://www.messiah.edu/images/' + data.image);
        $("#peek-title").text(data.entry_title);
        $("#peek-year").text(data.class_year_two_digits_numbers_only);
        $("#peek-category").text(data.subheading);
        $("#peek-overview").html(profile);
        $('body').addClass('stop-scrolling');
      }
    }
  }//showPeekPreview

  function hidePeek() {
    $("#peek-close").hide();
    $('body').removeClass('stop-scrolling');
  }//hidePeek
  
});
