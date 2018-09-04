<?php
    require_once 'JaduConstants.php';
    require_once 'directoryBuilder/JaduDirectories.php';
    require_once 'directoryBuilder/JaduDirectoryCategoryTree.php';
    require_once 'directoryBuilder/JaduDirectoryEntries.php';
    require_once 'egov/JaduCL.php';
    require_once 'library/JaduStringFunctions.php';
    
    $directoryWidgetTitle = '%TITLE%';
    $directoryWidgetContent = '%DESCRIPTION%';
    $directoryID = '%DIRECTORYID%';
    $bespokeCategoryList = new CategoryList(BESPOKE_CATEGORY_LIST_NAME, BESPOKE_CATEGORY_LIST_FILE);
    $rootCategory = $bespokeCategoryList->getCategoryByName('Care Centres');
    $secondLevelCategories = $bespokeCategoryList->getChildCategories($rootCategory->id);
    $categories = array();
    
    foreach ($secondLevelCategories as $category) {
        $thirdLevelCategory = $bespokeCategoryList->getChildCategories($category->id);
        
        foreach ($thirdLevelCategory as $cat) {
            $categories[] = $cat->name;
        }
    }
    sort ($categories);
    
    if ($directoryWidgetTitle != '' && $directoryWidgetTitle != '%TITLE' . '%') {
?>
    <h2><?php print encodeHtml($directoryWidgetTitle); ?></h2>
<?php
    }
    if ($directoryWidgetContent != '' && $directoryWidgetContent != '%DESCRIPTION' . '%') {
?>
    <p><?php print encodeHtml($directoryWidgetContent); ?></p>
<?php
    }
?>
    <form method="get" action="<?php print getSiteRootURL(); ?>/site/scripts/directory_search.php" class="form form__inline">
        <input type="hidden" value="<?php print $directoryID; ?>" name="directoryID">
        <input type="hidden" value="Search" name="search">
        <span>
            <input type="text" class="field" placeholder="Search by keyword..." name="keywords">
            <input type="submit" class="button" name="submit" value="Search">
        </span>
        <span>
            <input type="text" class="field" placeholder="Enter your postcode..." name="postcode">
            <input type="submit" class="button" name="submit" value="Find">
        </span>
    </form>
    <a href="<?php print getSiteRootURL(); ?>/site/scripts/directory_search.php?directoryID=<?php print $directoryID; ?>">Advanced search</a>
