<?php 
    require_once 'marketing/JaduAdverts.php';
    
    $rightAdverts = getRightAdvertsForUser($_SESSION['userID']);
    
    if (sizeof($rightAdverts) > 0) {
        foreach ($rightAdverts as $advert) {
?>
    <div>
        <a href="<?php print encodeHtml($advert->url); ?>">
            <img src="<?php print getStaticContentRootURL(); ?>/images/<?php print encodeHtml($advert->imageURL); ?>" alt="">
            <h2><?php print encodeHtml($advert->title); ?></h2>
        </a>
    </div>
<?php
        }
    }
?>
