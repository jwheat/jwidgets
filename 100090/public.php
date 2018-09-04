<?php
    $folder = '/site/custom_scripts/styles/';

    /*
    headline
    sub-head - editor
    body copy
    4 core classes, each will need image, title, text
    */
    
    $param_headline = "heading";
    $param_bodycopy = "bodycopy";

    $param_class_1_title = "";
    $param_class_1_text = "";
    $param_class_1_image = "placeholder-pixel.png";

    $param_class_2_title = "";
    $param_class_2_text = "";
    $param_class_2_image = "placeholder-pixel.png";

    $param_class_3_title = "";
    $param_class_3_text = "";
    $param_class_3_image = "placeholder-pixel.png";

    $param_class_4_title = "";
    $param_class_4_text = "";
    $param_class_4_image = "placeholder-pixel.png";        


    if ('%PARAM_HEADLINE%' != '' && '%PARAM_HEADLINE%' != '%PARAM_HEADLINE'.'%') {
            $param_headline = '%PARAM_HEADLINE%';
    }


    if ('%PARAM_BODYCOPY%' != '' && '%PARAM_BODYCOPY%' != '%PARAM_BODYCOPY'.'%') {
            $param_bodycopy = '%PARAM_BODYCOPY%';
    } 

    if ('%PARAM_CLASS_1_TITLE%' != '' && '%PARAM_CLASS_1_TITLE%' != '%PARAM_CLASS_1_TITLE'.'%') {
            $param_class_1_title = '%PARAM_CLASS_1_TITLE%';
    }
    if ('%PARAM_CLASS_1_TEXT%' != '' && '%PARAM_CLASS_1_TEXT%' != '%PARAM_CLASS_1_TEXT'.'%') {
            $param_class_1_text = '%PARAM_CLASS_1_TEXT%';
    } 
    if ('%PARAM_CLASS_1_IMAGE%' != '' && '%PARAM_CLASS_1_IMAGE%' != '%PARAM_CLASS_1_IMAGE'.'%') {
            $param_class_1_image = '%PARAM_CLASS_1_IMAGE%';
    }         

    if ('%PARAM_CLASS_2_TITLE%' != '' && '%PARAM_CLASS_2_TITLE%' != '%PARAM_CLASS_2_TITLE'.'%') {
            $param_class_2_title = '%PARAM_CLASS_2_TITLE%';
    }
    if ('%PARAM_CLASS_2_TEXT%' != '' && '%PARAM_CLASS_2_TEXT%' != '%PARAM_CLASS_2_TEXT'.'%') {
            $param_class_2_text = '%PARAM_CLASS_2_TEXT%';
    } 
    if ('%PARAM_CLASS_2_IMAGE%' != '' && '%PARAM_CLASS_2_IMAGE%' != '%PARAM_CLASS_2_IMAGE'.'%') {
            $param_class_2_image = '%PARAM_CLASS_2_IMAGE%';
    } 

    if ('%PARAM_CLASS_3_TITLE%' != '' && '%PARAM_CLASS_3_TITLE%' != '%PARAM_CLASS_3_TITLE'.'%') {
            $param_class_3_title = '%PARAM_CLASS_3_TITLE%';
    }
    if ('%PARAM_CLASS_3_TEXT%' != '' && '%PARAM_CLASS_3_TEXT%' != '%PARAM_CLASS_3_TEXT'.'%') {
            $param_class_3_text = '%PARAM_CLASS_3_TEXT%';
    } 
    if ('%PARAM_CLASS_3_IMAGE%' != '' && '%PARAM_CLASS_3_IMAGE%' != '%PARAM_CLASS_3_IMAGE'.'%') {
            $param_class_3_image = '%PARAM_CLASS_3_IMAGE%';
    } 

    if ('%PARAM_CLASS_4_TITLE%' != '' && '%PARAM_CLASS_4_TITLE%' != '%PARAM_CLASS_4_TITLE'.'%') {
            $param_class_4_title = '%PARAM_CLASS_4_TITLE%';
    }
    if ('%PARAM_CLASS_4_TEXT%' != '' && '%PARAM_CLASS_4_TEXT%' != '%PARAM_CLASS_4_TEXT'.'%') {
            $param_class_4_text = '%PARAM_CLASS_4_TEXT%';
    } 
    if ('%PARAM_CLASS_4_IMAGE%' != '' && '%PARAM_CLASS_4_IMAGE%' != '%PARAM_CLASS_4_IMAGE'.'%') {
            $param_class_4_image = '%PARAM_CLASS_4_IMAGE%';
    }         
?>

    <div class="athletics" id="group-fitness" style="padding-top: 0px;">
        <div class="wrapper content center">
            <h3><?php print $param_headline;?></h3>
            <hr>
            <p><?php print $param_bodycopy;?></p>
        </div>
        <div class="wrapper content center ath-slider">
            <div class="ath-slider-nav-left hide-on-mobile"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="ath-slider-nav-right hide-on-mobile"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="ath-slide-wrapper group-fitness">

                <div class="ath-slide">
                    <img src="/images/<?php print $param_class_1_image;?>" alt="">
                    <span><?php print $param_class_1_title;?></span>
                    <div class="ath-slide-info">
                        <p><?php print $param_class_1_text;?></p>
                    </div>
                </div>

                <div class="ath-slide">
                    <img src="/images/<?php print $param_class_2_image;?>" alt="">
                    <span><?php print $param_class_2_title;?></span>
                    <div class="ath-slide-info">
                        <p><?php print $param_class_2_text;?></p>
                    </div>
                </div>

                <div class="ath-slide">
                    <img src="/images/<?php print $param_class_3_image;?>" alt="">
                    <span><?php print $param_class_3_title;?></span>
                    <div class="ath-slide-info">
                        <p><?php print $param_class_3_text;?></p>
                    </div>
                </div>

                <div class="ath-slide">
                    <img src="/images/<?php print $param_class_4_image;?>" alt="">
                    <span><?php print $param_class_4_title;?></span>
                    <div class="ath-slide-info">
                        <p><?php print $param_class_4_text;?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>