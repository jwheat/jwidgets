<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '3';
    $folder = '/site/custom_scripts/styles/';
  }
  $pageVersion = "1";
  if (isset($_COOKIE['mc_student_type'])) {
    if ($_COOKIE['mc_student_type'] == '0') {
      $pageVersion = "2";
    }
  }
?>
    <link href="<?php echo $folder; ?>mc-search-programs.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick-theme.css">
    <link href="<?php echo $folder; ?>mc-academics.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">

    <!-- GRADUATE PAGE -->
    <div id="graduate-students" <?php echo ($pageVersion == '1' ? '' : 'style="display: none"'); ?>>
        <div class="hero-section loading-hero-img">
            <figure class="loading-gif"></figure>
            <div class="parallax-slider">
                <picture>
                    <source
                        media="(max-width: 766px)"
                        data-srcset="<?php echo $folder; ?>img/academics/hero-img-mobile.jpg" />
                    <img
                        class="lazyload-img hero-img"
                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/academics/academics-hero.jpg" />
                </picture>
            </div>
            <div class="hero-title-wrapper">
                <h2>Graduate<br>Studies</h2>
                <hr>
                <p>Graduate-level academics at Messiah</p>
                <button class="hero-btn primary-button">switch to undergraduate<i class="fa fa-exchange"></i></button>
            </div>
            <div class="graduate-tabs header-tabs hide-on-mobile">
                <ul>
                    <li class="tab-item overview-item"><a>Overview</a></li>
                    <li class="tab-item our-programs-item"><a>Our Programs</a></li>
                    <li class="explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/academics/car2-arrow-down.png"></a></li>
                    <li class="tab-item why-messiah-item"><a>Why Messiah?</a></li>
                    <li class="tab-item graduate-school-item"><a>Graduate School</a></li>
                </ul>
            </div>
        </div>

        <!-- ====== SECTION N_1 ====== -->
        <div class="section overview" id="overview">
            <div class="wrapper content">
                <h2 class="center">Graduate studies academic overview</h2>
                <div class="flexbox">
                    <div class="col-50">
                        <p>
                        Are you ready to advance your education and career with a graduate degree or certificate? Messiah College is a <a href="https://www.messiah.edu/info/20020/recognitions">nationally ranked</a>, accredited college that successfully integrates top-tier academics and Christian faith. All of our graduate programs provide academic rigor and excellence through a convenient and flexible mix of learning options. Our <a href="https://www.messiah.edu/info/22860/degrees_and_certificates">nine programs</a> include eight master’s degrees, two doctoral degrees, and numerous graduate certificates and post-master’s certificates. The coursework for most graduate programs is conducted primarily online, with some being fully online and others being fully residential.
                        </p>
                    </div>
                    <div class="col-50 center">
                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/student-studying.jpg" />
                    </div>
                </div>
            </div>
            <div class="wrapper content center" id="section-profile">
                <h3><span>By the Numbers</span></h3>
                <div class="flexbox">
                    <div class="col-33 section-achievements">
                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/academic-cap.png"
                            alt ="binoculars icon" />
                        <p>Named in the <span>Top 50 Best Christian Graduate Schools</span> by Christian Universities Online</p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/certificate.png"
                            alt="students hug icon" />
                        <p>Messiah College offers<span> 35+ graduate degrees and certificate programs.</span></p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img
                            class="lazyload-img"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/students-hug.png"
                            alt="on campus icon" />
                        <p>Messiah College has <span>641 graduate students</span> representing <span>38 states and four countries.</span></p>
                    </div>
                </div>
                <div class="overview-btn-wrapper center">
                    <a class="primary-button" href="https://www.messiah.edu/info/20020/recognitions">VIEW MORE DISTINCTIVES</a>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_2 ====== -->
        <div class="section square-panel-section" id="our-programs">
            <div class="wrapper content center">
                <h2>Explore Messiah’s graduate programs</h2>
                <div class="square-panel-section-wrapper">
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 square-panel-section-col-left first-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/info/22387/degrees_and_certificates">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-b-l.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Business and leadership</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 square-panel-section-col-center second-cell">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/info/23251/degrees_and_certificates">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-counseling.jpg"
                                        alt="" />
                                        <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Counseling</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-right third-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/graduate/dietetic-internship">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-dietetics.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>dietic internship</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 square-panel-section-col-left fourth-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/info/23217/degrees_and_certificates">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-edu.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>education</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-center fifth-cell">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/info/23126/degree_programs">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-higher-ed.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Higher education</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-right sixth-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/info/23276/degrees_and_tracks">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-conducting.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Music conducting</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 square-panel-section-col-left seventh-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="https://www.messiah.edu/info/23125/degree_programs">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-nursing.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Nursing</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 square-panel-section-col-center eight-cell">
                            <a class="our-programs-link-panel" href="http://www.messiah.edu/mot">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-ot.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Occupational therapy</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-right nineth-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="http://www.messiah.edu/dpt">
                                <div class="img-container">
                                    <img
                                        class="lazyload-img"
                                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                        data-src="<?php echo $folder; ?>img/academics/dept-grad-dpt.jpg"
                                        alt="" />
                                    <div class="img-overlay"></div>
                                </div>
                                <div class="block-overlay">
                                    <h4>Physical therapy</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_3 ====== -->
        <div class="section" id="why-messiah">
            <div class="wrapper content center why-messiah-info">
                <h2>Why Messiah?</h2>
                <p class="why-messiah-description">Messiah’s graduate programs are designed to challenge your intellect, engage your faith and fit your busy lifestyle. </p>
                <div id="section-circle-flip">
                    <div class="flexbox circle-flip">
                      <div class="col-33">
                          <div class="circle-container">
                              <img
                                  id="circle-0-img"
                                  class="why-messiah-image lazyload-img"
                                  src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                  data-src="<?php echo $folder; ?>img/academics/academic-excellence-circle.png"
                                  alt="" />
                              <div class="circle-overlay open-overlay-0"></div>
                          </div>
                          <h3>Competitively priced</h3>
                      </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    id="circle-1-img"
                                    class="why-messiah-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/faith-commitment-circle.png"
                                    alt="" />
                                <div class="circle-overlay open-overlay-1"></div>
                            </div>
                            <h3>Academic excellence</h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    id="circle-2-img"
                                    class="why-messiah-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/competitively-priced-circle-2.png"
                                    alt="" />
                                <div class="circle-overlay open-overlay-2"></div>
                            </div>
                            <h3>Faith commitment</h3>
                        </div>
                    </div>
                    <div class="flexbox circle-flip">
                        <div class="col-50">
                            <div class="circle-container">
                                <img
                                    id="circle-3-img"
                                    class="why-messiah-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/exceptional-faculty-circle.png"
                                    alt="" />
                                <div class="circle-overlay open-overlay-3"></div>
                            </div>
                            <h3>Exceptional faculty</h3>
                        </div>
                        <div class="col-50">
                            <div class="circle-container">
                                <img
                                    id="circle-4-img"
                                    class="why-messiah-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/flexible-class-circle.png"
                                    alt="" />
                                <div class="circle-overlay open-overlay-4"></div>
                            </div>
                            <h3>Flexible class formats</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Overlay 0 -->
            <div class="why-messiah-overlay" id="overlay-0" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Why Messiah?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="active">Competitively priced</a></li>
                            <li><a class="open-overlay-1">Academic excellence</a></li>
                            <li><a class="open-overlay-2">Faith commitment</a></li>
                            <li><a class="open-overlay-3">Exceptional faculty</a></li>
                            <li><a class="open-overlay-4">Flexible class formats</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Competitively priced</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Messiah College strives to keep our graduate programs competitively priced and accessible, and we offer a variety of financial aid and discount opportunities to our graduate students. Types of aid available include student loans, student employment, grants, private scholarships, veterans’ benefits, graduate programs discounts and employer assistance.</p>
                            <a class="primary-button" href="https://www.messiah.edu/info/21313/financial_aid_for_graduate_programs">Financial Aid </a>
                            <a class="primary-button" href="https://www.messiah.edu/info/22941/tuition_and_fees">Tuition and Fees </a>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/academic-excellence.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 1 -->
            <div class="why-messiah-overlay" id="overlay-1" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Why Messiah?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-0">Competitively priced</a></li>
                             <li><a class="active">Academic excellence</a></li>
                            <li><a class="open-overlay-2">Faith commitment</a></li>
                            <li><a class="open-overlay-3">Exceptional faculty</a></li>
                            <li><a class="open-overlay-4">Flexible class formats</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Academic excellence</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Messiah College successfully integrates top-tier academics and Christian faith. To meet the need of working professionals, our curriculum and coursework is designed to be instantly relevant to your career. </p>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/faith-commitment.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 2 -->
            <div class="why-messiah-overlay" id="overlay-2" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Why Messiah?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-0">Competitively priced</a></li>
                            <li><a class="open-overlay-1">Academic excellence</a></li>
                            <li><a class="active">Faith commitment</a></li>
                            <li><a class="open-overlay-3">Exceptional faculty</a></li>
                            <li><a class="open-overlay-4">Flexible class formats</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Faith commitment</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Messiah College is a Christian college of the liberal and applied arts and sciences with a mission of educating men and women for lives of service, leadership and reconciliation. As a graduate student, you will be called to view your career and education through the lens of faith as you experience our distinct Christian and values-based education.</p>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/competitively-priced-modal.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 3 -->
            <div class="why-messiah-overlay" id="overlay-3" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Why Messiah?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-0">Competitively priced</a></li>
                            <li><a class="open-overlay-1">Academic excellence</a></li>
                            <li><a class="open-overlay-2">Faith commitment</a></li>
                            <li><a class="active">Exceptional faculty</a></li>
                            <li><a class="open-overlay-4">Flexible class formats</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Exceptional faculty</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Our faculty creates a stimulating learning environment that will challenge and advance you in your area of expertise. Courses are taught by Messiah College faculty, who are effective Christian educators, practicing professionals, outstanding scholars, researchers, authors and sought-after experts in their fields.</p>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/exceptional-faculty.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 4 -->
            <div class="why-messiah-overlay" id="overlay-4" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Why Messiah?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-0">Competitively priced</a></li>
                            <li><a class="open-overlay-1">Academic excellence</a></li>
                            <li><a class="open-overlay-2">Faith commitment</a></li>
                            <li><a class="open-overlay-3">Exceptional faculty</a></li>
                            <li><a class="active">Flexible class formats</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Flexible class formats</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>The majority of Messiah College’s graduate courses are conducted primarily online; however, some programs are fully online, others offer a hybrid format that combines online courses with several weeklong on-campus sessions, and a couple are full-time traditional programs.</p>
                            <div class="sl-accordion">
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-1" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-1"> Traditional</label>
                                    <div class="sl-acc-tab-content">
                                        <p>Students meet at a physical location during scheduled meeting times for the duration of the course.</p>
                                        <p>
                                        The following graduate programs are offered in a traditional format:
                                        <ul>
                                            <li>Occupational therapy</li>
                                            <li>Physical therapy</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-2" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-2">Hybrid</label>
                                    <div class="sl-acc-tab-content">
                                        <p>Most of Messiah’s graduate programs are conducted in a hybrid format which combines face-to-face meetings and online delivery. </p>
                                        <p>The following graduate programs are offered in a hybrid format:
                                        <ul>
                                            <li>Counseling</li>
                                            <li>Education *</li>
                                            <li>Higher education</li>
                                            <li>Music conducting</li>
                                            <li>Nursing</li>
                                            <li>Dietetic internship</li>
                                        </ul>

                                    </p>
                                    <p>
                                        * Students who pursue the PDE certification in special education (PreK-8 or 7-12) as a part of the M.Ed. degree or as a non-degree option must come to campus for some one-week intensive courses. All other education graduate programs can be completed entirely online.

                                        </p>
                                    </div>
                                </div>
                                <div class="sl-acc-tab">
                                    <input id="sl-acc-tab-3" type="checkbox" name="sl-acc-tabs">
                                    <label for="sl-acc-tab-3">Online</label>
                                    <div class="sl-acc-tab-content">
                                        <p>Students access all course materials online through a learning management system: there are no requirements for face-to-face sessions. </p>

                                        <p>The following graduate programs are offered in an online format:
                                            <ul>
                                                <li>Business and leadership</li>
                                                <li>Education *</li>
                                            </ul></p>


                                            <p>* Students who pursue the PDE certification in special education (PreK-8 or 7-12) as a part of the M.Ed. degree or as a non-degree option must come to campus for some one-week intensive courses. All other education graduate programs can be completed entirely online.
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/flexible-class.jpg" alt="" />
<a class="primary-button" href="https://www.messiah.edu/info/22871/program_and_class_format">Learn more about Messiah’s<br />graduate class formats.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_4 ====== -->
        <div class="section" id="graduate-school">
            <picture>
                <source
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/academics/hero-img-mobile.jpg" />
                <img
                    class="lazyload-img"
                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/academics/graduate-studies-bg.jpg" />
            </picture>
            <div class="wrapper content center">
                <h2>School of Graduate Studies</h2>
                <p>Messiah College’s School of Graduate Studies educates students for a lifetime of intellectual exploration, ethical leadership and exceptional professional practice within a complex world.</p>

                <a class="primary-button" href="https://www.messiah.edu/gradprograms">Learn more</a>
            </div>
        </div>

        <!-- ====== SECTION N_5 ====== -->
        <div class="section" id="continue-exploring">
            <div class="wrapper content">
                <h3>Continue Exploring</h3>
                <div>
                    <a href="https://www.messiah.edu/download/downloads/id/2318/GraduateStudiesCatalog.pdf" class="primary-button">Graduate catalog (PDF)</a>
                    <a href="https://www.messiah.edu/info/22941/tuition_and_fees" class="primary-button">Graduate tuition and fees</a>
                    <a href="https://www.messiah.edu/info/21084/graduate_admissions" class="primary-button">Graduate admissions</a>
                    <a href="https://www.messiah.edu/info/22865/student_services_and_information" class="primary-button">Graduate student services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END GRADUATE PAGE -->


    <!-- UNDERGRADUATE PAGE -->
    <div id="undergraduate-students" <?php echo ($pageVersion == '2' ? '' : 'style="display: none"'); ?>>
        <div class="hero-section loading-hero-img">
            <figure class="loading-gif"></figure>
            <div class="parallax-slider">
                <picture>
                    <source
                        media="(max-width: 766px)"
                        data-srcset="<?php echo $folder; ?>img/academics/hero-img-mobile.jpg" />
                    <img
                        class="lazyload-img hero-img"
                        src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/academics/academics-hero6.jpg" />
                </picture>
            </div>
            <div class="hero-title-wrapper">
                <h2>Academic<br>Distinction</h2>
                <hr>
                <p>Undergraduate programs at Messiah</p>
                <button class="hero-btn primary-button">switch to graduate<i class="fa fa-exchange"></i></button>
            </div>
            <div class="undergraduate-tabs header-tabs hide-on-mobile">
                <ul>
                    <li class="tab-item what-do-you-want-to-study-item"><a>What do you want to study?</a></li>
                    <li class="tab-item accelerated-options-item"><a>accelerated options</a></li>
                    <li class="explore-button"><a class="gtm-car-scroll">Explore Messiah<br><img src="<?php echo $folder; ?>img/academics/car2-arrow-down.png"></a></li>
                    <li class="tab-item academics-opportunities-item"><a>academics opportunities</a></li>
                    <li class="tab-item academic-support-item"><a>academic support</a></li>
                </ul>
            </div>
        </div>

        <!-- ====== SECTION N_1 ====== -->
        <div class="section overview overview-2" id="overview-2">
            <div class="wrapper content">
                <h2 class="center">Integrating faith and learning</h2>
                <div class="flexbox">
                    <div class="col-50">
                        <p>
                        Messiah College is a nationally ranked private Christian college that integrates rigorous academics and Christian faith into all of our academic programs. Messiah's faculty are outstanding teachers, scholars and researchers who will mentor and advise you as you expand your possibilities. We offer bachelor's degrees in <a href="https://www.messiah.edu/majors-minors-programs">85+ majors</a>. Specialized programs include <a href="https://www.messiah.edu/info/20698/off_campus_programs">off-campus study</a>, research, <a href="https://www.messiah.edu/agape">service-learning</a>, <a href="https://www.messiah.edu/info/23064/internship_program">internships</a>, <a href="https://www.messiah.edu/3-allied-programs">partner programs with other institutions</a>, <a href="https://www.messiah.edu/info/20103/three-year_degree_options">three-year degree options</a> and a <a href="https://www.messiah.edu/info/20098/college_honors_program">flourishing College Honors Program</a>.
                        </p>
                    </div>
                    <div class="col-50 center">
                        <div class="academics-video" id="overview-of-academics-video">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/faculty-students.jpg" />
                            </div>
                    </div>
                </div>
            </div>
            <div class="wrapper content center" id="section-profile">
                <h3><span>By the Numbers</span></h3>
                <div class="flexbox">
                    <div class="col-33 section-achievements">
                        <img
                            class="lazyload-img grad-rate"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/grad-cap.svg"
                            alt ="binoculars icon" />
                        <p><span>74.1%</span> 4-year grad rate (vs. 52% national average)</p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img
                            class="lazyload-img class-size"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/classroom.svg"
                            alt="students hug icon" />
                        <p>Average class size <span>20</span></p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img
                            class="lazyload-img ratio"
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/faculty-to-student-ratio.svg"
                            alt="on campus icon" />
                        <p><span>12: 1</span> student faculty ratio</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_2 ====== -->
        <div class="section" id="what-do-you-want-to-study">
            <div class="wrapper content center">
                <h2>Messiah's 150+ academic programs</h2>
                <p>Search by keywords or interests to explore which of Messiah's 85+ academic programs would be a good fit for you.</p>

                <div class="search-box-container">
                    <input placeholder="Search for programs:" class="show-search" id="search-for-programs" type="text">
                    <button class="search-programs-btn">GO</button>
                </div>

                <div id="components">
                <div class="search-box full-screen" id="large-search-panel" style="display:none">
                    <div class="back">
                        <p>Back to programs</p>
                    </div>

                    <p class="title">Search by program names or interests:</p>

                    <div class="block ie-fix">
                        <div id="auto-complete" class="search-suggest" unselectable="on"></div>

                        <input class="txt" type="text" id="program_search" name="program_search" value="" autocomplete="off">

                        <input type="hidden" name="ga_count" value="1"><input type="hidden" name="ga_id" value="259d568a-d302-48b8-ad94-af8ae98d1820">
                        <input class="btn-cancel" type="submit" value="x" id="cancel-search" style="display:none">

                        <div class="auto-suggest-panel" style="display:none">
                            <div class="sugg-info">
                                <p>Suggested search terms:</p>
                            </div>
                            <div class="auto-suggest-items">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script id="autocomplete-template" type="text/x-jQuery-tmpl">
                <div id="autocomplete-item-${id}" class="auto-suggest" data-keyword="${keyword}"><span>${selection}</span>${rest}</div>
            </script>

                <div>
                    <a href="http://www.messiah.edu/majors-minors-programs" class="primary-button">View all programs</a>
                     <!--<a href="#" class="primary-button">View by interest</a>-->
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_3 ====== -->
        <div class="section square-panel-section square-panel-section-2" id="accelerated-options">
            <div class="wrapper content center">
                <h2>Accelerated options</h2>
                <p>There are many ways to streamline your education at Messiah—and save time and money. Taking college classes while still in high school, earning multiple degrees at once or partnering with other institutions to earn an advanced degree are just a few of the ways Messiah partners with you to graduate college on your time. </p>
                <div class="square-panel-section-wrapper">
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 sps square-panel-section-col-left hw-narrow">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-panel-1.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>Athletic training </h4>
                                <p>Obtain a B.S. and a master's in athletic training in just five years.</p>
                                <a class="primary-button" href="https://www.messiah.edu/athletic-training">read more</a>
                            </div>
                        </div>
                        <div class="col-33 center sps square-panel-section-col-center hw-narrow">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-panel-2.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>3-year degree</h4>
                                <p>Earn your bachelor's degree early—in three or 3½ years.</p>
                                <a class="primary-button" href="http://www.messiah.edu/info/20103/three-year_degree_options">read more</a>
                            </div>
                        </div>
                        <div class="col-33 center sps square-panel-section-col-right hw-narrow">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-3-year.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>3+ Partner Programs</h4>
                                <p>Streamline your undergraduate and advanced degrees.</p>
                                <a class="primary-button" href="http://www.messiah.edu/3-allied-programs">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-50 sps square-panel-section-col-left hw-short">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-dual-enrollment-2.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>Dual Enrollment</h4>
                                <p>Take college courses that meet high school graduation and college credit requirements.</p>
                                <a class="primary-button" href="http://www.messiah.edu/info/20102/dual_enrollment">read more</a>
                            </div>
                        </div>
                        <div class="col-50 sps center square-panel-section-col-right hw-short">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-summer-online-2.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>Summer Online</h4>
                                <p>Earn academic credits with flexible, affordable online summer courses.</p>
                                <a class="primary-button" href="http://www.messiah.edu/info/20104/undergrad_online">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_4 ====== -->
        <div class="section" id="academics-opportunities">
            <div class="wrapper content center ao-info">
                <h2>Academic opportunities</h2>
                <p class="academic-opportunities-description">Students at Messiah enhance their classroom experiences by taking advantage of a rich variety of campus resources and opportunities that help prepare them to lead lives of service, leadership and reconciliation.</p>
                <div id="circle-flip">
                    <div class="flexbox circle-flip">
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    class="academic-opportunities-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-1b.png"
                                    alt="a discerning spirit image" />
                                <div class="circle-overlay ao-overlay-1"></div>
                            </div>
                            <h3>Career</h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    class="academic-opportunities-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-2.png"
                                    alt="real world creativity image" />
                                <div class="circle-overlay ao-overlay-2"></div>
                            </div>
                            <h3>Research</h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    class="academic-opportunities-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-3.png"
                                    alt="authentic power to lead image" />
                                <div class="circle-overlay ao-overlay-3"></div>
                            </div>
                            <h3>Global and Service</h3>
                        </div>
                    </div>
                    <div class="flexbox circle-flip">
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    class="academic-opportunities-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-4.png"
                                    alt="an ethic of servanthood image" />
                                <div class="circle-overlay ao-overlay-4"></div>
                            </div>
                            <h3>merit</h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    class="academic-opportunities-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-5.png"
                                    alt="passion for christian community image" />
                                <div class="circle-overlay ao-overlay-5"></div>
                            </div>
                            <h3>sustainability</h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img
                                    class="academic-opportunities-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-6b.png"
                                    alt="sense of calling image" />
                                <div class="circle-overlay ao-overlay-6"></div>
                            </div>
                            <h3>diversity</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 1 -->
            <div class="academic-opportunities-overlay" id="ao-overlay-1" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Academic Opportunities</h2>
                        <ul class="academic-opportunities-overlay-tabs">
                            <li><a class="active">Career</a></li>
                            <li><a class="ao-overlay-2">Research </a></li>
                            <li><a class="ao-overlay-3">Global and service</a></li>
                            <li><a class="ao-overlay-4">Merit</a></li>
                            <li><a class="ao-overlay-5">Sustainability</a></li>
                            <li><a class="ao-overlay-6">Diversity</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Career</span></h3>

                    <div class="flexbox">
                        <div class="col-50">
                            <p>From your first year to senior year, our career professionals help you determine your strengths, select a major, weigh your options, network with professionals, find internships and research graduate school and employment opportunities.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/23064/internship_program" class="primary-button">Internship program</a>
                                <a href="https://www.messiah.edu/info/23055/career_and_professional_development_center" class="primary-button">Center for Career and Professional Development</a>
                                <a href="https://www.messiah.edu/eli" class="primary-button">Experiential Learning</a>
                            </div>
                        </div>
                        <div class="col-50 center">
                            <div class="overlay-video-wrapper">
                                <img src="<?php echo $folder; ?>img/academics/ao-50-career.jpg" alt="" />
                                <a class="video-play" id="career-video-play"><img src="<?php echo $folder; ?>img/academics/play-w.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 2 -->
            <div class="academic-opportunities-overlay" id="ao-overlay-2" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Academic Opportunities</h2>
                        <ul class="academic-opportunities-overlay-tabs">
                            <li><a class="ao-overlay-1">Career</a></li>
                            <li><a class="active">Research </a></li>
                            <li><a class="ao-overlay-3">Global and service</a></li>
                            <li><a class="ao-overlay-4">Merit</a></li>
                            <li><a class="ao-overlay-5">Sustainability</a></li>
                            <li><a class="ao-overlay-6">Diversity</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Research</span></h3>

                    <div class="flexbox">
                        <div class="col-50">
                            <p>Messiah College offers students a wide range of exciting and meaningful research opportunities across all academic programs. Our low faculty-to-student ratio makes Messiah an ideal place for you to collaborate with classmates, faculty, alumni and regional, national and global organizations.</p>
                            <div>
                            </div>
                        </div>
                        <div class="col-50 center">
                            <div class="overlay-video-wrapper">
                                <img src="<?php echo $folder; ?>img/academics/ao-research-video.jpg" alt="" />
                                <!-- Remove Button
                                <a class="video-play" id="research-video-play"><img src="<?php echo $folder; ?>img/academics/play-w.png" alt=""></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 3 -->
            <div class="academic-opportunities-overlay" id="ao-overlay-3" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Academic Opportunities</h2>
                        <ul class="academic-opportunities-overlay-tabs">
                            <li><a class="ao-overlay-1">Career</a></li>
                            <li><a class="ao-overlay-2">Research </a></li>
                            <li><a class="active">Global and service</a></li>
                            <li><a class="ao-overlay-4">Merit</a></li>
                            <li><a class="ao-overlay-5">Sustainability</a></li>
                            <li><a class="ao-overlay-6">Diversity</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Global and service</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Your college experience expands beyond our campus. Whether serving with a local partner nonprofit organization in nearby Harrisburg, doing construction in Appalachia on spring break, studying abroad in England for a semester or traveling on service and missions trips to Central America or Africa in early summer, you'll have ample opportunities to become a global citizen.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/20679/intercultural_office" class="primary-button">Intercultural Office</a>

                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/ao-global.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 4 -->
            <div class="academic-opportunities-overlay" id="ao-overlay-4" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Academic Opportunities</h2>
                        <ul class="academic-opportunities-overlay-tabs">
                            <li><a class="ao-overlay-1">Career</a></li>
                            <li><a class="ao-overlay-2">Research </a></li>
                            <li><a class="ao-overlay-3">Global and service</a></li>
                            <li><a class="active">Merit</a></li>
                            <li><a class="ao-overlay-5">Sustainability</a></li>
                            <li><a class="ao-overlay-6">Diversity</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Merit</span></h3>

                    <div class="flexbox">
                        <div class="col-50">
                            <p>In addition to a thriving College Honors Program, Messiah makes available a faculty advisor to assist exceptional undergraduate students with applying for prestigious competitive national scholarships and fellowships like the Rhodes, Boren and Fulbright.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/21079/national_scholarship_competitions" class="primary-button">National scholarship competition</a>
                                <a href="https://www.messiah.edu/info/20098/college_honors_program" class="primary-button">College Honors Program</a>
                            </div>
                        </div>
                       <div class="col-50 center">
                            <div class="overlay-video-wrapper">
                                <img src="<?php echo $folder; ?>img/academics/honors-video.jpg" alt="" />
                                <!-- Remove Button <a class="video-play" id="honors-video-play"><img src="<?php echo $folder; ?>img/academics/play-w.png" alt=""></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 5 -->
            <div class="academic-opportunities-overlay" id="ao-overlay-5" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Academic Opportunities</h2>
                        <ul class="academic-opportunities-overlay-tabs">
                            <li><a class="ao-overlay-1">Career</a></li>
                            <li><a class="ao-overlay-2">Research </a></li>
                            <li><a class="ao-overlay-3">Global and service</a></li>
                            <li><a class="ao-overlay-4">Merit</a></li>
                            <li><a class="active">Sustainability</a></li>
                            <li><a class="ao-overlay-6">Diversity</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Sustainability</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Environmental stewardship isn’t just a trend at Messiah; it’s a way of life. Our extensive sustainability efforts include a bachelor’s degree in sustainability studies and initiatives such as a student-run organic garden, campus wide composting, one of the nation’s largest solar thermal systems and restoration and preservation of the on-campus Yellow Breeches Creek.</p>
                            <div>
                                <a href="https://www.messiah.edu/sustainability/" class="primary-button">Sustainability at Messiah</a>

                            </div>
                        </div>
                        <div class="col-40 center">
                            <div class="overlay-video-wrapper">
                                <img src="<?php echo $folder; ?>img/academics/ao-50-sustainability.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 6 -->
            <div class="academic-opportunities-overlay" id="ao-overlay-6" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Academic Opportunities</h2>
                        <ul class="academic-opportunities-overlay-tabs">
                            <li><a class="ao-overlay-1">Career</a></li>
                            <li><a class="ao-overlay-2">Research </a></li>
                            <li><a class="ao-overlay-3">Global and service</a></li>
                            <li><a class="ao-overlay-4">Merit</a></li>
                            <li><a class="ao-overlay-5">Sustainability</a></li>
                            <li><a class="active">Diversity</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Diversity</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>In addition to U.S. students from a variety of racially and ethnically diverse backgrounds, Messiah welcomes students from over 30 different countries. Our goal is to bring together students from different backgrounds who reflect the variety and richness within God’s kingdom. We continually learn from each other, which promotes a vital, intercultural educational experience.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/20725/diversity_affairs" class="primary-button">Diversity Affairs</a>
                                <a href="https://www.messiah.edu/info/20679/intercultural_office" class="primary-button">Intercultural Office</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/ao-diversity.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- ====== SECTION N_4 ====== -->
        <div class="section" id="academic-support">
            <picture>
                <source
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/academics/academic-support-bg2.jpg" />
                <img
                    class="lazyload-img"
                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/academics/academic-support-bg2.jpg" />
            </picture>
            <div class="wrapper content center">
                <h2>Academic support</h2>
                <p>Messiah offers an array of academic support services that make it possible for you to access any additional help you might need or want outside of the classroom. Whether you need accommodations for a particular learning challenge or simply want someone to proofread a paper before you turn it in, there are qualified Messiah students and staff prepared to assist you.</p>
                <a href="http://www.messiah.edu/info/20033/academic_support" class="primary-button">Learn More</a>


            </div>
        </div>

        <!-- ====== SECTION N_5 ====== -->
        <div class="section" id="continue-exploring">
            <div class="wrapper content">
                <h3>Continue Exploring</h3>
                <div>
                    <a href="https://www.messiah.edu/info/21164/library" class="primary-button">Library</a>
                    <a href="https://www.messiah.edu/info/20032/academic_resources" class="primary-button">Academic resources</a>
                    <a href="https://www.messiah.edu/info/20029/schools_and_departments" class="primary-button">Schools and departments</a>
                    <a href="https://www.messiah.edu/recognitions" class="primary-button">Academic recognitions</a>
                    <a href="https://www.messiah.edu/info/21764/college_wide_educational_objectives/2949/undergraduate" class="primary-button">Learning outcomes</a>
                    <a href="http://www.messiah.edu/camps" class="primary-button">academic summer camps</a>
                </div>
            </div>
        </div>
    </div>
    <!-- END GRADUATE PAGE -->

    <link href="<?php echo $folder; ?>lity.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $folder; ?>js.cookie.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>lity.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>slick.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-academics.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-search-programs.js?v=<?php echo $version; ?>"></script>
