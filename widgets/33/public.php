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
    $param_heading = "";
    $param_subheading = "";
    $content = "";
    $param_url = "";
    $param_link_text = "";

    # get all values entered in secure.php

    if ('%IMG_SRC%' != '' && '%IMG_SRC%' != '%IMG_SRC'.'%') {
            $img_src = '%IMG_SRC%';
    }

   # if ('%PARAM_IMAGE_ALTTEXT%' != '' && '%PARAM_IMAGE_ALTTEXT%' != '%PARAM_IMAGE_ALTTEXT'.'%') {
   #         $param_image_alttext = '%PARAM_IMAGE_ALTTEXT%';
   # }

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

<div class="mp-container">
    <?php if ($img_src != "") { ?>
        <img border="0" class="img" src="/images/<?php print $img_src;?>" alt="<?php print $param_image_alttext;?> " >
    <?php } ?>

    <?php if ($param_heading != "") { ?>
        <h2><?php print $param_heading;?></h2>
    <?php } ?>

    <?php if ($param_subheading != "") { ?>
        <h3><?php print $param_subheading;?></h3>
    <?php } ?>


    <?php if ($content != "") { ?>
        <div class="mp-text"><?php print $content;?></div>
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
