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

    $prefix = '';
    $sufffix = '';

    if (isset($_GET['json'])) {
        if ($_GET['json'] == true) {
            $prefix = '
{
   "items": [';
            $suffix = '
	]
}';
        }
    }

    $results = getAllDirectoryEntriesUnderCategory($directoryID, $categoryID, '', false);
    $field_list = getAllDirectoryFields($directoryID, false);
    $field_array = [];

    // loop through all the short entries in the directory
    foreach ($results as $res) {
        // grab the entry id and entry title from the default fields in the short entry
        $major_name = '';
        $entryID = $res->id;
        $entryTitle = $res->title;

        $field_array[$entryID]['entry_id'] = $entryID;
        $field_array[$entryID]['entry_title'] = $entryTitle;

        $entry_categories = getCategoriesAssignedToEntry($entryID, 'DIRECTORY');
        //print_r($entry_categories);

        if (!empty($entry_categories)) {
            $entry_category_id = implode(',', $entry_categories);
            //print "**" . $entry_category_id . "**";

            $category_name = $directoryhelper->get_directory_category_name($directoryID, $entry_category_id);
            //print_r($category_name);

            if (!empty($category_name)) {
                foreach ($category_name as $cat) {
                    $major_name = $cat['title'];
                }
            }
        }

        $field_array[$entryID]['major_name'] = $major_name;

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

            // build our array
            $field_array[$entryID][$field_index] = $fieldValue;
        }
    }
    // transform the array into json for easier transport via an API call
    $json = json_encode($field_array);
    print $prefix;
    print $json;
    print $suffix;

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
