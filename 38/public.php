<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College Multipurpose Widget
    # Author  : Jonathan Wheat, Messiah College
    # Email   : jonathan.p.wheat@gmail.com
    # Web     : http://codedog.net
    # Twitter : @jonathanpwheat
    # +++++++++++++++++++++++++++++++++++++++
    # Change History :

    # initlaize variables to prevent value bleeding from other widgets
    $img_src = "";
    $param_image_alttext = "";
    $param_name = "";
    $param_title = "";
    $content = "";
    $param_url = "";
    $param_link_text = "";

    # get all values entered in secure.php

    if ('%IMG_SRC%' != '' && '%IMG_SRC%' != '%IMG_SRC'.'%') {
            $img_src = '%IMG_SRC%';
    }

    if ('%PARAM_IMAGE_ALTTEXT%' != '' && '%PARAM_IMAGE_ALTTEXT%' != '%PARAM_IMAGE_ALTTEXT'.'%') {
            $param_image_alttext = '%PARAM_IMAGE_ALTTEXT%';
    }

    if ('%PARAM_NAME%' != '' && '%PARAM_NAME%' != '%PARAM_NAME'.'%') {
            $param_name = '%PARAM_NAME%';
    }

    if ('%PARAM_TITLE%' != '' && '%PARAM_TITLE%' != '%PARAM_TITLE'.'%') {
            $param_title = '%PARAM_TITLE%';
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

<div class="widget-blockquotes">
    <?php if ($img_src != "") { ?>
        <img border="0" class="img" src="/images/<?php print $img_src;?>" alt="<?php print $param_image_alttext;?> " >
    <?php } ?>
        <span class="ico"></span>

    <?php if ($param_name != "") { ?>
        <h4><?php print $param_name;?></h4>
    <?php } ?>

    <?php if ($param_title != "") { ?>
        <h5><?php print $param_title;?></h5>
    <?php } ?>


    <?php if ($content != "") { ?>
        <div class="text"><?php print $content;?></div>
    <?php } ?>

    <?php if ($param_url != "") { ?>
        <a href='<?php print $param_url;?>'class="button">
      <?php
        if ($param_link_text != "") {
            print $param_link_text;
        } else {
            print $param_url;
        }
      ?></a>
    <?php } ?>

</div>
