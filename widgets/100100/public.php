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

   <!-- Res Life widget -->
    <a name="res-life"></a>
    <div class="student-life" id="resident-life" data-parallax="scroll" data-image-src="<?php echo $folder; ?>img/student-life/on-campus-bg.jpg">
        <div class="wrapper content center">
            <h2>Living on campus</h2>
            <p>Living on your own for the first time can be a big adjustment. <a href="https://www.messiah.edu/info/21460/residence_life">Residence Life</a> is here to make that transition as smooth and fun as possible. As a first-year or transfer student, you’ll have access to an intentional environment that helps you build lasting relationships with peers who are experiencing the same things as you. Your resident director and resident assistants work hard to host events and activities to help you get to know other students and form a sense of “home.”</p>
            <h3>First-year residence halls</h3>
            <hr>
        </div>
        <div class="wrapper content center">
            <div class="wrapper content center sl-videos">
                <div class="sl-video-wrapper">

                    <div class="sl-video" id="bittner-video">
                        <img src="<?php echo $folder; ?>img/student-life/on-campus-video-1.jpg" alt="">
                        <span>Bittner</span>
                        <a class="sl-play"><img src="<?php echo $folder; ?>img/student-life/play-w.png" alt=""></a>
                    </div>

                    <div class="sl-video" id="naugle-video">
                        <img src="<?php echo $folder; ?>img/student-life/on-campus-video-2.jpg" alt="">
                        <span>Naugle</span>
                        <a class="sl-play"><img src="<?php echo $folder; ?>img/student-life/play-w.png" alt=""></a>
                    </div>

                    <div class="sl-video" id="witmer-video">
                        <img src="<?php echo $folder; ?>img/student-life/on-campus-video-3.jpg" alt="">
                        <span>Witmer</span>
                        <a class="sl-play"><img src="<?php echo $folder; ?>img/student-life/play-w.png" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </div>