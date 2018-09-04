<?php
    $folder = '/site/custom_scripts/styles/';
    /*
    headline
    body copy - editor
    link - 2 fields - link text and hyperlink
    */

    $param_headline = "heading";
    $param_bodycopy = "bodycopy";
    $param_image = "placeholder-pixel.png";
    $param_link_text = "";
    $param_link = "";   


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


?>

    <a name="camps" ></a>

    <div class="athletics" id="sports-camps">
        <div class="wrapper content">
            <h2 class="center"><?php print $param_headline;?></h2>
            <div class="flexbox">
                <div class="col-50">
                    <p><?php print $param_bodycopy;?></p>
                    <p><a href="<?php print $param_link;?>" class="ath-button"><?php print $param_link_text;?></a></p>
                </div>
                <div class="col-50 center">
                    <img src="/images/<?php print $param_image;?>" alt="">
                </div>
            </div>
        </div>
        </div>
    </div>