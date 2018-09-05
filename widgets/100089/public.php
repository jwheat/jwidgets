<?php
    $folder = '/site/custom_scripts/styles/';
    /*
    headline
    sub-head 
    body copy - editor 
    each of the photos will need a thumbnail image, full size image, title, summary text
    Youtube Video link and image thumb     
    */

    $param_headline = "heading";
    $param_subhead = "subhead";
    $param_bodycopy = "bodycopy";

    $youtube_token = "";
    $youtube_thumb = "";

    $image_1_thumb = "image-placeholder-500x500.jpg";
    $image_1_image = "image-placeholder-500x500.jpg";
    $image_1_title = "";
    $image_1_summary = "";

    $image_2_thumb = "image-placeholder-500x500.jpg";
    $image_2_image = "image-placeholder-500x500.jpg";
    $image_2_title = "";
    $image_2_summary = "";

    $image_3_thumb = "image-placeholder-500x500.jpg";
    $image_3_image = "image-placeholder-500x500.jpg";
    $image_3_title = "";
    $image_3_summary = "";

    $image_4_thumb = "image-placeholder-500x500.jpg";
    $image_4_image = "image-placeholder-500x500.jpg";
    $image_4_title = "";
    $image_4_summary = "";

    $image_5_thumb = "image-placeholder-500x500.jpg";
    $image_5_image = "image-placeholder-500x500.jpg";
    $image_5_title = "";
    $image_5_summary = "";

    $image_6_thumb = "image-placeholder-500x500.jpg";
    $image_6_image = "image-placeholder-500x500.jpg";
    $image_6_title = "";
    $image_6_summary = "";

    $image_7_thumb = "image-placeholder-500x500.jpg";
    $image_7_image = "image-placeholder-500x500.jpg";
    $image_7_title = "";
    $image_7_summary = "";

    $image_8_thumb = "image-placeholder-500x500.jpg";
    $image_8_image = "image-placeholder-500x500.jpg";
    $image_8_title = "";
    $image_8_summary = "";

    $image_9_thumb = "image-placeholder-500x500.jpg";
    $image_9_image = "image-placeholder-500x500.jpg";
    $image_9_title = "";
    $image_9_summary = "";


    if ('%PARAM_HEADLINE%' != '' && '%PARAM_HEADLINE%' != '%PARAM_HEADLINE'.'%') {
            $param_headline = '%PARAM_HEADLINE%';
    }

    if ('%PARAM_SUBHEAD%' != '' && '%PARAM_SUBHEAD%' != '%PARAM_SUBHEAD'.'%') {
            $param_subhead = '%PARAM_SUBHEAD%';
    }

    if ('%PARAM_BODYCOPY%' != '' && '%PARAM_BODYCOPY%' != '%PARAM_BODYCOPY'.'%') {
            $param_bodycopy = '%PARAM_BODYCOPY%';
    }        

    if ('%YOUTUBE_TOKEN%' != '' && '%YOUTUBE_TOKEN%' != '%YOUTUBE_TOKEN'.'%') {
            $youtube_token = '%YOUTUBE_TOKEN%';
    }

    if ('%YOUTUBE_THUMB%' != '' && '%YOUTUBE_THUMB%' != '%YOUTUBE_THUMB'.'%') {
            $youtube_thumb = '%YOUTUBE_THUMB%';
    } 


    if ('%IMAGE_1_THUMB%' != '' && '%IMAGE_1_THUMB%' != '%IMAGE_1_THUMB'.'%') {
            $image_1_thumb = '%IMAGE_1_THUMB%';
    }
    if ('%IMAGE_1_IMAGE%' != '' && '%IMAGE_1_IMAGE%' != '%IMAGE_1_IMAGE'.'%') {
            $image_1_image = '%IMAGE_1_IMAGE%';
    }
    if ('%IMAGE_1_TITLE%' != '' && '%IMAGE_1_TITLE%' != '%IMAGE_1_TITLE'.'%') {
            $image_1_title = '%IMAGE_1_TITLE%';
    }
    if ('%IMAGE_1_SUMMARY%' != '' && '%IMAGE_1_SUMMARY%' != '%IMAGE_1_SUMMARY'.'%') {
            $image_1_summary = '%IMAGE_1_SUMMARY%';
    }

    if ('%IMAGE_2_THUMB%' != '' && '%IMAGE_2_THUMB%' != '%IMAGE_2_THUMB'.'%') {
            $image_2_thumb = '%IMAGE_2_THUMB%';
    }
    if ('%IMAGE_2_IMAGE%' != '' && '%IMAGE_2_IMAGE%' != '%IMAGE_2_IMAGE'.'%') {
            $image_2_image = '%IMAGE_2_IMAGE%';
    }
    if ('%IMAGE_2_TITLE%' != '' && '%IMAGE_2_TITLE%' != '%IMAGE_2_TITLE'.'%') {
            $image_2_title = '%IMAGE_2_TITLE%';
    }
    if ('%IMAGE_2_SUMMARY%' != '' && '%IMAGE_2_SUMMARY%' != '%IMAGE_2_SUMMARY'.'%') {
            $image_2_summary = '%IMAGE_2_SUMMARY%';
    }

    if ('%IMAGE_3_THUMB%' != '' && '%IMAGE_3_THUMB%' != '%IMAGE_3_THUMB'.'%') {
            $image_3_thumb = '%IMAGE_3_THUMB%';
    }
    if ('%IMAGE_3_IMAGE%' != '' && '%IMAGE_3_IMAGE%' != '%IMAGE_3_IMAGE'.'%') {
            $image_3_image = '%IMAGE_3_IMAGE%';
    }
    if ('%IMAGE_3_TITLE%' != '' && '%IMAGE_3_TITLE%' != '%IMAGE_3_TITLE'.'%') {
            $image_3_title = '%IMAGE_3_TITLE%';
    }
    if ('%IMAGE_3_SUMMARY%' != '' && '%IMAGE_3_SUMMARY%' != '%IMAGE_3_SUMMARY'.'%') {
            $image_3_summary = '%IMAGE_3_SUMMARY%';
    }

    if ('%IMAGE_4_THUMB%' != '' && '%IMAGE_4_THUMB%' != '%IMAGE_4_THUMB'.'%') {
            $image_4_thumb = '%IMAGE_4_THUMB%';
    }
    if ('%IMAGE_4_IMAGE%' != '' && '%IMAGE_4_IMAGE%' != '%IMAGE_4_IMAGE'.'%') {
            $image_4_image = '%IMAGE_4_IMAGE%';
    }
    if ('%IMAGE_4_TITLE%' != '' && '%IMAGE_4_TITLE%' != '%IMAGE_4_TITLE'.'%') {
            $image_4_title = '%IMAGE_4_TITLE%';
    }
    if ('%IMAGE_4_SUMMARY%' != '' && '%IMAGE_4_SUMMARY%' != '%IMAGE_4_SUMMARY'.'%') {
            $image_4_summary = '%IMAGE_4_SUMMARY%';
    }

    if ('%IMAGE_5_THUMB%' != '' && '%IMAGE_5_THUMB%' != '%IMAGE_5_THUMB'.'%') {
            $image_5_thumb = '%IMAGE_5_THUMB%';
    }
    if ('%IMAGE_5_IMAGE%' != '' && '%IMAGE_5_IMAGE%' != '%IMAGE_5_IMAGE'.'%') {
            $image_5_image = '%IMAGE_5_IMAGE%';
    }
    if ('%IMAGE_5_TITLE%' != '' && '%IMAGE_5_TITLE%' != '%IMAGE_5_TITLE'.'%') {
            $image_5_title = '%IMAGE_5_TITLE%';
    }
    if ('%IMAGE_5_SUMMARY%' != '' && '%IMAGE_5_SUMMARY%' != '%IMAGE_5_SUMMARY'.'%') {
            $image_5_summary = '%IMAGE_5_SUMMARY%';
    }

    if ('%IMAGE_6_THUMB%' != '' && '%IMAGE_6_THUMB%' != '%IMAGE_6_THUMB'.'%') {
            $image_6_thumb = '%IMAGE_6_THUMB%';
    }
    if ('%IMAGE_6_IMAGE%' != '' && '%IMAGE_6_IMAGE%' != '%IMAGE_6_IMAGE'.'%') {
            $image_6_image = '%IMAGE_6_IMAGE%';
    }
    if ('%IMAGE_6_TITLE%' != '' && '%IMAGE_6_TITLE%' != '%IMAGE_6_TITLE'.'%') {
            $image_6_title = '%IMAGE_6_TITLE%';
    }
    if ('%IMAGE_6_SUMMARY%' != '' && '%IMAGE_6_SUMMARY%' != '%IMAGE_6_SUMMARY'.'%') {
            $image_6_summary = '%IMAGE_6_SUMMARY%';
    }

    if ('%IMAGE_7_THUMB%' != '' && '%IMAGE_7_THUMB%' != '%IMAGE_7_THUMB'.'%') {
            $image_7_thumb = '%IMAGE_7_THUMB%';
    }
    if ('%IMAGE_7_IMAGE%' != '' && '%IMAGE_7_IMAGE%' != '%IMAGE_7_IMAGE'.'%') {
            $image_7_image = '%IMAGE_7_IMAGE%';
    }
    if ('%IMAGE_7_TITLE%' != '' && '%IMAGE_7_TITLE%' != '%IMAGE_7_TITLE'.'%') {
            $image_7_title = '%IMAGE_7_TITLE%';
    }
    if ('%IMAGE_7_SUMMARY%' != '' && '%IMAGE_7_SUMMARY%' != '%IMAGE_7_SUMMARY'.'%') {
            $image_7_summary = '%IMAGE_7_SUMMARY%';
    }

    if ('%IMAGE_8_THUMB%' != '' && '%IMAGE_8_THUMB%' != '%IMAGE_8_THUMB'.'%') {
            $image_8_thumb = '%IMAGE_8_THUMB%';
    }
    if ('%IMAGE_8_IMAGE%' != '' && '%IMAGE_8_IMAGE%' != '%IMAGE_8_IMAGE'.'%') {
            $image_8_image = '%IMAGE_8_IMAGE%';
    }
    if ('%IMAGE_8_TITLE%' != '' && '%IMAGE_8_TITLE%' != '%IMAGE_8_TITLE'.'%') {
            $image_8_title = '%IMAGE_8_TITLE%';
    }
    if ('%IMAGE_8_SUMMARY%' != '' && '%IMAGE_8_SUMMARY%' != '%IMAGE_8_SUMMARY'.'%') {
            $image_8_summary = '%IMAGE_8_SUMMARY%';
    }

    if ('%IMAGE_9_THUMB%' != '' && '%IMAGE_9_THUMB%' != '%IMAGE_9_THUMB'.'%') {
            $image_9_thumb = '%IMAGE_9_THUMB%';
    }
    if ('%IMAGE_9_IMAGE%' != '' && '%IMAGE_9_IMAGE%' != '%IMAGE_9_IMAGE'.'%') {
            $image_9_image = '%IMAGE_9_IMAGE%';
    }
    if ('%IMAGE_9_TITLE%' != '' && '%IMAGE_9_TITLE%' != '%IMAGE_9_TITLE'.'%') {
            $image_9_title = '%IMAGE_9_TITLE%';
    }
    if ('%IMAGE_9_SUMMARY%' != '' && '%IMAGE_9_SUMMARY%' != '%IMAGE_9_SUMMARY'.'%') {
            $image_9_summary = '%IMAGE_9_SUMMARY%';
    }


?>

    <a name="fitness" />

    <div class="athletics" id="physical-fitness">
        <div class="wrapper content center">
            <h2><?php print $param_headline;?></h2>
            <h3><?php print $param_subhead;?></h3>
            <hr>
            <p><?php print $param_bodycopy;?></p>
        </div>

        <div class="wrapper content ath-collage">
            <div class="flexbox">
                <div class="col-50 ath-left-col">
                    <div class="flexbox hide-on-mobile">
                        <div class="col-50 coll-img coll-small" data-slide="1">
                            <div class="coll-overlay">
                                <div>
                                    <h4><?php print $image_1_title;?></h4>
                                    <hr>
                                </div>
                            </div>
                            <img src="/images/<?php print $image_1_thumb;?>" alt="">
                        </div>
                        <div class="col-50 coll-img coll-small" data-slide="2">
                            <div class="coll-overlay">
                                <div>
                                    <h4><?php print $image_2_title;?></h4>
                                    <hr>
                                </div>
                            </div>
                            <img src="/images/<?php print $image_2_thumb;?>" alt="">
                        </div>
                    </div>
                    <div class="ath-video coll-img coll-large" data-slide="3">
                        <img src="/images/<?php print $youtube_thumb;?>" alt="">
                        <a class="ath-play" id="youtube_token" token="<?php print $youtube_token;?>"><img src="<?php echo $folder; ?>img/athletics/play-w.png" alt=""></a>
                    </div>
                    <div class="coll-img coll-wide hide-on-mobile" data-slide="4">
                        <div class="coll-overlay">
                            <div>
                                <h4><?php print $image_8_title;?></h4>
                                <hr>
                            </div>
                        </div>
                        <img src="/images/<?php print $image_8_thumb;?>" alt="">
                    </div>
                </div>
                <div class="col-50 hide-on-mobile ath-right-col">
                    <div class="coll-img coll-wide" data-slide="5">
                        <div class="coll-overlay">
                            <div>
                                <h4><?php print $image_3_title;?></h4>
                                <hr>
                            </div>
                        </div>
                        <img src="/images/<?php print $image_3_thumb;?>" alt="">
                    </div>
                    <div class="flexbox">
                        <div class="col-50 coll-img coll-small" data-slide="6">
                        <div class="coll-overlay">
                            <div>
                                <h4><?php print $image_4_title;?></h4>
                                <hr>
                            </div>
                        </div>
                            <img src="/images/<?php print $image_4_thumb;?>" alt="">
                        </div>
                        <div class="col-50 coll-img coll-small" data-slide="7">
                            <div class="coll-overlay">
                                <div>
                                    <h4><?php print $image_6_title;?></h4>
                                    <hr>
                            </div>
                            </div>
                            <img src="/images/<?php print $image_6_thumb;?>" alt="">
                        </div>
                    </div>
                    <div class="flexbox">
                        <div class="col-50">
                            <div class="coll-img coll-small" data-slide="8">
                                <div class="coll-overlay">
                                    <div>
                                        <h4><?php print $image_5_title;?></h4>
                                        <hr>
                                    </div>
                                </div>
                                <img src="/images/<?php print $image_5_thumb;?>" alt="">
                            </div>
                            <div class="coll-img coll-small" data-slide="9">
                                <div class="coll-overlay">
                                    <div>
                                        <h4><?php print $image_9_title;?></h4>
                                        <hr>
                                    </div>
                                </div>
                                <img src="/images/<?php print $image_9_thumb;?>" alt="">
                            </div>
                        </div>
                        <div class="col-50 coll-img coll-tall" data-slide="10">
                            <div class="coll-overlay">
                                <div>
                                    <h4><?php print $image_7_title;?></h4>
                                    <hr>
                                </div>
                            </div>
                            <img src="/images/<?php print $image_7_thumb;?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="lightbox-photo-grid" class="lightbox lb-fitness" style="display:none;">
        <div class="wrapper content">
            <div class="close-button">
                <a><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            <div class="ath-slider">
            <div class="ath-slider-nav-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="ath-slider-nav-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="ath-slide-wrapper">
                <div class="ath-slide lb-ath-slide slide-1" style="display:none;">
                    <img src="/images/<?php print $image_1_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_1_title;?></h2>
                        <p><?php print $image_1_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-2" style="display:none;">
                    <img src="/images/<?php print $image_2_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_2_title;?></h2>
                        <p><?php print $image_2_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-4" style="display:none;">
                    <img src="/images/<?php print $image_8_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_8_title;?></h2>
                        <p><?php print $image_8_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-5" style="display:none;">
                    <img src="/images/<?php print $image_3_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_3_title;?></h2>
                        <p><?php print $image_3_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-6" style="display:none;">
                    <img src="/images/<?php print $image_4_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_4_title;?></h2>
                        <p><?php print $image_4_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-7" style="display:none;">
                    <img src="/images/<?php print $image_6_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_6_title;?></h2>
                        <p><?php print $image_6_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-8" style="display:none;">
                    <img src="/images/<?php print $image_5_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_5_title;?></h2>
                        <p><?php print $image_5_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-9" style="display:none;">
                    <img src="/images/<?php print $image_9_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_9_title;?></h2>
                        <p><?php print $image_9_summary;?></p>
                    </div>
                </div>
                <div class="ath-slide lb-ath-slide slide-10" style="display:none;">
                    <img class="ath-portrait" src="/images/<?php print $image_7_image;?>" alt="">
                    <div class="ath-slide-info">
                        <h2><?php print $image_7_title;?></h2>
                        <p><?php print $image_7_summary;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        