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
    $customEventsLinkDest = (strpos($rawCustomEventsLinkDest, 'CUSTOM_EVENTS_LINK_DEST') !== false || empty($rawCustomEventsLinkDest)) ? '' : $rawCustomEventsLinkDest;

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

    if (empty($eventsToUse) || $customEventsNum === false) {
        if ((isset($_POST['preview']) && $_POST['preview'] == 'contentCode') || (isset($_POST['action']) && $_POST['action'] == 'getPreviews')) {
            print 'There are no events matching the current widget settings!';
        }
    } else {

        // order events by date
        usort($eventsToUse, 'events_cmp');

        // Limit results if necessary
        if (!empty($customEventsNum) && count($eventsToUse) > $customEventsNum) {
            $eventsToUse = array_splice(
                $eventsToUse,
                $customEventsNum
            );
        }
?>
<link href="/site/custom_scripts/styles/featured-events-widget.css" rel="stylesheet" type="text/css">

<div>
    <h2 class="color-2">Upcoming Events</h2>
<?php
    foreach ($eventsToUse as $ceValue) {
        #print_r($ceValue);

        $src="/images/".$ceValue->imageURL;
        $altext=$ceValue->title;

        $timestamp = strtotime($ceValue->startTime);
?>
        <div class="event-content">
<?php
        if ( date('M', $ceValue->startDate) == date('M', $ceValue->endDate) ) {
            # same month
            if ( date('d', $ceValue->startDate) == date('d', $ceValue->endDate)) {
                #same day
                $line_day = date('d', $ceValue->startDate);
            } else {
                $line_day = date('d', $ceValue->startDate) . " - " . date('d', $ceValue->endDate);
            }
?>                        
             <div class="date-section">
                <?php print date('M', $ceValue->nextDate);?>
                <br />
                <span class="day"><?php print $line_day; ?></span>
                <br />
                <?php print date('g:ia', $timestamp); ?>
             </div>
<?php
        } else {
            # different month expanded landscape block
?>            
             <div class="date-section" style='width:140px;'>
                <div class='date-end'>
                    <?php print date('M', $ceValue->endDate);?>
                    <br />
                    <span class="day"><?php print date('d', $ceValue->endDate); ?></span>
                    <br />
                    <?php print date('g:ia', $timestamp); ?>
                </div>

                <div class='date-end'>
                 
                <br/>
                through
                <br/>
                 
                </div>

                <div class='date-end'>
                    <?php print date('M', $ceValue->nextDate);?>
                    <br />
                    <span class="day"><?php print date('d', $ceValue->startDate); ?></span>
                    <br />
                    <?php print date('g:ia', $timestamp); ?>
                </div>

             </div>
<?php
        }                   
?>
        <?php if ($src != "/images/") { ?>
            <div class="picture-holder">
                <img class="" alt="<?php print $alttext;?>" src="<?php print $src;?>" />
            </div>
        <?php } ?>
            <div class="text-box">
                <span class="title-holder"><?php print encodeHTML($ceValue->title); ?></span>
                    <p><?php print $ceValue->summary; ?></p>
                   <a class="event_content btn-info" href="<?php print buildEventsURL($customEventsCat, '', $ceValue->id, '', '', -1, -1, -1, false, true); ?>">Read more</a> 
            </div>
        </div>
<?php
    }

?>
     
</div>
<?php
    }
?>