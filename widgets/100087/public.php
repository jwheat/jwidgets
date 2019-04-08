<?php
  $dev = false;
  //$dev = true;
  $folder = '';
  if (!$dev) {
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo $folder; ?>slick.css" rel="stylesheet">
    <link href="<?php echo $folder; ?>slick-theme.css" rel="stylesheet">
    <link href="<?php echo $folder; ?>mc-athletics.css?v=17" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">

    <div class="fs-bg">
        <figure class="loading-gif"></figure>

        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/athletics/hero-bg-athletics.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/athletics/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/athletics/hero-bg-athletics.jpg" />
            </picture>
        </div>

        <div class="fs-wrapper">
            <h2>Fear the Falcon</h2>
            <hr class="hide-on-mobile">
            <p class="hide-on-mobile">Athletics at Messiah</p>
            <p><a href="http://www.gomessiah.com/" class="ath-button">visit gomessiah.com</a></p>
        </div>

        <div class="athletics-tabs hide-on-mobile">
            <ul>
                <li class="tab-item sports-item"><a>Sports</a></li>
                <li class="tab-item physical-fitness-item"><a>Physical Fitness</a></li>
                <li class="tab-item game-day-item"><a>Game day</a></li>
                <li class="explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/athletics/car2-arrow-down.png"></a></li>
                <li class="tab-item sports-camps-item"><a>Sports Camps</a></li>
                <li class="tab-item sports-ministry-item"><a>Sports Ministry</a></li>
            </ul>
        </div>
    </div>