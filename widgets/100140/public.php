<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '././site/custom_scripts/styles/';
  }
  $pageVersion = "1";
  if (isset($_COOKIE['mc_student_type'])) {
    if ($_COOKIE['mc_student_type'] == '0') {
      $pageVersion = "2";
    }
  }
?>
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
                <p>Academics at Messiah</p>
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
                        Are you ready to advance your education and career with a graduate degree or certificate? Messiah College is a nationally ranked, accredited college that successfully integrates top-tier academics and Christian faith. All of our graduate programs provide academic rigor and excellence through a convenient and flexible mix of learning options. Our nine programs include <span class="underline">eight master’s degrees, two doctoral degrees</span>, and numerous <span class="underline">graduate certificates and post-master’s certificates</span>. The coursework for most graduate programs is conducted primarily online, with some being fully online and others being fully residential.
                        </p>
                    </div>
                    <div class="col-50 center">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/students-studing.jpg" />
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
                        <p>Named in the <span>Top 50 Best Christian Graduate Schools</span> for 2017 by Christian Universities Online</p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/certificate.png"
                            alt="students hug icon" />
                        <p><span>8 master’s</span> and <span>2 doctoral degrees,  numerous graduate</span> and <span>post-master’s certificates</span></p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/students-hug.png"
                            alt="on campus icon" />
                        <p>Messiah College has <span>572 graduate students</span> representing <span>31 states.</span></p>
                    </div>
                </div>
                <div class="overview-btn-wrapper center">
                    <button class="primary-button">button to go here</button>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_2 ====== -->
        <div class="section square-panel-section" id="our-programs">
            <div class="wrapper content center"> 
                <h2>Explore Messiah’s graduate programs</h2>
                <p>Intro copy to go here if needed</p>
                <div class="square-panel-section-wrapper">
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 square-panel-section-col-left first-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 square-panel-section-col-center second-cell">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-right third-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 square-panel-section-col-left fourth-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-center fifth-cell">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-right sixth-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-33 square-panel-section-col-left seventh-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 square-panel-section-col-center eight-cell">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-33 center square-panel-section-col-right nineth-cell panel-slide-in">
                            <a class="our-programs-link-panel" href="#">
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
                                    <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                    <button class="primary-button">Visit program site</button>
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
                <p class="why-messiah-description">Intro copy to go here if needed</p>
                <div id="section-circle-flip">
                    <div class="flexbox circle-flip">
                        <div class="col-50">
                            <div class="circle-container">
                                <img 
                                    id="circle-1-img"
                                    class="why-messiah-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-1.png"
                                    alt="" />
                                <div class="circle-overlay open-overlay-1"></div>
                            </div>
                            <h3>Academic excellence</h3>
                        </div>
                        <div class="col-50">
                            <div class="circle-container">
                                <img 
                                    id="circle-2-img"
                                    class="why-messiah-image lazyload-img"
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-2.png"
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
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-3.png"
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
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-4.png"
                                    alt="" />
                                <div class="circle-overlay open-overlay-4"></div>
                            </div>
                            <h3>Flexible class formats</h3>
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
                        <h2>What’s there to do?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="active">1st tab title</a></li>
                            <li><a class="open-overlay-2">2nd tab title</a></li>
                            <li><a class="open-overlay-3">3rd tab title</a></li>
                            <li><a class="open-overlay-4">4th tab title</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>1st tab title</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Nulla facilisi. Vestibulum suscipit consequat convallis. Sed ut nibh quis neque viverra aliquam dictum id metus. Cras porttitor, erat vel pulvinar lacinia, magna elit gravida metus, eget auctor ligula purus vitae nisl. In et quam ultricies, vestibulum neque at, egestas diam. Nam efficitur pellentesque libero a ultricies. Donec accumsan dui in tincidunt mattis. Mauris cursus sodales lorem a finibus</p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                        <h2>What’s there to do?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-1">1st tab title</a></li>
                            <li><a class="active">2nd tab title</a></li>
                            <li><a class="open-overlay-3">3rd tab title</a></li>
                            <li><a class="open-overlay-4">4th tab title</a></li>
                        </ul>
                    </div>
                    
                    <h3 class="center"><span>2nd tab title</span></h3>
                    
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Nulla facilisi. Vestibulum suscipit consequat convallis. Sed ut nibh quis neque viverra aliquam dictum id metus. Cras porttitor, erat vel pulvinar lacinia, magna elit gravida metus, eget auctor ligula purus vitae nisl. In et quam ultricies, vestibulum neque at, egestas diam. Nam efficitur pellentesque libero a ultricies. Donec accumsan dui in tincidunt mattis. Mauris cursus sodales lorem a finibus</p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                        <h2>What’s there to do?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-1">1st tab title</a></li>
                            <li><a class="open-overlay-2">2nd tab title</a></li>
                            <li><a class="active">3rd tab title</a></li>
                            <li><a class="open-overlay-4">4th tab title</a></li>
                        </ul>
                    </div>
                    
                    <h3 class="center"><span>3rd tab title</span></h3>
                    
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Nulla facilisi. Vestibulum suscipit consequat convallis. Sed ut nibh quis neque viverra aliquam dictum id metus. Cras porttitor, erat vel pulvinar lacinia, magna elit gravida metus, eget auctor ligula purus vitae nisl. In et quam ultricies, vestibulum neque at, egestas diam. Nam efficitur pellentesque libero a ultricies. Donec accumsan dui in tincidunt mattis. Mauris cursus sodales lorem a finibus</p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                        <h2>What’s there to do?</h2>
                        <ul class="why-messiah-overlay-tabs">
                            <li><a class="open-overlay-1">1st tab title</a></li>
                            <li><a class="open-overlay-2">2nd tab title</a></li>
                            <li><a class="open-overlay-3">3rd tab title</a></li>
                            <li><a class="active">4th tab title</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>4th tab title</span></h3>
                    
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Nulla facilisi. Vestibulum suscipit consequat convallis. Sed ut nibh quis neque viverra aliquam dictum id metus. Cras porttitor, erat vel pulvinar lacinia, magna elit gravida metus, eget auctor ligula purus vitae nisl. In et quam ultricies, vestibulum neque at, egestas diam. Nam efficitur pellentesque libero a ultricies. Donec accumsan dui in tincidunt mattis. Mauris cursus sodales lorem a finibus</p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                <p>Messiah offers an array of academic support services that make it possible for you to access any additional help you might need or want outside of the classroom. Whether you need accommodations for a particular learning challenge or simply want someone to proofread a paper before you turn it in, there are qualified Messiah students and staff prepared to assist you.</p>

                <button class="primary-button">Learn More</button>
            </div>
        </div>

        <!-- ====== SECTION N_5 ====== -->
        <div class="section" id="continue-exploring">
            <div class="wrapper content">
                <h3>Continue Exploring</h3>
                <div>
                    <a href="#" class="primary-button">Link Two</a>
                    <a href="#" class="primary-button">Another Link here</a>
                    <a href="#" class="primary-button">Another Link here</a>
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
                        data-src="<?php echo $folder; ?>img/academics/academics-hero-2.jpg" />
                </picture>
            </div>
            <div class="hero-title-wrapper">
                <h2>Academic<br>Excelence</h2>
                <hr>
                <p>Undergraduate Academics Overview</p>
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
                <h2 class="center">Overview of Academics</h2>
                <div class="flexbox">
                    <div class="col-50">
                        <p>
                        Messiah College is a nationally ranked private Christian college with a reputation for successfully integrating rigorous academics and Christian faith into all of our academic programs. Messiah's faculty are outstanding teachers, scholars and researchers who will mentor and advise you as you expand your possibilities. We offer bachelor's degrees in 85+ majors, eight master’s degrees, two doctoral degrees and numerous graduate certificates and post-master’s certificates.
                        </p>
                    </div>
                    <div class="col-50 center">
                        <div class="academics-video" id="overview-of-academics-video">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/students-studing.jpg" />
                            <a class="video-play" id="overview-video"><img src="<?php echo $folder; ?>img/academics/play-w.png" alt=""></a>
                        </div>
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
                        <p><span>74.1%</span> 4-year grad rate (vs. 52% national average)</p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/ribbon.png"
                            alt="students hug icon" />
                        <p>Rigorous College Honors Program</p>
                    </div>
                    <div class="col-33 section-achievements">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/academics/students-hug.png"
                            alt="on campus icon" />
                        <p><span>3-year</span> degree options</p>
                    </div>
                </div>
                <div class="overview-btn-wrapper center">
                    <button class="primary-button">button to go here</button>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_2 ====== -->
        <div class="section" id="what-do-you-want-to-study">
            <div class="wrapper content center">
                <h2>What do you want to study?</h2>
                <p>Search by keywords or interests to explore which of Messiah's 85+ academic programs would be a good fit for you.</p>

                <div class="search-box-container">
                    <input placeholder="Search for programs:" id="search-for-programs" type="text">
                    <button class="search-programs-btn">GO</button>
                </div>

                <div>
                    <a href="#" class="primary-button">View all programs</a>
                    <a href="#" class="primary-button">View by interest</a>
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
                        <div class="col-50 square-panel-section-col-left">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-panel-1.jpg"
                                alt="" />
                            <div class="block-overlay"> 
                                <h4>Summer Online</h4>
                                <p>Earn the academic credits you need with Messiah College’s flexible, affordable online summer courses.</p>
                                <a class="primary-button" href="#">read more</a>
                            </div>
                        </div>
                        <div class="col-50 center square-panel-section-col-right">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-panel-2.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>Dual Enrollment</h4>
                                <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                <a class="primary-button" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-50 square-panel-section-col-left">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-panel-3.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>3-year degree</h4>
                                <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                <a class="primary-button" href="#">read more</a>
                            </div>
                        </div>
                        <div class="col-50 center square-panel-section-col-right">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/academics/ao-panel-4.jpg"
                                alt="" />
                            <div class="block-overlay">
                                <h4>3+ Partner Programs</h4>
                                <p>Phasellus commodo dolor tortor. Suspendisse vestibulum fringilla nisi, in mattis leo luctus a. Vivamus odio lacus, bibendum ac erat eget, euismod ornare lorem. Phasellus ac leo ante.</p>
                                <a class="primary-button" href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_4 ====== -->
        <div class="section" id="academics-opportunities">
            <div class="wrapper content center ao-info"> 
                <h2>Academic Opportunities</h2>
                <p class="academic-opportunities-description">Students at Messiah enhance their classroom experiences by taking advantage of a rich variety of campus resources and opportunities that help prepare them to lead lives of service, leadership and reconciliation.</p>
                <div id="circle-flip">
                    <div class="flexbox circle-flip">
                        <div class="col-33">
                            <div class="circle-container">
                                <img 
                                    class="academic-opportunities-image lazyload-img" 
                                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-1.png"
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
                                    data-src="<?php echo $folder; ?>img/academics/circle-img-6.png"
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
                        <div class="col-60">
                            <p>From your first year to senior year, our career professionals help you determine your strengths, select a major, weigh your options, network with professionals, find internships and research graduate school and employment opportunities.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/23064/internship_program" class="primary-button">Internship program</a>
                                <a href="https://www.messiah.edu/info/23055/career_and_professional_development_center" class="primary-button">Center for Career and Professional Development</a>
                                <a href="https://www.messiah.edu/eli" class="primary-button">Experiential Learning</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <div class="overlay-video-wrapper">
                                <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                        <div class="col-60">
                            <p>Messiah College offers students a wide range of exciting and meaningful research opportunities across all academic programs. Our low faculty-to-student ratio makes Messiah an ideal place for you to collaborate with classmates, faculty, alumni and regional, national and global organizations.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/20030/academic_opportunities/279/research/2" class="primary-button">Faculty-student collaborations</a>
                                <a href="https://www.messiah.edu/info/20030/academic_opportunities/279/research/3" class="primary-button">Faculty scholarship</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                                <a href="https://www.messiah.edu/info/20698/off_campus_programs" class="primary-button">Study abroad</a>
                                <a href="https://www.messiah.edu/info/20692/global_and_intercultural_engagement_messiah" class="primary-button">Global engagement</a>
                                <a href="https://www.messiah.edu/info/21021/service-learning" class="primary-button">Service-learning</a>
                                <a href="https://www.messiah.edu/collaboratory" class="primary-button">Academics as Service</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                        <div class="col-60">
                            <p>In addition to a thriving College Honors Program, Messiah makes available a faculty advisor to assist exceptional undergraduate students with applying for prestigious competitive national scholarships and fellowships like the Rhodes, Boren and Fulbright.</p>
                            <div>
                                <a href="https://www.messiah.edu/info/21079/national_scholarship_competitions" class="primary-button">National scholarship competition</a>
                                <a href="https://www.messiah.edu/info/20098/college_honors_program" class="primary-button">College Honors Program</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                                <a href="https://www.messiah.edu/info/21279/sustainability" class="primary-button">Overview</a>
                                <a href="https://www.messiah.edu/info/20499/vision" class="primary-button">Vision</a>
                                <a href="https://www.messiah.edu/info/20501/stewardship" class="primary-button">Stewardship</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <div class="overlay-video-wrapper">
                                <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
                                <a class="video-play" id="sustainability-video-play"><img src="<?php echo $folder; ?>img/academics/play-w.png" alt=""></a>
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
                                <a href="https://www.messiah.edu/info/21280/diversity" class="primary-button">Read more</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/academics/Rectangle-filler.png" alt="" />
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
                    data-srcset="<?php echo $folder; ?>img/academics/hero-img-mobile.jpg" />
                <img 
                    class="lazyload-img" 
                    src="<?php echo $folder; ?>img/academics/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/academics/academic-support-bg.jpg" />
            </picture>
            <div class="wrapper content center">
                <h2>Academic Support</h2>
                <p>Messiah offers an array of academic support services that make it possible for you to access any additional help you might need or want outside of the classroom. Whether you need accommodations for a particular learning challenge or simply want someone to proofread a paper before you turn it in, there are qualified Messiah students and staff prepared to assist you.</p>

                <button class="primary-button">Learn More</button>
            </div>
        </div>

        <!-- ====== SECTION N_5 ====== -->
        <div class="section" id="continue-exploring">
            <div class="wrapper content">
                <h3>Continue Exploring</h3>
                <div>
                    <a href="#" class="primary-button">Link Two</a>
                    <a href="#" class="primary-button">Another Link here</a>
                    <a href="#" class="primary-button">Another Link here</a>
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
    <script type="text/javascript" src="<?php echo $folder; ?>mc-academics.js?v=<?php echo $version; ?>"></script> f