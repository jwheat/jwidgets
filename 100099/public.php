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

<!-- Welcome home widget -->
    <a name="home"></a>
    <div class="student-life" id="welcome-home">
        <div class="wrapper content center">
            <h2>There’s no place like home.</h2>
            <p>At Messiah College, “home” is a universal term to students and alumni. From the very first moment you drive onto campus as a new student, volunteers are ready to help you settle into your residence hall. You’ll quickly become familiar with faces and spaces that will make Messiah feel like home.</p>
        </div>
        <div class="wrapper content sl-collage">
            <div class="flexbox">
                <div class="col-50 sl-left-col">
                    <div class="flexbox">
                        <div class="col-50 coll-img coll-small">
                            <img src="<?php echo $folder; ?>img/student-life/like-home-1.jpg" alt="">
                        </div>
                        <div class="col-50 coll-img coll-small">
                            <img src="<?php echo $folder; ?>img/student-life/like-home-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="sl-video coll-img coll-large">
                        <img src="<?php echo $folder; ?>img/student-life/like-home-3.jpg" alt="">
                        <a class="sl-play"><img src="<?php echo $folder; ?>img/student-life/play-w.png" alt=""></a>
                    </div>
                </div>
                <div class="col-50 sl-right-col">
                    <div class="coll-img coll-wide">
                        <div class="coll-overlay">
                            <div>
                                <p>I love Messiah because when I first visited I knew it would be my home for the next four years. Messiah has everything I'm looking for...</p>
                            </div>
                        </div>
                        <img src="<?php echo $folder; ?>img/student-life/like-home-4.jpg" alt="">
                    </div>
                    <div class="flexbox">
                        <div class="col-50">
                            <div class="coll-img coll-small">
                                <img src="<?php echo $folder; ?>img/student-life/like-home-5.jpg" alt="">
                            </div>
                            <div class="coll-img coll-small">
                                <img src="<?php echo $folder; ?>img/student-life/like-home-6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-50 coll-img coll-tall">
                            <img src="<?php echo $folder; ?>img/student-life/like-home-7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>