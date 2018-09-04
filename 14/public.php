<?php
    require_once 'websections/JaduNews.php';

    $allNews = array();
    $newsItemsToShow = 4;
    $topNews = getTopNews(true, true);
    $newsItems = getAllNewsByDateLimited($newsItemsToShow, true, true);

    if ($topNews !== null) {
        $allNews[] = $topNews;

        // Remove top news from all news list
        $newsItems = array_filter($newsItems, function($news) use ($topNews) {
            return ($news->id != $topNews->id);
        });
    }

    // Combine top news and news list and set max limit of all news items
    $allNews = array_merge($allNews, $newsItems);
    $allNews = array_slice($allNews, 0, $newsItemsToShow);
?>
    <h2>Latest news</h2>
<?php
    foreach ($allNews as $news) {
?>
    <h3>
        <a href="<?php print getSiteRootURL() . buildNewsArticleURL($news->id); ?>"><?php print encodeHtml($news->title); ?></a>
    </h3>
    <p><?php print encodeHtml($news->summary); ?></p>
<?php
    }
?>
    <a href="<?php print getSiteRootURL() . buildRSSURL(); ?>" target="_blank">RSS news feed</a>
