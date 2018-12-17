<?php  
  $dev = false;
  //$dev = true;
  $folder = '';
  $slideVideos = array();
  $slideImages = array();
  $slideOverview = array();
  
  if (!$dev) {
    $folder = '/site/custom_scripts/styles/';
    $imageFolder = 'https://www.messiah.edu/images/';
   
    $slideOverview[1] = "";
    if ('%SLIDE1_OVERVIEW%' != '' && '%SLIDE1_OVERVIEW%' != '%SLIDE1_OVERVIEW' . '%') {
      $slideOverview[1] = '%SLIDE1_OVERVIEW%';
    }
    $slideOverview[2] = "";
    if ('%SLIDE2_OVERVIEW%' != '' && '%SLIDE2_OVERVIEW%' != '%SLIDE2_OVERVIEW' . '%') {
      $slideOverview[2] = '%SLIDE2_OVERVIEW%';
    }
    $slideOverview[3] = "";
    if ('%SLIDE3_OVERVIEW%' != '' && '%SLIDE3_OVERVIEW%' != '%SLIDE3_OVERVIEW' . '%') {
      $slideOverview[3] = '%SLIDE3_OVERVIEW%';
    }
    $slideOverview[4] = "";
    if ('%SLIDE4_OVERVIEW%' != '' && '%SLIDE4_OVERVIEW%' != '%SLIDE4_OVERVIEW' . '%') {
      $slideOverview[4] = '%SLIDE4_OVERVIEW%';
    }
    $slideOverview[5] = "";
    if ('%SLIDE5_OVERVIEW%' != '' && '%SLIDE5_OVERVIEW%' != '%SLIDE5_OVERVIEW' . '%') {
      $slideOverview[5] = '%SLIDE5_OVERVIEW%';
    }
    $slideOverview[6] = "";
    if ('%SLIDE6_OVERVIEW%' != '' && '%SLIDE6_OVERVIEW%' != '%SLIDE6_OVERVIEW' . '%') {
      $slideOverview[6] = '%SLIDE6_OVERVIEW%';
    }
    $slideOverview[7] = "";
    if ('%SLIDE7_OVERVIEW%' != '' && '%SLIDE7_OVERVIEW%' != '%SLIDE7_OVERVIEW' . '%') {
      $slideOverview[7] = '%SLIDE7_OVERVIEW%';
    }
    $slideOverview[8] = "";
    if ('%SLIDE8_OVERVIEW%' != '' && '%SLIDE8_OVERVIEW%' != '%SLIDE8_OVERVIEW' . '%') {
      $slideOverview[8] = '%SLIDE8_OVERVIEW%';
    }

    $slideImages[1] = "";
    if ('%SLIDE1_IMAGE%' != '' && '%SLIDE1_IMAGE%' != '%SLIDE1_IMAGE'.'%') {
      $slideImages[1] = '%SLIDE1_IMAGE%';
      $slideImages[1] = $imageFolder . $slideImages[1];
    }    
    $slideImages[2] = "";
    if ('%SLIDE2_IMAGE%' != '' && '%SLIDE2_IMAGE%' != '%SLIDE2_IMAGE'.'%') {
      $slideImages[2] = '%SLIDE2_IMAGE%';
      $slideImages[2] = $imageFolder . $slideImages[2];
    }    
    $slideImages[3] = "";
    if ('%SLIDE3_IMAGE%' != '' && '%SLIDE3_IMAGE%' != '%SLIDE3_IMAGE'.'%') {
      $slideImages[3] = '%SLIDE3_IMAGE%';
      $slideImages[3] = $imageFolder . $slideImages[3];
    }    
    $slideImages[4] = "";
    if ('%SLIDE4_IMAGE%' != '' && '%SLIDE4_IMAGE%' != '%SLIDE4_IMAGE'.'%') {
      $slideImages[4] = '%SLIDE4_IMAGE%';
      $slideImages[4] = $imageFolder . $slideImages[4];
    }    
    $slideImages[5] = "";
    if ('%SLIDE5_IMAGE%' != '' && '%SLIDE5_IMAGE%' != '%SLIDE5_IMAGE'.'%') {
      $slideImages[5] = '%SLIDE5_IMAGE%';
      $slideImages[5] = $imageFolder . $slideImages[5];
    }    
    $slideImages[6] = "";
    if ('%SLIDE6_IMAGE%' != '' && '%SLIDE6_IMAGE%' != '%SLIDE6_IMAGE'.'%') {
      $slideImages[6] = '%SLIDE6_IMAGE%';
      $slideImages[6] = $imageFolder . $slideImages[6];
    }    
    $slideImages[7] = "";
    if ('%SLIDE7_IMAGE%' != '' && '%SLIDE7_IMAGE%' != '%SLIDE7_IMAGE'.'%') {
      $slideImages[7] = '%SLIDE7_IMAGE%';
      $slideImages[7] = $imageFolder . $slideImages[7];
    }    
    $slideImages[8] = "";
    if ('%SLIDE8_IMAGE%' != '' && '%SLIDE8_IMAGE%' != '%SLIDE8_IMAGE'.'%') {
      $slideImages[8] = '%SLIDE8_IMAGE%';
      $slideImages[8] = $imageFolder . $slideImages[8];
    }    
    
    $slideVideos[1] = "";
    if ('%SLIDE1_VIDEO%' != '' && '%SLIDE1_VIDEO%' != '%SLIDE1_VIDEO' . '%') {
      $slideVideos[1] = '%SLIDE1_VIDEO%';
    }
    $slideVideos[2] = "";
    if ('%SLIDE2_VIDEO%' != '' && '%SLIDE2_VIDEO%' != '%SLIDE2_VIDEO' . '%') {
      $slideVideos[2] = '%SLIDE2_VIDEO%';
    }
    $slideVideos[3] = "";
    if ('%SLIDE3_VIDEO%' != '' && '%SLIDE3_VIDEO%' != '%SLIDE3_VIDEO' . '%') {
      $slideVideos[3] = '%SLIDE3_VIDEO%';
    }
    $slideVideos[4] = "";
    if ('%SLIDE4_VIDEO%' != '' && '%SLIDE4_VIDEO%' != '%SLIDE4_VIDEO' . '%') {
      $slideVideos[4] = '%SLIDE4_VIDEO%';
    }
    $slideVideos[5] = "";
    if ('%SLIDE5_VIDEO%' != '' && '%SLIDE5_VIDEO%' != '%SLIDE5_VIDEO' . '%') {
      $slideVideos[5] = '%SLIDE5_VIDEO%';
    }
    $slideVideos[6] = "";
    if ('%SLIDE6_VIDEO%' != '' && '%SLIDE6_VIDEO%' != '%SLIDE6_VIDEO' . '%') {
      $slideVideos[6] = '%SLIDE6_VIDEO%';
    }
    $slideVideos[7] = "";
    if ('%SLIDE7_VIDEO%' != '' && '%SLIDE7_VIDEO%' != '%SLIDE7_VIDEO' . '%') {
      $slideVideos[7] = '%SLIDE7_VIDEO%';
    }
    $slideVideos[8] = "";
    if ('%SLIDE8_VIDEO%' != '' && '%SLIDE8_VIDEO%' != '%SLIDE8_VIDEO' . '%') {
      $slideVideos[8] = '%SLIDE8_VIDEO%';
    }
    
    $internships = "";
    if ('%INTERNSHIPS%' != '' && '%INTERNSHIPS%' != '%INTERNSHIPS' . '%') {
      $internships = '%INTERNSHIPS%';
    }
    $serviceLearning = "";
    if ('%SERVICE_LEARNING%' != '' && '%SERVICE_LEARNING%' != '%SERVICE_LEARNING' . '%') {
      $serviceLearning = '%SERVICE_LEARNING%';
    }
    $offCampusPrograms = "";
    if ('%OFF_CAMPUS_PROGRAMS%' != '' && '%OFF_CAMPUS_PROGRAMS%' != '%OFF_CAMPUS_PROGRAMS' . '%') {
      $offCampusPrograms = '%OFF_CAMPUS_PROGRAMS%';
    }
    $leadership = "";
    if ('%LEADERSHIP2%' != '' && '%LEADERSHIP2%' != '%LEADERSHIP2'.'%') {
      $leadership = '%LEADERSHIP2%';
    }
    $undergraduateResearch = "";
    if ('%UNDERGRADUATE_RESEARCH%' != '' && '%UNDERGRADUATE_RESEARCH%' != '%UNDERGRADUATE_RESEARCH' . '%') {
      $undergraduateResearch = '%UNDERGRADUATE_RESEARCH%';
    }
  } else {
    $slideOverview[1] = 'An intensive career exploration and immersion program, Into the City leverages the expertise of Messiah alumni, parents and friends to expose students to life and work in a major metropolitan context.';
    $slideOverview[2] = 'Rezumania is a themed day focused on reviewing student resumes to better prepare them for entry into the workforce.';
    $slideOverview[3] = '"Pizza with Professionals" is an information session where students learn more about careers and organizations in specific industries and pizza is served, of course!';
    $slideOverview[4] = 'Coordinated in partnership with the Office of Academic Advising, this luncheon features an alumni panel that addresses students who are considering graduate school.';
    $slideOverview[5] = 'The Career and Professional Development Center\'s largest annual recruiting event, the Career and Graduate School Expo features 130+ recruiters from diverse organizations and graduate programs sharing information on internships, jobs and educational opportunities.';
    $slideOverview[6] = 'For mock interview days, regional alumni and employers pair up with students for a practice interview, allowing them to get real interview experience in a learning environment.';
    $slideOverview[7] = 'The etiquette dinner and mocktail hour is an evening for students to practice professional etiquette while learning networking techniques with Messiah alumni.';
    $slideOverview[8] = '"Adulting" features a panel of recent graduates and breakout sessions that address topics associated with the transition to post-grad life.';

    $slideImages[1] = $folder . 'img/preparation/slide-image.png';
    $slideImages[2] = $folder . 'img/preparation/slide-image.png';
    $slideImages[3] = $folder . 'img/preparation/slide-image.png';
    $slideImages[4] = $folder . 'img/preparation/slide-image.png';
    $slideImages[5] = $folder . 'img/preparation/slide-image.png';
    $slideImages[6] = $folder . 'img/preparation/slide-image.png';
    $slideImages[7] = $folder . 'img/preparation/slide-image.png';
    $slideImages[8] = $folder . 'img/preparation/slide-image.png';
    
    $slideVideos[1] = 'https://www.youtube.com/embed/Q-8f4qElpyA?ecver=2';
    $slideVideos[2] = 'https://www.youtube.com/watch?v=0jdsS_xe1bU&t=36s';
    $slideVideos[3] = '';
    $slideVideos[4] = '';
    $slideVideos[5] = '';
    $slideVideos[6] = '';
    $slideVideos[7] = '';
    $slideVideos[8] = '';
    
    $internships = '
      <div class="preparation-wrapper">
        <h2>Internships</h2>
        <div class="col-75 learning-txt">
          <p>An internship during your undergraduate years helps you further clarify your vocational decisions, build career contacts and experience, increase the likelihood of getting into graduate school and expand your confidence in your chosen field. </p>' . "
          <p>The Internship Program in Messiah's Career and Professional Development Center is nationally recognized for its excellence and cutting edge training for today's workforce. In fact, more than 485 colleges, universities and businesses use Messiah's materials or model their internship program.  Last year, students completed 446 total credit-bearing experiences through the Career Center alone.</p>
          <p>Through internships and other experiences, Messiah students are widely-known to be prepared for their careers upon graduation. This is is why more than 400 employers and some of the nation's best graduate schools eagerly welcome Messiah graduates into their organizations.</p>
        </div>" . '
        <div class="col-25 learning-img">
          <img src="' . $folder . 'img/preparation/internship.jpg">
        </div>
      </div>
      <div class="preparation-wrapper">
        <h3 class="big-txt">Popular internships for Messiah College students</h3>
        <ul class="internship">
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
          <li>Accounting firms</li>
          <li>Corporate offices</li>
          <li>Tax preparation</li>
          <li>Nonprofit organizations</li>
          <li>Auditing companies</li>
        </ul>
      </div>
    ';
    
    $internships = '
      <h2>Internships</h2>
      <p><img alt="A student instructing a baby." class="float_right" src="http://www.messiah.edu/images/internship.JPG">An internship during your undergraduate years helps you further clarify your vocational decisions, build career contacts and experience, increase the likelihood of getting into graduate school and expand your confidence in your chosen field.</p>
      <p>The Internship Program in Messiah\'s Career and Professional Development Center is nationally recognized for its excellence and cutting edge training for today\'s workforce. In fact, more than 485 colleges, universities and businesses use Messiah\'s materials or model their internship program.  Last year, students completed 446 total credit-bearing experiences through the Career Center alone.</p>
      <p>Through internships and other experiences, Messiah students are widely-known to be prepared for their careers upon graduation. This is is why more than 400 employers and some of the nation\'s best graduate schools eagerly welcome Messiah graduates into their organizations.</p>
      <p><strong>To find out more about internship opportunities at Messiah College, visit our career and internship center. </strong></p>
      <p><a class="button" href="https://www.messiah.edu/career">Visit the Career and Internship Center</a></p>
      <h3>Popular internships for Messiah College students</h3>
      <ul class="4-col">
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
        <li>Accounting firms</li>
        <li>Corporate offices</li>
        <li>Tax preparation</li>
        <li>Nonprofit organizations</li>
        <li>Auditing companies</li>
      </ul>    
    ';
    $serviceLearning = '
      <h2>Service Learning</h2>
      <div class="col-75 learning-txt">
        <p>Messiah is an academic community profoundly committed to worshipping God. And as we stand before God and hear His voice, we feel strongly called to care for others. As a Messiah student, you participate in a truly remarkable network of service connections that reach around the world and that respond to many different human difficulties: hunger, illiteracy, illness, loneliness, disability, delinquency, exploitation and abuse. </p>
        <p>Through participation in outreach teams, service "plunge days," ministry groups and community agencies, you start to realize that not only do you give back to others, but others give back to you. The blessing travels in both directions.</p>
        <p>Each year, Messiah students collectively volunteer thousands of hours to community service--locally, nationally and globally. The Agape Center for Service and Learning provides opportunities for you in and out of the classroom and offers service-learning resources to all our faculty. More than 98% of the class of 2015 participated in some form of community service through the Agape Center during their time at Messiah.</p>
      </div>
      <div class="col-25 learning-img">
        <img src="' . $folder . 'img/preparation/internship.jpg">
      </div>
    ';

    $offCampusPrograms = '
      <h2>Off-campus programs </h2>
      <div class="col-75 learning-txt">
        <p>What may look like a quiet, suburban campus in central Pennsylvania is really six continents and 24 time zones. At Messiah, your college experience expands beyond our Mechanicsburg campus and reaches around the globe. You can choose to study or serve in one of 40+ different countries, strengthening the groundwork you\'ve been laying at Messiah all along: how to hear differing perspectives and to weave new insights into a vision that is your own. </p>
        <p>Spend three weeks in Zambia studying health care in the developing world. Spend spring break serving with our sister community in Bolivia. Spend a semester in Italy honing your artistic skills. Go to the Middle East and discover a passion for tutoring children. Whether it\'s Germany, Australia, India or Costa Rica, you see yourself through the eyes of others and understand yourself in new ways. </p>
        <p>When you return home, you see the world very differently, and the more than 600 students that studied abroad last year in more than 40 different countries can attest to that.</p>
      </div>
      <div class="col-25 learning-img">
        <img src="' . $folder . 'img/preparation/internship.jpg">
      </div>
    ';

    $leadership = '
      <h2>Leadership</h2>
      <div class="col-75 learning-txt">
        <p>Messiah\'s campus is an active, busy place. Throughout your time here, you will find many opportunities to "belong" and meet people who share your interests and hobbies, or who challenge you to stretch yourself and try new things.</p>
        <p>One of the ways you might stretch yourself during your time at Messiah is by holding an on-campus leadership position to strengthen the Messiah community, bring new resources or programs to campus or evoke change. There are nearly 160 leadership positions at Messiah that are eligible for meeting a student\'s experiential learning requirement. These positions are available through offices such as Residence Life, College Ministries, Student Involvement and Leadership Programs, Intercultural Office, Office of Alumni and Parent Relations, The Collaboratory, Agape Center, The Pulse, and Sustainability Office.</p>
      </div>
      <div class="col-25 learning-img">
        <img src="' . $folder . 'img/preparation/internship.jpg">
      </div>
    ';
    
    $undergraduateResearch = '
      <h2>Undergraduate research </h2>
      <div class="col-75 learning-txt">
        <p>There\'s an old idea that you get a college education, and then you go out into the world to use it. At Messiah, getting a college education includes using it in the world right now. </p>
        <p>Messiah College offers a wide range of exciting and meaningful research opportunities across all academic programs. Our low faculty-to-student ratio makes Messiah an ideal place for you to collaborate with classmates; faculty; alumni; and regional, national and global organizations. Together you\'ll work to identify and create solutions to real-world problems and to contribute significant research in your areas of scholarship and interest.</p>
        <p>The Collaboratory for Strategic Partnerships and Applied Research is just one of the many ways Messiah helps you put something new you\'ve learned into action. Through the Collaboratory, you can partner with international mission agencies, such as World Vision, to offer your growing expertise to underserved communities throughout the world.</p>
      </div>
      <div class="col-25 learning-img">
        <img src="' . $folder . 'img/preparation/internship.jpg">
      </div>
    ';
    
  }
?>
    <link rel="stylesheet" type="text/css" href="<?php echo $folder; ?>mc-preparation.css?v=22" media="all" />
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="career-preperation">
      <div class="hero">
        <div class="preparation-wrapper right">
            <h1>Career<br>Preparation</h1>
            <h2>Learning by Doing</h2>
        </div>
        <div class="preparation-wrapper" id="start-here-container">
          <a class="start-here center">
            <span>Start Here</span>
            <img src="<?php echo $folder; ?>img/preparation/arrow-down.png" alt="start">
          </a>
        </div>
      </div>
      <div class="tabs-wrapper">
        <div class="preparation-wrapper">
          <div class="tabs-field center">
            <a href="http://www.messiah.edu/career-outcomes"><img src="<?php echo $folder; ?>img/preparation/outcomes.png"> Career Outcomes</a>
            <a href="http://www.messiah.edu/success"><img src="<?php echo $folder; ?>img/preparation/alumni.png"> Alumni Success</a>
            <a class="active"><img src="<?php echo $folder; ?>img/preparation/preparation.png"> Career Preparation</a>
          </div>
        </div>
      </div>

      <div id="loaded">
        <div class="prep-programs padding-v">
          <div class="preparation-wrapper center slider-wrapper">
            <div id="slider-main" class="open">
              <h2>Messiah's career preparation programs</h2>
              <p class="big-txt">We want you to go into the real world feeling truly ready, which is why our Career and Professional Development Center offers numerous career preparation programs. Through participation in these programs, you'll network, meet mentors and perfect your skills so you're ready to go the moment you graduate.</p>
              <div class="program-slides">
                <div class="slide-button prev"></div>
                <div class="slide-button next"></div>
                <div class="slides-container">
                  <ul class="slides">
                    <li><a class="slide-circle" data-id="1"><img src="<?php echo $folder; ?>img/preparation/slide-city.png"><span>Into the<br>City</span></a></li>
                    <li><a class="slide-circle" data-id="2"><img src="<?php echo $folder; ?>img/preparation/slide-rezumania.png"><span>Rezumania</span></a></li>
                    <li><a class="slide-circle" data-id="3"><img src="<?php echo $folder; ?>img/preparation/slide-pizza.png"><span>Pizza With<br>Professionals</span></a></li>
                    <li><a class="slide-circle" data-id="4"><img src="<?php echo $folder; ?>img/preparation/slide-school.png"><span>Exploring<br>Graduate School</span></a></li>
                    <li><a class="slide-circle" data-id="5"><img src="<?php echo $folder; ?>img/preparation/slide-expo.png"><span>Career &<br>Graduate School<br>Expo</span></a></li>
                    <li><a class="slide-circle" data-id="6"><img src="<?php echo $folder; ?>img/preparation/slide-interview.png"><span>Mock Interview<br>Days</span></a></li>
                    <li><a class="slide-circle" data-id="7"><img src="<?php echo $folder; ?>img/preparation/slide-dinner.png"><span>Etiquette Dinner<br>& Mocktail Hour</span></a></li>
                    <li><a class="slide-circle" data-id="8"><img src="<?php echo $folder; ?>img/preparation/slide-conference.png"><span>Adulting: A Mini<br>Conference For<br>Student</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="slide-1-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="1">CLOSE</a>
                </div>
                <h2>INTO THE CITY<br>CAREER IMMERSION PROGRAM</h2>
                <p class="big-txt"><?php echo $slideOverview[1]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[1]; ?>">
                <?php if ($slideVideos[1] != '' ) { ?>
                <a href="<?php echo $slideVideos[1]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-2-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="2">CLOSE</a>
                </div>
                <h2>REZUMANIA</h2>
                <p class="big-txt"><?php echo $slideOverview[2]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[2]; ?>">
                <?php if ($slideVideos[2] != '' ) { ?>
                <a href="<?php echo $slideVideos[2]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-3-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="3">CLOSE</a>
                </div>
                <h2>PIZZA WITH PROFESSIONALS<br>SERIES</h2>
                <p class="big-txt"><?php echo $slideOverview[3]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[3]; ?>">
                <?php if ($slideVideos[3] != '' ) { ?>
                <a href="<?php echo $slideVideos[3]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-4-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="4">CLOSE</a>
                </div>
                <h2>EXPLORING GRADUATE SCHOOL<br>LUNCHEON</h2>
                <p class="big-txt"><?php echo $slideOverview[4]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[4]; ?>">
                <?php if ($slideVideos[4] != '' ) { ?>
                <a href="<?php echo $slideVideos[4]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-5-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="5">CLOSE</a>
                </div>
                <h2>CAREER AND GRADUATE SCHOOL EXPO</h2>
                <p class="big-txt"><?php echo $slideOverview[5]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[5]; ?>">
                <?php if ($slideVideos[5] != '' ) { ?>
                <a href="<?php echo $slideVideos[5]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-6-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="6">CLOSE</a>
                </div>
                <h2>MOCK INTERVIEW DAYS</h2>
                <p class="big-txt"><?php echo $slideOverview[6]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[6]; ?>">
                <?php if ($slideVideos[6] != '' ) { ?>
                <a href="<?php echo $slideVideos[6]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-7-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="7">CLOSE</a>
                </div>
                <h2>ETIQUETTE DINNER & MOCKTAIL HOUR</h2>
                <p class="big-txt"><?php echo $slideOverview[7]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[7]; ?>">
                <?php if ($slideVideos[7] != '' ) { ?>
                <a href="<?php echo $slideVideos[7]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
            <div id="slide-8-content" class="slide-content" style="display: none;">
              <div class="col-50 slide-txt">
                <div class="close-slide">
                  <a class="close-slide-button" data-id="8">CLOSE</a>
                </div>
                <h2>ADULTING: A MINI CONFERENCE FOR STUDENTS</h2>
                <p class="big-txt"><?php echo $slideOverview[8]; ?></p>
              </div>
              <div class="col-50 slide-image-container">
                <img class="slide-image" src="<?php echo $slideImages[8]; ?>">
                <?php if ($slideVideos[8] != '' ) { ?>
                <a href="<?php echo $slideVideos[8]; ?>" data-lity class="video-button"></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div class="learning-by-doing padding-v">
          <div class="preparation-wrapper center">
            <h2>Learning by doing</h2>
            <hr>
            <p class="big-txt">Learning in the classroom is important but actually applying that knowledge in a hands-on way can make all the difference. At Messiah College, the Experiential Learning Initiative (ELI) allows Messiah to take this hands-on learning to a new level by giving students the opportunity to apply what they have learned to various real world contexts--such as an internship/practica, service learning, off-campus program, holding a student leadership position, or participating in undergraduate research. </p>
            <a href="https://www.youtube.com/watch?v=0jdsS_xe1bU&t=36s" data-lity class="video-button" >Watch the Video</a>
          </div>
        </div>
        <div class="learning-tabs">
          <div class="preparation-wrapper">
            <ul>
              <li class="learning-tab active" id="internship-tab">Internship</li>
              <li class="learning-tab" id="service-learning-tab">Service Learning</li>
              <li class="learning-tab" id="off-campus-programs-tab">Off Campus Programs</li>
              <li class="learning-tab" id="leadership-tab">Leadership</li>
              <li class="learning-tab" id="undergraduate-research-tab">Undergraduate Research</li>
            </ul>
          </div>
        </div>
        <div class="learning-tabs-content padding-v">
          <div class="learning-content" id="internship">
            <div class="preparation-wrapper">
              <?php echo $internships; ?>
            </div>
          </div>
          <div class="learning-content" id="service-learning" style="display: none;">
            <div   class="preparation-wrapper">
              <?php echo $serviceLearning; ?>
            </div>
          </div>
          <div class="learning-content" id="off-campus-programs" style="display: none;">
            <div class="preparation-wrapper">
              <?php echo $offCampusPrograms; ?>
            </div>
          </div>
          <div class="learning-content" id="leadership" style="display: none;">
            <div class="preparation-wrapper">
              <?php echo $leadership; ?>
            </div>
          </div>
          <div class="learning-content" id="undergraduate-research" style="display: none;">
            <div class="preparation-wrapper">
              <?php echo $undergraduateResearch; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-preparation.js?v=6"></script>
