<?php
// Only allow from events calendar, and don't allow to be called directly
if (!defined('EVENTS_CALENDAR_INCLUDE')) {
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/doctype.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/stylesheets.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/metadata.php';
?>

<link rel="stylesheet" type="text/css" href="//www.messiah.edu/site/custom_scripts/events/events.css">
<meta name="dcterms.description"
      content="<?php print encodeHtml(METADATA_GENERIC_NAME); ?>'s index of events organised within the following categories<?php foreach ($categories as $parent) {
    print ', ' . encodeHtml($parent->name);
} ?>">
<meta name="dcterms.subject" content="<?php foreach ($categories as $parent) {
    print encodeHtml($parent->name) . ', ';
}

print encodeHtml(METADATA_GENERIC_KEYWORDS); ?>">

<meta name="dcterms.title" content="<?php print encodeHtml(METADATA_GENERIC_NAME); ?> accessibility features">
<meta name="description"
      content="<?php print encodeHtml(METADATA_GENERIC_NAME); ?>'s index of events organised within the following categories<?php foreach ($categories as $parent) {
    print ', ' . encodeHtml($parent->name);
} ?>">
<meta name="keywords" content="<?php if (is_array( $categories)) {
    foreach ($categories as $parent) {
        print encodeHtml($parent->name) . ', ';
    }
}

print encodeHtml(METADATA_GENERIC_KEYWORDS); ?>">

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/opening_javascript.php';
?>

<title><?php print encodeHtml($title); ?>
    | <?php print encodeHtml(METADATA_GENERIC_NAME); ?></title>
<?php
//require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/opening.php';
require_once 'events_opening.php';
require_once 'events_calendar_include.php';

?>
<div class="eventsIndex">
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/scripts/events_index_includes.php';
    ?>
</div>

<script>
    $(function () {
        function getSelectedCategories() {
            var selectedCategories = [];
            //  Get what categories are already selected
            $('.origCategoriesForm .filterForm input[type="checkbox"]:checked').each(function (index, item) {
                var value = $(item).attr('value');

                if (selectedCategories.indexOf(value) == -1) {
                    selectedCategories.push(value);
                }
            });

            return selectedCategories;
        }

        function changeCalendarMarkup() {
            var $divContainer = $('div#content').parent()

            $divContainer
                .removeClass('two-columns')
                .addClass('one-column');

            $('body')
                .addClass('one-column')

            $divContainer.find('aside').remove();

            $('.eventsCalendarContainer').show();
            $('.eventsIndex').remove();

        }

        function initCalendar() {
            eventsCalendar.init({
                selectedCategories: getSelectedCategories(),
                calendarIdentifier: '#fc_calendar'
            });
        }

        changeCalendarMarkup();
        initCalendar();
    })
</script>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/closing.php';
?>
