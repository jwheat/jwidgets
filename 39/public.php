<script type="text/javascript" src="/site/custom_scripts/js/MessiahFadeSlideshow_II.js">

/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>

<?php
        $image_height = 350;
        $image1 = $image2 = $image3 = $image4 = $image5 = $image6 = $image7 = $image8 = $image9 = "";
        $link1 = $link2 = $link3 = $link4 = $link5 = $link6 = $link7 = $link8 = $link9 = "";
        $altext1 = $altext2 = $altext3 = $altext4 = $altext5 = $altext6 = $altext7 = $altext8 = $altext9 = "";
        $image_speed = 3000;

        if ('%IMAGE_SPEED%' != '' && '%IMAGE_SPEED%' != '%IMAGE_SPEED'.'%') {
                $image_speed = '%IMAGE_SPEED%';
                $image_speed = intval($image_speed) * 1000;
        }

        $sid = "show_" . rand();
        #$pause =  rand(2000,3000);
        $pause = $image_speed;
        $display = rand(400,600);

        if ('%IMAGE_WIDTH%' != '' && '%IMAGE_WIDTH%' != '%IMAGE_WIDTH'.'%') {
                $image_width = '%IMAGE_WIDTH%';
        }

        if ('%IMAGE_HEIGHT%' != '' && '%IMAGE_HEIGHT%' != '%IMAGE_WIDTH'.'%') {
                $image_height = '%IMAGE_HEIGHT%';
        }
?>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
wrapperid: "<?php print $sid; ?>", //ID of blank DIV on page to house Slideshow
dimensions: [<?php print $image_width?>, <?php print $image_height ?>], //width/height of gallery in pixels. Should reflect dimensions of largest image
imagearray: [
<?php

    # array format : ["http://i29.tinypic.com/xp3hns.jpg", "http://en.wikipedia.org/wiki/Cave", "_new", "Some day I'd like to explore these caves!"],
        if ('%INPUT_IMG1_SRC%' != '' && '%INPUT_IMG1_SRC%' != '%INPUT_IMG1_SRC'.'%' && '%INPUT_IMG1_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image1 = '%INPUT_IMG1_SRC%';
            $link1 = '%IMG_1_LINK%';
            $altext1 = '%IMG_1_ALTEXT%';
            print "['/images/" .$image1."','" . $link1 . "','','".addslashes($altext1)."']";
        }

        if ('%INPUT_IMG2_SRC%' != '' && '%INPUT_IMG2_SRC%' != '%INPUT_IMG2_SRC'.'%' && '%INPUT_IMG2_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image2 = '%INPUT_IMG2_SRC%';
            $link2 = '%IMG_2_LINK%';
            $altext2 = '%IMG_2_ALTEXT%';
            print ",\n['/images/" .$image2."','" . $link2 . "','','".addslashes($altext2)."']";
        }

        if ('%INPUT_IMG3_SRC%' != '' && '%INPUT_IMG3_SRC%' != '%INPUT_IMG3_SRC'.'%' && '%INPUT_IMG3_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image3 = '%INPUT_IMG3_SRC%';
            $link3 = '%IMG_3_LINK%';
            $altext3 = '%IMG_3_ALTEXT%';
            print ",\n['/images/" .$image3."','" . $link3 . "','','".addslashes($altext3)."']";

        }

        if ('%INPUT_IMG4_SRC%' != '' && '%INPUT_IMG4_SRC%' != '%INPUT_IMG4_SRC'.'%' && '%INPUT_IMG4_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image4 = '%INPUT_IMG4_SRC%';
            $link4 = '%IMG_4_LINK%';
            $altext4 = '%IMG_4_ALTEXT%';
            print ",\n['/images/" .$image4."','" . $link4 . "','','".addslashes($altext4)."']";
        }

        if ('%INPUT_IMG5_SRC%' != '' && '%INPUT_IMG5_SRC%' != '%INPUT_IMG5_SRC'.'%' && '%INPUT_IMG5_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image5 = '%INPUT_IMG5_SRC%';
            $link5 = '%IMG_5_LINK%';
            $altext5 = '%IMG_5_ALTEXT%';
            print ",\n['/images/" .$image5."','" . $link5 . "','','".addslashes($altext5)."']";
        }

        if ('%INPUT_IMG6_SRC%' != '' && '%INPUT_IMG6_SRC%' != '%INPUT_IMG6_SRC'.'%' && '%INPUT_IMG6_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image6 = '%INPUT_IMG6_SRC%';
            $link6 = '%IMG_6_LINK%';
            $altext6 = '%IMG_6_ALTEXT%';
            print ",\n['/images/" .$image6."','" . $link6 . "','','".addslashes($altext6)."']";
        }

        if ('%INPUT_IMG7_SRC%' != '' && '%INPUT_IMG7_SRC%' != '%INPUT_IMG7_SRC'.'%' && '%INPUT_IMG7_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image7 = '%INPUT_IMG7_SRC%';
            $link7= '%IMG_7_LINK%';
            $altext7 = '%IMG_7_ALTEXT%';
            print ",\n['/images/" .$image7."','" . $link7 . "','','".addslashes($altext7)."']";
        }

        if ('%INPUT_IMG8_SRC%' != '' && '%INPUT_IMG8_SRC%' != '%INPUT_IMG8_SRC'.'%' && '%INPUT_IMG8_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image8 = '%INPUT_IMG8_SRC%';
            $link8 = '%IMG_8_LINK%';
            $altext8 = '%IMG_8_ALTEXT%';
            print ",\n['/images/" .$image8."','" . $link8 . "','','".addslashes($altext8)."']";
        }

        if ('%INPUT_IMG9_SRC%' != '' && '%INPUT_IMG9_SRC%' != '%INPUT_IMG9_SRC'.'%' && '%INPUT_IMG9_SRC%' != 'http://'.DOMAIN.'/images/') {
            $image9 = '%INPUT_IMG9_SRC%';
            $link9 = '%IMG_9_LINK%';
            $altext9 = '%IMG_9_ALTEXT%';
            print ",\n['/images/" .$image9."','" . $link9 . "','','".addslashes($altext9)."']";
        }
    print "\n";
?>
],
displaymode: {type:'auto', pause:<?php print $pause ?>, cycles:0, wraparound:false},
persist: false, //remember last viewed slide and recall within same session?
fadeduration: <?php print $display?>, //transition duration (milliseconds)
descreveal: "ondemand",
togglerid: ""
})

</script>

<div id="<?php print $sid; ?>" style='width:100%;'></div>
