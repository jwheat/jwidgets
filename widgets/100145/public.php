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
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick.css">
    <link rel="stylesheet" href="<?php echo $folder; ?>slick-theme.css">
    <link href="<?php echo $folder; ?>mc-ug-ro.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">


    <!-- UNDERGRADUATE PAGE -->
    <div id="hero-section-wrapper">
        <div class="hero-section loading-hero-img">  
            <figure class="loading-gif"></figure>
            <div class="parallax-slider">
                <picture>
                    <img 
                        class="lazyload-img hero-img" 
                        src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/ug-research/hero-img-min.jpg" />
                </picture>
            </div>
            <div class="hero-title-wrapper">
                <h2>Undergraduate<br>research<br>opportunities</h2>
                <hr>
                <p>Contribute practical solutions to<br />real-world problems</p>
            </div>
        </div>

        <!-- ====== SECTION N_1 ====== -->
        <div class="section section-1" id="section-1">
            <div class="wrapper content">
                <h2 class="center">Are you interested in exploring areas and issues that inspire you to make a difference?</h2>
                <div class="flexbox">
                    <div class="col-66">
                        <p>At Messiah College, you don’t have to wait until graduate school to get involved with hands-on research projects. Our undergraduate students have opportunity to participate in meaningful research across all of our 85+ majors.</p>
                        <div class="accordion-container">
                            <div class="accordion">
                                <div class="acc-container">
                                    <input type="checkbox" name="panel" id="section-1-panel">
                                    <label for="section-1-panel">Why get involved in undergraduate research?</label>
                                    <div class="accordion__content">
                                        <p>There are many benefits to participating in undergraduate research, including helping you to:</p>
                                        <ul>
                                            <li>Expand the body of knowledge in your area of study</li>
                                            <li>Contribute practical solutions to real-world problems </li>
                                            <li>Form valuable mentoring relationships with faculty experts</li>
                                            <li>Deepen your understanding and expertise in your field </li>
                                            <li>Think critically and assess research and scholarly works published by others</li>
                                            <li>Sharpen your own research skills across a variety of disciplines</li>
                                            <li>Learn to balance working individually and as part of a team</li>
                                            <li>Decide what academic and career areas interest you most</li>
                                            <li>Demonstrate capabilities in all of these areas to graduate schools and employers</li>
                                        </ul>
                                        <p><span="citation" style="font-size: 15px;line-height: 0px;">† Contributing Reference: Christopher R. Madan, Braden D. Teitge, “The Benefits of Undergraduate Research: The Student’s Perspective,” May 1, 2013, The Mentor: An Academic Advising Journal, Division of Undergraduate Studies, Penn State University</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="https://www.messiah.edu/homepage/3748/student_stories" class="primary-button">Student stories</a>
                            <a href="#" class="primary-button">Quotes</a>
                        </div>
                    </div>
                    <div class="col-33 center">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/ug-research/section-1-img-min.jpg" />
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_2 ====== -->
        <div class="section" id="section-2">
            <div class="wrapper content center section-2-info"> 
                <h2>Faculty-student collaboration</h2>
                <p class="section-description">Meaningful faculty-student relationships are an important part of the Messiah educational experience. Your professors strive to get to know you, your strengths and your aspirations.</p>
                <div id="circle-flip">
                    <div class="flexbox circle-flip">
                        <div class="col-33">
                            <div class="circle-container">
                                <img class="circular-image lazyload-img" 
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/round-img-1-min.png"
                                    alt="a discerning spirit image" />
                                <div class="circle-overlay open-overlay-1"></div>
                            </div>
                            <h3>Faculty<br>mentorship</h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img 
                                    class="circular-image lazyload-img" 
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/round-img-2-min.png"
                                    alt="real world creativity image" />
                                <div class="circle-overlay open-overlay-2"></div>
                            </div>
                            <h3>low faculty-to-student<br>ratio </h3>
                        </div>
                        <div class="col-33">
                            <div class="circle-container">
                                <img 
                                    class="circular-image lazyload-img" 
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/round-img-3-min.png"
                                    alt="authentic power to lead image" />
                                <div class="circle-overlay open-overlay-3"></div>
                            </div>
                            <h3>practical answers to<br>important questions</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Overlay 1 -->
            <div class="section-2-overlay" id="overlay-1" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Faculty-student collaboration</h2>
                        <ul class="section-2-overlay-tabs">
                            <li><a class="active">Faculty mentorship</a></li>
                            <li><a class="open-overlay-2">Faculty-to-student ratio</a></li>
                            <li><a class="open-overlay-3">Important answers to important questions</a></li>
                        </ul>
                    </div>

                    <h3 class="center"><span>Faculty mentorship</span></h3>

                    <div class="flexbox">
                        <div class="col-60">
                            <p>Faculty mentorship is an important part of the Messiah experience. Your Messiah professors strive to really get to know you, your strengths and professional aspirations. That’s why our faculty―who are accomplished researchers in their own right―regularly invite students to join with them in research and scholarship, including co-authoring papers and co-presenting at professional conferences. You may even travel abroad as part of a faculty-student team to research special projects and challenges in international communities.</p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/Rectangle-filler.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 2 -->
            <div class="section-2-overlay" id="overlay-2" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Faculty-student collaboration</h2>
                        <ul class="section-2-overlay-tabs">
                            <li><a class="open-overlay-1">Faculty mentorship</a></li>
                            <li><a class="active">Faculty-student ratio</a></li>
                            <li><a class="open-overlay-3">Important answers to important questions</a></li>
                        </ul>
                    </div>
                    
                    <h3 class="center"><span>Faculty-student ratio</span></h3>
                    
                    <div class="flexbox">
                        <div class="col-60">
                            <p>Our low faculty-to-student ratio makes Messiah an ideal place for you to collaborate on research projects with faculty and classmates. You’ll also benefit from the research connections and partnerships our faculty have with regional, national and global organizations.</p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/Rectangle-filler.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Overlay 3 -->
            <div class="section-2-overlay" id="overlay-3" style="display:none;">
                <div class="wrapper content">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="center">
                        <h2>Faculty-student collaboration</h2>
                        <ul class="section-2-overlay-tabs">
                            <li><a class="open-overlay-1">Faculty mentorship</a></li>
                            <li><a class="open-overlay-2">Faculty-to-student ratio</a></li>
                            <li><a class="active">Important answers to important questions</a></li>
                        </ul>
                    </div>
                    
                    <h3 class="center longer-title"><span>Important answers to important questions</span></h3>
                    
                    <div class="flexbox">
                        <div class="col-60">
                            <p>At Messiah, we’ll help you apply what you’re learning so you can develop practical answers to important questions. Whether you’re passionate about science, engineering, health, business, education, social sciences, the humanities or the arts, you can contribute significant research in your area of study and make an impact on your chosen field—before you graduate. </p>
                            <div>
                                <a href="#" class="primary-button">Link Two</a>
                                <a href="#" class="primary-button">Another Link here</a>
                                <a href="#" class="primary-button">Another Link here</a>
                            </div>
                        </div>
                        <div class="col-40 center">
                            <img src="<?php echo $folder; ?>img/Rectangle-filler.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_3 ====== -->
        <div class="section">
            <div class="wrapper content">
                <h2 class="center">Graduate studies academic overview</h2>
                <div class="flexbox">
                    <div class="col-50">
                        <p>
                        Messiah students promote the common good through research that serves others and improves the human condition.<br><br>

                        Designing a prosthetic hand for a 5-year old girl who wants to ride a bike. Protecting genetic privacy in the age of DNA databases. Reducing food waste on college campuses. Digitally mapping the ethnic history of the capital city of Pennsylvania. Finding ways to remove arsenic from drinking water. These are just some of Messiah students’ research projects that are making the world a better place. 
                        </p>
                    </div>
                    <div class="col-50 center">
                        <img 
                            class="lazyload-img" 
                            src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                            data-src="<?php echo $folder; ?>img/ug-research/section-3-img-min.jpg" />
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== SECTION N_4 ====== -->
        <div class="section section-4" id="section-4">
            <div class="wrapper content">
                <h2>In their own words</h2>
                <div class="wrapper content center page-slider" id="slider-wrapper">
                    <div class="page-slider-nav-left hide-on-mobile"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="page-slider-nav-right hide-on-mobile"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="page-slide-wrapper blue-bg-slider">

                        <div class="page-slide" id="page-slide">
                            <div class="flex-container">
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/alison_noble-min.png" />
                                <div class="text-justify ml-25">
                                    <p class="statement">“Students are at a distinct advantage if they have the chance to do high-level undergraduate research. Graduate schools love basic research—it equips students to ask good questions, figure out how to answer them, how to troubleshoot, and it develops a lot of persistence and character.”</p>
                                    <p class="name">Alison Noble</p>
                                    <p class="role">Assistant Provost, Associate Professor of Chemistry</p>
                                </div>
                            </div>
                        </div>
                        <div class="page-slide" id="page-slide">
                            <div class="flex-container">
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/jessica-raboci.png" />
                                <div class="text-justify ml-25">
                                    <p class="statement">“I’m grateful for the opportunity that Messiah gives us to have a hands-on experience in an area of our field with others who have similar aspirations.”</p>
                                    <p class="name">Jessica Raboci</p>
                                    <p class="role">Engineering major</p>
                                </div>
                            </div>
                        </div>
                        <div class="page-slide" id="page-slide">
                            <div class="flex-container">
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/jean-corey.png" />
                                <div class="text-justify ml-25">
                                    <p class="statement">“I think the beauty of undergraduate research is that students who never considered themselves ‘scholars’ discover the thrill and the power of research well done and well invested to transform the world around them.”</p>
                                    <p class="name">Jean Corey</p>
                                    <p class="role">Director, Messiah College Center for Public Humanities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- ====== SECTION N_5 ====== -->
        <div class="section" id="section-5">
            <div class="wrapper content center">
                 <h2>We support you—from proposal to presentation</h2>
                 <p class="section-description">Depending on your major, you may be able to begin a research project as early as your first year. You’ll have opportunities to work as part of a research team or one-on-one with a faculty mentor. We’ll help you identify, apply for and coordinate internal and external sources of research funding. Your professors can also help connect you with research-related internships, cross-cultural courses, service projects and summer research opportunities. </p>
                 <div class="accordion-container">
                    <div class="accordion">
                        <div class="acc-container">
                             <input type="checkbox" name="panel" id="panel-1">
                            <label for="panel-1">Share the excitement, inspiration and relevance of your work and ideas</label>
                            <div class="accordion__content">
                                <p>Ultimately, we want you to be able to share the excitement, inspiration and relevance of your work and ideas. All of Messiah’s academic departments provide annual symposiums where you can publicly present your research. Or if you’re a student in the arts, we provide a variety of venues where you can showcase your original works and performances. You may even be one of the many Messiah students who co-publish research with faculty or present your research at a national conference or symposium.</p>
                            </div>
                        </div>

                        <div class="acc-container">
                            <input type="checkbox" name="panel" id="panel-2">
                            <label for="panel-2">Be prepared for graduate school and in demand by employers</label>
                            <div class="accordion__content">
                                <p>Messiah’s strong emphasis on professional research skills, methodology, publication and presentation makes you particularly well prepared for graduate school and in demand by employers. </p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>

        <!-- ====== SECTION N_6 ====== -->
        <div class="section square-panel-section" id="section-6">
            <div class="wrapper content center"> 
                <h2>Changing the world one research<br>project at a time:</h2>
                <p>View, listen and read the stories below as Messiah students and faculty members share the incredible learning, experiences and outcomes of their own research projects.   </p>
                <div class="square-panel-section-wrapper">
                    <div class="flexbox square-panel-section-row">
                        <div class="col-50 square-panel-section-col-left video-container" id="video-1">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/ug-research/project-1-img-min.jpg"
                                alt="" />
                            <div class="video-title-container">
                                <h4>3D biomedical printing</h4>
                            </div>
                            <div class="play-btn-container">
                                <img
                                    class="lazyload-img"
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/play-img-min.png"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-50 center square-panel-section-col-right video-container" id="video-2">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/ug-research/project-2-img-min.jpg"
                                alt="" />
                            <div class="video-title-container">
                                <h4>Preventing PTSD</h4>
                            </div>
                            <div class="play-btn-container">
                                <img
                                    class="lazyload-img"
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/play-img-min.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="flexbox square-panel-section-row">
                        <div class="col-50 square-panel-section-col-left video-container" id="video-3">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/ug-research/project-3-img-min.jpg"
                                alt="" />
                            <div class="video-title-container">
                                <h4>food recovery program</h4>
                            </div>
                            <div class="play-btn-container">
                                <img
                                    class="lazyload-img"
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/play-img-min.png"
                                    alt="" />
                            </div>
                        </div>
                        <div class="col-50 center square-panel-section-col-right video-container" id="video-4">
                            <img
                                class="lazyload-img"
                                src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/ug-research/project-4-img-min.jpg"
                                alt="" />
                            <div class="video-title-container">
                                <h4>Digital mapping</h4>
                            </div>
                            <div class="play-btn-container">
                                <img
                                    class="lazyload-img"
                                    src="<?php echo $folder; ?>img/ug-research/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/ug-research/play-img-min.png"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
       <!-- ====== SECTION N_7  ====== -->      
 <div class="ug-research" id="continue-exploring">
        <div class="wrapper content">
            <h3>Continue Exploring</h3>
            <p>
                <a href="https://www.messiah.edu/ELI " class="fs-button">Experiential Learning Initiative</a>
                <a href="https://www.messiah.edu/info/21317/collaboratory" class="fs-button">Collaboratory for Strategic Partnerships and Applied Research </a>
            </p>
        </div>
    </div>

    <link href="<?php echo $folder; ?>lity.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $folder; ?>js.cookie.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>lity.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>slick.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-ug-ro.js?v=<?php echo $version; ?>"></script>