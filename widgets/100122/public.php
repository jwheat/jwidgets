<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '3';
    $folder = 'site/custom_scripts/styles/';
  }
?>
 <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick-theme.css">
    <link href="<?php echo $folder; ?>mc-about.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>"> 


  
    <div class="about-bg">
        <figure class="loading-gif"></figure>
        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/about/about-hero-mobile.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/about/about-hero.jpg" />
            </picture>
        </div>
        <div class="about-wrapper">
            <h2>About Messiah</h2>
            <hr>
            <p>Sharpening intellect. Deepening Christian faith. Inspiring action.</p>
        </div>
        <div class="about-tabs hide-on-mobile">
            <ul>
                <li class="tab-item overview-of-about-item"><a>Overview of About</a></li>
                <li class="tab-item our-campus-item"><a>Our Campus</a></li>
                <li class="tab-item faith-community-item"><a>Faith Community</a></li>
                <li class="explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/about/car2-arrow-down.png"></a></li>
                <li class="tab-item see-anew-item"><a>See Anew</a></li>
                <li class="tab-item our-history-item"><a>Our History</a></li>
            </ul>
        </div>
    </div>