<?php
    $folder = '/site/custom_scripts/styles/';
    $param_headline = "heading";
    $param_subhead = "subhead";
    $param_buttontext = "link";
    $param_buttonlink = "#";

    if ('%PARAM_HEADLINE%' != '' && '%PARAM_HEADLINE%' != '%PARAM_HEADLINE'.'%') {
            $param_headline = '%PARAM_HEADLINE%';
    }

    if ('%PARAM_SUBHEAD%' != '' && '%PARAM_SUBHEAD%' != '%PARAM_SUBHEAD'.'%') {
            $param_subhead = '%PARAM_SUBHEAD%';
    }

    if ('%PARAM_BUTTONTEXT%' != '' && '%PARAM_BUTTONTEXT%' != '%PARAM_BUTTONTEXT'.'%') {
            $param_buttontext = '%PARAM_BUTTONTEXT%';
    }

    if ('%PARAM_BUTTONLINK%' != '' && '%PARAM_BUTTONLINK%' != '%PARAM_BUTTONLINK'.'%') {
            $param_buttonlink = '%PARAM_BUTTONLINK%';
    }


?>
    <link rel="stylesheet" href="<?php echo $folder; ?>fonts/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo $folder; ?>slick.css" rel="stylesheet">
    <link href="<?php echo $folder; ?>slick-theme.css" rel="stylesheet">
    <link href="<?php echo $folder; ?>mc-athletics.css?v=15" rel="stylesheet">
    <input type="hidden" id="mc-folder" value="<?php echo $folder; ?>">
    <div class="fs-bg" data-parallax="scroll" data-image-src="<?php echo $folder; ?>img/athletics/hero-bg-athletics.jpg">
        <div class="fs-wrapper">
            <h2><?php print $param_headline;?></h2>
            <hr class="hide-on-mobile">
            <p class="hide-on-mobile"><?php print $param_subhead;?></p>
            <p><a href="<?php print $param_buttonlink;?>" class="ath-button"><?php print $param_buttontext;?></a></p>
        </div>
        <div class="start-btn">
            <a>Start<br>Here<br><img style="position:relative;top:5px;" src="<?php echo $folder; ?>img/athletics/car2-arrow-down.png"></a>
        </div>
    </div>

    <div class="athletics-tabs hide-on-mobile">
        <div class="wrapper content center">
            <ul>
                <li class="tab-item sports-item"><a>Sports</a></li>
                <li class="tab-item physical-fitness-item"><a>Physical Fitness</a></li>
                <li class="tab-item game-day-item"><a>Game day</a></li>
                <li class="tab-item sports-camps-item"><a>Sports Camps</a></li>
                <li class="tab-item sports-ministry-item"><a>Sports Ministry</a></li>
            </ul>
        </div>
    </div>