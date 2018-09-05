<div class="visit-area">
<a name="visit"></a>
    <video loop preload='none' class="video-bg fillWidth">
        <source src="/site/custom_scripts/styles/video_bg/homepage2.ogv" type='video/ogg; codecs="theora, vorbis"' />
        <source src="/site/custom_scripts/styles/video_bg/homepage2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
        <source src="/site/custom_scripts/styles/video_bg/homepage2.webm" type='video/webm; codecs="vp8, vorbis"' />            
    </video>

    <div class="gradient"></div>
        <div class="container">

            <div class="sub-container col-60">

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
                    $customEventsNum = (strpos($rawCustomEventsNum, 'CUSTOM_EVENTS_NUM') !== false || empty($rawCustomEventsNum)) ? false : intval($rawCustomEventsNum);
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

                <div class="visit-events">
                    <h3 class="color-2"><?php print $customEventsTitle; ?></h3>
                    <p><?php print $customEventsText; ?></p>
                    <ul class="list">

                <?php
                    foreach ($eventsToUse as $ceKey => $ceValue) {
                        if (intval($ceKey + 1) > $customEventsNum) {
                            break;
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
                
                <ul class="btn-list">
                    <li><a class="btn hp-vst" href="/info/21343/visit_campus">View more visit opportunities</a></li>
                    <li><a class="btn hp-vst" href="http://www.messiah.edu/map">View campus map</a></li>
                </ul>
            </div>
            
            <div class="sub-container col-40 play-video" style="text-align: center;">
                <a href="https://youtu.be/UHslADwOhQI" data-lity ><img src="/site/custom_scripts/styles/img/homepage/play_video.png" /></a>
                <p>Preview the open house experience</p>
            </div>
    </div>
</div>