<?php
    require_once 'websections/JaduHomepageBanners.php';
    require_once 'library/JaduStringFunctions.php';

    $homepageBanners = getAllHomepageBanners(true);
    
    if (sizeof($homepageBanners) > 0) {
        shuffle($homepageBanners);

        $homepageBanner = $homepageBanners[0];
        
        if ($homepageBanner->href != '') {
?>
    <a href="<?php print encodeHtml($homepageBanner->href); ?>" target="<?php print encodeHtml($homepageBanner->target); ?>">
        <img src="<?php print getStaticContentRootURL();?>/images/<?php print $homepageBanner->imageURL;?>" alt="">
        <h2><?php print encodeHtml($homepageBanner->title); ?></h2>
    </a>
<?php
        }
        else {
?>
    <img src="<?php print getStaticContentRootURL();?>/images/<?php print $homepageBanner->imageURL; ?>" alt="">
    <h2><?php print encodeHtml($homepageBanner->title); ?></h2>
<?php
        }
    }
?>