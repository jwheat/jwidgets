<?php
    require_once 'utilities/JaduStatus.php';
    require_once 'JaduStyles.php';
    require_once 'websections/JaduNews.php';
    //require_once 'JaduCategories.php';
    require_once 'JaduAppliedCategories.php';
    require_once 'JaduAppliedCategories.php';
    require_once 'JaduMetadata.php';
    require_once 'websections/JaduFeedManager.php';
    require_once 'utilities/JaduMostPopular.php';

    // Validate inputs
    //if (!is_numeric($_GET['newsID'])) {
    // CMS 31 - Breaking Changes
    //if (!is_numeric($jadu­>getInput()­>get('newsID'))) {
    //    header('Location: ' . buildNewsURL());
    //    exit();
    //}

    // Default to approved/live
    $approvedOnly = true;
    $liveOnly = true;

    // Check whether an administrator is previewing the page
    // (isset($_GET['adminID']) && isset($_GET['preview']) && isset($_GET['expire'])) {
    //    include_once('utilities/JaduAdministrators.php');
    //    $approvedOnly = $liveOnly = !validateAdminPreviewHash(getAdministrator($_GET['adminID']), $_GET['preview'], $_GET['expire']);
    //}

    // CMS 31 - Breaking Changes
    $allowPreview = (isset($isPreviewLink) && $isPreviewLink && isset($allowPreview) && $allowPreview);
    if ($allowPreview) {
        $approvedOnly = $liveOnly = false;
    }

    if (isset($_GET['newsID'])) {
        $news = getNews($_GET['newsID'], $liveOnly, $approvedOnly);
    } else {
        $news = getTopNews($liveOnly, $approvedOnly);
        if ($news->id < 1) {
            $news = getLastNews($liveOnly, $approvedOnly);
        }
    }

    //if the news item doesnt exist, re-direct to index
    if ($news->id < 1) {
        header('HTTP/1.0 404 Not Found');
        header('Location: ' . buildNewsURL());
        exit();
    }

    $allRSSItems = getAllExternalFeedsForNews();

    // Breadcrumb, H1 and Title
    $MAST_HEADING = $news->title;
    $MAST_BREADCRUMB = '<li>
                    <a href="' . getSiteRootURL() . '" rel="home">Home</a>
                </li>
                <li>
                    <a href="' . getSiteRootURL() . buildNewsURL() . '" >Latest news</a>
                </li>
                <li>
                    <span>' . encodeHtml($news->title) . '</span>
                </li>';

    require_once 'mcnews_article.html.php';
