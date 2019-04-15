$(document).ready(function(){
  var pins;
  var loaded = false;
  
  var continents = new Array();
  continents.push({id: 1, name: "Africa", image: "africa-continent.png", description: "Engage in a program that fosters spiritual formation alongside academic courses. Sharpen your world view as a whole. Live with Ugandan families. Examine the historical development of Christianity, while working alongside impactful groups at one of the world’s largest mission centers. Gaze at the renowned wildlife and encounter the real Africa. Experience life through research, worship and service, as you submerge yourself into a new society and gain a new perspective in a third world country."});
  continents.push({id: 2, name: "Asia", image: "asia-continent.png", description: "Take an educational excursion to Asia! Study in the bustling city of Shanghai. Sharpen your Mandarin speaking skills. Learn from the top global leaders through International Business Institute to discover economics and business management in Russia, India, China and much more! Our Asian studies programs encourage you to integrate your studies with international field experiences to prepare you for global career opportunities. "});
  continents.push({id: 3, name: "Australia", image: "australia-continent.png", description: "Combine adventure with academics! From Australia to New Zealand, you will experience an engaging program to strengthen your faith among a new culture. Learn all about environmental stewardship on the mountainous islands of New Zealand. Explore global issues from theological, scientific, cultural and economic perspectives. Integrate student life with family life in Australia. You will discover newfound passions, incredible sights, national traditions and new friendships."});
  continents.push({id: 4, name: "Europe", image: "europe-continent.png", description: "With several different programs to choose from, Messiah College can send you into the many different cultures of Europe. Our off-campus programs will place you in fascinating places like France, Lithuania, Spain, Italy, Germany and more! Take advantage of travel to other nearby countries. Room with international students. Taste the delicious foods unique to each culture. While studying in Europe, the opportunities are endless. From strengthening your French skills in Paris, to exploring the landscape of pre-modern Italy, you can choose the program that best fits your academic needs while exploring your passions and interests."});
  continents.push({id: 5, name: "North America", image: "north-america-continent.png", description: "With such a diverse continent, our North American programs give students the ability to study and serve in areas such as the United States, Mexico and Central America. Head to Panama with AROMA (A Revolution of Missional Athletes) and further God’s kingdom by combining your gifts and passions for sports. Study public policy in Washington, D.C. while strengthening your dialogue on prominent domestic and international issues. Shoot a film in Hollywood at our LA Film Studies Center. Create and market music on a tour around the country with Contemporary Music Center in Nashville. The options extend as far as New York to California, and down to Central America--the choice is yours!"});
  continents.push({id: 6, name: "South America", image: "south-america-continent.png", description: "Enhance your Spanish skills by submerging yourself in a Chilean culture. Participate in international missions. Take a course in global missions and expand your faith perspective to new horizons. Partner with local community leaders in Bolivia to work towards gaining access to clean water, invest in spiritual development. Find yourself gazing at the Andes Mountains or exploring the Pacific Ocean. Wherever you go, you’ll experience the culture’s connection to the physical and spiritual environment. "});
  
  $('.lightbox').appendTo(document.body);
  $('.ge-mask').appendTo(document.body);

  var url = 'https://www.messiah.edu/mcapi/?directoryID=14&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=-1';
  $.ajax({
    url: url,
    dataType: 'jsonp',
    jsonpCallback: 'directory_data',
    jsonp: 'callback',
    success: function (data) {
      pins = data;
      showPins();
      loaded = true;
    },
    error: function(jqXHR, textStatus, errorThrown) { 
      console.log(textStatus);
      //alert(textStatus);
    }
  });
  
  $(window).resize(function(){
    if (loaded) {
      showPins();
    }
  });   
  
  $('.change-continent').click(function() {
    $('.lb-continent-list a').removeClass('active');
    var folder = $('#mc-folder').val();
    var id = $(this).attr('data-id');
    for (var i = 0; i < continents.length; i++) {
      var continent = continents[i];
      if (continent.id == id) {
        $('#continent-item-' + id).addClass('active');
        $('#continent-image').attr('src', folder + 'img/study-abroad/' + continent.image);
        $('#continent-name').html(continent.name);
        $('#continent-desc').html(continent.description);
        break;
      }
    }
    $('.lightbox').show();
  }); 
 
  $('.close-button a').click(function() {
    $('.lightbox').hide();
  }); 
   
  $('.start-btn').click(function() {
    $('html, body').animate({scrollTop: $(".bind").offset().top}, 1000);
  });    

  $(document).on('click', ".ge-close-button a", function(event) {
    //$('.ge-mask').hide();
    $('body').removeClass('stop-scrolling');
  });
  
  $(document).on('click', ".sa-pin", function(event) {
    var index = $(this).attr('data-index');
    var pin = pins[index];
        
    $('#ge-name').html(pin.entry_title);
    $('#ge-year').html(pin.graduation_year);
    $('#ge-major').html(pin.major);
    $('#ge-hometown').html(pin.hometown);
    $('#ge-loc-prog').html(pin.programlocation);
    $('#ge-shoutout').html(pin.overview);
    $('#ge-img').attr('src', 'https://www.messiah.edu/images/' + pin.image);
    $('body').addClass('stop-scrolling');
  });
   
   
  function showPins() {
    $('#pins').empty();
    for (var i = 0; i < pins.length; i++) {
      var pin = pins[i];
      if (pin.live == '1') {
        var w = $('.messiah-worldmap').width();
        var h = $('.messiah-worldmap').height();
        var dw = w / 1293;
        var dh = h / 662;
        var xy = pin.xy.split("/");
        var pinData = new Object();
        pinData.index = i;
        pinData.left = (xy[0] * dw) - 18;
        pinData.top = (xy[1] * dh) - 50;
        $("#pin-template").tmpl(pinData).appendTo("#pins");
      }
    }
  }//showPins
  
});
