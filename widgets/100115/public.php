<a name="overview"></a>
<!--- Overview -->
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


<div class="faith-and-service" id="faith-and-service">
        <div class="wrapper content">
            <h2 class="center">Faith and service</h2>
            <div class="flexbox">
                <div class="col-50">
                    <p><strong>Spiritual growth is an essential part of a Messiah College education.</strong> We incorporate <a href="https://www.messiah.edu/info/20003/faith_and_values/5/statements_of_faith">our shared Christian faith</a> in the classroom, through residence life, at chapel, on sports teams, through the arts and in clubs and organizations. Our motto, "Christ Preeminent," shapes every experience you'll have as a student here.</p>

                    <p>At Messiah, we see ourselves as partners in your spiritual journey and are committed to helping you prepare for whatever vocation or service God has called you to. We don't want you to feel like you have to have it all figured out when you come to Messiah though. Our hope is that through your time here, you'll explore, discover and commit to your own personal faith perspective and beliefs--guided through strong Christian convictions--and leave with a strengthened heart for service, a commitment to common good, a faithful intelligence, and a passion for community and justice.</p>
                    <a class="fs-button" href="https://www.messiah.edu/info/20003/faith_and_values/5/statements_of_faith">Statements of Faith</a>
                </div>
                <div class="col-50 center">

                <div class="fs-video" id="faith-and-service-video">
                        <img src="<?php echo $folder; ?>img/faith-and-service/faith-and-service-video-bg.jpg" alt="">
                        <a class="fs-play" id="faith-and-service-video"><img src="<?php echo $folder; ?>img/faith-and-service/play-w.png" alt="Play video"></a>
                    </div>
                </div>    
            </div>
        </div>
        <div class="wrapper content center" id="fs-profile">
            <h3><span>By the Numbers</span></h3>
            <div class="flexbox">
                <div class="col-33 fs-achievements">
                    <img src="<?php echo $folder; ?>img/faith-and-service/binoculars.png" alt="">
                    <p><span>90%</span> of Messiah students studied or served in off campus programs in 2016</p>
                </div>
                <div class="col-33 fs-achievements">
                    <img src="<?php echo $folder; ?>img/faith-and-service/students-hug.png" alt="">
                    <p><span>624</span> students served or studied abroad in <span>37</span> countries</p>
                </div>
                <div class="col-33 fs-achievements">
                    <img src="<?php echo $folder; ?>img/faith-and-service/on-campus.png" alt="">
                    <p><span>60</span> denominations represented in our student body</p>
                </div>
            </div>
        </div>
    </div>