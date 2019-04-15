 <?php
    require_once 'utilities/JaduStatus.php';
    require_once 'JaduStyles.php';
    require_once 'websections/JaduNews.php';
    require_once 'JaduAppliedCategories.php';

    $numberToDisplay = 6;
    $page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $offset = ($page * $numberToDisplay) - $numberToDisplay;

    // if offset isn't 0, we're on a subsequent request so we need to increase the offset
    if ($offset > 0) {
        //$offset =  $offset + $numberToDisplay;
    }

    // takes into account amount of items on news index
    $displayMinusIndex = false;

    // possibly a comma separated list
    $parent_category_filter = $_REQUEST['parentcat'];
    $child_category_filter = $_REQUEST['subcat'];

/*
    - (A) if parent = 0 && subcat == 0 => display all news items (nothing selected)
    - (B) if parent !=0 && subcat == 0 => display all news items for that parent and children
    - (C) if parent !=0 && subcat != 0 => display all news for subcat
    - (D) if parent = 'STOP' return no news.
    +++ NEED TO NOT FETCH ANY NEWS IF THE TOTAL IS < OFFSET
*/
    // (D) if parent = 'STOP' return no news.
    if ($parent_category_filter == 'STOP') {
        print $prefix;
        print $suffix;
        exit();
    }

    // Continue on for other cases

    // (A) if parent = 0 && subcat == 0 => display all news items (nothing selected)
    if ($parent_category_filter == 0 && $child_category_filter == 0) {
        // this is no checkboxes - load it all
        $allNews = getAllMCNews(true, true, 'newsDate', 'DESC', $offset, $numberToDisplay);
        $allNewsCount = getAllMCNews(true, true, 'newsDate', 'DESC', $offset, -1);
        $total_stories = count($allNewsCount);
    }

    // (B) if parent !=0 && subcat == 0 => display all news items for that parent and children
    if ($parent_category_filter != 0 && $child_category_filter == 0) {
        $bespokeCategoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);

        // we have checkboxes so we'll trudge through and process them

        // explode the parent categories and get the children for these parents
        $parent_category_filter_array = explode(',', $parent_category_filter);

        // get children categories for each parent
        $news_child_categories_array = [];
        foreach ($parent_category_filter_array as $parent_category_id) {
            $childSubCats = $bespokeCategoryList->getChildCategories($parent_category_id);
            $temp_cat_item = [];

            foreach ($childSubCats as $childcat) {
                //unset($temp_cat_item);                       // empty the temp array

                array_push($temp_cat_item, $childcat->id);     // add category id
                //array_push($temp_cat_item, $childcat->name);   // add category name
                //array_push($news_child_categories_array, $temp_cat_item);  // add item
            }
        }

        // Get Children's News for the selected parent
        $allNews = getAllNewsWithCategories($temp_cat_item, true, true);
        $total_stories = count($allNews);
    }

    // (C) if parent !=0 && subcat != 0 => display all news for subcat
    if ($parent_category_filter != 0 && $child_category_filter != 0) {
        //$bespokeCategoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);

        // we have checkboxes so we'll trudge through and process them

        // explode the parent categories and get the children for these parents
        //$child_category_filter_array = explode(",", $child_category_filter);

        // get children categories for each parent
        //$child_category_filter_array = array();
        /*
        foreach ($child_category_filter_array as $child_category_id) {
            #$childSubCats = $bespokeCategoryList->getChildCategories($parent_category_id);
            $temp_cat_item = array();

            foreach ($childSubCats as $childcat) {
                #unset($temp_cat_item);                       // empty the temp array

                array_push($temp_cat_item, $childcat->id);     // add category id
                #array_push($temp_cat_item, $childcat->name);   // add category name
                #array_push($news_child_categories_array, $temp_cat_item);  // add item
            }
        }
            */
        $temp_cat_item = [];
        array_push($temp_cat_item, $child_category_filter);
        // Get Children's News for the selected parent
        $allNews = getAllNewsWithCategories($temp_cat_item, true, true);
        $total_stories = count($allNews);
    }

    //$dateShowing = strftime('%B', mktime(0, 0, 0, $_GET['month'], 1, $_GET['year'])) . ' ' . $_GET['year'];

        if (!empty($allNews) && ($total_stories > $offset)) {
            $categoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);
            $prefix = '
{
   "items": ';
            $suffix = '
}';

            $field_array = [];

            foreach ($allNews as $news) {
                $cats = getAllCategoriesOfType(NEWS_CATEGORIES_TABLE, $news->id);
                $category_list_string = '';
                /* MULTIPLE CATEGORIES SET FOR NEWS ITEM - THIS SHOULDN'T HAPPEN */
                if (count($cats) > 1) {
                    // spin through and build comma separeated category list
                    foreach ($cats as $single_category) {
                        $cat = $categoryList->getCategory($single_category->categoryID);
                        if (!empty($category_list_string)) {
                            $category_list_string .= ', ';
                        }

                        $category_list_string .= $cat->name;
                        $cateogry_id_string .= $cat->id;
                    }
                } else {
                    $cat = $categoryList->getCategory(getFirstCategoryIDForItemOfType(NEWS_CATEGORIES_TABLE, $news->id));
                    $category_list_string = $cat->name;
                    $category_id_string .= $cat->id;
                }

                if (strlen($news->title) > 60) {
                    $news_title = substr($news->title, 0, 60) . '...';
                } else {
                    $news_title = $news->title;
                }

                if (strlen($news->summary) > 115) {
                    $news_caption = substr(encodeHtml($news->summary), 0, 115) . '...';
                } else {
                    $news_caption = $news->summary;
                }

                $entryID = $news->id;
                $field_array[$entryID]['total_stories'] = $total_stories;
                $field_array[$entryID]['page'] = $page;
                $field_array[$entryID]['entry_id'] = $news->id;
                $field_array[$entryID]['entry_title'] = $news->title;
                $field_array[$entryID]['subheading'] = $news_caption;
                $field_array[$entryID]['category_name'] = $category_list_string;
                $field_array[$entryID]['category_id'] = $category_id_string;
                $field_array[$entryID]['story_thumbnail'] = $news->imageURL;
                $field_array[$entryID]['subheading'] = $news_caption;
                $field_array[$entryID]['link'] = getSiteRootURL() . buildNewsArticleURL($news->id, true, $news->title);
            }

            //			print "directory_data(";
            print $prefix;
            echo json_encode(array_values($field_array)), "\n";
            //echo json_encode(array_values($field_array), JSON_UNESCAPED_SLASHES), "\n";
            print $suffix;
            //			print ");";
        }

    /**
     * Returns an array of News objects in the year and month supplied.
     *
     * @param int $year the year for the archive of news in format YYYY
     * @param int $month The month for the archive of news iin format MM. Defaults to January i.e. '01'.
     * @param bool $onlyLive defaults to false if not supplied, to return only live news items
     * @param bool $approvedOnly defaults to false if not supplied, to return only approved news items
     * @param string $orderBy what attribute to order the attributes by, default to 'newsDate'
     * @param string $orderDirection order of the results, defaults to 'DESC'
     * @param int $offset Postion in the result set to start at
     * @param int $numToDisplay Number of News items to return (-1 = all)
     *
     * @return array[]News Returns an array of News objects
     */
    function getAllMCNews($onlyLive = false, $approvedOnly = false, $orderBy = 'newsDate', $orderDirection = 'DESC', $offset = 0, $numToDisplay = -1)
    {
        global $db;
        //  Alter the query string slighty if we want approvedOnly as we cant change this query caching dependant on approvedFlag
        $select = 'SELECT';
        if ($approvedOnly) {
            $select = 'select';
        }

        //if ($month == 0) {
        //    $monthFrom = 1;
        //    $monthTo = 12;
        //}
        //else {
        //    $monthFrom = $month;
        //    $monthTo = $month;
        //}

        //$daysInMonthTo = date('t', mktime(0, 0, 0, $monthTo, 1, $year));
        //$fromTimestamp = mktime(0, 0, 0, $monthFrom, 1, $year);
        //$toTimestamp = mktime(23, 59, 59, $monthTo, $daysInMonthTo, $year);

        $dateFunctions['newsDate'] = $db->SQLDate('Y-m-d H:i:s', NEWS_TABLE . '.newsDate');
        $dateFunctions['modDate'] = $db->SQLDate('Y-m-d H:i:s', NEWS_TABLE . '.modDate');

        //$additional = " WHERE " . $dateFunctions['newsDate'] . " >= " . $db->DBTimeStamp($fromTimestamp) . " AND " .
        //              $dateFunctions['newsDate'] . " <= " . $db->DBTimeStamp($toTimestamp) . " ";

        //if ($onlyLive) {
        //$additional .= " AND " . NEWS_TABLE . ".live = 1";
        //}
        $additional = ' WHERE ' . NEWS_TABLE . '.live = 1';

        $query = $select . ' ' . NEWS_TABLE . '.id, title, summary, content, imageURL, live, topStory, adminID, ' .
        $dateFunctions['newsDate'] . ' AS newsDate, ' . $dateFunctions['modDate'] . ' AS modDate ' .
        'FROM ' . NEWS_TABLE . $additional . " ORDER BY $orderBy $orderDirection";

        //print $query;
        //error_log ($query);

        $cache = new Cache(NEWS_TABLE, $query . $orderBy . $orderDirection . $numToDisplay . $offset);
        $cache->isEmpty = true;

        if ($cache->isEmpty()) {
            if ($numToDisplay == -1) {
                $result = $db->Execute($query);
            } else {
                $result = $db->SelectLimit($query, $numToDisplay, $offset);
            }

            $allNews = [];

            while (!$result->EOF) {
                $row = $result->fields;

                $news = new News();
                $news->id = $row['id'];
                $news->title = $row['title'];
                $news->summary = $row['summary'];
                $news->content = $row['content'];
                $news->imageURL = $row['imageURL'];
                $news->live = $row['live'];
                $news->topStory = $row['topStory'];
                $news->adminID = $row['adminID'];

                $news->newsDate = $db->UnixTimeStamp($row['newsDate']);
                $news->modDate = $db->UnixTimeStamp($row['modDate']);

                //  get most recently approved item
                if ($approvedOnly) {
                    $versions = new Versions(NEWS_TABLE, $news->id, VERSIONS_TABLE, false);
                    $news = $versions->getLiveVersion();
                }

                if ($news != null) {
                    $allNews[] = $news;
                }

                $result->MoveNext();
            }
            $cache->setData($allNews);

            return $allNews;
        } else {
            return $cache->data;
        }
    }

    /**
     * Returns an array of News objects which have been assigned to a group of categories.
     *
     * @param int $categoryID the category Id for which all news should be returned
     * @param bool $onlyLive defaults to false if not supplied, to return only live news items
     * @param bool $approvedOnly defaults to false if not supplied, to return only approved news items
     * @param string $categoryType the Category Type, defaults to BESPOKE_CATEGORY_LIST_NAME
     * @param string $orderBy the name of the field to order results by
     * @param int $limit Limit the number of records returned. Defaults to 0 (no limit).
     * @param int $adminID When the ID of an admin is given only the news the admin owns are returned. Defaults to NULL.
     * @param int $workflowCategoriesAdminID When the ID of an admin is given only the news with assigned categories the admin can access are returned. Defaults to NULL.
     *
     * @return array[]News Returns an array of News objects
     */
//    function getAllNewsWithCategories($categoryList, $onlyLive = false, $approvedOnly = false, $categoryType = BESPOKE_CATEGORY_LIST_NAME, $orderBy = 'news.id', $limit = 0, $adminID = null, $workflowCategoriesAdminID = null, $offset = 0, $returnCount = false)
    function getAllNewsWithCategories($categoryList, $onlyLive = false, $approvedOnly = false, $categoryType = BESPOKE_CATEGORY_LIST_NAME, $orderBy = 'news.id', $adminID = null, $workflowCategoriesAdminID = null)
    {
        global $db;
        global $offset;
        global $limit;
        global $returnCount;

        if (defined('JADU_CONTENTSHARE_ENABLED') && JADU_CONTENTSHARE_ENABLED) {
            $registryEntryIDs = updateStubCacheForRegistryEntriesWithQuery(NEWS_TABLE);
        }

        if ($returnCount) {
            $query = 'SELECT COUNT(1) AS cnt ';
        } else {
            $query = 'SELECT news.id, news.title, news.summary, news.content, news.imageURL, news.live, news.topStory, news.adminID, ' .
                $db->SQLDate('Y-m-d H:i:s', 'news.newsDate') . ' AS newsDate, ' .
                $db->SQLDate('Y-m-d H:i:s', 'news.modDate') . ' AS modDate ';
        }

        $query .= 'FROM ' . NEWS_TABLE . ' news ' .
                 'INNER JOIN ' . NEWS_CATEGORIES_TABLE . ' categories ON news.id = categories.itemID ' .
                 'WHERE categories.categoryType = ' . $db->qstr($categoryType) . ' ' .
                 'AND categories.categoryID IN (' . implode(',', $categoryList) . ') ';

        if ($onlyLive) {
            $query .= 'AND news.live = 1 ';
        }

        if ($adminID > 0) {
            $query .= 'AND news.adminID = ' . intval($adminID) . ' ';
        }

        $adminWorkflowCategoryIDs = [];
        if ($workflowCategoriesAdminID > 0) {
            $adminWorkflowCategoryIDs = getWorkflowAdminAssignedCategoryIds($workflowCategoriesAdminID);
        }

        if (count($adminWorkflowCategoryIDs) > 0) {
            $query .= 'AND categories.categoryID IN (' . implode(',', $adminWorkflowCategoryIDs) . ') ';
        }

        $query .= 'GROUP BY news.id ';
        if (strpos(DB_DBMS, 'mssql') !== false) {
            $query .= ', news.title, news.summary, news.content, news.imageURL, ' .
                      'news.live, news.topStory, news.adminID, news.newsDate, news.modDate ';
        }

        $query .= 'ORDER BY newsDate DESC';

        $cacheId = "$query/$limit/$offset/";
        if ($approvedOnly) {
            $cacheId .= ' APPROVED';
        }

        $cache = new Cache(NEWS_TABLE, $cacheId);

        if ($cache->isEmpty()) {
            if ($limit < 1) {
                $result = $db->Execute($query);
            } else {
                $result = $db->SelectLimit($query, $limit, $offset);
            }
            $allNews = [];

            if ($result) {
                if ($returnCount) {
                    $allNews['count'] = $result->fields['cnt'];
                } else {
                    while (!$result->EOF) {
                        $row = $result->fields;

                        $news = new News();
                        $news->id = $row['id'];
                        $news->title = $row['title'];
                        $news->summary = $row['summary'];
                        $news->content = $row['content'];
                        $news->imageURL = $row['imageURL'];
                        $news->live = $row['live'];
                        $news->topStory = $row['topStory'];
                        $news->adminID = $row['adminID'];
                        $news->newsDate = $db->UnixTimeStamp($row['newsDate']);
                        $news->modDate = $db->UnixTimeStamp($row['modDate']);

                        //  get most recently approved item
                        if ($approvedOnly) {
                            $versions = new Versions(NEWS_TABLE, $news->id, VERSIONS_TABLE, false);
                            $version = $versions->getLiveVersion();
                            if ($version != null) {
                                $news = $version;
                            }
                        }

                        if (defined('JADU_CONTENTSHARE_ENABLED') && JADU_CONTENTSHARE_ENABLED) {
                            if (is_array($registryEntryIDs)) {
                                if (in_array($news->id, array_keys($registryEntryIDs))) {
                                    $news->remoteContentSite = $registryEntryIDs[$news->id];
                                }
                            }
                        }

                        $allNews[] = $news;

                        $result->MoveNext();
                    }
                }
            }

            $cache->setData($allNews);

            return $allNews;
        } else {
            return $cache->data;
        }
    }

?>