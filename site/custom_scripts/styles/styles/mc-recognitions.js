$(document).ready(function(){
  var url = '//www.messiah.edu/a/cache/rankings.json';
  $.ajax({
    url: url,
    dataType: 'jsonp',
    jsonpCallback: 'directory_data',
    jsonp: 'callback',
    success: function (data) {
      var storyCards = data;
      var categoryNames = new Array();
      for (var i = 0; i < storyCards.length; i++) {
        var storyCard = storyCards[i];
        var categories = storyCard.category_id.split(","); 
        for (var j = 0; j < categories.length; j++) {
          var categoryId = categories[j];
          if (storyCard.category_name != '') {
            categoryNames[categoryId] = storyCard.category_name;
          }
        }  
      }

      for (var i = 0; i < storyCards.length; i++) {
        var storyCard = storyCards[i];
        if (storyCard.live == '1') {
          var categories = storyCard.category_id.split(","); 
          for (var j = 0; j < categories.length; j++) {
            var categoryId = categories[j];
            storyCard.categoryId = categoryId;
            storyCard.categoryName = categoryNames[categoryId];
            if ($("#category-" + categoryId).length == 0) {
              $("#section-template").tmpl(storyCard).appendTo("#sections-container");
              $("#category-template").tmpl(storyCard).appendTo("#category-container");
            }
            storyCard.imageClass = "";
            if (storyCard.hasOwnProperty("ranking_logo")) {
              if (storyCard.ranking_logo == "yes") {
                storyCard.imageClass = "ranking-logo";
              }
            }
            $("#storycard-template").tmpl(storyCard).appendTo("#category-" + categoryId);
          }
        }
      }
    },
    error: function(jqXHR, textStatus, errorThrown) { 
      console.log(textStatus);
      //alert(textStatus);
    }
  });
  
  $(document).on('click', "#sections-container a", function(event) {
    var id = $(this).attr('data-id');
    $('html, body').animate({scrollTop: $("#title-" + id).offset().top}, 1000);
  });
  
});
