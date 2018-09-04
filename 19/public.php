<?php
    require_once 'websections/JaduFAQ.php';
    
    $commonFAQs = getTopXFAQs(5, FAQ_PROCESSED);    
?>
    <h2>
        <abbr title="Frequently Asked Questions">FAQs</abbr>
    </h2>
<?php
    if (count($commonFAQs) > 0) {
?>
    <ul class="item-list">
<?php
        foreach ($commonFAQs as $faqItem) {
            $catID = getFirstCategoryIDForItemOfType(FAQS_CATEGORIES_TABLE, $faqItem->id);      
?>
        <li>
            <a href="<?php print getSiteRootURL() . buildFAQURL(false, $catID, $faqItem->id); ?>#a<?php print $faqItem->id; ?>"><?php print encodeHtml($faqItem->question);?></a>
        </li>
<?php
        }
?>
    </ul>
<?php
    }
?>
