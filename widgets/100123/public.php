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

 <!--- About --> 


    <div class="about" id="overview-of-about"><a name="overview"></a>
        <div class="wrapper content">
            <h2 class="center">Who we are</h2>
            <div class="flexbox">
                <div class="col-50">
                    <p>Messiah College is a nationally ranked, private Christian college with a student body of 3,375 undergraduate and graduate students. Our scenic 471-acre suburban
campus is located in central Pennsylvania, just 12 miles from the state capital of Harrisburg. The College was founded in 1909 by the Brethren in Christ Church. Today, the College’s faith base is broadly evangelical and includes students and employees from a variety of denominations and Christian faith traditions.</p>
                </div>
                <div class="col-50 center">
                    <div class="about-video" id="overview-of-about-video">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/about/video-cover.png" />
                        <a class="about-play" id="overview-video"><img src="<?php echo $folder; ?>img/about/play-w.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper content center" id="about-profile">
            <h3><span>By the Numbers</span></h3>
            <div class="flexbox">
                <div class="col-33 about-achievements">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/about/globe.png" 
                        alt ="binoculars icon" />
                    <p>Our student body is made up of students from <span>38</span> states and <span>30</span> countries</p>
                </div>
                <div class="col-33 about-achievements">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/about/students-hug.png"
                        alt="students hug icon" />
                    <p><span>624</span> students served or studied abroad in <span>37</span> countries</p>
                </div>
                <div class="col-33 about-achievements">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/about/on-campus.png"
                        alt="on campus icon" />
                    <p><span>60</span> denominations represented in our student body</p>
                </div>
            </div>

            <div class="by-the-numbers-btns">
                <a class="primary-button" href="https://www.messiah.edu/info/20002/college_profile">Messiah at a glance</a>
                <a class="primary-button" href="https://www.messiah.edu/info/20020/recognitions">View Recognitions</a>
            </div>
        </div>
    </div>