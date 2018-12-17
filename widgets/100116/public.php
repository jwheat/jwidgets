<a name="grow"></a>
<!--- Grow your faith -->
   
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

 <div class="faith-and-service" id="grow-your-faith">
        <div class="wrapper content center fs-gyf-info">
            <h2>Grow your faith</h2>
            <p>At Messiah, we want you to grow in your faith and have a passion for Christian community. Join a small group. Find a personal mentor. Challenge yourself in a campus ministry role. From the first day you step on campus to your last, we hope your time at Messiah is a time of growth for you spiritually and academically, and a time where you’ll learn to explore and deepen your core convictions and Christian beliefs. <a href="https://www.messiah.edu/info/20051/college_ministries">The Office of College Ministries</a> coordinates many programs and resources to help you take the next step in your faith journey at Messiah.</p>
            <div id="fs-circle-flip">
                <div class="flexbox fs-circle-flip">
                    <div class="col-33">
                        <img class="grow-your-faith-image chapel" id="chapel-image" src="<?php echo $folder; ?>img/faith-and-service/gyf-1.png" alt="">
                        <h3>Chapel</h3>
                    </div>
                    <div class="col-33">
                        <img class="grow-your-faith-image student-led-worship" id="student-led-worship" src="<?php echo $folder; ?>img/faith-and-service/gyf-2.png" alt="">
                        <h3>Student-led Worship</h3>
                    </div>
                    <div class="col-33">
                        <img class="grow-your-faith-image small-groups-and-bible-studies" id="small-groups-and-bible-studies" src="<?php echo $folder; ?>img/faith-and-service/gyf-3.png" alt="">
                        <h3>Small Groups and Bible Studies</h3>
                    </div>
                </div>
            </div>
            <div class="fs-video" id="grow-your-faith-video">
                <img src="<?php echo $folder; ?>img/faith-and-service/grow-your-faith-video-bg.jpg" alt="">
                <a class="fs-play" id="life-on-campus-video"><img src="<?php echo $folder; ?>img/faith-and-service/play-w.png" alt="click to play video"></a>
            </div>
        </div>

        <!-- Chapel -->

        <div class="fs-gyf-overlay" id="chapel-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Grow your faith</h2>
                    <ul class="fs-gyf-tabs">
                        <li><a class="active">Chapel</a></li>
                        <li><a class="student-led-worship">Student-led Worship</a></li>
                        <li><a class="small-groups-and-bible-studies">Small Groups and Bible Studies</a></li>
                    </ul>
                </div>
                <div class="fs-gyf-overlay-content" id="chapel">
                    <h3 class="center line-heading"><span class="hline"></span><span>Chapel</span><span class="hline"></span></h3>               
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Chapel is a central expression of our identity as a Christ-centered community with a deep commitment to spiritual growth and academic excellence. It is a required cocurricular opportunity that exposes you to various forms of worship, speakers and ideas.</p>
                            <p>Chapel is offered on <strong>Tuesday morning, Tuesday evening</strong> and <strong>Thursday morning</strong> and is designed to strengthen biblical literacy and faith formation within the Messiah College community.</p>
                        </div>
                    <div class="col-40 center fs-gyf-slider-container">
                            <img src="<?php echo $folder; ?>img/faith-and-service/chapel-img.jpg" alt="">
                        </div>

                    <p>Some chapels are marked by dynamic student-led worship music, prayer and a brief message from a speaker such as student chaplain, campus pastor, academic scholar, notable leader or individuals from outside organizations. In the past, we have hosted people like best-selling authors Eric Metaxas, Helene Cooper and Bruxy Cavey; scholars and community leaders such as Emmanuel Katongole; and many others.</p>
                    <p>Other chapels feature a more intimate, contemplative setting of worship and intellectual reflection on the Christian faith and life. Another chapel option is a small group atmosphere in which students commit to meet for five-six weeks to discuss and explore a specific topic or book or learn about and engage in a spiritual discipline. These chapels are led by Messiah educators and other invited guests.</p>
                    <p><strong>Students are expected to attend 14 approved chapel opportunities each semester.</strong> You are free to choose the chapels in which you will participate to fulfill that requirement. For all chapels, you will record your attendance electronically with your student I.D. card.</p>
                    </div>
                    <div>
                                <a class="sl-button" href="https://www.messiah.edu/info/20052/chapel">Find out more about chapel</a>
                                <a class="sl-button" href="https://www.messiah.edu/info/21000/chapel_schedule">Chapel schedule</a>

                            </div>
                </div>
            </div>
        </div>

        <!-- Student-led Worship -->

        <div class="fs-gyf-overlay" id="student-led-worship-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Grow your faith</h2>
                    <ul class="fs-gyf-tabs">
                        <li><a class="chapel">Chapel</a></li>
                        <li><a class="active">Student-led Worship</a></li>
                        <li><a class="small-groups-and-bible-studies">Small Groups and Bible Studies</a></li>
                    </ul>
                </div>
                <div class="fs-gyf-overlay-content" id="student-led-worship">
                    <h3 class="center line-heading"><span class="hline"></span><span>Student-led Worship</span><span class="hline"></span></h3>
                    <div class="flexbox">
                        <div class="col-60">
                            <p>At Messiah, you'll have the opportunity to grow your faith and become a spiritual leader. One area where you can combine the two is through student-led worship. Choose from leading or participating in groups ranging from student chaplains and small group Bible studies, to music ministry groups, dance ministries and other worship arts. Our student ministry leaders strive to help the entire campus community commit to a life of faithful discovery and service to Jesus Christ. At Messiah, you’ll find there are numerous ways to learn and grow together with your friends and classmates.</p>

<!--~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="sl-accordion">
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-1" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-1">Acclamation</label>
                                    <div class="sl-acc-tab-content">
                                        <p>Acclamation Dance Ministry provides an outlet for students who share an interest in dance as both a medium of worship and an opportunity for ministry to others through creative expression.</p>
                                    </div>
                                </div>
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-2" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-2">Powerhouse</label>
                                    <div class="sl-acc-tab-content">
                                        <p>On Thursday evenings, students pack out Hostetter Chapel eagerly anticipating the time of corporate worship and reflection known as Powerhouse. Though attendance is purely optional, Powerhouse never fails to fill the chapel with students ready to worship God together.</p>
                                        <p>Powerhouse began as a small student-led Bible study. Today, Powerhouse is still primarily student-initiated and student-led, but has grown to include a team of worship leaders who have devoted their talents to honoring and responding to God through music. It is more than just another weekly event that students add to their schedules. It is a diverse community of worshipers who come together weekly to praise and worship God in a powerful way through shared music and prayer.
                                        <a class="sl-button" href="https://www.messiah.edu/info/20055/worship/2940/powerhouse">Read more</a>
                                        </p>
                                         
                                    </div>
                                </div>
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-3" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-3">Seven</label>
                                    <div class="sl-acc-tab-content">
                                        <p>A cross-section of Messiah College students forms Seven, a group of musicians who share not only musical talent and skill but a heart to share Jesus through musical worship and creativity. Seven collaborates to write music, perform concerts and lead worship in a variety of settings and contexts, both on and off campus.
                                        <a class="sl-button" href="https://www.messiah.edu/homepage/728/seven">Read more</a>

                                        </p>

                                    </div>
                                </div>
                            </div>
<!--~~~~~~~~~~~~~~~~~~~~~~~-->

                        </div>
                        <div class="col-40 center fs-gyf-slider-container overlay-video-wrapper">
                            <img src="<?php echo $folder; ?>img/faith-and-service/student-led-worship.jpg" alt="">
                            <a class="video-play" id="student-led-video-play"><img src="/site/custom_scripts/styles/img/academics/play-w.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Small Groups and Bible Studies -->

        <div class="fs-gyf-overlay" id="small-groups-and-bible-studies-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Grow your faith</h2>
                    <ul class="fs-gyf-tabs">
                        <li><a class="chapel">Chapel</a></li>
                        <li><a class="student-led-worship">Student-led Worship</a></li>
                        <li><a class="active">Small Groups and Bible Studies</a></li>
                    </ul>
                </div>
                <div class="fs-gyf-overlay-content" id="small-groups-and-bible-studies">
                    <h3 class="center line-heading"><span class="hline"></span><span>Small Groups and Bible Studies</span><span class="hline"></span></h3>
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Small groups and Bible studies give you the opportunity to connect with your peers in a more informal setting. The College’s main small-group ministry on campus, propelled by student leaders, is Koinonia--dedicated to small group ministry, leadership training and relationship building. A core team provides leadership, structure, accountability and intergenerational contact in order to equip students to create and run their own small group Bible studies. You can create your own group or join an existing group.</p>
                            <a class="sl-button" href="https://www.messiah.edu/info/20053/opportunities">View a full list of opportunities to get involved</a>
                          
                        </div>
                        <div class="col-40 center fs-gyf-slider-container">
                            <img src="<?php echo $folder; ?>img/faith-and-service/small-group.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>