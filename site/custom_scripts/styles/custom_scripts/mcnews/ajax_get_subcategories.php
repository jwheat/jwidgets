 <?php
    require_once 'utilities/JaduStatus.php';
    require_once 'JaduStyles.php';
    require_once 'websections/JaduNews.php';
    require_once 'JaduAppliedCategories.php';

    $numberToDisplay = 6;
    $page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $offset = ($page * $numberToDisplay) - $numberToDisplay;

    $showNext = false;
    $showPrevious = false;

    // takes into account amount of items on news index
    $displayMinusIndex = false;

    // possibly a comma separated list
    $parent_category_filter = $_REQUEST['parent_category_filter'];

    //if ($parent_category_filter == 0) {
        // this is no checkboxes - load it all
    //    $allNews = getAllMCNews( true, true, 'newsDate', 'DESC', $offset, $numberToDisplay);
    //} else {
        $bespokeCategoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);

        // we have checkboxes so we'll trudge through and process them

        // explode the parent categories and get the children for these parents
        //$parent_category_filter_array = explode(",", $parent_category_filter);

        // get children categories for each parent
        $news_child_categories_array = [];
        //foreach ($parent_category_filter_array as $parent_category_id) {
            $childSubCats = $bespokeCategoryList->getChildCategories($parent_category_filter);
            //$temp_cat_item = array();

            //foreach ($childSubCats as $childcat) {
                //unset($temp_cat_item);                       // empty the temp array

            //    array_push($temp_cat_item, $childcat->id);     // add category id
                //array_push($temp_cat_item, $childcat->name);   // add category name
                //array_push($news_child_categories_array, $temp_cat_item);  // add item
            //}
        //}

        // Get Children's News for the selected parent
        //$child_cat_news = getAllNewsWithCategories($temp_cat_item, true, true);
            //print_r($childSubCats);
            //exit();
    //}

    print json_encode($childSubCats);
