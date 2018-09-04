<?php 
    require_once 'marketing/JaduAdverts.php';
    
    $middleAdverts = getMiddleAdvertsForUser($_SESSION['userID']);
    
    if (count($middleAdverts) > 0) {
?>
    <h2>Featured content</h2>
<?php
        for ($count = 0; $count < count($middleAdverts); $count++) {
            $advert = $middleAdverts[$count];
?>
    <div>
<?php
            if (!empty($advert->imageURL)) {
?>
        <img alt="<?php print encodeHtml($advert->title); ?>" src="<?php print getStaticContentRootURL(); ?>/images/<?php print encodeHtml($advert->imageURL); ?>"<?php if (!empty($advert->imageLocation)) { ?> class="image__float-<?php print $advert->imageLocation; ?>"<?php } ?>>
<?php
            }
?>
        <h3>
            <a href="<?php print htmlspecialchars($advert->url); ?>"><?php print encodeHtml($advert->title); ?></a>
        </h3>
<?php
            if (!empty($advert->subtitle)) {
?>
        <h4><?php print encodeHtml($advert->subtitle); ?></h4>
<?php
            }
?>
        <p><?php print encodeHtml($advert->content); ?></p>
    </div>
<?php
        }
    }
?>
