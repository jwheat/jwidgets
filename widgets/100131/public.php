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
    <link href="<?php echo $folder; ?>mc-common-good.css?v=<?php echo $version; ?>" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>"> 


    <!-- HEADER SECTION -->
    <div class="header-bg">
        <figure class="loading-gif"></figure>
        <div class="parallax-slider">
            <picture>
                <source 
                    media="(max-width: 766px)"
                    data-srcset="<?php echo $folder; ?>img/cg/cg-hero-img.jpg" />
                <img 
                    class="lazyload-img hero-img" 
                    src="<?php echo $folder; ?>img/cg/handtinytrans.gif"
                    data-src="<?php echo $folder; ?>img/cg/cg-hero-img.jpg" />
            </picture>
        </div>
        <div class="wrapper content content-mobile">
            <div class="flexbox">
                <div class="col-55">
                    <div class="main-header"> 
                        <div class="header-title-wrapper">
                            <h1>Promoting the<br><span class="lower-text">common good</span></h1>
                            <img 
                                class="lazyload-img text-bg-design" 
                                src="<?php echo $folder; ?>img/about/handtinytrans.gif"
                                data-src="<?php echo $folder; ?>img/cg/text-circles.png"
                                alt="on campus icon" />
                        </div>
                    </div>
                </div>
                <div class="col-45">
                    <div class="header-text-box">
                        <p>“Since its founding in 1909, Messiah College has been dedicated to promoting the common good—rooted in a Christ-centered commitment to the dignity, welfare and human flourishing of all our neighbors—in Pennsylvania and beyond.” –President Kim S. Phipps</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-tabs hide-on-mobile">
            <ul>
                <li class="tab-item cavs-item"><a><span>Community and<br>volunteer service</span></a></li>
                <li class="tab-item ew-item"><a><span>Economic/workforce<br>impact</span></a></li>
                <li class="tab-item eraci-item"><a><span>Educational, recreational<br>and cultural impact</span></a></li>
                <li class="tab-item es-item"><a><span>Environmental<br>sustainability</span></a></li>
            </ul>
        </div>
    </div>
    <div class="header-text-box-mobile">
        <p>“Since its founding in 1909, Messiah College has been dedicated to promoting the common good—rooted in a Christ-centered commitment to the dignity, welfare and human flourishing of all our neighbors—in Pennsylvania and beyond.” –President Kim S. Phipps</p>
    </div>
    <!-- END HEADER SECTION -->

    <!-- YOU ARE INVITED SECTION -->
    <div class="section" id="section-1">
        <div class="wrapper content">
            <div class="flexbox"> 
                <div class="col-60">
                    <h2>You are invited</h2> 
                    <p>During the 2018-2019 academic year, Messiah College is engaging a campus-wide theme of Christian higher education for “Promoting the Common Good.” 
                    <Strong>You are invited to join us for a yearlong calendar of programming and events that will explore how, in a rapidly changing and complex culture, Messiah’s mission as a Christian college contributes to the common good of church and society</strong>—a common good rooted in a Christ-centered commitment to the dignity, welfare and human flourishing of all of our neighbors.
                    We invite you to explore this website to learn how Messiah College students, employees and alumni are already promoting the common good—through: <a class="link" href="https://www.messiah.edu/info/23102/economicworkforce_impact">economic impact</a>; <a class="link" href="https://www.messiah.edu/info/23103/educational_recreational_and_cultural_impact">educational</a>, <a href="https://www.messiah.edu/info/23103/educational_recreational_and_cultural_impact" class="link">recreational and cultural impact</a>; <a class="link" href="https://www.messiah.edu/info/23101/community_and_volunteer_service">community and volunteer service</a>; and <a href="https://www.messiah.edu/info/23104/environmental_sustainability" class="link">sustainability and environmental impact</a>.</p>
                </div>
                <div class="col-40">
                    <?php
    require_once 'websections/JaduEvents.php';
    require_once 'utilities/JaduReadableURLs.php';
    
    if (!function_exists('events_cmp')) {
        function events_cmp ($e1, $e2)
        {
            if ( $e1->nextDate == $e2->nextDate ) {
                return 0;
            }
            return ($e1->nextDate < $e2->nextDate ? -1 : 1);
        }
    }


    $rawCustomEventsTitle = '%CUSTOM_EVENTS_TITLE%';
    $rawCustomEventsText = '%CUSTOM_EVENTS_TEXT%';
    $rawCustomEventsCat = '%CATEGORIES%';
    $rawCustomEventsNum = '%CUSTOM_EVENTS_NUM%';
    $rawCustomEventsLinkTitle = '%CUSTOM_EVENTS_LINK_TITLE%';
    $rawCustomEventsLinkDest = '%CUSTOM_EVENTS_LINK_DEST%';

    $customEventsTitle = (strpos($rawCustomEventsTitle, 'CUSTOM_EVENTS_TITLE') !== false || empty($rawCustomEventsTitle)) ? 'Events' : $rawCustomEventsTitle;
    $customEventsText = (strpos($rawCustomEventsText, 'CUSTOM_EVENTS_TEXT') !== false || empty($rawCustomEventsText)) ? '' : $rawCustomEventsText;
    $customEventsCat = (strpos($rawCustomEventsCat, 'CUSTOM_EVENTS_CAT') !== false || empty($rawCustomEventsCat)) ? false : $rawCustomEventsCat;
    #$customEventsNum = (strpos($rawCustomEventsNum, 'CUSTOM_EVENTS_NUM') !== false || empty($rawCustomEventsNum)) ? false : intval($rawCustomEventsNum);
    $customEventsNum = (strpos($rawCustomEventsNum, 'CUSTOM_EVENTS_NUM') !== false || empty($rawCustomEventsNum)) ? false : $rawCustomEventsNum;

    $customEventsLinkTitle = (strpos($rawCustomEventsLinkTitle, 'CUSTOM_EVENTS_LINK_TITLE') !== false || empty($rawCustomEventsLinkTitle)) ? '' : $rawCustomEventsLinkTitle;
    $customEventsLinkDest = (strpos($rawCustomEventsLinkDest, 'CUSTOM_EVENTS_LINK_DEST') !== false || empty($rawCustomEventsLinkDest)) ? '/events' : $rawCustomEventsLinkDest;

    //check valid categories
    $eventsToUse = array();
    $allCustomEvents = false;

    if ($customEventsCat) {
        $explodeCats = explode(',', $customEventsCat);
        $allCustomEvents =  getAllEventsWithCategory($explodeCats[0], true);
        if ($allCustomEvents) {
            $timeToday = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            foreach ($allCustomEvents as $ceKey => $ceValue) {
                if ($timeToday <= $ceValue->endDate) {
                    // Set the nextDate because it isn't handled by 
                    // getAllEventsWithCategory and is required for sorting.
                    $ceValue->nextDate = getNextDateForEvent($ceValue);
                    $eventsToUse[] = $ceValue;
                }
            }
        }
    } else {
        if ((isset($_POST['preview']) && $_POST['preview'] == 'contentCode') || (isset($_POST['action']) && $_POST['action'] == 'getPreviews')) {
            print 'Please select some valid categories';
            exit;
        }
    }

    if (empty($eventsToUse) || !$customEventsNum) {
        if ((isset($_POST['preview']) && $_POST['preview'] == 'contentCode') || (isset($_POST['action']) && $_POST['action'] == 'getPreviews')) {
            print 'There are no events matching the current widget settings!';
        }
    } else {

        // order events by date
        usort($eventsToUse, 'events_cmp');
?>
<div class="featured-events-widget bg-info events-widget-narrow">
    <h2 class="color-2"><?php print $customEventsTitle; ?></h2>
    <p><?php print $customEventsText; ?></p>
    <ul class="list">

<?php
    foreach ($eventsToUse as $ceKey => $ceValue) {
        if ($customEventsNum != "all") {
            if (intval($ceKey + 1) > $customEventsNum) {
                break;
            }
        }
?>
        <li>
            <a class="event-link" href="<?php print buildEventsURL($customEventsCat, '', $ceValue->id, '', '', -1, -1, -1, false, true); ?>">
                <em class="date ie-fix"><span><?php print date('M', $ceValue->nextDate); ?></span><?php print date('d', $ceValue->nextDate); ?></em>
                <span class="text"><?php print encodeHTML($ceValue->title); ?></span>
            </a>
        </li>
<?php
    }

?>
    </ul>

<?php
    if ($customEventsLinkTitle != "") { 
?>
    <a class="more-events ie-fix" href="<?php print encodeHTML($customEventsLinkDest); ?>"><?php print encodeHTML($customEventsLinkTitle); ?></a>
<?php } ?>
     
</div>
<?php
    }
?>
                </div>
            </div>
        </div>
    </div>
    <!--END YOU ARE INVITED SECTION -->

    <!-- COMMUNITY AND VOLUNTEER SERVIVE SECTION -->
    <div class="section" id="section-2">
        <div class="wrapper content center">
            <h2>Community and volunteer service</h2>
            <p>Messiah College students and employees are deeply involved with serving their local communities. In fact, Messiah has been nationally recognized by the Carnegie Foundation for the Advancement of Teaching and the President’s Higher Education Community Service Honor Roll for its commitment to service learning, community service and civic engagement.</h3>
        </div>
        <div class="wrapper content center">
            <a class="cg-btn primary-button" href="https://www.messiah.edu/info/23101/community_and_volunteer_service">Learn More</a>
            <div class="wrapper content center eraci-panels">
                <div class="panels-wrapper">

                    <div class="left-panels">
                        <a href="https://www.messiah.edu/info/23105/serving_through_the_agape_center">
                        <div class="eraci-panel">
                            <img src="<?php echo $folder; ?>img/cg/cavs-img-1.jpg" alt="">
                            <span>Serving through<br> the Agape Center</span>
                        </div>
                        </a>

                         <a href="https://www.messiah.edu/info/23106/serving_through_sports_ministry">
                        <div class="eraci-panel">
                            <img src="<?php echo $folder; ?>img/cg/cavs-img-2.jpg" alt="">
                            <span>Serving through<br> sports ministry</span>
                        </div>
                        </a>
                    </div>

                    <div class="right-panels">
                        <a href="https://www.messiah.edu/info/23107/serving_through_the_collaboratory">
                        <div class="eraci-panel">
                            <img src="<?php echo $folder; ?>img/cg/cavs-img-3.jpg" alt="">
                            <span>Serving through<br> the Collaboratory</span>
                        </div>
                        </a>

                        <a href="https://www.messiah.edu/info/23108/serving_other_local_needs">
                        <div class="eraci-panel">
                            <img src="<?php echo $folder; ?>img/cg/cavs-img-4.jpg" alt="">
                            <span>Serving other<br> local needs</span>
                        </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- END COMMUNITY AND VOLUNTEER SERVIVE SECTION -->

    <!-- ECONOMIC/WORKFORCE IMPACT SECTION -->
    <div class="section" id="section-3">
        <picture>
            <source 
                media="(max-width: 910px)"
                data-srcset="<?php echo $folder; ?>img/cg/building-graphics-mobile-large.png" />
            <img 
                class="lazyload-img main-building-graphic" 
                src="<?php echo $folder; ?>img/cg/handtinytrans.gif"
                data-src="<?php echo $folder; ?>img/cg/building-bg.svg" />
        </picture>
        <div class="wrapper content center">
            <h2>Economic/workforce impact</h2>
            <a class="cg-btn secondary-button" href="https://www.messiah.edu/info/23102/economicworkforce_impact">Learn More</a>
            <div class="top-row flexbox">
                <div class="col-33 col-center col-mobile">
                    <div class="flexbox">
                        <div class="left-col-text-wrapper">
                            <p class="main-value-text">$310</p>
                            <p class="main-text lower-text">million</p>
                        </div>
                        <div class="right-col-text-wrapper">
                            <p class="main-text">annual</p>
                            <p class="main-text">economic</p>
                            <p class="main-text">impact</p>
                            <p class="text-no-caps">in Pennsylvania</p>
                        </div>
                    </div>
                </div>
                <div class="col-33 col-circle">
                    <div class="ewi-circle ewi-circle-1 blue-circle">
                        <div class="circle-text-container">
                            <p class="value-text">$107</p>
                            <p class="circle-text primary-text primary-text-c-1">MILLION</p>
                            <p class="circle-text secondary-text">annual operating</p>
                            <p class="circle-text tertiary-text">and</p>
                            <p class="circle-text secondary-text">construction costs</p>
                        </div>
                    </div>
                </div>
                <div class="col-33 col-center col-desktop">
                    <div class="flexbox">
                        <div class="left-col-text-wrapper">
                            <p class="main-value-text">$310</p>
                            <p class="main-text lower-text">million</p>
                        </div>
                        <div class="right-col-text-wrapper">
                            <p class="main-text">annual</p>
                            <p class="main-text">economic</p>
                            <p class="main-text">impact</p>
                            <p class="text-no-caps">in Pennsylvania</p>
                        </div>
                    </div>
                </div>
                <div class="col-33 col-circle">
                    <div class="ewi-circle ewi-circle-2 blue-circle">
                        <img class="fork-icon" src="<?php echo $folder; ?>img/cg/fork-icon.png" alt="fork icon">
                        <img class="knife-icon" src="<?php echo $folder; ?>img/cg/knife-icon.png" alt="knife icon">
                        <div class="circle-text-container">
                            <p class="value-text">$14</p>
                            <p class="circle-text primary-text primary-text-c-1">MILLION</p>
                            <p class="circle-text secondary-text margin-top-5">annual</p>
                            <p class="circle-text secondary-text">ancillary</p>
                            <p class="circle-text secondary-text">spending</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-row flexbox">
                <div class="col-25 col-circle">
                    <div class="ewi-circle ewi-circle-3 blue-circle">
                        <img class="employees-icon" src="<?php echo $folder; ?>img/cg/employees-icon.png" alt="employees icon">
                        <div class="circle-text-container">
                            <p class="value-text margin-top-50">920</p>
                            <p class="circle-text secondary-text">employees</p>
                        </div>
                    </div>
                </div>
                <div class="col-25 col-circle">
                <div class="ewi-circle ewi-circle-4 blue-circle">
                        <img class="card-icon" src="<?php echo $folder; ?>img/cg/card-icon.png" alt="card icon">
                        <div class="circle-text-container">
                            <p class="value-text">2,100</p>
                            <p class="circle-text primary-text primary-text-c-2">jobs</p>
                            <div class="jobs-text">
                                <p class="circle-text secondary-text jobs-text">supported</p>
                                <p class="circle-text secondary-text jobs-text">each year</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-25 col-circle col-margin-top-mobile">
                    <div class="ewi-circle ewi-circle-5 blue-circle">
                        <img class="building-icon" src="<?php echo $folder; ?>img/cg/building-icon.png" alt="building icon">
                        <div class="circle-text-container">
                            <p class="value-text margin-left-12">$6</p>
                            <p class="circle-text primary-text primary-text-c-4">MILLION</p>
                            <p class="circle-text secondary-text margin-top-20">annual</p>
                            <p class="circle-text secondary-text">state taxes</p>
                        </div>
                    </div>
                </div>
                <div class="col-25 col-circle col-margin-top-mobile">
                    <div class="ewi-circle ewi-circle-6 blue-circle">
                        <img class="academic-cap-icon" src="<?php echo $folder; ?>img/cg/academic-cap-icon.png" alt="academic cap icon">
                        <div class="circle-text-container">
                            <p class="value-text large-value-text">12,800</p>
                            <p class="circle-text primary-text primary-text-c-1">alumni</p>
                            <p class="circle-text secondary-text margin-top-5">working in</p>
                            <p class="circle-text secondary-text">pennsylvania</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END ECONOMIC/WORKFORCE IMPACT SECTION -->

    <!-- EDUCATIONAL, RECREATIONAL AND CULTURAL IMPACT SECTION -->
    <div class="section" id="section-4">
        <div class="wrapper content center">
            <h2>Educational, recreational and cultural impact</h2>
            <p>Messiah College is a significant educational, recreational and cultural resource for its students, employees, and alumni—and for the surrounding region. Messiah is committed to keeping its educational programs as affordable and accessible as possible for its students and their families. And with its celebrated arts programs, public educational programming, championship athletic teams, and the recreational and natural resources of its 471-acre campus—Messiah College additionally provides a wide variety of opportunities to its neighbors in Central Pennsylvania.</h3>
        </div>
        <div class="wrapper content center">
            <div class="wrapper">
                <div id="circle-flip">
                    <div class="flexbox circle-flip">
                        <div class="col-25 center">
                            <a href="https://www.messiah.edu/info/23116/grad_rate_and_accessibility">
                                <span class="overlay"></span>
                                <img src="<?php echo $folder; ?>img/cg/eraci-img-1.png" alt="">
                            <h3>Grad rate and accessibility</h3>
                            </a>
                            
                        </div>
                        <div class="col-25">
                            <a href="https://www.messiah.edu/info/23117/public_education_resources">
                                <span class="overlay"></span>
                                <img src="<?php echo $folder; ?>img/cg/eraci-img-2.png" alt="">
                            <h3>Public education resources</h3>
                            </a>
                            
                        </div>
                        <div class="col-25">
                            <a href="https://www.messiah.edu/info/23118/cultural_arts">
                                <span class="overlay"></span>
                                <img src="<?php echo $folder; ?>img/cg/eraci-img-3.png" alt="">
                            <h3>Cultural arts</h3>
                            </a>
                            
                        </div>
                        <div class="col-25">
                            <a href="https://www.messiah.edu/info/23119/recreation_resources">
                                <span class="overlay"></span>
                                <img src="<?php echo $folder; ?>img/cg/eraci-img-4.png" alt="">
                            <h3>Recreation resources</h3>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END EDUCATIONAL, RECREATIONAL AND CULTURAL IMPACT SECTION -->

    <!-- ENVIRONMENTAL SUSTAINABILITY SECTION -->
    <div class="section" id="section-5">
        <img 
            class="lazyload-img" 
            src="<?php echo $folder; ?>img/about/handtinytrans.gif"
            data-src="<?php echo $folder; ?>img/cg/es-bg.jpg"
            alt="section background image" />
        <div class="content-box">
            <div class="center">
                <h2>Environmental sustainability</h2>
                <p>Messiah has long been educating students about environmental stewardship and ethics and the importance of caring for the earth. Now, environmental stewardship efforts at the College include everything from a robust recycling program, to an organic community garden, to a student-led composting program, to active restoration of the on-campus Yellow Breeches Creek.<br><br> Messiah College works intentionally to steward of the natural resources on campus and in its region, reduce waste and its carbon footprint, and to serve the community through numerous programs and partnerships.</h3>
         
                <div class="btns-wrapper">
                    <div class="btns-top-row">
                        <a class="cg-btn tertiary-button" href="https://www.messiah.edu/info/23120/natural_resources">Natural resources</a>
                        <a class="cg-btn tertiary-button" href="https://www.messiah.edu/info/23121/waste_reduction">Waste reduction</a>
                    </div>
                    <div class="btns-bottom-row">
                        <a class="cg-btn tertiary-button" href="https://www.messiah.edu/info/23122/energy_efficiency">Energy efficiency</a>
                        <a class="cg-btn tertiary-button" href="https://www.messiah.edu/info/23123/community_programs">Community programs</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--END ENVIRONMENTAL SUSTAINABILITY SECTION -->

    <link href="<?php echo $folder; ?>lity.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo $folder; ?>blazy.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo $folder; ?>mc-common-good.js?v=<?php echo $version; ?>"></script>