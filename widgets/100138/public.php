<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '7';
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick-theme.css">
    <link href="<?php echo $folder; ?>mc-devo.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">


  
    <div class="hero-section"> 
        <figure class="loading-gif"></figure>
        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/dev-office/hero-img-mobile.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/dev-office/hero-gradient.jpg" />
            </picture>
        </div>
        <div class="hero-title-wrapper">
            <h2>Giving</h2>
            <hr>
            <p>Leaving a legacy at Messiah</p>
<p><a href="http://www.messiah.edu/homepage/1297/make_a_gift" class="ath-button">Make a gift</a></p>
        </div>
        <div class="devo-tabs hide-on-mobile">
            <ul>
                <li class="tab-item why-give-item"><a>Why Give?</a></li>
                <li class="tab-item fundraising-priorities-item"><a>Fundraising Priorities</a></li>
                <li class="explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/dev-office/car2-arrow-down.png"></a></li>
                <li class="tab-item ways-to-give-item"><a>Ways to Give</a></li>
                <li class="tab-item transforming-lives-item"><a>Transforming Lives</a></li>
            </ul>
        </div>
    </div>

    <!-- ====== SECTION N_1 ====== -->
    <div class="section" id="why-give">
        <div class="wrapper content">
            <h2 class="center">Why Give?</h2>
            <div class="flexbox">
                <div class="col-55">
                    <p>At Messiah College, we believe that the higher education experience should be transforming. We believe in equipping our students to navigate life's tensions and bring about reconciliation in our world today. We believe in Christ centered education.</p>
                    <p>When you support the Messiah Fund and other areas of need on campus, you support every student and everything they'll experience during their time at Messiah -- from study abroad programs to student-faculty research to service and missions trips impacting the community, your gift makes Messiah's Christ-centered, academically rigorous education possible for our students.
                    </p>
                    <div class="by-the-numbers-btns">
                        <!--<a class="primary-button" href="#">How to give</a>-->
                        <a class="primary-button" href="https://www.messiah.edu/homepage/1297/make_a_gift">Give online</a>
                        <a class="primary-button" href="https://messiah.giftlegacy.com/">Planned and Leadership Gifts</a>
                    </div>
                </div>
                <div class="col-45 center">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/dev-office/campus.jpg" />
                </div>
            </div>
        </div>
        <div class="wrapper content center" id="section-profile">
            <h3><span>Your gifts make a difference</span></h3>
            <div class="flexbox">
                <div class="col-33 section-achievements">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/dev-office/money.png" 
                        alt ="money icon" />
                    <p>The Messiah Fund supplements tuition for <span>100%</span> of the student body.</p>
                </div>
              <div class="col-33 section-achievements">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/dev-office/house-sketch.png"
                        alt="improvements icon" />
                    <p>Campus improvements, student-faculty research, service & mission trips, and new facilities are all made possible by <span>donor support</span>.</p>
                </div>
                <div class="col-33 section-achievements">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/dev-office/piggy-bank.png"
                        alt="piggy bank icon" />
                    <p><span>98%</span> of Messiah College students receive some form of scholarship aid. </p>
                </div>
               
            </div>
        </div>
    </div>

    <!-- ====== SECTION N_2 ====== -->
    <div class="section" id="fp">
        <div class="wrapper content center fp-info"> 
            <h2>Fundraising Priorities</h2>
            <p class="fp-description">Gifts to all campus designations programs make a difference in the lives of our students. However, the giving opportunities below represent the areas of greatest need at Messiah.</p>
            <div id="section-circle-flip">
                <div class="flexbox circle-flip">
                    <div class="col-50">
                        <div class="circle-container">
                            <img 
                                id="circle-1-img"
                                class="fp-image lazyload-img"
                                src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/dev-office/circle-img-1.png"
                                alt="" />
                            <div class="circle-overlay open-overlay-1"></div>
                        </div>
                        <h3>Student Scholarships</h3>
                    </div>
                    <div class="col-50">
                        <div class="circle-container">
                            <img 
                                id="circle-2-img"
                                class="fp-image lazyload-img"
                                src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/dev-office/circle-img-2.png"
                                alt="" />
                            <div class="circle-overlay open-overlay-2"></div>
                        </div>
                        <h3>Academic<br> and Student Life</h3>
                    </div>
                </div>
                <div class="flexbox circle-flip">
                    <div class="col-50">
                        <div class="circle-container">
                            <img
                                id="circle-3-img"
                                class="fp-image lazyload-img"
                                src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/dev-office/circle-img-3.png"
                                alt="" />
                            <div class="circle-overlay open-overlay-3"></div>
                        </div>
                        <h3>Student and Faculty<br> Development</h3>
                    </div>
                    <div class="col-50">
                        <div class="circle-container">
                            <img 
                                id="circle-4-img"
                                class="fp-image lazyload-img"
                                src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/dev-office/circle-img-4.png"
                                alt="" />
                            <div class="circle-overlay open-overlay-4"></div>
                        </div>
                        <h3>Kim S. Phipps Admissions &<br> Welcome Center</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay 1 -->
        <div class="fp-overlay" id="overlay-1" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Fundraising Priorities</h2>
                    <ul class="fp-overlay-tabs">
                        <li><a class="active">Student Scholarships</a></li>
                        <li><a class="open-overlay-2">Academic and Student Life</a></li>
                        <li><a class="open-overlay-3">Student and Faculty Development</a></li>
                        <li><a class="open-overlay-4">Kim S. Phipps Admissions and Welcome Center</a></li>
                    </ul>
                </div>
                <div class="fp-overlay-content" id="">
                    <h3 class="center"><span>Student Scholarships</span></h3>
                    <div class="flexbox">
                    <div class="col-55"><p class="text-justify">Gifts enable students to achieve their dream of earning a Messiah College degree by providing them with much needed financial resources! Our vision is to reduce the burden of student debt while providing an excellent academic experience.</p></div>
<div class="col-45 center sl-wtd-slider-container">
                           <img src="<?php echo $folder; ?>img/dev-office/studentscholarships.jpg" alt="">
                        </div>
                        </div>
                </div> 
            </div>
        </div>

        <!-- Overlay 2 -->
        <div class="fp-overlay" id="overlay-2" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Fundraising Priorities</h2>
                    <ul class="fp-overlay-tabs">
                        <li><a class="open-overlay-1">Student Scholarships</a></li>
                        <li><a class="active">Academic and Student Life</a></li>
                        <li><a class="open-overlay-3">Student and Faculty Development</a></li>
                        <li><a class="open-overlay-4">Kim S. Phipps Admissions and Welcome Center</a></li>
                    </ul>
                </div>
                <div class="fp-overlay-content" id="">
                    <h3 class="center"><span>Academic and Student Life</span></h3>
                    <div class="flexbox">
                    <div class="col-55">
                    <p class="text-justify">Gifts provide industry-leading classrooms and technologies, living spaces, learning and study environments, community gathering spaces, and campus grounds to support the educational experience of our students and campus community.</p></div>
<div class="col-45 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/dev-office/student-life.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Overlay 3 -->
        <div class="fp-overlay" id="overlay-3" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Fundraising Priorities</h2>
                    <ul class="fp-overlay-tabs">
                        <li><a class="open-overlay-1">Student Scholarships</a></li>
                        <li><a class="open-overlay-2">Academic and Student Life</a></li>
                        <li><a class="active">Student and Faculty Development</a></li>
                        <li><a class="open-overlay-4">Kim S. Phipps Admissions and Welcome Center</a></li>
                    </ul>
                </div>
                <div class="fp-overlay-content" id="">
                    <h3 class="center wide-1 "><span>Student and Faculty Development</span></h3>
                    <div class="flexbox">
                    <div class="col-55">                       
                    <p class="text-justify">Gifts provide students with enrichment and service opportunities to help them grow and thrive as they pursue God’s calling on their lives. As well, gifts provide development and research opportunities for faculty/students to promote innovation in their respective academic programs. </p></div>
<div class="col-45 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/dev-office/faculty-dev.jpg" alt="">
                      </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Overlay 4 -->
        <div class="fp-overlay" id="overlay-4" style="display:none;">
            <div class="wrapper content">
                <div class="close-button">
                    <a><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="center">
                    <h2>Fundraising Priorities</h2>
                    <ul class="fp-overlay-tabs">
                        <li><a class="open-overlay-1">Student Scholarships</a></li>
                        <li><a class="open-overlay-2">Academic and Student Life</a></li>
                        <li><a class="open-overlay-3">Student and Faculty Development</a></li>
                        <li><a class="active">Kim S. Phipps Admissions and Welcome Center</a></li>
                    </ul>
                </div>
                <div class="fp-overlay-content" id="">
                    <h3 class="center wide-2"><span>Kim S. Phipps Admissions and Welcome Center</span></h3>
                    <div class="flexbox">
                        <div class="col-55">
                    <p class="text-justify">Gifts to one of Messiah’s newest projects, Kim S. Phipps Admissions and Welcome Center, will help provide a place that will act as a centralized space for prospective students, offering a positive first impression of Messiah College as well as more offices for faculty and staff. </p>
<a class="fp-button primary-button" href="https://www.messiah.edu/info/23049/kim_s_phipps_admissions_and_welcome_center">Visit the site</a></div>
<div class="col-45 center sl-wtd-slider-container">
                            <img src="<?php echo $folder; ?>img/dev-office/welcome-center.jpg" alt="">
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <!-- ====== SECTION N_3 ====== -->
    <div class="section" id="ways-to-give">
        <div class="wrapper content center"> 
            <h2>Ways to give</h2>
            <p>In addition to one-time gifts, there are many different ways for you to make your gift supporting Messiah College students.</p>
            <div class="ways-to-give-wrapper">
                <div class="flexbox ways-to-give-row">
                    <div class="col-50 ways-to-give-col-left first-cell">

                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/dev-office/wtg-panel-3.jpg"
                            alt="" />
                        <div class="block-overlay">
                            <h4>Planned and leadership gifts</h4>
                            <p>By including Messiah College in your will or other deferred gift arrangement, you will play an important part, along with other members of the Heritage Society, in educating future generations of servant leaders through your stewardship plans. Some ways to help leave your legacy on campus through planned gifts are:</p>
<ul>
<li>Estate Planning Gifts</li>
<li>Bequest Provisions</li>
<li>Qualified Retirement Plan</li>
<li>Living Trust</li>
<li>Commercial Annuity</li>
               </div>

                    </div>
                    <div class="col-50 center ways-to-give-col-right second-cell">
                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/dev-office/wtg-panel-2.jpg"
                            alt="" />
                        <div class="block-overlay">
                            <h4>recurring gifts</h4>
                            <p>Create a plan whether monthly, yearly, or whatever is convenient of giving to Messiah:</p>
<ul class="tall-margins">
<li>Debit/Credit Card: <a href="https://commerce.cashnet.com/MC_Annual_Fund">Click to create a donor account and set up your automatic giving through your debit/credit card</a> </br></li>
<li>EFT (Electronic Funds Transfer): <a href="https://commerce.cashnet.com/MC_Annual_Fund">Click to create a donor account and set up your automatic giving through your bank account</a></li>

                        </div>
                    </div>
                </div>
                <div class="flexbox ways-to-give-row">
                    <div class="col-50 ways-to-give-col-left third-cell">


                          <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/dev-office/wtg-panel-1.jpg"
                            alt="" />
                        <div class="block-overlay"> 
                            <h4>employee payroll deductions</h4>
                            <p>Employees can give by contributing to the college by withholding a percentage of their payroll as a gift to Messiah. <a href="https://www.messiah.edu/forms/form/531/en/1/enroll_in_employee_giving">Click to enroll in payroll deduction</a> for the first time or edit an existing payroll deduction.</p>
                        </div>


                    </div>
                    <div class="col-50 center ways-to-give-col-right fourth-cell">
                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/dev-office/wtg-panel-4.jpg"
                            alt="" />
                        <div class="block-overlay">
                            <h4>gifts of assets</h4>
                            <p>Here is a short list of some gifts of assets accepted by Messiah: </p>
                                <ul>
                                    <li>Appreciated Stock/Securities</li>
                                    <li>Real Estate</li>
                                    <li>Personal Property</li>
                                    <li>Life Insurance Policy</li>
                                </ul>
                            <p><span>For more information about any of these types of gifts, <a href="mailto:rbrown@messiah.edu">click to contact Robert Brown</a>, Director of Planned and Leadership Gifts</span>
                            </p>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- div class="center">
                <a class="primary-button" href="#">View other ways to give</a>
            </div -->
        </div>
    </div>

    <!-- ====== SECTION N_4 ====== -->
    <div class="section" id="transforming-lives">
    <div class="wrapper content center">
            <h2>Thanks for your help!</h2>
            <p>We extend our deepest gratitude for your faithful support of Messiah's mission. Your generous giving impacts our students as they develop their skills and passions to serve and lead beyond Messiah's campus.</p>

            <p class="featured-text">Your support is priceless, and for that, we are so grateful!</p>

            <div class="about-video" id="transforming-lives-video">
                <img 
                    class="lazyload-img" 
                    src="<?php echo $folder; ?>img/dev-office/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/dev-office/video-cover.jpg" />
                <a class="about-play"><img src="<?php echo $folder; ?>img/dev-office/play-w.png" alt=""></a>
            </div>

            <h3><span>Transforming Lives</span></h3>
            <div class="section-slider">
                <div class="slide-wrapper transforming-lives">

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/marianne.png" alt="" />
                        <span>Marianne Ramirez Gomez<br>Psychology ‘19</span>
                        <div class="tl-slide-info">
                            <p>“As a first-generation college student in the United States, I would possibly not be here if it was not for the scholarships and donations I have received. I have been able to see God's hand at work as a recipient of the generosity of people who are hoping and willing to make a difference in the life of a student who is striving to make an impact in this world.”</p>
                        </div>
                    </div>

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/chloe.png" alt="" />
                        <span>Chloe Dickson<br> History ‘20</span>
                        <div class="tl-slide-info">
                            <p>“I originally wanted to attend Messiah because I desired a campus environment that would help transition me into adulthood, including an education that pushed and strengthened my faith. Eventually, I was able to attend because of the scholarships they gave me, something I will always be grateful for.”</p>
                        </div>
                    </div>

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/Ian_Tan.png" alt="" />
                        <span>Ian Tan<br>English ‘19</span>
                        <div class="tl-slide-info">
                            <p>“Coming from Malaysia, I wasn’t sure how I was going to afford coming to university in the States, but I was really drawn to Messiah College by the excellent academics offered, spiritual integrity, and the different opportunities they had, especially for international students. Because of Messiah’s generosity, I received several scholarships that have now allowed me to attend Messiah!”</p>
                        </div>
                    </div>


                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/raad.png" alt="" />
                        <span>Raad Khan<br> Business Administration ‘19</span>
                        <div class="tl-slide-info">
                            <p>“When I applied to Messiah, I was overwhelmed by their generosity as I wasn’t sure how I was going to afford all the expenses myself coming from Bangladesh. Messiah has given me so many opportunities not only academically, but also through their various extracurricular activities/clubs that make it easy to get involved.”</p>
                        </div>
                    </div>

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/Kelly_Webber.png" alt="" />
                        <span>Kelly Webber<br>English ‘19</span>
                        <div class="tl-slide-info">
                            <p>“Messiah’s giving has enabled me with so many life changing opportunities. Besides the opportunities it has given me on campus, the biggest opportunity I was given was my semester long cross-cultural to Rwanda. Financial aid and scholarships helped me afford for this trip to which I am exceedingly grateful. My time there was so inspiring and one of the best experiences of my life!”</p>
                        </div>
                    </div>

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/Ethan_Wong.png" alt="" />
                        <span>Ethan Wong<br>Computer Science ‘20</span>
                        <div class="tl-slide-info">
                            <p>“Because of Messiah’s generosity, I am able to afford pursuing a computer science major in America at an incredible school where I also have more opportunities than I would have back in Malaysia, such as the Collaboratory where everyone is so eager to help others in need and teaches you to apply your knowledge to the real world.”</p>
                        </div>
                    </div>

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/Eve_Harbison.png" alt="" />
                        <span>Eve Harbison<br>Communication and Sociology/Anthropology ‘19</span>
                        <div class="tl-slide-info">
                            <p>“Messiah has so many different ways to get involved on campus, and I know that many of these would not be possible without the generous donations that we receive. Additionally, without the funds Messiah receives from donors, I would not be able to attend Messiah. Messiah's community and support has been instrumental in helping me grow into the person I want to be.”</p>
                        </div>
                    </div>

                    <div class="tl-slide">
                        <img src="<?php echo $folder; ?>img/dev-office/Kendra_Sommers.png" alt="" />
                        <span>Kendra Sommers<br>Politics and International Relations ‘21</span>
                        <div class="tl-slide-info">
                            <p>“Growing up overseas as a missionary kid, this only added to the worry about choosing a college, not easily being able to visit colleges in America and finances was always a concern. During the admission process, I was impressed by how much I felt wanted by Messiah, and they were very generous in accommodating to my financial needs. Now at Messiah, I feel confident in knowing that this is where I am meant to be.”</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- ====== SECTION N_5 ====== -->
    <div class="section" id="continue-exploring">
        <div class="wrapper content">
            <h3>Continue Exploring</h3>
            <div>
                <a href="https://www.messiah.edu/info/20833/why_give" class="primary-button">Why Messiah?</a>
                <a href="https://www.messiah.edu/info/22145/grants_office" class="primary-button">The Grants Office</a>
                <a href="https://messiah.giftlegacy.com/" class="primary-button">Planned Gifts – Create a Legacy</a>
                <a href="https://www.messiah.edu/info/22299/contact_the_office_of_development" class="primary-button">Contact the Office of Development</a>
            </div>
        </div>
    </div>

    <link href="<?php echo $folder; ?>lity.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $folder; ?>lity.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>slick.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-devo.js?v=<?php echo $version; ?>"></script>