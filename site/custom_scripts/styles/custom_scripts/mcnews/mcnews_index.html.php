<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/doctype.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/stylesheets.php';

    /*
     * Messiah College Canonical Module Insertion Point
     *
     */
    require_once $_SERVER['DOCUMENT_ROOT'] . '/a/jadu/canonical/class.canonical.php';
    $canonicalEntries = new Canonical();
    $canonical_entries = $canonicalEntries->getCanonicalEntries($homepage->id, 'homepage');

    if (!empty($canonical_entries)) {
        $canonicalEntries->printCanonicalEntries($canonical_entries);
    }
    /* ****************************************************************/

    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/metadata.php';

    $metadata = getMetadataForItem(HOMEPAGES_METADATA_TABLE, $_GET['homepageID']);
    if ($metadata->subject == '') {
        $metadata->subject = METADATA_GENERIC_KEYWORDS;
    }
    if ($metadata->description == '') {
        $metadata->description = $homepage->title . ' - ' . $homepage->description;
    }

?>
        <meta name="description" content="<?php print encodeHtml($metadata->description); ?>">
        <meta name="keywords" content="<?php print encodeHtml($metadata->subject); ?>">
        <meta name="dcterms.description" content="<?php print encodeHtml($metadata->description); ?>">
        <meta name="dcterms.subject" content="<?php print encodeHtml($metadata->subject); ?>">
        <meta name="dcterms.title" content="<?php print encodeHtml($MAST_HEADING); ?>">        
<?php
    printMetadata(HOMEPAGES_METADATA_TABLE, HOMEPAGE_CATEGORIES_TABLE, $homepage->id, $homepage->title, 'http://' . DOMAIN . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/opening_javascript.php';
?>
        <title>
        <?php 
         //custom page titles
        if ($metadata->contributor == '') {
            print encodeHtml($MAST_HEADING) . ' | Messiah, a private Christian College in PA';
        } else {
            print encodeHtml($metadata->contributor);
        }
        ?>
        </title>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/custom_scripts/mcnews/mcnews_opening.php';

    //require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/homepages_content.php';

    include_once 'newsList.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/closing.php';
?>