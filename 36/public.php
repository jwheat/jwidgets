<?php
    $image_scale = "";
    $image = "";
    $link1 = "";
    $altext = "";

    if ('%IMAGE_SCALE%' != '' && '%IMAGE_SCALE%' != '%IMAGE_SCALE'.'%') {
        $image_scale = '%IMAGE_SCALE%';
    } else {
        $image_scale = .25;
        #print "DEFAULT SCALE<br/>";
    }

    if ('%IMG_SRC%' != '' && '%IMG_SRC%' != '%IMG_SRC'.'%' && '%IMG_SRC%' != 'http://'.DOMAIN.'/images/') {
        $image = '%IMG_SRC%';
        $link1 = '%IMG_LINK%';
        $altext = '%IMG_ALTEXT%';
    }

    if ($image != "") {
        $dimensions = getimagesize("http://".DOMAIN."/images/" . $image);
        $x = $dimensions [0];
        $y = $dimensions [1];

        $display_x = $x * $image_scale;
        $display_y = $y * $image_scale;

    /*
        print "Pheight : " . $y  . "<br/>";
        print "Pidth : " . $x  . "<br/>";
        print "Scale : " . $image_scale  . "<br/>";
        print "Sheight : " . $display_y  . "<br/>";
        print "Sidth : " . $display_x  . "<br/>";
    */
    ?>

    <script type="text/javascript" src="/site/custom_scripts/highslide/highslide.js"></script>
    <link rel="stylesheet" type="text/css" href="/site/custom_scripts/highslide/highslide.css" />

    <script type="text/javascript">
        hs.graphicsDir = '/site/custom_scripts/highslide/graphics/';
        hs.wrapperClassName = 'wide-border';
        hs.registerOverlay({
            html: '<div class="closebutton" onclick="return hs.close(this)" title="Close"></div>',
            position: 'top right',
            fade: 2 // fading the semi-transparent overlay looks bad in IE
        });
    </script>


    <div align='center'>
        <a href="/images/<?php print $image;?>" class="highslide" onclick="return hs.expand(this, {dimmingOpacity: 0.75})">
            <img align='center' src="/images/<?php print $image;?>" alt="<?php print $altext;?>" title="Click to enlarge" height="<?php print $display_y;?>" width="<?php print $display_x;?>" />
        </a>
        <div class="highslide-caption">
            <?php print $altext;?>
        </div>
    </div>
    <?php } else {
        print "Configure an image to continue";
        exit();
    }?>