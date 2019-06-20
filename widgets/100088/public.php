<?php
    $folder = '/site/custom_scripts/styles/';
    /*
    headline 
    body copy - editor
    3 buttons, each will need link text and link and copy and round image
    image
    4 infographics, each will need an image and text field
    */

    $param_headline = "heading";
    $param_bodycopy = "bodycopy";
    $param_image = "";

    $param_tab_1_buttontext = "tab 1";
    $param_tab_1_buttonlink = "#";
    $param_tab_1_content = "#";
    $param_tab_1_image = "#";

    $param_tab_2_buttontext = "tab 2";
    $param_tab_2_buttonlink = "#";
    $param_tab_2_content = "#";
    $param_tab_2_image = "#";

    $param_tab_3_buttontext = "tab 3";
    $param_tab_3_buttonlink = "#";
    $param_tab_3_content = "#";
    $param_tab_3_image = "#";

    $param_infographic_1_image = "";
    $param_infographic_1_number = "";
    $param_infographic_1_text = "";

    $param_infographic_2_image = "";
    $param_infographic_2_number = "";
    $param_infographic_2_text = "";

    $param_infographic_3_image = "";
    $param_infographic_3_number = "";
    $param_infographic_3_text = "";

    $param_infographic_4_image = "";
    $param_infographic_4_number = "";
    $param_infographic_4_text = "";


    if ('%PARAM_HEADLINE%' != '' && '%PARAM_HEADLINE%' != '%PARAM_HEADLINE'.'%') {
            $param_headline = '%PARAM_HEADLINE%';
    }

    if ('%PARAM_BODYCOPY%' != '' && '%PARAM_BODYCOPY%' != '%PARAM_BODYCOPY'.'%') {
            $param_bodycopy = '%PARAM_BODYCOPY%';
    } 

    if ('%PARAM_IMAGE%' != '' && '%PARAM_IMAGE%' != '%PARAM_IMAGE'.'%') {
            $param_image = '%PARAM_IMAGE%';
    } 


    if ('%PARAM_TAB_1_BUTTONTEXT%' != '' && '%PARAM_TAB_1_BUTTONTEXT%' != '%PARAM_TAB_1_BUTTONTEXT'.'%') {
            $param_tab_1_buttontext = '%PARAM_TAB_1_BUTTONTEXT%';
    } 
    if ('%PARAM_TAB_1_BUTTONLINK%' != '' && '%PARAM_TAB_1_BUTTONLINK%' != '%PARAM_TAB_1_BUTTONLINK'.'%') {
            $param_tab_1_buttonlink = '%PARAM_TAB_1_BUTTONLINK%';
    } 
    if ('%PARAM_TAB_1_CONTENT%' != '' && '%PARAM_TAB_1_CONTENT%' != '%PARAM_TAB_1_CONTENT'.'%') {
            $param_tab_1_content = '%PARAM_TAB_1_CONTENT%';
    } 
    if ('%PARAM_TAB_1_IMAGE%' != '' && '%PARAM_TAB_1_IMAGE%' != '%PARAM_TAB_1_IMAGE'.'%') {
            $param_tab_1_image = '%PARAM_TAB_1_IMAGE%';
    } 


    if ('%PARAM_TAB_2_BUTTONTEXT%' != '' && '%PARAM_TAB_2_BUTTONTEXT%' != '%PARAM_TAB_2_BUTTONTEXT'.'%') {
            $param_tab_2_buttontext = '%PARAM_TAB_2_BUTTONTEXT%';
    } 
    if ('%PARAM_TAB_2_BUTTONLINK%' != '' && '%PARAM_TAB_2_BUTTONLINK%' != '%PARAM_TAB_2_BUTTONLINK'.'%') {
            $param_tab_2_buttonlink = '%PARAM_TAB_2_BUTTONLINK%';
    } 
    if ('%PARAM_TAB_2_CONTENT%' != '' && '%PARAM_TAB_2_CONTENT%' != '%PARAM_TAB_2_CONTENT'.'%') {
            $param_tab_2_content = '%PARAM_TAB_2_CONTENT%';
    } 
    if ('%PARAM_TAB_2_IMAGE%' != '' && '%PARAM_TAB_2_IMAGE%' != '%PARAM_TAB_2_IMAGE'.'%') {
            $param_tab_2_image = '%PARAM_TAB_2_IMAGE%';
    } 

    if ('%PARAM_TAB_3_BUTTONTEXT%' != '' && '%PARAM_TAB_3_BUTTONTEXT%' != '%PARAM_TAB_3_BUTTONTEXT'.'%') {
            $param_tab_3_buttontext = '%PARAM_TAB_3_BUTTONTEXT%';
    } 
    if ('%PARAM_TAB_3_BUTTONLINK%' != '' && '%PARAM_TAB_3_BUTTONLINK%' != '%PARAM_TAB_3_BUTTONLINK'.'%') {
            $param_tab_3_buttonlink = '%PARAM_TAB_3_BUTTONLINK%';
    } 
    if ('%PARAM_TAB_3_CONTENT%' != '' && '%PARAM_TAB_3_CONTENT%' != '%PARAM_TAB_3_CONTENT'.'%') {
            $param_tab_3_content = '%PARAM_TAB_3_CONTENT%';
    } 
    if ('%PARAM_TAB_3_IMAGE%' != '' && '%PARAM_TAB_3_IMAGE%' != '%PARAM_TAB_3_IMAGE'.'%') {
            $param_tab_3_image = '%PARAM_TAB_3_IMAGE%';
    }

    if ('%PARAM_INFOGRAPHIC_1_IMAGE%' != '' && '%PARAM_INFOGRAPHIC_1_IMAGE%' != '%PARAM_INFOGRAPHIC_1_IMAGE'.'%') {
            $param_infographic_1_image = '%PARAM_INFOGRAPHIC_1_IMAGE%';
    } 
    if ('%PARAM_INFOGRAPHIC_1_NUMBER%' != '' && '%PARAM_INFOGRAPHIC_1_NUMBER%' != '%PARAM_INFOGRAPHIC_1_NUMBER'.'%') {
            $param_infographic_1_number = '%PARAM_INFOGRAPHIC_1_NUMBER%';
    }    
    if ('%PARAM_INFOGRAPHIC_1_TEXT%' != '' && '%PARAM_INFOGRAPHIC_1_TEXT%' != '%PARAM_INFOGRAPHIC_1_TEXT'.'%') {
            $param_infographic_1_text = '%PARAM_INFOGRAPHIC_1_TEXT%';
    }

    if ('%PARAM_INFOGRAPHIC_2_IMAGE%' != '' && '%PARAM_INFOGRAPHIC_2_IMAGE%' != '%PARAM_INFOGRAPHIC_2_IMAGE'.'%') {
            $param_infographic_2_image = '%PARAM_INFOGRAPHIC_2_IMAGE%';
    } 
    if ('%PARAM_INFOGRAPHIC_2_NUMBER%' != '' && '%PARAM_INFOGRAPHIC_2_NUMBER%' != '%PARAM_INFOGRAPHIC_2_NUMBER'.'%') {
            $param_infographic_2_number = '%PARAM_INFOGRAPHIC_2_NUMBER%';
    }    
    if ('%PARAM_INFOGRAPHIC_2_TEXT%' != '' && '%PARAM_INFOGRAPHIC_2_TEXT%' != '%PARAM_INFOGRAPHIC_2_TEXT'.'%') {
            $param_infographic_2_text = '%PARAM_INFOGRAPHIC_2_TEXT%';
    }

    if ('%PARAM_INFOGRAPHIC_3_IMAGE%' != '' && '%PARAM_INFOGRAPHIC_3_IMAGE%' != '%PARAM_INFOGRAPHIC_3_IMAGE'.'%') {
            $param_infographic_3_image = '%PARAM_INFOGRAPHIC_3_IMAGE%';
    }
    if ('%PARAM_INFOGRAPHIC_3_NUMBER%' != '' && '%PARAM_INFOGRAPHIC_3_NUMBER%' != '%PARAM_INFOGRAPHIC_3_NUMBER'.'%') {
            $param_infographic_3_number = '%PARAM_INFOGRAPHIC_3_NUMBER%';
    }    
    if ('%PARAM_INFOGRAPHIC_3_TEXT%' != '' && '%PARAM_INFOGRAPHIC_3_TEXT%' != '%PARAM_INFOGRAPHIC_3_TEXT'.'%') {
            $param_infographic_3_text = '%PARAM_INFOGRAPHIC_3_TEXT%';
    }

    if ('%PARAM_INFOGRAPHIC_4_IMAGE%' != '' && '%PARAM_INFOGRAPHIC_4_IMAGE%' != '%PARAM_INFOGRAPHIC_4_IMAGE'.'%') {
            $param_infographic_4_image = '%PARAM_INFOGRAPHIC_4_IMAGE%';
    } 
    if ('%PARAM_INFOGRAPHIC_4_NUMBER%' != '' && '%PARAM_INFOGRAPHIC_4_NUMBER%' != '%PARAM_INFOGRAPHIC_4_NUMBER'.'%') {
            $param_infographic_4_number = '%PARAM_INFOGRAPHIC_4_NUMBER%';
    }        
    if ('%PARAM_INFOGRAPHIC_4_TEXT%' != '' && '%PARAM_INFOGRAPHIC_4_TEXT%' != '%PARAM_INFOGRAPHIC_4_TEXT'.'%') {
            $param_infographic_4_text = '%PARAM_INFOGRAPHIC_4_TEXT%';
    }

?>

    <a name="sports"></a>

    <div class="athletics" id="sports">
        <div class="wrapper content">
            <h2 class="center"><?php print $param_headline;?></h2>
            <div class="flexbox">
                <div class="col-50">
                    <p><?php print $param_bodycopy;?></p>
                    <p>
                        <a data-id="1" class="ath-button change-ath"><?php print $param_tab_1_buttontext;?></a>
                        <a data-id="2" class="ath-button change-ath"><?php print $param_tab_2_buttontext;?></a>
                        <a data-id="3" class="ath-button change-ath"><?php print $param_tab_3_buttontext;?></a>
                    </p>
                </div>
                <div class="col-50 center">
                    <img src="<?php echo $folder; ?>img/athletics/in-the-game.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="wrapper content center" id="recognitions">
            <h3><span>Athletic recognitions</span></h3>
            <div class="flexbox">
                <div class="col-33 ath-achievements">
                    <div>
                        <img src="/images/<?php print $param_infographic_1_image;?>" alt="">
                        <p><span><?php print $param_infographic_1_number;?></span> <?php print $param_infographic_1_text;?></p>
                    </div>
                    <div>
                        <img src="/images/<?php print $param_infographic_2_image;?>" alt="">
                        <p><span><?php print $param_infographic_2_number;?></span> <?php print $param_infographic_2_text;?></p>
                    </div>
                </div>
                <div class="col-33 ath-achievements">
                    <div>
                        <img src="/images/<?php print $param_infographic_3_image;?>" alt="">
                        <p><span><?php print $param_infographic_3_number;?></span> <?php print $param_infographic_3_text;?></p>
                    </div>
                    <div>
                        <img src="/images/<?php print $param_infographic_4_image;?>" alt="">
                        <p><span><?php print $param_infographic_4_number;?></span> <?php print $param_infographic_4_text;?></p>
                    </div>
                </div>
                <div class="ath-mascot hide-on-mobile">
                    <div class="our-mascot"><span>Flex,</span> our Mascot</div>
                    <img src="<?php echo $folder; ?>img/athletics/falcon-point.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="lightbox-links" class="lightbox" style="display:none; overflow:scroll;">
        <div class="wrapper content">
            <div class="close-button">
                <a><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
            <ul class="lb-ath-list">
                <li><a data-id="1" class="change-ath" id="ath-item-1" data-id="1"><?php print $param_tab_1_buttontext;?></a></li>
                <li><a data-id="2" class="change-ath" id="ath-item-2" data-id="2"><?php print $param_tab_2_buttontext;?></a></li>
                <li><a data-id="3" class="change-ath" id="ath-item-3" data-id="3"><?php print $param_tab_3_buttontext;?></a></li>
            </ul>
            <div class="lb-info-container">
                <div class="lb-info-img">
                    <img class="ath-image ath-item-content ath-item-content-1" src="/images/<?php print $param_tab_1_image;?>" alt="<?php print $param_tab_1_buttontext;?>">
                    <img class="ath-image ath-item-content ath-item-content-2" src="/images/<?php print $param_tab_2_image;?>" alt="<?php print $param_tab_2_buttontext;?>">
                    <img class="ath-image ath-item-content ath-item-content-3" src="/images/<?php print $param_tab_3_image;?>" alt="<?php print $param_tab_3_buttontext;?>">
                </div>
                <div class="lb-info-text">
                    <p class="ath-item-content ath-item-content-1"><?php print str_replace("<p>", "", $param_tab_1_content);?></p>
                    <p class="ath-item-content ath-item-content-2"><?php print str_replace("<p>", "", $param_tab_2_content);?></p>
                    <p class="ath-item-content ath-item-content-3"><?php print str_replace("<p>", "", $param_tab_3_content);?></p>

                    <hr>
                    <a class="ath-button ath-item-content ath-item-content-1" href="<?php print $param_tab_1_buttonlink;?>">Read More about <?php print $param_tab_1_buttontext;?></a>
                    <a class="ath-button ath-item-content ath-item-content-2" href="<?php print $param_tab_2_buttonlink;?>">Read More about <?php print $param_tab_2_buttontext;?></a>
                    <a class="ath-button ath-item-content ath-item-content-3" href="<?php print $param_tab_3_buttonlink;?>">Read More about <?php print $param_tab_3_buttontext;?></a>
                </div>
            </div>
        </div>
    </div>

