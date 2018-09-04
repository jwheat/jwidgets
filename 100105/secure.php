<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '19';
    $folder = '/site/custom_scripts/styles/';
  }
?>
 <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick-theme.css">
    <link href="<?php echo $folder; ?>mc-student-life.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="fs-bg" data-parallax="scroll" data-image-src="<?php echo $folder; ?>img/student-life/student-life-hero.jpg">
        <div class="fs-wrapper">
            <h2>Home Away<br>from Home</h2>
            <hr>
            <p>Student Life at Messiah</p>
        </div>
       <!-- <div class="start-btn">
            <a>Start<br>Here<br><img style="position:relative;top:5px;" src="<?php echo $folder; ?>img/student-life/car2-arrow-down.png"></a> 
        </div>-->
        <div class="student-life-tabs hide-on-mobile">
            <ul>
                <li class="tab-item life-on-campus-item"><a>Life on Campus</a></li>
                <li class="tab-item welcome-home-item"><a>Welcome Home</a></li>
                <li class="tab-item resident-life-item"><a>Resident Life & Dining</a></li>
                <li class="tab-item diversity-item"><a>Diversity</a></li>
                <li class="tab-item support-item"><a>Support</a></li>
            </ul>
        </div>
    </div>