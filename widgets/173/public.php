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
    
    $customEventsLinkTitle = (strpos($rawCustomEventsLinkTitle, 'CUSTOM_EVENTS_LINK_TITLE') !== false || empty($rawCustomEventsLinkTitle)) ? false : $rawCustomEventsLinkTitle;
    $customEventsLinkDest = (strpos($rawCustomEventsLinkDest, 'CUSTOM_EVENTS_LINK_DEST') !== false || empty($rawCustomEventsLinkDest)) ? false : $rawCustomEventsLinkDest;

    #$customEventsLinkTitle = (strpos($rawCustomEventsLinkTitle, 'CUSTOM_EVENTS_LINK_TITLE') !== false || empty($rawCustomEventsLinkTitle)) ? 'Events' : $rawCustomEventsLinkTitle;
    #$customEventsLinkDest = (strpos($rawCustomEventsLinkDest, 'CUSTOM_EVENTS_LINK_DEST') !== false || empty($rawCustomEventsLinkDest)) ? '/events' : $rawCustomEventsLinkDest;

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
<div class="events-widget bg-info">
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
