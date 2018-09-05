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

    <a name="to-do"></a>
<!-- What's there to do widget -->
    <div class="student-life" id="what-to-do">
        <div class="wrapper content center sl-wtd-info">
            <h2>What’s there to do?</h2>
            <div id="sl-circle-flip">
                <div class="flexbox sl-circle-flip">
                    <div class="col-33">
                        <img class="what-to-do-image fan-experience" id="fan-experience-image" src="<?php echo $folder; ?>img/student-life/wtd-1.png" alt="">
                        <h3>Fan Experience</h3>
                    </div>
                    <div class="col-33">
                        <img class="what-to-do-image sport-related-activities" id="sport-related-activities" src="<?php echo $folder; ?>img/student-life/wtd-2.png" alt="">
                        <h3>Sport-Related Activities</h3>
                    </div>
                    <div class="col-33">
                        <img class="what-to-do-image clubs-and-organizations" src="<?php echo $folder; ?>img/student-life/wtd-3.png" alt="">
                        <h3>Clubs and Organizations</h3>
                    </div>
                </div>
                <div class="flexbox sl-circle-flip">
                    <div class="col-33">
                        <img class="what-to-do-image campus-traditions" id="campus-traditions-image" src="<?php echo $folder; ?>img/student-life/wtd-4.png" alt="">
                        <h3>Campus Traditions</h3>
                    </div>
                    <div class="col-33">
                        <img class="what-to-do-image on-campus" src="<?php echo $folder; ?>img/student-life/wtd-5.png" alt="">
                        <h3>On-Campus</h3>
                    </div>
                    <div class="col-33">
                        <img class="what-to-do-image off-campus-adventures" src="<?php echo $folder; ?>img/student-life/wtd-6.png" alt="">
                        <h3>Off-Campus Adventures</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fan Experience wid -->

        <div class="sl-wtd-overlay" id="fan-experience-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>What’s there to do?</h2>
                    <ul class="sl-wtd-tabs">
                        <li><a class="active">Fan Experience</a></li>
                        <li><a class="sport-related-activities">Sport-Related Activities</a></li>
                        <li><a class="clubs-and-organizations">Clubs and Organizations</a></li>
                        <li><a class="campus-traditions">Campus Traditions</a></li>
                        <li><a class="on-campus">On-Campus</a></li>
                        <li><a class="off-campus-adventures">Off-Campus Adventures</a></li>
                    </ul>
                </div>
                <div class="sl-wtd-overlay-content" id="fan-experience">
                    <h3 class="center"><span>Fan experience</span></h3>
                    <p class="sl-justify">As a Messiah student, you'll have many opportunities to be a spectator and become a loyal Falcon fan, cheering on our 23 NCAA Division III teams at countless athletic events. Whether you’re at the diamond cheering on the softball team or spending a Saturday watching soccer or lacrosse, it’s a great way to spend time with friends and get in the school spirit!</p>
                    <div class="flexbox">
                        <div class="col-50 center">
                            <img src="<?php echo $folder; ?>img/student-life/champ-cup.png" alt="">
                            <p><span>28</span> NCAA Division III Championships</p>
                        </div>
                        <div class="col-50 center">
                        <img src="<?php echo $folder; ?>img/student-life/top-100.png" alt="">
                            <p><span>Top 100 Schools for Sports Lovers –</span> Money Magazine and Sports Illustrated</p>
                        </div>
                    </div>
                    <div class="center">
                        <a href="#" class="button">GOMESSIAH.COM</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sport-related activities -->

        <div class="sl-wtd-overlay" id="sport-related-activities-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>What’s there to do?</h2>
                    <ul class="sl-wtd-tabs">
                        <li><a class="fan-experience">Fan Experience</a></li>
                        <li><a class="active">Sport-Related Activities</a></li>
                        <li><a class="clubs-and-organizations">Clubs and Organizations</a></li>
                        <li><a class="campus-traditions">Campus Traditions</a></li>
                        <li><a class="on-campus">On-Campus</a></li>
                        <li><a class="off-campus-adventures">Off-Campus Adventures</a></li>
                    </ul>
                </div>
                <div class="sl-wtd-overlay-content" id="sport-related-activities">
                    <h3 class="center"><span>Sport-related activities</span></h3>
                    <div class="flexbox">
                        <div class="col-60">
                            <p>In addition to NCAA athletics, there are many club sports and recreational leagues on campus, like Ultimate frisbee, ice hockey and more. Club teams competes against other colleges and universities, while our recreational teams compete against each other for the coveted campus rec sports league title. As a Messiah athlete, no matter what level you compete at, you practice something of lifelong importance— directing your talents and hard work toward a greater purpose.</p>
                            <div>
                                <a class="sl-button" href="http://www.gomessiah.com/clubsports ">Club Sports</a>
                                <a class="sl-button" href="https://www.messiah.edu/info/20711/rec_sports 
">Rec Sports</a>
                                <a class="sl-button" href="http://www.gomessiah.com ">NCAA Sports</a>
                            </div>
                        </div>
                        <div class="col-40 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/student-life/sport-related-activities.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clubs and Organizations -->

        <div class="sl-wtd-overlay" id="clubs-and-organizations-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>What’s there to do?</h2>
                    <ul class="sl-wtd-tabs">
                        <li><a class="fan-experience">Fan Experience</a></li>
                        <li><a class="sport-related-activities">Sport-Related Activities</a></li>
                        <li><a class="active">Clubs and Organizations</a></li>
                        <li><a class="campus-traditions">Campus Traditions</a></li>
                        <li><a class="on-campus">On-Campus</a></li>
                        <li><a class="off-campus-adventures">Off-Campus Adventures</a></li>
                    </ul>
                </div>
                <div class="sl-wtd-overlay-content" id="clubs-and-organizations">
                    <h3 class="center"><span>Clubs and organizations</span></h3>
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Messiah's campus is an active, busy place. You can engage your passions in any of the 70+ clubs and organizations within the <a href="https://www.messiah.edu/info/21570/student_government_association_sga">Student Government Association (SGA)</a>. These student-run groups play a crucial role in your education, offering you a place to serve, lead, grow and have fun outside the classroom. </p>
                            <div><a class="sl-button" href="https://www.messiah.edu/info/21478/clubs_and_organizations">See our full list of clubs and organizations</a></div>
                        </div>
                        <div class="col-40 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/student-life/clubs-and-organizations.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Campus Traditions -->

        <div class="sl-wtd-overlay" id="campus-traditions-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>What’s there to do?</h2>
                    <ul class="sl-wtd-tabs">
                        <li><a class="fan-experience">Fan Experience</a></li>
                        <li><a class="sport-related-activities">Sport-Related Activities</a></li>
                        <li><a class="clubs-and-organizations">Clubs and Organizations</a></li>
                        <li><a class="active">Campus Traditions</a></li>
                        <li><a class="on-campus">On-Campus</a></li>
                        <li><a class="off-campus-adventures">Off-Campus Adventures</a></li>
                    </ul>
                </div>
                <div class="sl-wtd-overlay-content" id="campus-traditions">
                    <h3 class="center"><span>Campus traditions</span></h3>
                    <div class="flexbox">
                        <div class="col-33">
                            <p>From the moment you step onto campus at Messiah until you cross the stage at Commencement, there are a variety of traditions and annual events that bring students together as a fun and supportive campus community.</p>
                            <ul class="slide-list">
                                <!-- CHANGE -->
                                <li><a id="slide-item-1" data-id="1" class="active">Candlelight services</a></li>
                                <li><a id="slide-item-2" data-id="2">White-out march</a></li>
                                <li><a id="slide-item-3" data-id="3">Powderpuff football</a></li>
                                <li><a id="slide-item-4" data-id="4">Service Day</a></li>
                                <li><a id="slide-item-5" data-id="5">Great music</a></li>
                                <li><a id="slide-item-6" data-id="6">Finals week</a></li>
                                <li><a id="slide-item-7" data-id="7">Yellow Breeches</a></li>
                                <!-- CHANGE -->
                            </ul>
                        </div>
                        <div class="col-66 center sl-wtd-slider-container">
                            <div class="sl-wtd-slider">
                                <div class="sl-wtd-slide">
                                    <!-- CHANGE -->
                                    <img id="campus-tradition-slide-1" src="<?php echo $folder; ?>img/student-life/wtd-slide-1.jpg" alt="">
                                    <img id="campus-tradition-slide-2" src="<?php echo $folder; ?>img/student-life/wtd-slide-2.jpg" alt="" style="display: none">
                                    <img id="campus-tradition-slide-3" src="<?php echo $folder; ?>img/student-life/wtd-slide-3.jpg" alt="" style="display: none">
                                    <img id="campus-tradition-slide-4" src="<?php echo $folder; ?>img/student-life/wtd-slide-4.jpg" alt="" style="display: none">
                                    <img id="campus-tradition-slide-5" src="<?php echo $folder; ?>img/student-life/wtd-slide-5.jpg" alt="" style="display: none">
                                    <img id="campus-tradition-slide-6" src="<?php echo $folder; ?>img/student-life/wtd-slide-6.jpg" alt="" style="display: none">
                                    <img id="campus-tradition-slide-7" src="<?php echo $folder; ?>img/student-life/wtd-slide-7.jpg" alt="" style="display: none">
                                    <!-- CHANGE -->
                                </div>
                                <div class="sl-wtd-slide-nav sl-wtd-nav-left">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </div>
                                <div class="sl-wtd-slide-nav sl-wtd-nav-right">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                                <div class="sl-wtd-slide-nav-buttons" style="display: none">
                                    <!-- CHANGE -->
                                    <div id="slide-nav-button-1" class="sl-wtd-slide-nav-button active" data-id="1"></div>
                                    <div id="slide-nav-button-2" class="sl-wtd-slide-nav-button" data-id="2"></div>
                                    <div id="slide-nav-button-3" class="sl-wtd-slide-nav-button" data-id="3"></div>
                                    <div id="slide-nav-button-4" class="sl-wtd-slide-nav-button" data-id="4"></div>
                                    <div id="slide-nav-button-5" class="sl-wtd-slide-nav-button" data-id="5"></div>
                                    <div id="slide-nav-button-6" class="sl-wtd-slide-nav-button" data-id="6"></div>
                                    <div id="slide-nav-button-7" class="sl-wtd-slide-nav-button" data-id="7"></div>
                                    <!-- CHANGE -->
                                </div>
                            </div>
                            <!-- CHANGE -->
                            <p class="slide-nav-text" id="slide-nav-text-1">Messiah students and their families experience two meaningful candlelight worship services—one at the end of first-year move-in day and one at Baccalaureate the night before Commencement. These powerful ceremonies are a meaningful way to bookend your time at Messiah—and to reflect on all that God has done in your life. <p>
                            <p class="slide-nav-text" id="slide-nav-text-2" style="display: none">Before the Homecoming soccer games, students are given white (free!) T-shirts. The spirited crowd—dressed in white and led by a bagpiper—marches across the Covered Bridge to the soccer field where they inspire Falcon fans to cheer on the big game!</p>
                            <p class="slide-nav-text" id="slide-nav-text-3" style="display: none">The women gear up for a fun football game while the men take on the role as cheerleaders in this fun Homecoming tradition. The competition pits seniors against first-years and sophomores against juniors.</p>
                            <p class="slide-nav-text" id="slide-nav-text-4" style="display: none">Each spring, Messiah hosts Service Day where students and employees have a day off from classes and work, and serve together as a campus community. This is done either as a volunteer for Special Olympics (hosted on our campus) or with any one of many outreach opportunities throughout the local area. </p>
                            <p class="slide-nav-text" id="slide-nav-text-5" style="display: none">Messiah has a reputation for great music. We bring a variety of artists representing diverse genres to campus each semester, and students enjoy free B-Sides concerts featuring up-and-coming artists on Wednesday nights. Throughout the semester, the <a href+"https://www.messiah.edu/info/21557/student_activities_board_sab">Student Activities Board (SAB)</a> and other groups offer bigger-name shows—like Unspoken, CROWDER, Mat Kearney, Twenty-One Pilots, August Burns Red, Magic! and Needtobreathe. Of course, students can also show off their musical talents at our widely popular Coffeehouse events or as part of the Powerhouse worship team.</p>
                            <p class="slide-nav-text" id="slide-nav-text-6" style="display: none">Studying for finals likely doesn’t seem like fun, but Messiah works hard to make that week more bearable for students. During finals week, Lottie Dining Hall opens one night between 10 p.m. and midnight and employee volunteers serve students free pancakes and tots. Then, at midnight every night during finals week, students let off a little steam with a collective scream out their windows! 
</p>
                            <p class="slide-nav-text" id="slide-nav-text-7" style="display: none">The beautiful Yellow Breeches Creek runs right through Messiah’s campus, and on any given day, you’ll see students enjoying a nap in a hammock, studying with friends, tubing or canoeing, and even fishing!</p>
                            <!-- CHANGE -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- On Campus -->

        <div class="sl-wtd-overlay" id="on-campus-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>What’s there to do?</h2>
                    <ul class="sl-wtd-tabs">
                        <li><a class="fan-experience">Fan Experience</a></li>
                        <li><a class="sport-related-activities">Sport-Related Activities</a></li>
                        <li><a class="clubs-and-organizations">Clubs and Organizations</a></li>
                        <li><a class="campus-traditions">Campus Traditions</a></li>
                        <li><a class="active">On-Campus</a></li>
                        <li><a class="off-campus-adventures">Off-Campus Adventures</a></li>
                    </ul>
                </div>
                <div class="sl-wtd-overlay-content" id="on-campus">
                    <h3 class="center"><span>On-campus</span></h3>
                    <div class="flexbox">
                        <div class="col-60">
                            <p>When looking for events or activities on campus, students know where to look: the <a href="https://www.messiah.edu/info/21557/student_activities_board_sab">Student Activities Board (SAB)</a> and <a href="https://www.messiah.edu/homepage/1785/eyas_-_student_alumni_council">Eyas</a>, the Student Alumni Council. SAB is a student-run organization that plans dances, concerts, coffeehouses, films, off-campus excursions and many other activities. Eyas exists to enhance school spirit, establish legacy and tradition, build class identity, and facilitate student and alumni interaction.</p>
                            <p>Like live entertainment? Hang out in the student union and catch a free concert featuring up-and-coming bands during Wednesday night <a href="https://www.messiah.edu/info/21558/b-sides">B-Sides</a>, play a game of pool or watch your classmates perform during the monthly <a href="https://www.messiah.edu/info/21622/student_talent/2632/coffeehouse">Coffeehouse</a>. Want to relax? Grab a latte and head to our on-campus theater to catch a movie. Looking to be active? Try the bouldering wall at <a href="https://www.messiah.edu/info/20887/the_loft">The Loft</a>, jog along the Yellow Breeches Creek, or show off your dance moves at the Christmas Tradition or Spring Fling. From experiencing amazing new cuisine at the Food Truck Fest to trying your hand at pumpkin carving at the annual Fall Festival or Spring Sha-bing, your social calendar won’t be lacking.</p>
                        </div>
                        <div class="col-40 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/student-life/on-campus.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Off Campus -->

        <div class="sl-wtd-overlay" id="off-campus-adventures-overlay" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>What’s there to do?</h2>
                    <ul class="sl-wtd-tabs">
                        <li><a class="fan-experience">Fan Experience</a></li>
                        <li><a class="sport-related-activities">Sport-Related Activities</a></li>
                        <li><a class="clubs-and-organizations">Clubs and Organizations</a></li>
                        <li><a class="campus-traditions">Campus Traditions</a></li>
                        <li><a class="on-campus">On-Campus</a></li>
                        <li><a class="active">Off-Campus Adventures</a></li>
                    </ul>
                </div>
                <div class="sl-wtd-overlay-content" id="off-campus-adventures">
                    <h3 class="center"><span>Off-campus adventures</span></h3>
                    <div class="flexbox">
                        <div class="col-60">
                            <p>While there’s plenty to do on campus, we realize you might want to explore the surrounding area, too. Luckily, we’re only a short drive from Harrisburg—Pennsylvania’s capital city—and many other towns and metropolitan areas. Within just a few minutes of campus, you’ll find plenty of restaurants, shopping, entertainment venues, movie theaters, galleries, coffee shops and museums.</p>
                            <div class="sl-accordion">
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-1" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-1"><img src="<?php echo $folder; ?>img/student-life/off-campus-explore.png" alt=""> Explore</label>
                                    <div class="sl-acc-tab-content">
                                        <p>One way you can spend time off campus is through one of the many <a href="https://www.messiah.edu/info/21557/student_activities_board_sab">Student Activities Board (SAB)</a> excursions held throughout the year. In the past, they've taken trips to professional sporting events, museums, Broadway shows and nearby cities. Or you can visit the “sweetest place on Earth” (Hershey!) to grab some chocolate and visit <a target="_blank" href="http://www.hersheypark.com/">Hersheypark</a>, head to Inner Harbor in Baltimore, see the battlefields of Gettysburg and more.</p>
                                    </div>
                                </div>
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-2" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-2"><img src="<?php echo $folder; ?>img/student-life/off-campus-get-active.png" alt=""> Get Active</label>
                                    <div class="sl-acc-tab-content">
                                        <p>Messiah’s scenic location means there’s plenty of indoor and outdoor activities close by. <a target="_blank" href="http://www.climbnasium.net/home.html">The Climbnasium</a>, an indoor rock-climbing facility, will get your blood pumping. Play laser tag, mini golf or go go-karting at the <a target="_blank" href="https://www.carlislesportsemporium.com/">Sports Emporium</a>. Hike the <a target="_blank" href="http://www.appalachiantrail.org/home/explore-the-trail">Appalachian Trail</a>, which is accessible only miles from campus, ski the slopes of nearby Roundtop Resport, or tube or fish in the Yellow Breeches Creek.</p>
                                    </div>
                                </div>
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-3" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-3"><img src="<?php echo $folder; ?>img/student-life/off-campus-shop.png" alt=""> Shop ‘til you drop</label>
                                    <div class="sl-acc-tab-content">
                                        <p>Looking for groceries, school supplies or other shopping? Don’t worry—all of the essential stores are nearby. The <a target="_blank" href="https://shopcapitalcitymall.com/">Capital City Mall</a> in Camp Hill and the Carlisle Pike in Mechanicsburg have plenty of options like Target, Wegmans, Walmart and more.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-40 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/student-life/off-campus-adventures.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
