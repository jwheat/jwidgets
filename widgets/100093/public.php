<?php
    $folder = '/site/custom_scripts/styles/';
    /*
    Headline
    body copy - editor
    link - 2 fields - link text and hyperlink
    video - 2 fields - video link and image thumb
    you can hardcode this
    */

    $param_headline = "heading";
    $param_bodycopy = "bodycopy";
    $param_link_text = "";
    $param_link = "";  

    $video_url = "";
    $video_thumb = "placeholder-pixel.png";

    if ('%PARAM_HEADLINE%' != '' && '%PARAM_HEADLINE%' != '%PARAM_HEADLINE'.'%') {
            $param_headline = '%PARAM_HEADLINE%';
    }

    if ('%PARAM_BODYCOPY%' != '' && '%PARAM_BODYCOPY%' != '%PARAM_BODYCOPY'.'%') {
            $param_bodycopy = '%PARAM_BODYCOPY%';
    }      

    if ('%PARAM_IMAGE%' != '' && '%PARAM_IMAGE%' != '%PARAM_IMAGE'.'%') {
            $param_image = '%PARAM_IMAGE%';
    }

    if ('%PARAM_LINK_TEXT%' != '' && '%PARAM_LINK_TEXT%' != '%PARAM_LINK_TEXT'.'%') {
            $param_link_text = '%PARAM_LINK_TEXT%';
    }

    if ('%PARAM_LINK%' != '' && '%PARAM_LINK%' != '%PARAM_LINK'.'%') {
            $param_link = '%PARAM_LINK%';
    }   

    if ('%VIDEO_URL%' != '' && '%VIDEO_URL%' != '%VIDEO_URL'.'%') {
            $video_url = '%VIDEO_URL%';
    }

    if ('%VIDEO_THUMB%' != '' && '%VIDEO_THUMB%' != '%VIDEO_THUMB'.'%') {
            $video_thumb = '%VIDEO_THUMB%';
    } 


?>
    <a name="sports-ministry" ></a>

    <div class="athletics" id="sports-ministry">
        <div class="wrapper content center">
            <h2><?php print $param_headline;?></h2>
            <p><?php print $param_bodycopy;?></p>
            <p><a href="<?php print $param_link;?>" class="ath-button"><?php print $param_link_text;?></a></p>
            <div class="ath-video">
                <img src="/images/<?php print $video_thumb;?>" alt="">
                <a class="ath-play" href="<?php print $video_url;?>" data-lity><img src="<?php echo $folder; ?>img/athletics/play-w.png" alt=""></a>
            </div>
            <p><img src="<?php echo $folder; ?>img/athletics/aroma-logo-2014.png" alt=""></p>
            <p class="ath-quote">But thanks be to God, who in Christ always leads us in triumphal procession, and through us spreads in every place the fragrance that comes from knowing him. For we are the AROMA of Christ to God among those who are being saved and among those who are perishing.</p>
            <p>- 2 Corinthians 2:14-15</p>
        </div>
    </div>