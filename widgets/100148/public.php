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

  <!-- ====== SECTION_2 ====== -->
    <div class="section" id="section-2">
        <picture>
            <source
                media="(max-width: 766px)"
                data-srcset="<?php echo $folder; ?>img/accepted-student/mid-section-img.jpg" />
            <img
                class="lazyload-img section-bg-img"
                src="<?php echo $folder; ?>img/accepted-student/handtinytrans.gif"
                data-src="<?php echo $folder; ?>img/accepted-student/mid-section-img.jpg"
                alt="girls taking picture" />
        </picture>
        <div class="content-box">
            <p class="content-box-title center">We are here to help</p>
            <p class="content-box-sub-title center">Here are a few ways to contact us.</p>
            <ul class="content-box-list">
                <li>800-233-4220</li>
                <li>admissions@messiah.edu</li>
                <li>Chat Online</li>
            </ul>
        </div>
    </div>

    <!-- ====== SECTION_3 ====== -->
    <div class="section" id="section-3">
        <div class="content wrapper center">
            <h2>Let the countdown begin!</h2>
            <div class="countdown-wrapper">
                <ul class="countdown">
                    <li><span class="countdown-text" id="days"></span>days</li>
                    <li><span class="colon countdown-text">:</span></li>
                    <li><span class="countdown-text" id="hours"></span>Hours</li>
                    <li><span class="colon countdown-text">:</span></li>
                    <li><span class="countdown-text" id="minutes"></span>Minutes</li>
                    <li><span class="colon countdown-text">:</span></li>
                    <li><span class="countdown-text" id="seconds"></span>Seconds</li>
                </ul>
            </div>
            <h3>Until move-in day!</h3>
            <div id="move-in-video">
                <img class="lazyload-img loaded-img" src="<?php echo $folder; ?>img/accepted-student/video-placeholder.jpg">
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo $folder; ?>lity.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-accepted-student.js?v=<?php echo $version; ?>"></script>
                    
