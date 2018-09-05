<?php
    require_once 'websections/JaduEvents.php';
    
    $pickOfWeek = getPickOfWeek();
    $oldPickSummary = $pickOfWeek->summary;
    
    if (mb_strlen($pickOfWeek->summary) > 200) {
        $pickOfWeek->summary = mb_substr($pickOfWeek->summary, 0, 200);
        $pos = mb_strrpos($pickOfWeek->summary, " ");
        
        if ($pos !== false) {
            $pickOfWeek->summary = mb_substr($pickOfWeek->summary, 0, $pos - 3);
            $pickOfWeek->summary .= "...";
        }
    }
?>
    <h2>What's on</h2>
    <h3>
        <a href="<?php print getSiteRootURL() . buildEventsURL(-1, '', $pickOfWeek->id); ?>"><?php print encodeHtml($pickOfWeek->title); ?></a>
    </h3>
    <p><?php print encodeHtml($pickOfWeek->summary); ?></p>
    <p><a href="<?php print getSiteRootURL() . buildEventsURL(); ?>">More events</a></p>
