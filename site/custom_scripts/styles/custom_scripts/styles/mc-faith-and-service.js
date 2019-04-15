$(document).ready(function() {
  var stickyTop = $(".faith-and-service-tabs").position().top;
  var faqItem = 1;

  checkTabs();

  $(window).on("scroll", function() {
    checkTabs();
    checkSticky();
  });

  $(window).resize(function() {
    $(".faith-and-service-tabs").removeClass("fs-sticky");
    stickyTop = $(".faith-and-service-tabs").position().top;
    checkSticky();
  });

  $(".faith-and-service-item").click(function() {
    $(".tab-item").removeClass("active");
    $(this).addClass("active");
    $("html, body").animate(
      { scrollTop: $("#faith-and-service").offset().top },
      1000
    );
  });

  $(".fas-explore-button").click(function() {
    $(".tab-item").removeClass("active");
    $(".faith-and-service-item").addClass("active");
    $("html, body").animate(
      { scrollTop: $("#faith-and-service").offset().top },
      1000
    );
  });

  $(".grow-your-faith-item").click(function() {
    $(".tab-item").removeClass("active");
    $(this).addClass("active");
    $("html, body").animate(
      { scrollTop: $("#grow-your-faith").offset().top },
      1000
    );
  });

  $(".service-opportunities-item").click(function() {
    $(".tab-item").removeClass("active");
    $(this).addClass("active");
    $("html, body").animate(
      { scrollTop: $("#service-opportunities").offset().top },
      1000
    );
  });

  $(".global-engagement-item").click(function() {
    $(".tab-item").removeClass("active");
    $(this).addClass("active");
    $("html, body").animate(
      { scrollTop: $("#global-engagement").offset().top },
      1000
    );
  });

  $(".faith-in-the-classroom-item").click(function() {
    $(".tab-item").removeClass("active");
    $(this).addClass("active");
    $("html, body").animate(
      { scrollTop: $("#faith-in-the-classroom").offset().top },
      1000
    );
  });

  $("#faith-and-service-video").click(function() {
    $("body").addClass("stop-scrolling");
    var lightbox = lity("https://www.youtube.com/watch?v=VG1sOG4-9f0");
  });

$("#chapel-video").click(function() {
    $("body").addClass("stop-scrolling");
    var lightbox = lity("https://www.youtube.com/watch?v=AcvyFriVlAw");
  });

  $("#grow-your-faith-video").click(function() {
    $("body").addClass("stop-scrolling");
    var lightbox = lity("https://www.youtube.com/watch?v=AcvyFriVlAw");
  });

  $(document).on("lity:close", function(event, instance) {
    $("body").removeClass("stop-scrolling");
  });

  $(".chapel").click(function() {
    $(".fs-gyf-overlay").hide();
    $(".fs-gyf-info").hide();
    $("#chapel-overlay").show();
  });

  $(".student-led-worship").click(function() {
    $(".fs-gyf-overlay").hide();
    $(".fs-gyf-info").hide();
    $("#student-led-worship-overlay").show();
  });

  $(".small-groups-and-bible-studies").click(function() {
    $(".fs-gyf-overlay").hide();
    $(".fs-gyf-info").hide();
    $("#small-groups-and-bible-studies-overlay").show();
  });

  $(".fs-gyf-overlay .close-button").click(function() {
    $(".fs-gyf-info").show();
    $(".fs-gyf-overlay").hide();
  });

  $(".local-service-cell").click(function() {
    $(this).trigger("mouseover");
  });

  $(".global-service-cell").click(function() {
    $(this).trigger("mouseover");
  });

  $(".national-service-cell").click(function() {
    $(this).trigger("mouseover");
  });

  $(".academics-service-cell").click(function() {
    $(this).trigger("mouseover");
  });

  $(".local-service-cell .fs-read-more .btn").click(function() {
    $(".fs-so-overlay").hide();
    $("#local-service")
      .show()
      .addClass("activated");
    $("#global-service").addClass("activated");
    $("#national-service").addClass("activated");
    $("#academics-service").addClass("activated");
  });

  $(".global-service-cell .fs-read-more .btn").click(function() {
    $(".fs-so-overlay").hide();
    $("#global-service")
      .show()
      .addClass("activated");
    $("#local-service").addClass("activated");
    $("#national-service").addClass("activated");
    $("#academics-service").addClass("activated");
  });

    $('#student-led-video-play').click(function() {
    $('body').addClass('stop-scrolling');
    var lightbox = lity('https://www.youtube.com/watch?v=TP9ShhxNJOw');
  });


  $(".national-service-cell .fs-read-more .btn").click(function() {
    $(".fs-so-overlay").hide();
    $("#national-service")
      .show()
      .addClass("activated");
    $("#local-service").addClass("activated");
    $("#global-service").addClass("activated");
    $("#academics-service").addClass("activated");
  });

  $(".academics-service-cell .fs-read-more .btn").click(function() {
    $(".fs-so-overlay").hide();
    $("#academics-service")
      .show()
      .addClass("activated");
    $("#national-service").addClass("activated");
    $("#local-service").addClass("activated");
    $("#global-service").addClass("activated");
  });

  $(".local-service").click(function() {
    $(".fs-so-overlay").hide();
    $("#local-service").show();
  });

  $(".national-service").click(function() {
    $(".fs-so-overlay").hide();
    $("#national-service").show();
  });

  $(".global-service").click(function() {
    $(".fs-so-overlay").hide();
    $("#global-service").show();
  });

  $(".academics-as-service").click(function() {
    $(".fs-so-overlay").hide();
    $("#academics-service").show();
  });

  $(".fs-so-overlay .close-button").click(function() {
    $(".fs-so-overlay")
      .show()
      .removeClass("activated");
  });

  $("#world-map-overlay .close-button").click(function() {
    $("#fs-ge-wrapper").show();
    $("#world-map-overlay").hide();
  });

  $(".map-link").click(function() {
    var name = $(this).attr("data-name");
    $("#fs-ge-wrapper").hide();
    $(".fs-ge-overlay-content").hide();
    $("#world-map-overlay").show();
    showContinent(name);
  });

  $(".map-north-america").click(function() {
    $("#fs-ge-wrapper").hide();
    $(".world-map-orth-america").show();
  });

  $(".map-south-america").click(function() {
    $("#fs-ge-wrapper").hide();
    $(".world-map-south-america").show();
  });

  $(".map-asia").click(function() {
    $("#fs-ge-wrapper").hide();
    $(".world-map-asia").show();
  });

  $(".map-africa").click(function() {
    $("#fs-ge-wrapper").hide();
    $(".world-map-africa").show();
  });

  $(".map-australia").click(function() {
    $("#fs-ge-wrapper").hide();
    $(".world-map-australia").show();
  });

  $(".map-europe").mouseover(function() {
    $(".pin-europe").addClass("hover");
  });

  $(".map-europe").mouseout(function() {
    $(".pin-europe").removeClass("hover");
  });

  $(".map-north-america").mouseover(function() {
    $(".pin-north-america").addClass("hover");
  });

  $(".map-north-america").mouseout(function() {
    $(".pin-north-america").removeClass("hover");
  });

  $(".map-south-america").mouseover(function() {
    $(".pin-south-america").addClass("hover");
  });

  $(".map-south-america").mouseout(function() {
    $(".pin-south-america").removeClass("hover");
  });

  $(".map-africa").mouseover(function() {
    $(".pin-africa").addClass("hover");
  });

  $(".map-africa").mouseout(function() {
    $(".pin-africa").removeClass("hover");
  });

  $(".map-asia").mouseover(function() {
    $(".pin-asia").addClass("hover");
  });

  $(".map-asia").mouseout(function() {
    $(".pin-asia").removeClass("hover");
  });

  $(".map-australia").mouseover(function() {
    $(".pin-australia").addClass("hover");
  });

  $(".map-australia").mouseout(function() {
    $(".pin-australia").removeClass("hover");
  });

  $(".faith-and-service #world-map .map-continent").hover(
    function() {
      $(this).addClass("hover");
    },
    function() {
      $(this).removeClass("hover");
    }
  );

  $("#world-map-overlay .close-button").click(function() {
    $(".faith-and-service #world-map .map-continent").removeClass("hover");
  });

  function checkSticky() {
    var pos = $(window).scrollTop();
    if (pos > stickyTop) {
      $(".faith-and-service-tabs").addClass("fs-sticky");
      $(window).trigger("resize.px.parallax");
    } else {
      $(".faith-and-service-tabs").removeClass("fs-sticky");
    }
  } //checkSticky

  function checkTabs() {
    if (isElementInView(".fs-service-opportunities")) {
      $(".fs-left-col-service-opportunities").addClass("fs-slide-in");
    }
    if (isElementInView(".fs-service-opportunities")) {
      $(".fs-right-col-service-opportunities").addClass("fs-slide-in");
    }

    if (isElementInView("#fs-circle-flip")) {
      $(".fs-circle-flip").addClass("inView");
    }

    if (
      showInView("#faith-in-the-classroom h2", ".faith-in-the-classroom-item")
    ) {
      if (showInView("#global-engagement h2", ".global-engagement-item")) {
        if (
          showInView("#service-opportunities h2", ".service-opportunities-item")
        ) {
          if (showInView("#grow-your-faith h2", ".grow-your-faith-item")) {
            if (
              showInView("#faith-and-service h2", ".faith-and-service-item")
            ) {
              if (showInView("#faith-and-service", ".faith-and-service-item")) {
                if (showInView("#grow-your-faith", ".grow-your-faith-item")) {
                  if (
                    showInView(
                      "#service-opportunities",
                      ".service-opportunities-item"
                    )
                  ) {
                    if (
                      showInView(
                        "#global-engagement",
                        ".global-engagement-item"
                      )
                    ) {
                      if (
                        showInView(
                          "#faith-in-the-classroom",
                          ".faith-in-the-classroom-item"
                        )
                      ) {
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
  } //checkTabs

  function showInView(element, item) {
    var res = true;
    if (isElementInView(element, false)) {
      $(".tab-item").removeClass("active");
      $(item).addClass("active");
      res = false;
    }
    return res;
  } //showInView

  function isElementInView(element, fullyInView) {
    if ($(element).length) {
      var pageTop = $(window).scrollTop();
      var pageBottom = pageTop + $(window).height();
      var elementTop = $(element).offset().top;
      var elementBottom = elementTop + $(element).height();

      if (fullyInView === true) {
        return pageTop < elementTop && pageBottom > elementBottom;
      } else {
        return elementTop <= pageBottom && elementBottom >= pageTop;
      }
    }
  } //isElementInView

  function showContinent(name) {
    $(".map-pin").removeClass("hover");
    $("#fs-ge-wrapper").hide();
    $(".fs-ge-overlay-content").hide();
    $(".fs-ge-tabs li a").removeClass("active");
    $("#world-map-overlay").show();
    $("#" + name).show();
    $(".fs-ge-tabs ." + name).addClass("active");
  } //showContinent
});
