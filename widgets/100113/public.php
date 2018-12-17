<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '4';
    $folder = '/site/custom_scripts/styles/';
  }
?>
   
<link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo $folder; ?>mc-faith-and-service.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="fs-bg" data-parallax="scroll" data-image-src="<?php echo $folder; ?>img/faith-and-service/faith-and-service-hero.jpg">
        <div class="fs-wrapper">
            <h2>Faith and </br>Service</h2>
            <hr>
            <p>An Authentic Faith Community</p>
        </div>
        <div class="faith-and-service-tabs hide-on-mobile">
            <ul>
                <li class="tab-item faith-and-service-item"><a>Faith and Service</a></li>
                <li class="tab-item grow-your-faith-item"><a>Grow your Faith</a></li>
                <li class="tab-item service-opportunities-item"><a>Service Opportunities</a></li>
                <li class="fas-explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/faith-and-service/car2-arrow-down.png"></a></li>
                <li class="tab-item global-engagement-item"><a>Global Engagement</a></li>
                <li class="tab-item faith-in-the-classroom-item"><a>Faith in the Classroom</a></li>
            </ul>
        </div>
    </div>

