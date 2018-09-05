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
    $param_palign = 'center';
    $param_imgsrc = '';
    $param_calign = 'center';
    $param_bio_name = '';
    $param_bio_title= '';
    $param_contact_email = '';
    $param_contact_phone = '';
    $param_contact_fax = '';
    $param_contact_website = '';
    $param_link_text = "";
    $content= '';

    //     # get all values entered in secure.php
    if ($param_palign == '%' . 'PARAM_PALIGNMENT%' || $param_palign == '') {
        $param_palign = '%PARAM_PALIGNMENT%';
    }

    if ($param_imgsrc == '%' . 'IMG_SRC%' || $param_imgsrc == '') {
        $param_imgsrc = '%IMG_SRC%';
    }

    if ($param_calign == '%' . 'PARAM_CALIGNMENT%' || $param_calign == '') {
        $param_calign = '%PARAM_CALIGNMENT%';
    }

    if ($param_bio_name == '%' . 'PARAM_BIO_NAME%' || $param_bio_name == '') {
        $param_bio_name = '%PARAM_BIO_NAME%';
    }

    if ($param_bio_title == '%' . 'PARAM_BIO_TITLE%' || $param_bio_title == '') {
        $param_bio_title = '%PARAM_BIO_TITLE%';
    }

    if ($param_contact_email == '%' . 'PARAM_CONTACT_EMAIL%' || $param_contact_email == '') {
        $param_contact_email = '%PARAM_CONTACT_EMAIL%';
    }

    if ($param_contact_phone == '%' . 'PARAM_CONTACT_PHONE%' || $param_contact_phone == '') {
        $param_contact_phone = '%PARAM_CONTACT_PHONE%';
    }

    if ($param_contact_fax == '%' . 'PARAM_CONTACT_FAX%' || $param_contact_fax == '') {
        $param_contact_fax = '%PARAM_CONTACT_FAX%';
    }

    if ($param_contact_website == '%' . 'PARAM_CONTACT_WEBSITE%' || $param_contact_website == '') {
        $param_contact_website = '%PARAM_CONTACT_WEBSITE%';
    }

    if ($param_contact_website == '%' . 'PARAM_CONTACT_WEBSITE%' || $param_contact_website == '') {
        $param_contact_website = "";
    }

    if ($param_link_text == '%' . 'PARAM_LINK_TEXT%' || $param_link_text == '') {
        $param_link_text = '%PARAM_LINK_TEXT%';
    }

    if ($param_link_text == '%' . 'PARAM_LINK_TEXT%' || $param_link_text == '') {
        $param_link_text = "";
    }
    
    if ($content == '%' . 'CONTENT%' || $content == '') {
        $content = '%CONTENT%';
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

<div class="employee-record">
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
    <div class="wrap">
        <h5><?php print $param_bio_name;?></h5>
        <?php if ($param_bio_title != "") { ?>
        <p class="intro">
            <?php print $param_bio_title;?>
         </p>
        <?php } ?>

    <?php if ($param_contact_email != "" || $param_contact_phone != "" || $param_contact_fax != "") { ?>
        <address>
    <?php } ?>

        <?php if ($param_contact_email != "") { ?>
            <span><img src="http://www.messiah.edu/new/final/images/ico-20.png" alt="image"><a href="mailto:<?php print $param_contact_email;?>"><?php print $param_contact_email;?></a></span>
        <?php } ?>
        <?php if ($param_contact_phone != "") { ?>
            <span><img src="http://www.messiah.edu/new/final/images/ico-21.png" alt="image"><?php print $param_contact_phone;?></span>
        <?php } ?>
        <?php if ($param_contact_fax != "") { ?>
            <span><img src="http://www.messiah.edu/new/final/images/ico-22.png" alt="image"><?php print $param_contact_fax;?></span>
        <?php } ?>


        <?php if ($param_contact_website != "") { 
            if ($param_link_text == "") {
                $param_link_text = "Visit Webpage";
            }
        ?>
            <span><img src="http://www.messiah.edu/site/images/www-icon.png" alt="image"> <a href="<?php print $param_contact_website;?>"><?php print $param_link_text;?></a></span>
        <?php } ?>

    <?php if ($param_contact_email != "" || $param_contact_phone != "" || $param_contact_fax != "") { ?>
        </address>
    <?php } ?>


        <?php if ($content != "") { ?>
        <p>
            <?php print $content;?>
        </p>
        <?php } ?>

    </div>
</div><!-- / contact-box -->