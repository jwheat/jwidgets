<?php
    require_once('egov/JaduCL.php');
    require_once('custom/CustomHelper.php');

    $lgclList = new CategoryList(BESPOKE_CATEGORY_LIST_NAME, BESPOKE_CATEGORY_LIST_FILE);
    $hccRootCategories = $lgclList->getTopLevelCategories();
    $NUM_EVENTS_TO_DISPLAY = 10;

    $customEventCats = array();
    $allEventCategories = getAllEventCategories();
    if (!empty($allEventCategories)) {
        foreach ($allEventCategories as $eventCatKey => $eventCatValue) {
            $eventCat = $lgclList->getCategory($eventCatValue);
            $customEventCats[] = $eventCat;
        }
    } else {
        print 'There are no event categories to select. Please assign some categories to events';
        exit;
    }

    usort($your_data, "cmpCustomEventCats");
?>
<table class="form_table" id="tbl_widget_content">
    <tr>
        <td class="label_cell">
            Title
        </td>
        <td class="data_cell">
            <input type="custom_events_title" value="" id="custom_events_title" class="field" size="12">
        </td>
    </tr>
    <tr>
        <td class="label_cell">
            Text
        </td>
        <td class="data_cell">
            <textarea cols="43" rows="3" value="" id="custom_events_text" class="field"></textarea>
        </td>
    </tr>
    <tr>
        <td class="label_cell">Category</td>
        <td class="data_cell">
            <input type="button" class="button" id="assignCategories" value="Assign Categories" onclick="loadLightbox('assign_category', 'lb2', 'mode=lb2&target=widget');" />
            <br/> Only the first selected category will be used.
        </td>
    </tr>
    <tr>
        <td class="label_cell"></td>
        <td class="data_cell">
            <input type="button" class="button" id="" value="Show Valid Categoies" onclick="$(custom_events_cat).toggle();" />
            <ul id="custom_events_cat" style="display:none;">
                <?php foreach ($customEventCats as $customEventCatsValue) { ?>
                    <li><?php print $customEventCatsValue->name; ?></li>
                <?php } ?>
            </ul>
        </td>
    </tr>

    <tr>
        <td class="label_cell">Number of events to display</td>
        <td class="data_cell">
            <select id="custom_events_num">
                <option value="all">ALL</option>
                <?php foreach (range(1, $NUM_EVENTS_TO_DISPLAY) as $value) { ?>
                    <option value="<?php print $value; ?>"><?php print $value; ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="label_cell">Link Title</td>
        <td class="data_cell"><input type="text" value="" id="custom_events_link_title" class="field" size="12"></td>
    </tr>

    <tr>
        <td class="label_cell">Link Destination</td>
        <td class="data_cell"><input type="text" value="" id="custom_events_link_dest" class="field" size="12"></td>
    </tr>    
</table>
