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

<!--- Our history -->
<a name="history"></a>
    <div class="about" id="our-history">
        <picture>
            <source 
                media="(max-width: 766px)"
                data-srcset="<?php echo $folder; ?>img/about/founded-bg-mobile.jpg" />
            <img 
                class="lazyload-img" 
                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                data-src="<?php echo $folder; ?>img/about/founded-bg.jpg" />
        </picture>
        <div class="wrapper content"> 
            <div class="container">
                <div class="slider-wrapper">
                    <div class="our-history-slider">
                        <div class="slider slider-1" data-name="point-1">
                            <div class="history-text-box">
                                <h2>Founded in 1909</h2>
                                <p>Messiah College is founded by the Brethren in Christ Church under the presidency of S.R. Smith, a church leader and Harrisburg businessman. Its original name was Messiah Bible School and Missionary Training Home. It began as a school offering high school curriculum and a few Bible programs.</p>
                            </div>
                        </div>
                        <div class="slider slider-2" data-name="point-2">
                            <div class="history-text-box">
                                <h2>Messiah relocates to Grantham</h2>
                                <p>Messiah Bible School and Missionary Training Home relocates to Grantham, Pennsylvania where students and educators have more classroom space as well as a campus library, dining hall and chapel.</p>
                            </div>
                        </div>
                        <div class="slider slider-3" data-name="point-3">
                            <div class="history-text-box">
                            <h2>Name change to Messiah Bible College</h2>
                                <p>Developments in academic programs suggest a name change is necessary. The Messiah Bible School and Missionary Training Home changes its name to Messiah Bible College, which more adequately represents the nature of the school. </p>
                            </div>
                        </div>
                        <div class="slider slider-4" data-name="point-4">
                            <div class="history-text-box">
                            <h2>Curriculum expanded</h2>
                                <p>Messiah College expands its academic curriculum to begin offering college-level courses. </p>
                            </div>
                        </div>
                        <div class="slider slider-5" data-name="point-5">
                            <div class="history-text-box">
                                <h2>Another name change</h2>
                                <p>Messiah Bible College officially changes its name to Messiah College.</p>
                            </div>
                        </div>
                        <div class="slider slider-6" data-name="point-6">
                            <div class="history-text-box">
                                <h2>Athletics joins the MAC Conference</h2>
                                <p>Messiah Athletics joins the MAC (Middle Atlantic Conference), which at the time was an athletic organization of 26 small, private liberal arts colleges in Pennsylvania, New Jersey, Delaware and Maryland.</p>
                            </div>
                        </div>
                        <div class="slider slider-7" data-name="point-7">
                            <div class="history-text-box">
                                <h2>Service learning established through the Agape Center</h2>
                                <p>The Agape Center for Service and Learning is founded.</p>
                            </div>
                        </div>
                        <div class="slider slider-8" data-name="point-8">
                            <div class="history-text-box">
                                <h2>The Oakes Museum opens</h2>
                                <p>With the completion of the Jordan Science Center, Messiah College opened the Oakes Museum, a 40,000-square foot museum with Smithsonian-quality collections of North American and African wildlife, seashells, bird eggs, insects, minerals and fossils.</p>
                            </div>
                        </div>
                        <div class="slider slider-9" data-name="point-9">
                            <div class="history-text-box">
                                <h2>Eighth and current president named</h2>
				<p>Kim S. Phipps, is named the eighth president (and the first female president) of Messiah College. <a href="https://www.messiah.edu/info/22285/past_presidents">View a timeline of Messiah College presidents.</a></p>
                            </div>
                        </div>
                        <div class="slider slider-10" data-name="point-10">
                            <div class="history-text-box">
                                <h2>Candidates, computers and championships</h2>
				<p>Messiah hosts The Compassion Forum, a nationally televised, unprecedented conversation with then-presidential candidates Barack Obama and Hillary Clinton on the integration of faith and public policy.</p>
<p>Messiah begins offering undergraduate online courses during the summer session.
</p>
                            </div>
                        </div>
                        <div class="slider slider-11" data-name="point-11">
                            <div class="history-text-box">
                                <h2>Graduate programs launched; Centennial celebration</h2>
				<p>Messiah launches its first on many graduate programs to come, an online master's degree in counseling.</p>
                           <p>Messiah celebrates a century of God's faithfulness during its centennial year, with the Centennial celebration “Shared Faith. Bold Vision. Enduring Promise” during the 2009-2010 academic year.<p>
                            </div>
                        </div>
                        
                        <div class="slider slider-12" data-name="point-12">
                            <div class="history-text-box">
                                <h2>DNP approved</h2>
				<p>The Pennsylvania State Board of Nursing fully approves a new Doctor of Nursing Practice-Family Nursing Practitioner (DNP-FNP) program.  </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="our-history-slider-controllers">
                        <span class="prev fa fa-angle-left slide-controller" aria-hidden="true"></span>
                        <span class="next fa fa-angle-right slide-controller" aria-hidden="true"></span>
<a class="primary-button" href="https://www.messiah.edu/info/20013/our_history">Explore more </a>
                    </div>
           
                    <div class="history-timeline-wrapper">
                        <ul class="timeline">
                            <li class="point-1 active"><span>1909</span></li>
                            <li class="point-2"><span>1912</span></li>
                            <li class="point-3"><span>1924</span></li>
                            <li class="point-4"><span>1929</span></li>
                            <li class="point-5"><span>1951</span></li>
                            <li class="point-6"><span>1983</span></li>
                            <li class="point-7"><span>1997</span></li>
                            <li class="point-8"><span>1999</span></li>
                            <li class="point-9"><span>2004</span></li>
                            <li class="point-10"><span>2008</span></li>
                            <li class="point-11"><span>2009</span></li>
                            <li class="point-12"><span>2015</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>