<?php
    require_once 'utilities/JaduStatus.php';
    require_once 'JaduStyles.php';
    require_once 'JaduMetadata.php';
    require_once 'JaduCategories.php';
    require_once 'egov/JaduCL.php';
    require_once 'websections/JaduHomepages.php';
    require_once 'websections/JaduHomepageWidgetsToHomepages.php';
    require_once 'websections/JaduHomepageWidgets.php';
    require_once 'websections/JaduHomepageWidgetSettings.php';
    require_once 'utilities/JaduAdministrators.php';

    // News Related Classes
    require_once 'websections/JaduNews.php';
    require_once 'JaduAppliedCategories.php';
    require_once 'websections/JaduFeedManager.php';

    $allNews = getAllNewsByDateLimited(30, true, true);
    $categoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);

    $allRSSItems = getAllExternalFeedsForNews();

    $homepage = 2056;  // News Homepage

    $indexPage = false;
    $_SERVER['SCRIPT_NAME'] = '/site/scripts/home_info.php';
    $_GET['homepageID'] = $homepage;

    if (isset($_GET['cat'])) {
        $default_querystring_cat = $_GET['cat'];
        $default_category_name = str_replace('-', ' ', $default_querystring_cat);
    } else {
        $default_category_name = '';
        $default_cat_id = 0;
    }

    // Common variables for both documents & homepages
    $categoryItemArray = [];
    $dirTree = [];
    $includeMaps = false;

    //$preview = validateAdminPreviewHash(getAdministrator($_GET['adminID']), $_GET['preview'], $_GET['expire']);
    // - CMS 31 breaking changes
    //$preview = (isset($isPreviewLink) && $isPreviewLink &&isset($allowPreview) && $allowPreview);

    $preview = (isset($isPreviewLink) && $isPreviewLink && isset($allowPreview) && $allowPreview);
    $homepage = getHomepage($_GET['homepageID'], !$preview);
    $categories = getAllCategories(HOMEPAGE_CATEGORIES_TABLE, $homepage->id);
    $widgets = $homepage->getWidgetsToHomepages();
    $homepageSections = [];
    $dirTree = [];

    foreach ($categories as $category) {
        if ($category->categoryType == BESPOKE_CATEGORY_LIST_NAME) {
            $_GET['categoryID'] = $category->categoryID;
            break;
        }
    }

    if ($homepage->stylesheet != '' && $STYLESHEET != 'generic/handheld.css' && !isset($_GET['previewstyle']) && !isset($_GET['switchstyle']) && !isset($_SESSION['switchstyle' . $site->id])) {
        $STYLESHEET = $homepage->stylesheet;
    }

    foreach ($widgets as $content) {
        if (!isset($homepageSections[$content->positionY])) {
            $homepageSections[$content->positionY] = [];
        }
        if ($content->stackPosition > 0) {
            if (!isset($homepageSections[$content->positionY][$content->positionX])) {
                $homepageSections[$content->positionY][$content->positionX] = [];
            }
            $homepageSections[$content->positionY][$content->positionX][] = $content;
        } else {
            $homepageSections[$content->positionY][] = $content;
        }
    }

    $bespokeCategoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);
    $dirTree = $bespokeCategoryList->getFullPath($_GET['categoryID']);

    // Obtain Top Level News category ID
    $relevantCats = $bespokeCategoryList->getTopLevelCategories();
    foreach ($relevantCats as $rcat) {
        if ($rcat->name == 'News') {
            $topLevelNewsCategory = $rcat->id;

            // Obtain Children of News ROOT Category
            $news_parent_categories_array = [];
            $newsSubCats = $bespokeCategoryList->getChildCategories($topLevelNewsCategory);
            foreach ($newsSubCats as $nscat) {
                unset($temp_cat_item);                       // empty the temp array

                $temp_cat_item = [];
                array_push($temp_cat_item, $nscat->id);     // add category id
                array_push($temp_cat_item, $nscat->name);   // add category name
                array_push($news_parent_categories_array, $temp_cat_item);  // add item
            }
        }
    }

    foreach ($news_parent_categories_array as $news_category) {
        // new format becaue we like to change everything last minute
        // <li class="faculty">Faculty<br>and Staff<span class="cancel-filter">x</span></li>
        //$filter_category .= "<span><input type='radio' name='filters' class='story-filter' value='".$news_category[0]."' autocomplete='off'> " . $news_category[1] . "</span>\n";
        $class_name = explode(' ', $news_category[1]);

        // match for querystring category
        if ($default_category_name == strtolower($news_category[1])) {
            $default_cat_id = $news_category[0];
            $default_active = ' active ';  // active class for the currently selected option
        } else {
            $default_active = '';
        }

        // change first space to <br/> tag
        //$cat_title = $result = preg_replace('%^([^ ]+?)( )(.*)$%', '\1<br>\3', $subject);
        //$cat_title = preg_replace('/ /', "<br/>", $news_category[1], 1);
        $cat_title = preg_replace('/ /', '<br> ', $news_category[1], 1);

//        $filter_category .= "<li class='".strtolower($class_name[0])." story-filter' filter_value='".$news_category[0]."' >" . $cat_title . "<span class=\"cancel-filter\">x</span></li>\n";
        $filter_category .= "<li class='" . strtolower($class_name[0]) . $default_active . " story-filter' filter_name='" . $news_category[1] . "' filter_value='" . $news_category[0] . "' ><span>" . $cat_title . "</span><span id='cancel_" . $news_category[0] . "' class='cancel-filter'>x</span></li>\n";
    }

    $MAST_HEADING = $homepage->title;
    $MAST_BREADCRUMB = '';

    $levelNo = 1;
    $count = 0;

    require_once 'mcnews_index.html.php';

    function super_unique($array)
    {
        $result = array_map('unserialize', array_unique(array_map('serialize', $array)));

        foreach ($result as $key => $value) {
            if (is_array($value)) {
                $result[$key] = super_unique($value);
            }
        }

        return $result;
    }
