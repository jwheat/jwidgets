<?php

use Spacecraft\EventsCalendar\Mast;
use Spacecraft\EventsCalendar\Repositories\EventsCategoriesRepository;

require_once 'utilities/JaduStatus.php';
require_once 'JaduStyles.php';
require_once 'JaduMetadata.php';
require_once 'JaduCategories.php';
require_once 'egov/JaduCL.php';
require_once 'websections/JaduEvents.php';
require_once 'websections/JaduHomepages.php';
require_once 'custom/EventsCalendar/Mast.php';
require_once 'custom/EventsCalendar/Repositories/EventsCategoriesRepository.php';
require_once 'custom/EventsCalendar/Transformers/EventsCategoriesTransformer.php';
require_once 'egov/JaduEGovMeetingMinutes.php';

require_once 'custom/CustomHelper.php';

define('EVENTS_CALENDAR_INCLUDE', true);

// In case we need a wallpaper image, we can select a homepage for it like below
$homepageID = EVENTS_HOMEPAGE_SLIDESHOW_ID;
if ($homepageID) {
    $homepage = getHomepage($homepageID, true);
    if ($homepage->stylesheet != '' && $STYLESHEET != 'generic/handheld.css') {
        $STYLESHEET = $homepage->stylesheet;
    }
}

$mast = new Mast($_REQUEST, $homepage);
$MAST_BREADCRUMB = $mast->getBreadCrumb();
//$MAST_HEADING = $mast->getHeading();
$MAST_HEADING = 'Messiah College Events';

$today = date('d-m-Y');
$events = getEventsForDateRange($today, $today);
$meetingEvents = getMeetingsInDateRangeAsEvents($today, $today);
$allEvents = array_merge($events, $meetingEvents);
$liveEvents = [];
$title = 'Events';

//  Need to check all of them because meetings getter doesn't have a live only flag
foreach ($allEvents as $event) {
    if ($event->live == 1) {
        $liveEvents[] = $event;
    }
}

$eventsCategoriesRepository = new EventsCategoriesRepository();

$categories = $eventsCategoriesRepository->getAllEventsCategoriesForCalendar();

//  Get the selected categories so we can check them
$selectedCategories = (!empty($_GET['categoryIDs']) ? array_map('intval', explode(',', $_GET['categoryIDs'])) : []);

require_once 'events_calendar.html.php';
