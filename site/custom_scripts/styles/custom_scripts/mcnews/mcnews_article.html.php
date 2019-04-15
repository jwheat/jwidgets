<?php
    $metadata = getMetadataForItem(NEWS_METADATA_TABLE, $news->id);

    if ($metadata->subject != '') {
        $metadata->subject .= ',';
    }

    $metadata->subject .= METADATA_GENERIC_KEYWORDS;

    if ($metadata->description == '') {
        $metadata->description = METADATA_GENERIC_NAME . '\'s ' . $news->title . ' news';
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/doctype.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/stylesheets.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/metadata.php';

    $categoryList = getLiveCategoryList(BESPOKE_CATEGORY_LIST_NAME);
    $cat = $categoryList->getCategory(getFirstCategoryIDForItemOfType(NEWS_CATEGORIES_TABLE, $news->id));
    $category_name = $cat->name;

    printMetadata(NEWS_METADATA_TABLE, NEWS_CATEGORIES_TABLE, $news->id, $news->title, 'http://' . DOMAIN . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);

    $url = isset($_SERVER['HTTPS']) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
    $url .= '://' . $_SERVER['SERVER_NAME'];
    $url .= in_array($_SERVER['SERVER_PORT'], ['80', '443']) ? '' : ':' . $_SERVER['SERVER_PORT'];

    $url .= $_SERVER['REQUEST_URI'];

    $image_url = getStaticContentRootURL() . '/images/' . encodeHtml($news->imageURL);

    $encoded_status = urlencode('I just read - ' . $news->summary);
    $encoded_url = urlencode($url);

?>
        <meta name="description" content="<?php print encodeHtml($news->title); ?> - <?php print encodeHtml($metadata->description); ?>">
        <meta name="keywords" content="news, <?php print encodeHtml($metadata->subject); ?>">


    <!-- for Facebook -->

    <meta property="og:title" content="<?php print encodeHtml($news->title); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="http:<?php print $image_url; ?>" />
    <meta property="og:url" content="<?php print $url; ?>" />
    <meta property="og:description" content="<?php print encodeHtml($news->summary); ?>" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php print encodeHtml($news->title); ?>" />
    <meta name="twitter:description" content="<?php print encodeHtml($news->summary); ?>" />
    <meta name="twitter:image" content="http://www.messiah.edu<?php print $image_url; ?>" />


<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/opening_javascript.php';
?>
        <title><?php print encodeHtml($MAST_HEADING); ?> | <?php print encodeHtml(METADATA_GENERIC_NAME); ?></title>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/opening.php';

    if ($news->id == -1) {
        ?>
                <h2>Sorry, this News item is no longer available</h2>
<?php
    } else {
        ?>

        <div class="news-detail">
            <div class="story-info">
                <p class="pub-date"><?php print formatDateTime('%A, %B %e, %Y', $news->newsDate); ?></p>
                <p class="category">Category: <?php print $category_name; ?></p>
            </div>
            <div class="social-share">
                <h3>Share this story:</h3>
                <ul class="social">
                    <li><a class="facebook" data-original-title='Facebook' data-placement='top' class='_tooltip' href='http://www.facebook.com/sharer.php?u=<?php print $encoded_url; ?>&t=<?php print $encoded_status; ?>' target='_blank'>facebook</a></li>
                    <li><a class="twitter"  data-original-title='Twitter' data-placement='top' class='_tooltip' href='http://twitter.com/home?status=<?php print $encoded_status; ?> <?php print $encoded_url; ?>' target='_blank'>twitter</a></li>
                    <li><a class="pinterest" data-pin-do="buttonBookmark" data-pin-custom="true" data-pin-lang="en" data-pin-save="true" href="https://www.pinterest.com/pin/create/button/"></a>
                    <li><a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print $encoded_url; ?>&title=<?php print encodeHtml($news->title); ?>&summary=<?php print encodeHtml($news->summary); ?>&source=">linkedin</a></li>
                    <li><a class="email" href="mailto:?&subject=<?php print encodeHtml($news->title); ?>&body=I just read <?php print encodeHtml($news->summary); ?> <?php print $encoded_url; ?>">email</a></li>
                </ul>
            </div>
        </div>

        <div class="editor">
<?php
        print processEditorContent($news->content); ?>

        </div>

        <script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<?php
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/custom_scripts/mcnews/mcnews_closing.php';
?>