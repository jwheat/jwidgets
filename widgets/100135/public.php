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
    <link href="<?php echo $folder; ?>mc-snaap-art.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">

    <!-- ====== HERO SECTION ====== -->
    <div class="hero-bg">
        <figure class="loading-gif"></figure>
        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/snaap-art/hero-bg-mobile.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/snaap-art/hero-bg.jpg" />
            </picture>
        </div>
        <div class="title-wrapper">
            <h2>Look what you<br> can do with an art<br> and design degree!</h2>
            <hr>
            <p>Survey of alumni in the arts</p>
        </div>
    </div>

    <!-- ====== SECTION_1 ====== -->
    <div class="section" id="section-1">
        <div class="wrapper content">
            <div class="flexbox">
                <div class="col-50">
                    <p>Messiah College recently participated in the Strategic National Arts Alumni Project (SNAAP) survey of alumni in the arts. This survey has compiled <span class="bold">data on the jobs, income and artistic life of more than 150,000 arts alumni nationwide.</span> Our participation in this survey has given us not only information about our alumni, but has also allowed us to compare how our graduates are doing with the graduates of some of the major visual arts programs in the country. We found that <span class="bold">our outcomes were as good as or better</span> than graduates of schools such as the Maryland Institute College of Art (MICA), the School of the Boston Museum of Fine Arts, Rhode Island School of Design and the School of Visual Art, New York City.</p>
                    <span class="small-text">Adjusted sample size: 270, response rate: 30%</span>
                </div>
                <div class="col-50 center">
                    <img 
                        class="lazyload-img" 
                        src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/snaap-art/img-1.jpg"
                        alt="arts image" />
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
                                src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-art/alumni-icon-1.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1 percent">91</span><span class="percent">%</span> had a positive experience at Messiah.</p>
                        </div>
                        <div class="col-50 alumni-col">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-art/alumni-icon-2.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1 percent">69</span><span class="percent">%</span> found work within four months of graduation or pursued further education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-50 our-alumni-col our-alumni-col-right">
                    <div class="flexbox right-panel">
                        <div class="col-50 alumni-col">
                            <img 
                                class="lazyload-img" 
                                src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/snaap-art/alumni-icon-3.png"
                                alt="icon image" />
                            <p><span class="percentage-section-1 percent">92</span><span class="percent">%</span> found work within a year after graduation or pursued further education.</p>
                        </div>
                        <div class="col-50 alumni-col">
                            <p><span class="percentage-section-1 percent">100</span><span class="percent">%</span> of those who intended to work as professional artists have done so, and 78% currently do – <span class="italic">higher percentages than the national average.<span></p>
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
                    data-srcset="<?php echo $folder; ?>img/snaap-art/section-bg-mobile.jpg" />
                <img 
                    class="lazyload-img section-bg-img" 
                    src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/snaap-art/section-bg.jpg" />
            </picture>
            <div class="content-box">
                <div class="flexbox">
                    <div class="col-50">
                        <p>Our students report significantly higher opportunities to make, perform or exhibit art.</p>
                    </div>
                    <div class="col-50 center">
                        <img src="<?php echo $folder; ?>img/snaap-art/text-box-icon.png" alt="sculpture icon">
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
                        src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/snaap-art/katheryn_brook.png"
                        alt="Katheryn Brook image" />
                </div>
                <div class="col-60 right-col">
                    <div class="content-box">
                        <p>Our alumni reported stronger training in several areas of general education, including breadth of education, creative thinking, research skills, writing, project management skills and leadership skills.</p>

                        <p><span class="featured-text">Katheryn Brook ’18</span><br> studio art major<br> internship at Mattress Factory</p>
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
                data-srcset="<?php echo $folder; ?>img/snaap-art/section-2-bg-mobile.jpg" />
            <img 
                class="lazyload-img section-bg-img" 
                src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                data-src="<?php echo $folder; ?>img/snaap-art/section_2-bg.jpg"
                alt="background image" />
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
                        src="<?php echo $folder; ?>img/snaap-art/handtinytrans.gif"
                        data-src="<?php echo $folder; ?>img/snaap-art/img-2.jpg"
                        alt="image" />
                </div>
                <div class="col-50 s5-col s5-col-right">
                    <div class="content-box section-5-inView">
                        <p><span class="percentage-section-5">83</span><span>%</span> say they are satisfied with their current job, much higher than in other fields.</p>

                        <p>More of our graduates felt that their work contributed to the greater good and that it reflected their interests and values.</p>

                        <p>In fact, <span class="percentage-section-5">78</span><span>%</span> indicated that their work reflected their interests and values.</p>

                        <p><span class="percentage-section-5">85</span><span>%</span> felt their work contributed to the greater good.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-snaap-art.js?v=<?php echo $version; ?>"></script>