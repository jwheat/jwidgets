<?php
  $dev = false;
  $dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = '/site/custom_scripts/styles/';
  }
?>
    <link href="<?php echo $folder; ?>mc-snaap-music.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">

    <!-- ====== HERO SECTION ====== -->
    <div class="hero-bg">
        <figure class="loading-gif"></figure>
        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/snaap-music/hero-bg-mobile.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/snaap-music/hero-bg.jpg" />
            </picture>
        </div>
        <div class="title-wrapper">
            <h2>Look what you<br> can do with a<br> music degree!</h2>
            <hr>
            <p>Survey of alumni in the arts</p>
        </div>
    </div>

    <!-- ====== SECTION_1 ====== -->
    <div class="section" id="section-1">
        <div class="wrapper content">
            <div class="flexbox">
                <div class="col-50">
                    <p>Messiah College recently participated in the Strategic National Arts Alumni Project (SNAAP) survey of alumni in the arts. This survey has compiled <span class="bold">data on the jobs, income and artistic life of more than 150,000 arts alumni nationwide.</span> Our participation in this survey has given us not only information about our alumni, but has also allowed us to compare how our graduates are doing with the graduates of some of the major visual arts programs in the country. We found that <span class="bold">our outcomes were as good as or better</span> than graduates of schools such as the Indiana University Jacobs School of Music, the University of North Texas, St. Olaf College, and the University of North Carolina School of the Arts.</p>
                    <span class="small-text">Adjusted sample size: 325, response rate: 34%</span>
                </div>
                <div class="col-50 center">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/snaap-music/playing_piano_img.jpg"
                        alt="piano playing image" />
                </div>
            </div>
        </div>
        <div class="wrapper content center" id="our-alumni">
            <h3><span>Our Alumni</span></h3>
            <div class="flexbox section-1-inView">
                <div class="col-50 our-alumni-col our-alumni-col-left">
                    <div class="flexbox left-panel">
                        <div class="col-50 alumni-col">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-music/alumni-icon-1.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1">95</span><span>%</span> had a positive experience at Messiah.</p>
                        </div>
                        <div class="col-50 alumni-col">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-music/alumni-icon-2.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1">84</span><span>%</span> found work within four months of graduation or pursued further education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-50 our-alumni-col our-alumni-col-right">
                    <div class="flexbox right-panel">
                        <div class="col-50 alumni-col">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-music/alumni-icon-3.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1">96</span><span>%</span> found work within a year after graduation or pursued further education.</p>
                        </div>
                        <div class="col-50 alumni-col">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-music/alumni-icon-4.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1">94</span><span>%</span> of those who intended to work as professional music artists have done so, and 66% currently do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== SECTION_2 ====== -->
    <div class="section" id="section-2">  
        <div class="wrapper content">
            <h2 class="center">Where did we do better than our comparison groups?</h2>
        </div>
        <div class="image-container">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/snaap-music/choir-img-mobile.jpg" />
                <img 
                    class="lazyload-img section-bg-img" 
                    src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/snaap-music/choir-img.jpg" />
            </picture>
            <div class="content-box">
                <div class="flexbox">
                    <div class="col-50">
                        <p>Our students report significantly higher opportunities to make, perform or exhibit art.</p>
                    </div>
                    <div class="col-50 center">
                        <img src="<?php echo $folder; ?>img/snaap-music/drums-icon.png" alt="drum icon image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== SECTION_3 ====== -->
    <div class="section" id="section-3">  
        <div class="wrapper content">
            <div class="flexbox">
                <div class="col-40 left-col">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/snaap-music/Dru-Kepner-teaching.png"
                        alt="Dru Kepner image" />
                </div>
                <div class="col-60 right-col">
                    <div class="content-box">
                        <p>Our alumni reported stronger training in several areas of general education, including breadth of education, creative thinking, research skills, writing, project management skills and leadership skills.</p>

                        <p><span class="featured-text">Dru Kepner ’15</span><br> music education major<br> choir director, Eagle View Middle School<br> conductor, Susquehanna Young Women’s Chorale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ====== SECTION_4 ====== -->
    <div class="section" id="section-4">  
        <picture>
            <source 
                media="(max-width: 766px)"
                data-srcset="<?php echo $folder; ?>img/snaap-music/orchestra-img-mobile.jpg" />
            <img 
                class="lazyload-img section-bg-img" 
                src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                data-src="<?php echo $folder; ?>img/snaap-music/orchestra-img.jpg"
                alt="orchestra image" />
        </picture>
        <div class="content-box">
            <div>
                <p>Our alumni also reported higher levels of community service, study abroad, internships and co-curricular activities.</p>
            </div>
        </div>
    </div>

    <!-- ====== SECTION_5 ====== -->
    <div class="section" id="section-5">
        <div class="wrapper content">
            <div class="flexbox">
                <div class="col-50 center s5-col s5-col-left">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/snaap-music/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/snaap-music/music-playing.jpg"
                        alt="student playing music image" />
                </div>
                <div class="col-50 s5-col s5-col-right">
                    <div class="content-box section-5-inView">
                        <p><span class="percentage-section-5">83</span><span>%</span> say they are satisfied with their current job, much higher than in other fields.</p>

                        <p>More of our graduates felt that their work contributed to the greater good and that it reflected their interests and values.</p>

                        <p>In fact, <span class="percentage-section-5">85</span><span>%</span> indicated that their work reflected their interests and values.</p>

                        <p><span class="percentage-section-5">83</span><span>%</span> felt their work contributed to the greater good.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-snaap-music.js?v=<?php echo $version; ?>"></script>