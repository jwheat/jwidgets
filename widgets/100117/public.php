<a name="service"></a>
<!--- Service Opps --->
   
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

<div class="faith-and-service" id="service-opportunities">
        <div class="wrapper content center">
            <h2>Service opportunities</h2>
            <p>Messiah is committed to equipping you for a life of service and there are plenty of opportunities to hone your passion for service during your time here. Each year, Messiah students collectively volunteer thousands of hours to community service—locally, nationally and around the globe. The College’s <a href="https://www.messiah.edu/agape">Agapé Center for Service and Learning</a> is the coordinating hub for service organizations and opportunities both on and off campus.</p>
            <div class="fs-service-opportunities-wrapper">
                <div class="flexbox fs-service-opportunities">
                    <div class="col-50 fs-left-col-service-opportunities local-service-cell">
                        <img src="<?php echo $folder; ?>img/faith-and-service/service-local.jpg" alt="">
                        <div class="fs-service-opportunities-overlay">
                            <h4>Local Service</h4>
                            <p>Looking to serve those closest to you? Our local service outreach teams focus on the communities surrounding Messiah College.</p>
                            <div class="fs-read-more">
                                <span class="btn">READ MORE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-50 center fs-right-col-service-opportunities national-service-cell">
                        <img src="<?php echo $folder; ?>img/faith-and-service/service-national.jpg" alt="">
                        <div class="fs-service-opportunities-overlay">
                            <h4>National Service</h4>
                            <p>Put your faith into action by volunteering in communities across the nation through short-term service trips. </p>
                            <div class="fs-read-more">
                                <span class="btn">READ MORE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flexbox fs-service-opportunities">
                    <div class="col-50 fs-left-col-service-opportunities global-service-cell">
                        <img src="<?php echo $folder; ?>img/faith-and-service/service-global.jpg" alt="">
                        <div class="fs-service-opportunities-overlay">
                            <h4>Global Service</h4>
                            <p>Do you have a passion to serve others abroad? Opportunities for international service trips are abundant at Messiah.</p>
                            <div class="fs-read-more">
                                <span class="btn">READ MORE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-50 center fs-right-col-service-opportunities academics-service-cell">
                        <img src="<?php echo $folder; ?>img/faith-and-service/service-academics.jpg" alt="">
                        <div class="fs-service-opportunities-overlay">
                            <h4>Academics as Service</h4>
                            <p>Students, professionals and partners from multiple disciplines collaborating to increase hope and transform lives.</p>
                            <div class="fs-read-more">
                                <span class="btn">READ MORE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- service opportunities overlay 1 -->
                <div class="fs-so-overlay" id="local-service">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="mbscrll">
                        <div class="center">
                            <ul class="fs-so-tabs">
                                <li><a class="local-service active">Local-Service</a></li>
                                <li><a class="national-service">National Service</a></li>
                                <li><a class="global-service">Global Service</a></li>
                                <li><a class="academics-as-service">Academics as Service</a></li>
                            </ul>
                        </div>
                        <div class="fs-so-overlay-content" id="local">
                        <h3 class="center line-heading"><span class="hline"></span><span>Local Service</span><span class="hline"></span></h3>            
                            <div class="flexbox">
                                <div class="col-50 center">
                                    <p>Looking to serve those closest to you? Our local service outreach teams focus on the surrounding communities around Messiah such as Harrisburg, Mechanicsburg and Dillsburg. At the beginning of each academic year, the outreach teams host an ice cream social where you can check out all the different ways to get involved. There’s a great change you'll find a group that matches your interest. Our teams work with organizations focusing on such things as poverty, literacy, relationships, mentoring, homelessness, migrant partnerships and special needs. Most of these teams volunteer on a weekly basis.</p>
                                </div>
                                <div class="col-50 fs-ge-list">
                                    <img src="<?php echo $folder; ?>img/faith-and-service/local-service-img.jpg" alt="Local service">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- service opportunities overlay 2 -->
                <div class="fs-so-overlay" id="national-service">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="mbscrll">
                        <div class="center">
                            <ul class="fs-so-tabs">
                                <li><a class="local-service">Local-Service</a></li>
                                <li><a class="national-service active">National Service</a></li>
                                <li><a class="global-service">Global Service</a></li>
                                <li><a class="academics-as-service">Academics as Service</a></li>
                            </ul>
                        </div>
                        <div class="fs-so-overlay-content" id="local">
                        <h3 class="center line-heading"><span class="hline"></span><span>National Service</span><span class="hline"></span></h3>            
                            <div class="flexbox">
                                <div class="col-50 center">
                                    <p>Each fall, J-term and Spring Break, service trip teams spend their time volunteering in communities across the nation through short-term service trips. Through participation on a service trip team, you can put your faith into action to obtain a deeper understanding of what servanthood is and how to apply it to your own life. In the past, groups have taken trips to the Appalachia region to help with home repair and health assessment, and urban centers like Chicago, Bronx and Philadelphia to work with inner-city ministry groups. </p>
                                </div>
                                <div class="col-50 fs-ge-list">
                                    <img src="<?php echo $folder; ?>img/faith-and-service/national-service-img.jpg" alt="National service">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- service opportunities overlay 3 -->
                <div class="fs-so-overlay" id="global-service">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="mbscrll">
                        <div class="center">
                            <ul class="fs-so-tabs">
                                <li><a class="local-service">Local-Service</a></li>
                                <li><a class="national-service">National Service</a></li>
                                <li><a class="global-service active">Global Service</a></li>
                                <li><a class="academics-as-service">Academics as Service</a></li>
                            </ul>
                        </div>
                        <div class="fs-so-overlay-content" id="local">
                        <h3 class="center line-heading"><span class="hline"></span><span>Global Service</span><span class="hline"></span></h3>            
                            <div class="flexbox">
                                <div class="col-50 center">
                                    <p>Opportunities for international service trips are abundant at Messiah. Work with teams in Northern Ireland or Brazil, among others with the <a href="https://www.messiah.edu/agape">Agapé Center</a>. Combine your love of sports and ministry on an <a href="http://gomessiah.com/index.aspx?path=aroma">AROMA</a> (A Revolution of Missional Athletes) trip to countries such as Uganda, El Salvador, Panama and others. Provide research assistance and real world solutions to sites in Burkina Faso, Nicaragua or others through the <a href="https://www.messiah.edu/collaboratory">Collaboratory</a>.</p>
                                </div>
                                <div class="col-50 fs-ge-list">
                                    <img src="<?php echo $folder; ?>img/faith-and-service/global-service-img.jpg" alt="Global service">
                                </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- service opportunities overlay 4 -->
                <div class="fs-so-overlay" id="academics-service">
                    <div class="close-button">
                        <a><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="mbscrll">
                        <div class="center">
                            <ul class="fs-so-tabs">
                                <li><a class="local-service">Local-Service</a></li>
                                <li><a class="national-service">National Service</a></li>
                                <li><a class="global-service">Global Service</a></li>
                                <li><a class="academics-as-service active">Academics as Service</a></li>
                            </ul>
                        </div>
                        <div class="fs-so-overlay-content" id="local">
                        <h3 class="center line-heading"><span class="hline"></span><span>Academics as Service</span><span class="hline"></span></h3>            
                            <div class="flexbox">
                                <div class="col-50 center">
                                    <p>The <a href="https://www.messiah.edu/collaboratory">Collaboratory for Strategic Partnerships and Applied Research</a> is a center for service, scholarship and project-based learning at Messiah College. It is a collaboration of students, faculty from a variety of majors that apply academic knowledge and live out their Christian faith through imaginative, hands-on problem solving with non-profit organizations, governments and business partners in our region and around the world.</p>
                                 </div>
                                  <div class="col-50 fs-ge-list">
                                    <img src="<?php echo $folder; ?>img/faith-and-service/academics-service-img.jpg" alt="Academics as service">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>