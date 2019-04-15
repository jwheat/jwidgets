<?php
    include_once 'egov/JaduCL.php';
    include_once 'JaduAppliedCategories.php';
    include_once 'utilities/JaduNavWidgets.php';
    include_once 'websections/JaduPageSupplements.php';
    include_once 'websections/JaduPageSupplementWidgets.php';
    include_once 'websections/JaduPageSupplementWidgetPublicCode.php';
    require_once 'custom/CustomHelper.php';

    $showLeftSupplements = false;
    $allWidgets = getAllNavWidgets();
    $allWidgets = removeNavWidgetsAreadyInUse($allWidgets);

    $lgclList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);
    $allRootCategories = $lgclList->getTopLevelCategories();
    $columnRootCategories = filterCategoriesInUseFromMultipleTables($allRootCategories, [DOCUMENTS_APPLIED_CATEGORIES_TABLE, HOMEPAGE_APPLIED_CATEGORIES_TABLE], true);

    if (isset($_GET['homepageID']) || mb_strpos($_SERVER['REQUEST_URI'], '/site/index.php') !== false) {
        include_once 'websections/JaduHomepages.php';
        if (isset($_GET['homepageID'])) {
            $homepage = getHomepage($_GET['homepageID']);
        } else {
            $allIndependantHomepages = getAllHomepagesIndependant();
            if (count($allIndependantHomepages) > 0) {
                $homepage = getHomepage($allIndependantHomepages[0]->id);
            }
        }
        if (isset($homepage) && $homepage->hideTaxonomy == '1') {
            return;
        }
    }
    if (($_SERVER['SCRIPT_NAME'] == '/site/scripts/faq_info.php' ||
        $_SERVER['SCRIPT_NAME'] == '/site/scripts/faqs_index.php' ||
        $_SERVER['SCRIPT_NAME'] == '/site/scripts/faqs.php') &&
        isset($faq) && $faq->id > 0) {
        $showLeftSupplements = true;
        $contentType = 'faq';
        $itemID = $faq->id;
    } elseif (($_SERVER['SCRIPT_NAME'] == '/site/scripts/documents_info.php' || $_SERVER['SCRIPT_NAME'] == '/preview/documents_info.php') &&
        isset($page) && $page->id > 0) {
        $showLeftSupplements = true;
        $contentType = 'document';
        $itemID = $page->id;
    } elseif (($_SERVER['SCRIPT_NAME'] == '/site/scripts/home_info.php' ||
        $_SERVER['SCRIPT_NAME'] == '/site/scripts/documents.php' ||
        $_SERVER['SCRIPT_NAME'] == '/site/index.php') &&
        isset($homepage) && $homepage->id > 0) {
        $showLeftSupplements = true;
        $contentType = 'homepage';
        $itemID = $homepage->id;
    }
?>
<!-- googleoff: index -->

<?php
    if ($showLeftSupplements) {
        $leftSupplements = getAllPageSupplements([
            'contentType' => $contentType,
            'itemID' => $itemID,
            'locationOnPage' => 'left',
        ], 'position ASC');

        if (sizeof($leftSupplements) > 0) {
            ?>
            <aside class="left-supplements">
<?php
            foreach ($leftSupplements as $supplement) {
                $record = $supplement->getRecord();
                if ($record->id > 0) {
                    if (defined('CUSTOM_ADVERT_LINK_SUPP_ID') && intval($supplement->supplementWidgetID) !== CUSTOM_ADVERT_LINK_SUPP_ID) {
                        continue;
                    }
                    $publicCode = getSupplementPublicCode($supplement->supplementWidgetID, $supplement->locationOnPage);
                    include $_SERVER['DOCUMENT_ROOT'] . '/site/includes/supplements/' . $publicCode->code;
                }
            } ?>
            </aside>
<?php
        }
        unset($record);
        unset($publicCode);
    }
?>
<aside>
    <div class="left-nav">
    <a href="/news"><h4>News</h4></a>
    <ul class="sec-nav" data-nav-menu="left_hand_navigation">
    <li><a href="/news?cat=faculty-and-staff">Faculty and Staff News</a></li>
    <li><a href="/news?cat=students-and-alumni">Students and Alumni News</a></li>
    <li><a href="/news?cat=event-news">Event News</a></li>
    <li><a href="/news?cat=profiles">Profiles</a></li>
    <li><a href="/news?cat=campus-news">Campus News</a></li>
    <li><a href="/news?cat=academics">Academics News</a></li>
    <li><a href="/news?cat=topical">Topical</a></li>
    </ul>
    </div>
    <aside class="left-supplements">
        <div class="frame">
            <div class="quick-links bg-info">
            <h5 class="sub-title">Quick links</h5>
            <ul class="info-list">
                <li>
                    <a href="http://www.messiah.edu/news-archive">View Archive</a>
                </li>
                <li>
                    <a href="http://www.messiah.edu/for-the-media">Information for the media</a>
                </li>
            </ul>
            </div>
        </div>
    </aside>
</aside>

        <!-- aside>
        NEW HTML HERE
<?php
    print custom\Nav\Menu::findByCodename('left_hand_navigation', [
            'stopAt' => [
                'up' => 'subsite',
            ],
            'depth' => 3,
            'maxUpDistance' => 3,
            'siblings' => true,
            'showHeading' => true,
            'linkHeading' => true,
            'headingTag' => 'h4',
            'onlyActiveBranch' => true,
            'relativeToReference' => true,
            'referenceParameters' => $_GET,
            'attributes' => [
                'div' => [
                    'class' => 'left-nav',
                ],
                'ul' => [
                    'class' => 'sec-nav',
                ],
            ],
        ])->render();

    /*
?>
            <nav>
                <ul class="item-list">
<?php
    foreach ($columnRootCategories as $category) {
?>
                    <li>
                        <a href="<?php print getSiteRootURL(); print buildDocumentsCategoryURL($category->id); ?>"><?php print encodeHtml($category->name); ?></a>
                    </li>
<?php
    }
?>
                </ul>
            </nav>
<?php
    */

    if (sizeof($allWidgets) > 0) {
        foreach ($allWidgets as $widget) {
            $allLinks = getAllNavWidgetLinksInNavWidget($widget->id); ?>
            <nav>
                <h2><?php print encodeHtml($widget->title); ?></h2>
                <ul class="item-list">
<?php
            foreach ($allLinks as $widgetLink) {
                ?>
                    <li>
                        <a href="<?php print encodeHtml($widgetLink->link); ?>"><?php print encodeHtml($widgetLink->title); ?></a>
                    </li>
<?php
            } ?>
                </ul>
            </nav>
<?php
        }
    }

    if ($showLeftSupplements) {
        $leftSupplements = getAllPageSupplements([
            'contentType' => $contentType,
            'itemID' => $itemID,
            'locationOnPage' => 'left',
        ], 'position ASC');

        if (sizeof($leftSupplements) > 0) {
            ?>
            <aside class="left-supplements">
<?php
            foreach ($leftSupplements as $supplement) {
                $record = $supplement->getRecord();
                if ($record->id > 0) {
                    if (defined('CUSTOM_ADVERT_LINK_SUPP_ID') && intval($supplement->supplementWidgetID) === CUSTOM_ADVERT_LINK_SUPP_ID) {
                        continue;
                    }
                    $publicCode = getSupplementPublicCode($supplement->supplementWidgetID, $supplement->locationOnPage);
                    include $_SERVER['DOCUMENT_ROOT'] . '/site/includes/supplements/' . $publicCode->code;
                }
            } ?>
            </aside>
<?php
        }
        unset($record);
        unset($publicCode);
    }
?>




        </aside -->
<!-- googleon: index -->
