<?php  
  $dev = false;
  //$dev = true;
  $folder = '';
  if (!$dev) {
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo $folder; ?>mc-study-abroad.css?v=7" rel="stylesheet">    
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="fs-bg study-abroad" style="background-image: url(<?php echo $folder; ?>img/study-abroad/abroad-bg.jpg);">
        <div class="fs-wrapper">
            <h2>Make the world your classroom</h2>
            <hr>
            <p>Off-campus Opportunities</p>
        </div>
        <div class="start-btn">
            <a>Start<br>Here<br><img style="position:relative;top:5px;" src="<?php echo $folder; ?>img/study-abroad/car2-arrow-down.png"></a>
        </div>
    </div>

    <div class="bind">
        <div class="wrapper content center">
            <h2>Bind Your Heart to a Foreign Land</h2>
            <p>What may look like a quiet, suburban campus in central Pennsylvania is really six continents and 24 time zones. At Messiah, your college experience expands beyond our Mechanicsburg campus and reaches around the globe. You can choose to study or serve in one of 40+ different countries, strengthening the groundwork you’ve been laying at Messiah all along: how to hear differing perspectives and to weave new insights into a vision that is your own. </p>
            <div class="">
                <div class="flexbox">
                    <div class="col-50">
                        <img src="<?php echo $folder; ?>img/study-abroad/takeoff.png" alt="takeoff">
                        <p>Last year, more than <br><span class="highlight-txt">624 undergraduate students</span> <br>studied abroad in more than <span class="highlight-txt">37 countries.</span></p>
                    </div>
                    <div class="col-50">
                        <img src="<?php echo $folder; ?>img/study-abroad/globeflag.png" alt="globe with flags"> <span class="emphasize-txt" style="position: relative; bottom: 15px;">90%</span>
                        <p>of Messiah's student body <span class="highlight-txt">studied or served in off-campus programs</span> in 2016-2017.</p>
                    </div>
                </div>
            </div>
            <div class="youtube">
                <iframe width="860" height="484" src="https://www.youtube.com/embed/LdzJ27UqlMg?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="global">
        <div class="wrapper content center">
            <h2>Global Engagement</h2>
            <hr>
            <p>Spend three weeks in Zambia studying health care in the developing world. Spend spring break serving in sports ministry in Argentina. Study in Italy for a semester honing your artistic skills. Whether it’s Germany, Australia, India, China or Costa Rica, you see yourself through the eyes of others and understand yourself in new ways.</p>
            <div class="messiah-worldmap-container">
                <img class="messiah-worldmap" src="<?php echo $folder; ?>img/study-abroad/worldmap.png" alt="world-map">
                <div id="pins">
                </div>
            </div>

        </div>
    </div>

    <div class="world">
        <div class="wrapper content center">
            <h2>Where in the world will you go?</h2>
            <div class="flexbox">
                <div class="col-33 continent change-continent" style="background-image: url('<?php echo $folder; ?>img/study-abroad/africa.jpg');" data-id="1"><p>Africa</p></div>
                <div class="col-33 continent change-continent" style="background-image: url('<?php echo $folder; ?>img/study-abroad/asia.jpg');" data-id="2"><p>Asia</p></div>
                <div class="col-33 continent change-continent" style="background-image: url('<?php echo $folder; ?>img/study-abroad/australia.jpg');" data-id="3"><p>Australia</p></div>
                <div class="col-33 continent change-continent" style="background-image: url('<?php echo $folder; ?>img/study-abroad/europe.jpg');" data-id="4"><p>Europe</p></div>
                <div class="col-33 continent change-continent" style="background-image: url('<?php echo $folder; ?>img/study-abroad/north-america.jpg');" data-id="5"><p>North America</p></div>
                <div class="col-33 continent change-continent" style="background-image: url('<?php echo $folder; ?>img/study-abroad/south-america.jpg');" data-id="6"><p>South America</p></div>
            </div>
        </div>
    </div>

    <div class="ready">
        <div class="wrapper content center">
            <h2>Ready to go?</h2>
            <p>Are you intrigued and ready to learn more? Do you already know exactly where you want to go? Messiah’s Intercultural Office is ready to help you choose the perfect program so you can see the world in a whole new light. Bon Voyage!</p>
            <a class="sa-button" href="https://www.messiah.edu/info/20910/semester_long_programs"><img src="<?php echo $folder; ?>img/study-abroad/suitcase.png">Semester-long programs</a>
            <a class="sa-button" href="https://www.messiah.edu/info/20962/short-term_programs"><img src="<?php echo $folder; ?>img/study-abroad/backpack.png">Short-term programs</a>
        </div>
    </div>

    <div class="lightbox" style="display:none">
        <div class="wrapper content">
            <div class="close-button">
                <a><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            <ul class="lb-continent-list">
                <li><a class="change-continent" id="continent-item-1" data-id="1">Africa</a></li>
                <li><a class="change-continent" id="continent-item-2" data-id="2">Asia</a></li>
                <li><a class="change-continent" id="continent-item-3" data-id="3">Australia</a></li>
                <li><a class="change-continent" id="continent-item-4" data-id="4">Europe</a></li>
                <li><a class="change-continent" id="continent-item-5" data-id="5">North America</a></li>
                <li><a class="change-continent" id="continent-item-6" data-id="6">South America</a></li>
            </ul>
            <div class="lb-info-container">
            <div class="lb-info-img">
                <img id="continent-image" src="">
            </div>
            <div class="lb-info-text">
                <h2 id="continent-name"></h2>
                <p id="continent-desc"></p>
            </div>
            </div>
        </div>
    </div>

    <div class="ge-mask">
        <div class="ge-sidebar">            
            <div class="ge-close-button">
                <a><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            <img id="ge-img" src="">
            <div class="ge-info">
                <ul>
                    <li>Name: <span id="ge-name"></span></li>
                    <li>Graduation Year: <span id="ge-year"></span></li>
                    <li>Major: <span id="ge-major"></span></li>
                    <li>Hometown: <span id="ge-hometown"></span></li>
                </ul>
                <p><strong>Travel Location and Program:</strong> <span id="ge-loc-prog"></span></p>
                <p><strong>Messiah Shoutout:</strong> <span id="ge-shoutout"></span></p>
            </div>
        </div>    
    </div>
    
    <script id="pin-template" type="text/x-jQuery-tmpl">
      <span class="sa-pin" style="left: ${left}px; top: ${top}px;" data-index="${index}"></span>
    </script>

    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>    
    <script type="text/javascript" src="<?php echo $folder; ?>mc-study-abroad.js?v=7"></script> 