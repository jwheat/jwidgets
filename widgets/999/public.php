<?php
use Spacecraft\EventsCalendar\Repositories\EventsRepository;
use Spacecraft\EventsCalendar\Repositories\EventsCategoriesRepository;

require_once 'utilities/JaduStatus.php';
require_once 'JaduStyles.php';
require_once 'JaduMetadata.php';
require_once 'JaduCategories.php';
require_once 'websections/JaduEvents.php';
require_once 'egov/JaduCL.php';
require_once 'websections/JaduEvents.php';
require_once 'websections/JaduHomepages.php';
require_once 'egov/JaduEGovMeetingMinutes.php';
require_once 'custom/CustomHelper.php';
require_once 'custom/EventsCalendar/Repositories/EventsRepository.php';
require_once 'custom/EventsCalendar/Repositories/EventsCategoriesRepository.php';

try {
    if ('%CATEGORIES%' != '' && '%CATEGORIES%' != '%CATEGORIES' . '%') {
        $selectedCategories = explode(',', '%CATEGORIES%');
    } else {
        throw new InvalidArgumentException('No categories set');
    }

    $includeSubcategories = '%INCLUDE_SUBCATEGORIES%';
    //  Get the selected categories so we can check them
    $ignoreFiltering = true;

    $eventsRepository = new EventsRepository(new EventsCategoriesRepository());

    $futureEvents = $eventsRepository->getFutureEventsForCategories($selectedCategories, $includeSubcategories);

    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/custom_scripts/events/events_calendar_include.php';
    ?>
    <div class="eventsList">
        <?php if (empty($futureEvents)) : ?>

            <div class="callout callout__info">
                <h3>There are no future events.</h3>
            </div> <!-- callout-->
            <?php
        endif;
        foreach ($futureEvents as $event) {
            ?>
            <div class="bg-info info-box">
                <h3>
                    <a href="<?php print buildEventsURL('', '', $event->id); ?>"><?php print encodeHtml($event->title); ?></a>
                </h3>
                <ul>
                    <li><strong>Date:</strong> <?php print $event->getDateString(); ?></li>
                    <?php
                    $intervalString = $event->getIntervalString();
                    if (!empty($intervalString)) {
                        ?>
                        <li><strong><?php print $intervalString; ?></strong></li>
                        <?php
                    }
                    ?>
                    <li><strong>Location:</strong> <?php print encodeHtml($event->location); ?></li>
                    <?php
                    $timeString = $event->getTimeString();
                    if (!empty($timeString)) {
                        ?>
                        <li><strong>Time:</strong> <?php print encodeHtml($timeString); ?></li>
                        <?php
                    }
                    ?>
                    <li><strong>Cost: (&#36;) </strong><?php print encodeHtml($event->cost); ?></li>
                </ul>
                <p><?php print encodeHtml($event->summary); ?></p>
            </div>
            <?php
        }
        ?>
    </div>
    <script>
        var selectedCategories = '<?php print json_encode($selectedCategories); ?>';
        var includeSubcategories = '<?php print $includeSubcategories; ?>';

        $(function () {
            function changeCalendarMarkup() {
                $('.eventsCalendarContainer').show();
                $('.eventsList').remove();
            }

            function initCalendar() {
                eventsCalendar.init({
                    foo: 'bar',
                    selectedCategories: JSON.parse(selectedCategories),
                    calendarIdentifier: '#fc_calendar',
                    customButtons: {},
                    calendarIdentifier: '#fc_calendar',
                    includeSubcategories: includeSubcategories
                });
            }

            changeCalendarMarkup();
            initCalendar();
        })
    </script>

    <?php
} catch (InvalidArgumentException $e) {
    print $e->getMessage();
}
?>
