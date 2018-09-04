<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '3';
    $folder = '/site/custom_scripts/styles/';
  }
?>

<!-- Life on campus widget -->
    <a name="student-life"></a>
    <div class="student-life" id="life-on-campus">
        <div class="wrapper content">
            <h2 class="center">Life on campus</h2>
            <div class="flexbox">
                <div class="col-50">
                    <p>College is more than just going to class and studying. You’ll receive an outstanding education during your time at Messiah--but you’ll also experience fun, excitement and make lifelong friendships. As an undergraduate residential or <a href="https://www.messiah.edu/commuters">commuter student</a>, you’ll realize Messiah’s campus is buzzing with activity and that there’s always something to do. In fact, many of these experiences become meaningful traditions for our students and make Messiah a really hard place to leave when you graduate.</p>
                </div>
                <div class="col-50 center">
                    <div class="sl-video">
                        <img src="<?php echo $folder; ?>img/student-life/life-on-campus-video-bg.jpg" alt="">
                        <a class="sl-play" id="life-on-campus-video"><img src="/site/custom_scripts/styles/img/student-life/play-w.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper content center" id="sl-profile">
            <h3><span>Student life profile</span></h3>
            <div class="flexbox">
                <div class="col-33 sl-achievements">
                    <img src="<?php echo $folder; ?>img/student-life/binoculars.png" alt="">
                    <p><span>70+</span> Clubs and organizations</p>
                </div>
                <div class="col-33 sl-achievements">
                    <img src="<?php echo $folder; ?>img/student-life/students-hug.png" alt="">
                    <p><span>2759</span> Undergraduate students</p>
                </div>
                <div class="col-33 sl-achievements">
                    <img src="<?php echo $folder; ?>img/student-life/on-campus.png" alt="">
                    <p><span>87%</span> of students live in on-campus housing</p>
                </div>
            </div>
        </div>
    </div>