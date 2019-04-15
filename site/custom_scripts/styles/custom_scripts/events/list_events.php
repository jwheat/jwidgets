<?php

use Spacecraft\EventsCalendar\Repositories\EventsCategoriesRepository;
use Spacecraft\EventsCalendar\Repositories\EventsRepository;
use Spacecraft\EventsCalendar\Services\EventsDatesService;
use Spacecraft\EventsCalendar\Transformers\EventCalendarTransformer;

require_once 'utilities/JaduStatus.php';
require_once 'JaduStyles.php';
require_once 'websections/JaduEvents.php';
require_once 'egov/JaduEGovMeetingMinutes.php';
require_once 'JaduAppliedCategories.php';
require_once 'JaduCategories.php';
require_once 'custom/EventsCalendar/Repositories/EventsRepository.php';
require_once 'custom/EventsCalendar/Repositories/EventsCategoriesRepository.php';
require_once 'custom/EventsCalendar/Transformers/EventCalendarTransformer.php';
require_once 'custom/EventsCalendar/Services/EventsDatesService.php';

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $eventsDateService = new EventsDatesService($_GET['onlyUpcomingEvents'], $_GET['start'], $_GET['end']);
    $start = $eventsDateService->getStart();
    $end = $eventsDateService->getEnd();

    $selectedCategories = (!empty($_GET['categories']) ? array_map('intval', $_GET['categories']) : []);
    $includeSubcategories = (!isset($_GET['includeSubcategories'])) ? true : ($_GET['includeSubcategories'] === 'true') ? true : false;

    $eventsRepository = new EventsRepository(new EventsCategoriesRepository());

    $allowedEvents = $eventsRepository->getAllByRange($start, $end, $selectedCategories, $includeSubcategories);

    $eventsTransformer = new EventCalendarTransformer($allowedEvents);
    print json_encode($eventsTransformer->transform($start, $end));
}
