<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College Biography Mini Widget
    # Author  : Ramona Fritschi, Messiah College (reused code from JWheat)
    # Email   : rfritschi@messiah.edu
    # +++++++++++++++++++++++++++++++++++++++
    # Change History :
    # 20 APR 12
    #   : rewrote most of the code, to XHTML standards
    #   : set all php variables in the beginning
    #   : added default settings if left empty
    #   : check for all parameters before attempting to display them
    #   : uses php variables for rendering display instead of JADU env variables
    #   : wrapped all elements in individual span tags, and removed all HTML styling
    # 24 APR 12
    #   : changed " to ' in php variable definitiions
    #      : updated CSS and widget structure to reflect new styling (Kris Hardy)
    # 05 MAY 14 (JW)
    #

    # initlaize variables to prevent value bleeding from other widgets
    $param_imgsrc = '';
    $param_bio_name = '';
    $param_bio_title= '';
    $param_contact_website = '';

    //     # get all values entered in secure.php
    if ($param_imgsrc == '%' . 'IMG_SRC%' || $param_imgsrc == '') {
        $param_imgsrc = '%IMG_SRC%';
    }

    if ($param_bio_name == '%' . 'PARAM_BIO_NAME%' || $param_bio_name == '') {
        $param_bio_name = '%PARAM_BIO_NAME%';
    }

    if ($param_bio_title == '%' . 'PARAM_BIO_TITLE%' || $param_bio_title == '') {
        $param_bio_title = '%PARAM_BIO_TITLE%';
    }

    if ($param_contact_website == '%' . 'PARAM_CONTACT_WEBSITE%' || $param_contact_website == '') {
        $param_contact_website = '%PARAM_CONTACT_WEBSITE%';
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
    <?php if ($param_imgsrc != "") { ?>
    <div class="img">
        <img align='<?php print $param_palign;?>' class='img' alt='<?php print $image_alt_text;?>' src='http://<?php print DOMAIN;?>/images/<?php print $param_imgsrc;?>' />
    </div>
    <?php } ?>
    <div class="contact-narrow"><?php print $param_bio_name;?></div>
        <?php if ($param_bio_title != "") { ?>
        <p class="title-narrow">
            <?php print $param_bio_title;?>
         </p>
        <?php } ?>
    <?php if ($param_contact_website != "" || $param_contact_website != "" || $param_contact_website != "") { ?>
        <a href='<?php print $param_contact_website;?>'>Read More</a>
    <?php } ?>

</div><!-- / contact-box -->