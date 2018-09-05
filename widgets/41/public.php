<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College WYSIWYG Widget
    # Author  : Kris Hardy (reused code from JWheat)
    # +++++++++++++++++++++++++++++++++++++++

    # initlaize variables to prevent value bleeding from other widgets
    $param_bio_content= '';

    //     # get all values entered in secure.php

    if ($param_bio_content == '%' . 'PARAM_BIO_NAME%' || $param_bio_content == '') {
        $param_bio_content = '%PARAM_BIO_CONTENT%';
    }


    # If user specified an image, we'll build out the alt text
    if ($param_imgsrc != "") {
        #build proper alt text based on parameters
        if ($param_bio_name != "") {
            $image_alt_text = $param_bio_name;
        }

        # Last check for empty alt tag ( a bit ridiculous, but I'll put it in, in case someone stupid leave the name blank)
        if ($image_alt_text == "") {
            $image_alt_text = $param_imgsrc;
        }

    }

?>

<div class="contact-box bg-info">
        <?php if ($param_bio_content != "") { ?>
            <?php print $param_bio_content;?>
        <?php } ?>
</div><!-- / contact-box -->