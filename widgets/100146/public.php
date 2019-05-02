<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link href="<?php echo $folder; ?>mc-accepted-student.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">

    <!-- ====== HERO SECTION ====== -->
    <div class="hero-bg loading-hero-img">
        <figure class="loading-gif"></figure>
        <div class="parallax-slider">
            <picture>
                <source
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/accepted-student/hero-img.jpg" />
                <img
                    class="lazyload-img hero-img"
                    src="<?php echo $folder; ?>img/accepted-student/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/accepted-student/hero-img.jpg" />
            </picture>
        </div>
        <div class="title-wrapper">
            <h2>you’re<br>accepted</h2>
            <hr>
            <p>Congratulations!</p>
        </div>
        <a class="explore-messiah-btn">
            Explore Messiah<br>
            <img src="<?php echo $folder; ?>img/accepted-student/car2-arrow-down.png">
        </a>
    </div>



    
<!-- ====== SECTION_1 ====== -->
    <div class="section section-top" id="section-1">
        <div class="wrapper content">
            <div class="center mb-50">
                <h2>You’re accepted to Messiah College!!</h2>
                <h3>Keep the momentum going by completing the steps below.</h3>
            </div>
        </div>
    </div>   