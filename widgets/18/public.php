<?php
    require_once 'websections/JaduEvents.php';
    require_once 'egov/JaduEGovMeetingMinutes.php';
    
    if (isset($_GET['month']) && $_GET['month'] > 0 && isset($_GET['year']) && $_GET['year'] > 1970) {
        $month = (int) $_GET['month'];
        $year = (int) $_GET['year'];
    }
    else {
        $month = (int) date('m');
        $year = (int) date('Y');
    }
    
    $timestamp = mktime(0, 0, 0, $month, 1, $year);
    $daysInMonth = date('t', $timestamp);
    $day = 1 - date('w', $timestamp);
    $dayLabels = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    
    if (CALENDAR_FIRST_DAY > 0 && CALENDAR_FIRST_DAY < 7) {
        $dayLabels = array_merge(array_slice($dayLabels, CALENDAR_FIRST_DAY), array_slice($dayLabels, 0, CALENDAR_FIRST_DAY));
        $day -= 7 - CALENDAR_FIRST_DAY;
        if ($day <= -6) {
            $day += 7;
        }
    }
?>
    <h2><?php print strftime('%B', $timestamp); ?> events calendar</h2>
    <table class="calendar">
        <tr>
<?php
    foreach ($dayLabels as $dayLabel) {
?>
            <th scope="col"><?php print encodeHtml(substr($dayLabel, 0, 2)); ?></th>
<?php
    }
?>
        </tr>
        <tr>
<?php
    $index = 1;
    while (true) {
        $class = '';
        $timestamp = mktime(0, 0, 0, $month, $day, $year);
        $date = date('d-m-Y', $timestamp);
        
        if ($timestamp == mktime(0, 0, 0)) {
            $class = 'today';
        }
        if ($day > 0 && $day <= $daysInMonth) {
            if (sizeof(getEventsForDate(date('d-m-Y', $timestamp))) > 0 || sizeof(getMeetingsInDateRangeAsEvents($date, $date)) > 0) {
?>
            <td<?php if ($class != '') print ' class="' . $class . '"'; ?>>
                <a href="<?php print getSiteRootURL() . buildEventsURL(-1, '', -1, $date, $date, -1, $year, $month) ?>"><?php print strftime('%d', $timestamp); ?></a>
            </td>
<?php
            }
            else {
?>
            <td><?php print strftime('%d', $timestamp); ?></td>
<?php
            }
        }
        else {
?>
            <td></td>
<?php
        }
        if ($index % 7 === 0) {
            if ($day > $daysInMonth) {
                break;
            }
?>
        </tr>
        <tr>
<?php
        }

        $index++;
        $day++;
    }
?>
        </tr>
    </table>
