<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '4';
    $folder = '/site/custom_scripts/styles/';
    $imageFolder = 'https://www.messiah.edu/images/';    
    
    if ('%PARAM_HEADLINE%' != '' && '%PARAM_HEADLINE%' != '%PARAM_HEADLINE' . '%') {
      $param_headline = '%PARAM_HEADLINE%';
    }
    if ('%PARAM_CONTENT%' != '' && '%PARAM_CONTENT%' != '%PARAM_CONTENT' . '%') {
      $param_content = '%PARAM_CONTENT%';
    }
    if ('%PARAM_VIDEO_IMAGE%' != '' && '%PARAM_VIDEO_IMAGE%' != '%PARAM_VIDEO_IMAGE' . '%') {
      $param_video_image = '%PARAM_VIDEO_IMAGE%';
      $param_video_image = $imageFolder . $param_video_image;
    }
    if ('%PARAM_VIDEO_LINK%' != '' && '%PARAM_VIDEO_LINK%' != '%PARAM_VIDEO_LINK' . '%') {
      $param_video_link = '%PARAM_VIDEO_LINK%';
    }
    if ('%PARAM_INFOGRAPHIC_1_IMAGE%' != '' && '%PARAM_INFOGRAPHIC_1_IMAGE%' != '%PARAM_INFOGRAPHIC_1_IMAGE' . '%') {
      $param_infographic_1_image = '%PARAM_INFOGRAPHIC_1_IMAGE%';
      $param_infographic_1_image = $imageFolder . $param_infographic_1_image;
    }
    if ('%PARAM_INFOGRAPHIC_1_TEXT%' != '' && '%PARAM_INFOGRAPHIC_1_TEXT%' != '%PARAM_INFOGRAPHIC_1_TEXT' . '%') {
      $param_infographic_1_text = '%PARAM_INFOGRAPHIC_1_TEXT%';
    }

    $param_infographic_2_image = $folder . 'img/student-life/students-hug.png';
    $param_infographic_2_text = '<span>2,734</span> Undergraduate students';
    $param_infographic_3_image = $folder . 'img/student-life/on-campus.png';
    $param_infographic_3_text = '<span>85%</span> of students live in on-campus housing';
  } else {
    $param_headline = 'Life on campus';
    $param_content = 'College is more than just going to class and studying. You’ll receive an outstanding education during your time at Messiah--but you’ll also experience fun, excitement and make lifelong friendships. As an undergraduate residential or <a href="https://www.messiah.edu/commuters">commuter student</a>, you’ll realize Messiah’s campus is buzzing with activity and that there’s always something to do. In fact, many of these experiences become meaningful traditions for our students and make Messiah a really hard place to leave when you graduate.';
    $param_video_image = 'img/student-life/life-on-campus-video-bg.jpg';
    $param_video_link = 'https://www.youtube.com/watch?v=0EG-VDD9R-k';
    $param_infographic_1_image = 'img/student-life/binoculars.png';
    $param_infographic_1_text = '<span>70+</span> Clubs and organizations';
    $param_infographic_2_image = 'img/student-life/students-hug.png';
    $param_infographic_2_text = '<span>2,734</span> Undergraduate students';
    $param_infographic_3_image = 'img/student-life/on-campus.png';
    $param_infographic_3_text = '<span>85%</span> of students live in on-campus housing';
  }
?>

<!-- Life on campus widget -->
    <a name="student-life"></a>
    <div class="student-life" id="life-on-campus">
        <div class="wrapper content">
            <h2 class="center"><?php echo $param_headline; ?></h2>
            <div class="flexbox">
                <div class="col-50">
                    <p><?php echo $param_content; ?></p>
                </div>
                <div class="col-50 center">
                    <div class="sl-video">
                        <img src="<?php echo $param_video_image; ?>" alt="">
                        <a class="sl-play" id="life-on-campus-video" data-url="<?php echo $param_video_link; ?>"><img src="<?php echo $folder; ?>img/student-life/play-w.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper content center" id="sl-profile">
            <h3><span>Student life profile</span></h3>
            <div class="flexbox">
                <div class="col-33 sl-achievements">
                    <img src="<?php echo $param_infographic_1_image; ?>" alt="">
                    <p><?php echo $param_infographic_1_text; ?></p>
                </div>
                <div class="col-33 sl-achievements">
                    <img src="<?php echo $param_infographic_2_image; ?>" alt="">
                    <p><?php echo $param_infographic_2_text; ?></p>
                </div>
                <div class="col-33 sl-achievements">
                    <img src="<?php echo $param_infographic_3_image; ?>" alt="">
                    <p><?php echo $param_infographic_3_text; ?></p>
                </div>
            </div>
        </div>
    </div>