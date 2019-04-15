<?php
    $metadata = getMetadataForItem(DOCUMENTS_METADATA_TABLE, $_GET['documentID']);

    if ($metadata->subject == '') {
        $metadata->subject = 'documents, consultations, policies, information, plans, performance, objectives, facts and figures, strategy, ' . METADATA_GENERIC_KEYWORDS;
    }
    if ($metadata->description == '') {
        $metadata->description = METADATA_GENERIC_NAME . 's ' . $header->title . ' and ' . $page->title . ' information';
        foreach ($dirTree as $parent) {
            $metadata->description .= ' | ' . $parent->name;
        }
    }

    // build the url of this page
    $underscored_entry_title = str_replace(' ', '_', $record->title);
    $surl = '/infob/' . $directoryID . '/the_bridge/' . $entryID . '/' . $underscored_entry_title;

    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/doctype.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/stylesheets.php';
?>
        <link rel="canonical" href="<?php print getSiteRootURL() . $surl; ?>">
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/metadata.php';

    if ($document->id > 0 && isset($header)) {
        printMetadata(DOCUMENTS_METADATA_TABLE, DOCUMENTS_CATEGORIES_TABLE, $document->id, $header->title, 'http://' . $DOMAIN . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
    }
?>
        <meta name="description" content="<?php print encodeHtml($directory->name) . ': ' . encodeHtml($record->title) . ' - ' . encodeHtml($field_array[$entryID]['subheading']); ?>">
        <meta name="keywords" content="<?php print encodeHtml($metadata->subject); ?>">

        <!-- for Facebook -->  
        <meta property="og:title" content="<?php print encodeHtml($record->title); ?>" />
        <meta property="og:type" content="article" /> 
        <meta property="og:image" content="http://www.messiah.edu/images/<?php print encodeHtml($field_array[$entryID]['social_share_image']); ?>" />
        <meta property="og:url" content="http://www.messiah.edu<?php print $surl; ?>" />
        <meta property="og:description" content="<?php print encodeHtml($field_array[$entryID]['subheading']); ?>" />

        <!-- for Twitter -->  
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php print encodeHtml($record->title); ?>" />
        <meta name="twitter:description" content="<?php print encodeHtml($field_array[$entryID]['subheading']); ?>" />
        <meta name="twitter:image" content="http://www.messiah.edu/images/<?php print encodeHtml($field_array[$entryID]['social_share_image']); ?>" />


<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/opening_javascript.php';
?>
        <title><?php print encodeHtml($directory->name) . ': ' . encodeHtml($record->title) . ' - ' . encodeHtml($field_array[$entryID]['subheading']); ?> | <?php print encodeHtml(METADATA_GENERIC_NAME); ?></title>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/custom_scripts/the_bridge/opening.php';

    if ($showDocument) {
        if ($page->imageURL != '') {
            if (mb_strlen(getImageProperty($page->imageURL, 'longdesc')) > 0) {
                ?>
            <figure class="image__caption img top">
                <img src="<?php print getStaticContentRootURL() . '/images/' . encodeHtml($page->imageURL); ?>" alt="<?php print encodeHtml(getImageProperty($page->imageURL, 'altText')); ?>">
                <figcaption class="caption"><?php print encodeHtml(getImageProperty($page->imageURL, 'longdesc')); ?></figcaption>
            </figure>
<?php
            } else {
                ?>
			<div class="img top">
	            <img src="<?php print getStaticContentRootURL() . '/images/' . encodeHtml($page->imageURL); ?>" alt="<?php print encodeHtml(getImageProperty($page->imageURL, 'altText')); ?>">
			</div>
<?php
            }
        }

        if ($document->id == -1) {
            ?>
            <div class="callout callout__warning">
                <h2>Sorry, this page is no longer available</h2>
            </div>
<?php
        } else {
            if (sizeof($allPages) > 1) {
                ?>
                    <nav class="supplement supplement__pages-in">
                        <h5 class="sub-title">More information</h5>
                        <ul class="item-list">
<?php
                $pageCount = 1;

                foreach ($allPages as $p) {
                    ?>
                            <li><?php if ($pageCount == $pageNumber) {
                        ?><span><?php
                    } else {
                        ?><a href="<?php print getSiteRootURL() . buildDocumentsURL($document->id, $categoryID, $pageCount); ?>"><?php
                    }
                    print encodeHtml($p->title);
                    if ($pageCount == $pageNumber) {
                        ?></span><?php
                    } else {
                        ?></a><?php
                    } ?></li>
<?php
                    ++$pageCount;
                } ?>
                        </ul>
                    </nav>
<?php
            }

            //Fake out the supplements to think we're documents_info.php without any messedupness?
            //$_SERVER['SCRIPT_NAME'] = "/site/scripts/documents_info.php";
            //require_once $_SERVER['DOCUMENT_ROOT'] . '/site/includes/right_supplements.php';

            //------------------------------------------
            // Build the left Nav since this isn't going to work with the nav supplement, F.?>


<?php 

            if (!empty($field_array[$entryID]['subheading'])) {
                ?>
                <h2><?php print encodeHtml($field_array[$entryID]['subheading']); ?></h2>
<?php
            } ?>
                <div class="editor">
                    <?php print $field_array[$entryID]['story']; ?>  
                </div>
<?php

            if (count($allPages) > 1) {
                $pageNumberPrev = $pageNumber - 1;
                $pageNumberNext = $pageNumber + 1;
                $pageTotal = count($allPages); ?>
                <ul class="paginator item-list__rich-list">
<?php
                if ($pageNumberPrev != 0) {
                    ?>
                    <li class="paginate-prev float_left">
                        <a class="btn-link" href="<?php print getSiteRootURL() . buildDocumentsURL($document->id, $categoryID, $pageNumberPrev); ?>">Previous page</a>
                    </li>
<?php
                }
                if ($pageNumberNext != $pageTotal + 1) {
                    ?>
                    <li class="paginate-next float_right">
                        <a class="btn-link" href="<?php print getSiteRootURL() . buildDocumentsURL($document->id, $categoryID, $pageNumberNext); ?>">Next page</a>
                    </li>
<?php
                } ?>
                </ul>
<?php
            }
        }
    } elseif ($accessDenied) {
        ?>
                <div class="callout callout__warning">
                    <p>You do not have sufficient access privileges to view this document.</p>
                    <p>Please contact <?php print encodeHtml(DEFAULT_EMAIL_ADDRESS); ?> for more information.</p>
                </div>
<?php
    } else {
        ?>
                <div class="callout callout__warning">
                    <h2>This document is restricted</h2>
                    <form name="documentLoginForm" id="documentLoginForm" method="post" enctype="multipart/form-data" action="<?php print getSiteRootURL() . buildNonReadableDocumentsURL($document->id, $categoryID, $pageCount); ?>" class="form">
                        <h3>Please enter the password</h3>
                        <label for="password" class="visually-hidden">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                        <input type="submit" name="submitDocumentLogin" id="submitDocumentLogin" value="View document" class="button button__primary">
                    </form>
                </div>
<?php
    }

    require_once $_SERVER['DOCUMENT_ROOT'] . '/site/custom_scripts/the_bridge/closing.php';
?>