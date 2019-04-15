<?php

include_once 'API/Resource/Abstract.php';
include_once 'JaduCategories.php';
include_once 'directoryBuilder/JaduDirectories.php';
include_once 'directoryBuilder/JaduDirectoryEntries.php';
include_once 'directoryBuilder/JaduDirectoryEntryValues.php';
include_once 'directoryBuilder/JaduDirectoryFields.php';
include_once 'directoryBuilder/JaduDirectoryFieldTypes.php';
include_once 'utilities/JaduGoogleMaps.php';

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

    require 'custom/academics/class.MessiahDirectoryCategoryHelper.php';
    $directoryhelper = new MessiahDirectoryCategoryHelper();

    $categoryID = $_GET['categoryID'];
    $directoryID = $_GET['directoryID'];

    if (empty($categoryID) || empty($directoryID)) {
        print 'invalid call';
        exit();
    }

    $offset = 0; 	// set default offset to beginning of the list
    $return_max = 100;	// set max returned items

    if (isset($_GET['offset'])) {
        $offset = $_GET['offset'];
    }

    if (isset($_GET['displayed'])) {
        $displayed = $_GET['displayed'];
    } else {
        $displayed = 0;
    }

if ($displayed != -1) {
    if ($offset != $displayed) {
        //script went wonky
        $offset = intval($displayed) - 4;
    }
}

    if (isset($_GET['return'])) {
        $return_max = $_GET['return'];
    }

    $prefix = '';
    $sufffix = '';

    if (isset($_GET['json'])) {
        if ($_GET['json'] == true) {
            $prefix = '
{
   "items": ';
            $suffix = '
}';
        }
    }

    if (isset($_GET['live_only'])) {
        $live_only = $_GET['live_only'];
        if ($live_only = 'Y') {
            $live_only = true;
        } else {
            $live_only = false;
        }
    } else {
        $live_only = false;
    }

    $results = getAllDirectoryEntriesUnderCategory($directoryID, $categoryID, '', $live_only);
    $field_list = getAllDirectoryFields($directoryID, false);
    $field_array = [];
    $new_array = [];

    $return_set_counter = 0;	// keep track of how many items we've added to the array
    $local_counter = 0; 		// keep track of the number of times we've looped through the items
    $number_of_records = count($results);

if ($offset < $number_of_records) {
    // loop through all the short entries in the directory
    foreach ($results as $res) {
        // grab the entry id and entry title from the default fields in the short entry
        $major_name = '';
        $entryID = $res->id;
        $entryTitle = $res->title;
        $live = $res->live;

        if ($local_counter >= $offset && $return_set_counter < $return_max) {
            $field_array[$entryID]['entry_id'] = $entryID;
            $field_array[$entryID]['entry_title'] = $entryTitle;
            $field_array[$entryID]['live'] = $live;

            ++$return_set_counter;	// keep track of how many records we've added to the array
            $add_this = true;
        } else {
            $add_this = false;
        }

        $entry_categories = getCategoriesAssignedToEntry($entryID, 'DIRECTORY');

        //$field_array[$entryID]['category_name'] = "";

        if (!empty($entry_categories)) {
            $entry_category_id = implode(',', $entry_categories);

            $category_name = $directoryhelper->get_directory_category_name($directoryID, $entry_category_id);

            if (!empty($category_name)) {
                foreach ($category_name as $cat) {
                    $major_name = $cat['title'];
                    //$field_array[$entryID]['category_name'] = $cat['title'];
                }
            }
        }
        if ($add_this) {
            $field_array[$entryID]['category_name'] = $major_name;
        }

        // loop through all the fields in this directory
        foreach ($field_list as $field) {
            // grab the field id and field title which will be used in the array after its processed
            $fieldID = $field->id;
            $fieldTitle = $field->title;

            // get the entry value for this field
            $EntryValue = getDirectoryEntryValue($entryID, $fieldID);

            // build a nice key name for our future json string
            $field_index = preg_replace('/[^A-Za-z0-9\_]/', '', strtolower(str_replace(' ', '_', $fieldTitle)));
            $field_index = str_replace('__', '_', $field_index);
            $field_index = trim($field_index, '_');

            // get the actual value from the returned array above
            $fieldValue = $EntryValue->value;

            // remove extra line returns
            $fieldValue = str_replace("\r\n", '<br/>', $fieldValue);

            if ($add_this) {
                // build our array
                $field_array[$entryID][$field_index] = $fieldValue;
            }
        }
        // check to see if we have to add this item to the array
        ++$local_counter;
    }
}

    $indexedOnly = [];

    foreach ($field_array as $row) {
        $indexedOnly[] = array_values($field_array);
    }

    print $prefix;
    print json_encode(array_values($field_array));
    print $suffix;

    //$json_string = $prefix . json_encode(array_values($field_array)) . $suffix;

    //$json = json_decode($json_string);
    //echo json_encode($json, JSON_PRETTY_PRINT);

    function get_directory_category_name($directory_id, $parent_id, $category_id)
    {
        global $db;

        $query = 'select id,title,position,parentID
				from JaduDirectoryCategoryTree
				where directoryID = ' . $directory_id . '
				and parentID = ' . $parent_id . '
				and id = ' . $category_id . '
				order by title';
        //print $sql;
        $result = $db->Execute($query);

        return $result;
    }
