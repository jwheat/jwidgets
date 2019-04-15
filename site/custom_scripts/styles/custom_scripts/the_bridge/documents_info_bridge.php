<?php
    require_once 'utilities/JaduStatus.php';
    require_once 'JaduCategories.php';
    require_once 'JaduMetadata.php';
    require_once 'websections/JaduDocuments.php';
    require_once 'websections/JaduDocumentsCategoryDefaults.php';
//    require_once 'websections/JaduDocumentPasswords.php';
    require_once 'websections/JaduDocumentPageStructures.php';
//    require_once 'egov/JaduCL.php';
    require_once 'JaduStyles.php';

    include_once 'API/Resource/Abstract.php';

    require_once 'directoryBuilder/JaduDirectories.php';
    require_once 'directoryBuilder/JaduDirectoryCategoryTree.php';
    require_once 'directoryBuilder/JaduDirectoryCategoryInformation.php';
    require_once 'directoryBuilder/JaduDirectoryEntries.php';
    require_once 'directoryBuilder/JaduDirectoryCategoryAdverts.php';
    require_once 'directoryBuilder/JaduDirectoryFields.php';
    require_once 'directoryBuilder/JaduDirectoryEntryValues.php';
    require_once 'directoryBuilder/JaduDirectoryFieldTypes.php';
    require_once 'directoryBuilder/JaduDirectorySettings.php';
    require_once 'directoryBuilder/JaduDirectoryCategoryFields.php';
    require_once 'directoryBuilder/JaduDirectoryFieldDefaultValues.php';
    require_once 'directoryBuilder/JaduDirectoryUserEntries.php';
    require_once 'directoryBuilder/JaduDirectoryUserEntryValues.php';

    // URL SYNTAX :
    // http://www.messiah.edu/infob/{DIRECTORYID}/the_bridge/{ENTRYID}/collaboratory_wins_team_of_the_year_award

    $dirTree = [];
    $pageNumber = 1;
    $showDocument = true;
    $accessDenied = false;

    if (isset($_GET['pageNumber'])) {
        $pageNumber = (int) $_GET['pageNumber'];
    }

    if (isset($_GET['directoryID'])) {
        $directoryID = $_GET['directoryID'];
    } else {
        // Fail out "gracefully"
        require_once '../../../404.php';
    }

    if (isset($_GET['entryID'])) {
        $entryID = $_GET['entryID'];
    } else {
        // Fail out "gracefully"
        require_once '../../../404.php';
    }

    // hacked in from directories to build the breadcrumbs... hopefully
    $record = getDirectoryEntry($entryID);

    //$entryInfo = getDirectoryEntry ($record);
    $entryTitle = $record->title;
    $field_array[$entryID]['title'] = $entryTitle;

    $field_list = getAllDirectoryFields($directoryID, false);

    foreach ($field_list as $field) {
        // grab the field id and field title which will be used in the array after its processed
        $fieldID = $field->id;
        $fieldTitle = $field->title;

        // get the entry value for this field
        $EntryValue = getDirectoryEntryValue($entryID, $fieldID);

        // build a nice key name for our future json string
        $field_index = preg_replace('/[^A-Za-z0-9\_]/', '', strtolower(str_replace(' ', '_', $fieldTitle)));

        // get the actual value from the returned array above
        $fieldValue = $EntryValue->value;

        $fieldValue = str_replace('<a', '<a target="_blank"', $fieldValue);

        // build our array
        $field_array[$entryID][$field_index] = $fieldValue;
    }

//print_r($field_array);

    // 404 error on invalid recordID values or non live directory entries
    if ($record->id == -1 || $record->live == 0) {
        require_once '../../404.php';
        exit();
    }
    $directory = getDirectory($record->directoryID, true);
    // 404 error on invalid directoryID values or non live directories
    if ($directory->id == -1 || $directory->live == 0) {
        require_once '../../404.php';
        exit();
    }
    $directoryFields = [];
    $recordValues = getAllDirectoryEntryValues($record->id);
    $dirTree = [];

    if (isset($_REQUEST['categoryID'])) {
        $category = getDirectoryCategory($_REQUEST['categoryID']);
        $dirTree = array_reverse(getDirectoryCategoryAncestors($category->id));
    }

    if (isset($_REQUEST['categoryInfoID']) && is_numeric($_REQUEST['categoryInfoID'])) {
        $categoryInfo = getDirectoryCategoryInformation($_REQUEST['categoryInfoID']);

        if ($categoryInfo->id != -1 && is_numeric($categoryInfo->id)) {
            $categoryFields = getAllDirectoryCategoryFields($categoryInfo->categoryID);
            foreach ($categoryFields as $categoryField) {
                $directoryFields[] = getDirectoryField($categoryField->fieldID);
            }
        }
    }

    if (empty($directoryFields)) {
        $directoryFields = getAllDirectoryFields($directory->id, $visibleOnly = true);
    }

    if ($directory->showSocialBookmarks == '1') {
        $bookmarkTitle = $record->title;
    }

    $directoryFieldTypes = [];
    $includeMaps = false;
    foreach ($directoryFields as $directoryField) {
        $directoryFieldType = getDirectoryFieldType($directoryField->fieldTypeID);
        $directoryFieldTypes[$directoryField->fieldTypeID] = $directoryFieldType;
        if ($directoryFieldType->name == 'Google Map') {
            $includeMaps = true;
        }
    }

    if ($includeMaps) {
        $includeGoogleMaps = defined('FRONTEND_USE_GOOGLE') && FRONTEND_USE_GOOGLE && (GOOGLE_MAPS_API_KEY !== '');
    }

    // Breadcrumb, H1 and Title
    $MAST_HEADING = $directory->name . ' - ' . $record->title;
    $MAST_BREADCRUMB = '<li>
                    <a href="' . getSiteRootURL() . '" rel="home">Home</a>
                </li>
                <li>
                    <a href="' . getSiteRootURL() . '/info/20000/about">About</a>
                </li>
                <li>
                    <a href="' . getSiteRootURL() . '/info/20015/news_and_events">News and Events</a>
                </li>
                <li>
                    <a href="' . getSiteRootURL() . '/the_bridge">The Bridge</a>
                </li>';
    foreach ($dirTree as $cat) {
        $MAST_BREADCRUMB .= '
                <li>
                    <a href="' . getSiteRootURL() . buildDirectoryCategoryURL($directory->id, $category->id, $categoryInfo->id) . '">' . encodeHtml($cat->title) . '</a>
                </li>';
    }
    if (isset($_REQUEST['categoryID'])) {
        $MAST_BREADCRUMB .= '
                <li>
                    <a href="' . getSiteRootURL() . buildDirectoryCategoryURL($directory->id, $category->id, $categoryInfo->id) . '">' . encodeHtml($category->title) . '</a>
                </li>';
    }
    $MAST_BREADCRUMB .= '
                <li>
                    <span>' . encodeHtml($record->title) . '</span>
                </li>';

    addJavascript('/site/custom_scripts/AccordionSupplement.js');

    require_once 'documents_info_bridge.html.php';
