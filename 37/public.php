<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College Accordian Widget
    # Author  : Jonathan Wheat, Messiah College
    # Email   : jonathan.p.wheat@gmail.com
    # Web     : http://codedog.net
    # Twitter : @jonathanpwheat
    # +++++++++++++++++++++++++++++++++++++++
    # Change History :
    # 17 APR 14 : [JW] inital build

    # Initlaize variables to prevent value bleeding from other widgets
    $img_src = "";
    $param_image_alttext = "";
    $param_heading = "";
    $content = "";
    $param_url = "";
    $param_link_text = "";
    $param_subheading = "";

    # get all values entered in secure.php

    if ('%IMG_SRC%' != '' && '%IMG_SRC%' != '%IMG_SRC'.'%') {
            $img_src = '%IMG_SRC%';
    }

    if ('%PARAM_IMAGE_ALTTEXT%' != '' && '%PARAM_IMAGE_ALTTEXT%' != '%PARAM_IMAGE_ALTTEXT'.'%') {
            $param_image_alttext = '%PARAM_IMAGE_ALTTEXT%';
    }

    if ('%PARAM_HEADING%' != '' && '%PARAM_HEADING%' != '%PARAM_HEADING'.'%') {
            $param_heading = '%PARAM_HEADING%';
    }

    if ('%PARAM_SUBHEADING%' != '' && '%PARAM_SUBHEADING%' != '%PARAM_SUBHEADING'.'%') {
            $param_subheading = '%PARAM_SUBHEADING%';
    }

    if ('%CONTENT%' != '' && '%CONTENT%' != '%CONTENT'.'%') {
            $content = '%CONTENT%';
    }

    if ('%PARAM_URL%' != '' && '%PARAM_URL%' != '%PARAM_URL'.'%') {
            $param_url = '%PARAM_URL%';
    }

    if ('%PARAM_LINK_TEXT%' != '' && '%PARAM_LINK_TEXT%' != '%PARAM_LINK_TEXT'.'%') {
            $param_link_text = '%PARAM_LINK_TEXT%';
    }

?>

<div class="widget-info-img">
    <?php if ($img_src != "") { ?>
        <img border="0" src="/images/<?php print $img_src;?>" alt="<?php print $param_image_alttext;?>">
    <?php } else {
            print "There is no image selected. Widget will not work properly";
        }
    ?>

    <div class="mask">
        <div class="inner">
            <div class="cell">
                <?php if ($param_heading != "") { ?>
                    <strong><?php print $param_heading;?></strong>
                <?php } ?>
                <div class="text">
                    <?php if ($content != "") { ?>
                        <p><?php print $content;?></p>
                    <?php } ?>

                    <?php if ($param_url != "") { ?>
                        <a class="btn-info" href='<?php print $param_url;?>'>
                      <?php
                        if ($param_link_text != "") {
                            print $param_link_text;
                        } else {
                            print $param_url;
                        }
                      ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>