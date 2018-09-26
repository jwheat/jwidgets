<?php
  $dev = false;
  //$dev = true;
  $version = date('YmdHis');
  $folder = '';
  if (!$dev) {
    $version = '1';
    $folder = 'site/custom_scripts/styles/';
  }
?>

<!--- Our Campus -->
<a name="campus"></a>
   <div class="about" id="our-campus">
        <div class="text-box-container">
            <div class="slider-container">
                <div class="our-campus-slider">
                    <div class="slider slider-1">
                        <div class="slide-img slide-img-1">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/mobile-wellness.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/full-size-wellness.jpg" />
                            </picture>
                        </div>
                    </div>
                    <div class="slider slider-2">
                        <div class="slide-img slide-img-2">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/Sidewalk_mobile.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/Sidewalk_full_size.jpg" />
                            </picture>
                        </div>
                    </div>
                    <div class="slider slider-2">
                        <div class="slide-img slide-img-3">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/Lottie_night_mobile.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/Lottie_night_full_size.jpg" />
                            </picture>
                        </div>
                    </div>
                    <div class="slider slider-2">
                        <div class="slide-img slide-img-4">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/frey_hall_mobile.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/frey_hall_full_size.jpg" />
                            </picture>
                        </div>
                    </div>
                    <div class="slider slider-2">
                        <div class="slide-img slide-img-5">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/dorm_fall_mobile.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/dorm_fall_full_size.jpg" />
                            </picture>
                        </div>
                    </div>
               <div class="slider slider-2">
                        <div class="slide-img slide-img-6">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/union_winter_mobile.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/union_winter_full_size.jpg" />
                            </picture>
                        </div>
                    </div>
          <div class="slider slider-2">
                        <div class="slide-img slide-img-6">
                            <picture>
                                <source 
                                    media="(max-width: 766px)"
                                    data-srcset="<?php echo $folder; ?>img/about/jordan_mobile.jpg" />
                                <img 
                                    class="lazyload-img" 
                                    src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                    data-src="<?php echo $folder; ?>img/about/jordan_full_size.jpg" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="slider-controllers">
                    <span class="next fa fa-angle-right" aria-hidden="true"></span>
                    <span class="prev fa fa-angle-left" aria-hidden="true"></span>
                </div>
            </div>
            <div class="campus-text-box">
                <h2>Our beautiful campus</h2>
                <p>Messiah is located in Mechanicsburg, Pennsylvania, just 12 miles from the state capital, Harrisburg, and just a short drive from Philadelphia, Baltimore and Washington, D.C. </p>
            </div>
        </div>
        <div id="know-the-area"><a name="area-info"></a>
            <div class="wrapper content center">
                <h3 class="middle-line-text"><span>Get to know the area</span></h3>
            </div>
            <div class="wrapper content center gtk-slider" id="slider-wrapper">
                <div class="gtk-slider-nav-left hide-on-mobile"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="gtk-slider-nav-right hide-on-mobile"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                <div class="gtk-slide-wrapper know-the-area-slider">

                    <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/ski.png" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Ski Roundtop</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>Roundtop Mountain Resort offers skiing, snowboarding and snow tubing. <a href="http://www.skiroundtop.com/">Read more</a></p>
                            </div>
                        </div>
                    </div>

                 <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/park.png" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Hersheypark</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>Enjoy a day at an amusement park full of rides and attractions, and most importantly—chocolate! <a href="http://www.hersheypark.com/">Read more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/breeches.png" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Yellow Breeches</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>A central part of campus life, students enjoy swimming, canoeing, tubing and fishing in the creek that runs through campus.</p>
                            </div>
                        </div>
                    </div>

                 
                    <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/climb.jpg" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Climbnasium</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>A premier indoor rock climbing facility with climbs to 40 feet in height, climbers of all abilities are sure to be challenged. <a href="http://www.climbnasium.net/home.html">Read more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/downtown.png" alt="">
                        <div class="gtk-slide-title-container">
                        <span>City Island</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>A recreational jewel, City Island features Harrisburg Senators baseball, miniature golf, arcade and batting cages, and many free parks, playgrounds and fields. <a href="https://www.visithersheyharrisburg.org/">Read more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/hiking.jpg" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Hiking</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>The Appalachian Trail nearby features hikes that range from beginner one-mile flat hikes to weekend peak bagging excursions. </p>
                            </div>
                        </div>
                    </div>

   <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/sports.jpg" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Carlisle Sports Emporium</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>With mini golf, indoor and outdoor go-karts, laser tag, roller skating, batting cages and a large arcade, you certainly won’t be bored. <a href="https://www.carlislesportsemporium.com/">Read more</a></p>
                            </div>
                        </div>
                    </div>

   <div class="gtk-slide">
                        <img data-lazy="<?php echo $folder; ?>img/about/giant-center.jpg" alt="">
                        <div class="gtk-slide-title-container">
                        <span>Giant Center</span>
                        </div>
                        <div class="gtk-slide-info">
                            <div class="gtk-slide-info-text-container">
                            <p>This premier entertainment venue in Hershey, Pennsylvania features headliner concerts and events and is home to the Hershey Bears hockey club. <a href="http://www.hersheyentertainment.com/giant-center/">Read more</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="wrapper content center">
                <div class="know-the-area-btns">
                    <a class="primary-button" href="https://www.messiah.edu/map/">Campus Map</a>
                    <!--- <a class="primary-button" href="#">More Area Attractions</a> -->
                    <a class="primary-button" href="https://www.messiah.edu/info/21321/lodging">Lodging</a>
                </div>
            </div>
        </div>
    </div>