<?php
  /**************************************************
   * Messiah College Custom Documents Widget
   * Screen : Front End
   *
   */

    require_once 'websections/JaduDocuments.php';
    require_once 'websections/JaduDocumentsCategoryDefaults.php';

    $widgetShowDefaultContent = false;
    $widgetCategoryID = '';

    $param_heading = "";
    if ('%PARAM_HEADING%' != '' && '%PARAM_HEADING%' != '%PARAM_HEADING'.'%') {
            $param_heading = '%PARAM_HEADING%';
    }


    if (isset($_GET['categoryID'])) {
        $widgetCategoryID = $_GET['categoryID'];
    }
    if ('%CATEGORIES%' != '%' . 'CATEGORIES%') {
        $widgetCategoryID = '%CATEGORIES%';
    }
    if ($widgetCategoryID != '' && $widgetCategoryID > 0) {
        $widgetCategoryList = new CategoryList(BESPOKE_CATEGORY_LIST_NAME, BESPOKE_CATEGORY_LIST_FILE);
        $widgetAllCategories = $widgetCategoryList->getChildCategories($widgetCategoryID);
        $widgetParent = $widgetCategoryList->getCategory($widgetCategoryID);
        $widgetAllDocuments = getAllDocumentsWithCategory($widgetCategoryID, true, false);
?>
<div class="widget-quick-links bg-info">
    <h2><?php print encodeHtml($param_heading); ?></h2>
<?php
        if (sizeof($widgetAllDocuments) > 0) {
?>
    <ul class="item-list">
<?php
            foreach ($widgetAllDocuments as $widgetDocument) {
                $widgetDocumentHeader = getDocumentHeader($widgetDocument->headerOriginalID, true);
?>
        <li>
            <a href="<?php print getSiteRootURL() . buildDocumentsURL($widgetDocument->id, $widgetCategoryID); ?>"><?php print encodeHtml($widgetDocumentHeader->title); ?></a>
        </li>
<?php
            }
?>
    </ul>
<?php
        }
    }
?>
</div>
