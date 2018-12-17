<?php
    # ++++++++++++++++++++++++++++++++++++++++++++
    # Messiah College Grad Rankings Carousel
    # ++++++++++++++++++++++++++++++++++++++++++++

    $r1_image = $r2_image = $r3_image = $r4_image = $r5_image = "";
    $r1_image_url = $r2_image_url = $r3_image_url = $r4_image_url = $r5_image_url = "";
    $heading1 = $heading2 = $heading3 = $heading4 = $heading5 = "";

    if ('%R1_IMAGE%' != '' && '%R1_IMAGE%' != '%R1_IMAGE' . '%') {
      $r1_image = '%R1_IMAGE%';
    }
    if ('%R2_IMAGE%' != '' && '%R2_IMAGE%' != '%R2_IMAGE' . '%') {
      $r2_image = '%R2_IMAGE%';
    }
    if ('%R3_IMAGE%' != '' && '%R3_IMAGE%' != '%R3_IMAGE' . '%') {
      $r3_image = '%R3_IMAGE%';
    }
    if ('%R4_IMAGE%' != '' && '%R4_IMAGE%' != '%R4_IMAGE' . '%') {
      $r4_image = '%R4_IMAGE%';
    }
    if ('%R5_IMAGE%' != '' && '%R5_IMAGE%' != '%R5_IMAGE' . '%') {
      $r5_image = '%R5_IMAGE%';
    }

    if ('%R1_IMAGE_URL%' != '' && '%R1_IMAGE_URL%' != '%R1_IMAGE_URL' . '%') {
      $r1_image_url = '%R1_IMAGE_URL%';
    }
    if ('%R2_IMAGE_URL%' != '' && '%R2_IMAGE_URL%' != '%R2_IMAGE_URL' . '%') {
      $r2_image_url = '%R2_IMAGE_URL%';
    }
    if ('%R3_IMAGE_URL%' != '' && '%R3_IMAGE_URL%' != '%R3_IMAGE_URL' . '%') {
      $r3_image_url = '%R3_IMAGE_URL%';
    }
    if ('%R4_IMAGE_URL%' != '' && '%R4_IMAGE_URL%' != '%R4_IMAGE_URL' . '%') {
      $r4_image_url = '%R4_IMAGE_URL%';
    }
    if ('%R5_IMAGE_URL%' != '' && '%R5_IMAGE_URL%' != '%R5_IMAGE_URL' . '%') {
      $r5_image_url = '%R5_IMAGE_URL%';
    }

    if ('%HEADING1%' != '' && '%HEADING1%' != '%HEADING1' . '%') {
      $heading1 = '%HEADING1%';
    }
    if ('%HEADING2%' != '' && '%HEADING2%' != '%HEADING2' . '%') {
      $heading2 = '%HEADING2%';
    }
    if ('%HEADING3%' != '' && '%HEADING3%' != '%HEADING3' . '%') {
      $heading3 = '%HEADING3%';
    }
    if ('%HEADING4%' != '' && '%HEADING4%' != '%HEADING4' . '%') {
      $heading4 = '%HEADING4%';
    }
    if ('%HEADING5%' != '' && '%HEADING5%' != '%HEADING5' . '%') {
      $heading5 = '%HEADING5%';
    }


?>
 <div id="carousel-awards" class="slider single-item">
    <?php if (!empty($r1_image) || !empty($heading1)) { ?>
    <div class="slick-slide slide-1">
        <div class="awards-container">
            <div class="awards-container-left">
                <?php if (!empty($r1_image)) { ?>
                    <?php if (!empty($r1_image_url)) { ?>
                        <a href="<?php print $r1_image_url;?>" target="_blank"><img id="awards-logo" src="/images/<?php print $r1_image;?>" alt="" class="awards-logo"></a>    
                    <?php } else { ?>
                        <img id="awards-logo" src="/images/<?php print $r1_image;?>" alt="" class="awards-logo">
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="awards-container-right">
                <h3 class="awards-description">
                    <?php print $heading1;?>
                </h3>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if (!empty($r2_image) || !empty($heading2)) { ?>
    <div class="slick-slide slide-2">
        <div class="awards-container">
            <div class="awards-container-left">
                <?php if (!empty($r2_image)) { ?>
                    <?php if (!empty($r2_image_url)) { ?>
                        <a href="<?php print $r2_image_url;?>" target="_blank"><img id="awards-logo" src="/images/<?php print $r2_image;?>" alt="" class="awards-logo"></a>    
                    <?php } else { ?>
                        <img id="awards-logo" src="/images/<?php print $r2_image;?>" alt="" class="awards-logo">
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="awards-container-right">
                <h3 class="awards-description">
                    <?php print $heading2;?>
                </h3>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if (!empty($r3_image) || !empty($heading3)) { ?>
    <div class="slick-slide slide-3">
        <div class="awards-container">
            <div class="awards-container-left">
                <?php if (!empty($r3_image)) { ?>
                    <?php if (!empty($r3_image_url)) { ?>
                        <a href="<?php print $r3_image_url;?>" target="_blank"><img id="awards-logo" src="/images/<?php print $r3_image;?>" alt="" class="awards-logo"></a>    
                    <?php } else { ?>
                        <img id="awards-logo" src="/images/<?php print $r3_image;?>" alt="" class="awards-logo">
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="awards-container-right">
                <h3 class="awards-description">
                    <?php print $heading3;?>
                </h3>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if (!empty($r4_image) || !empty($heading4)) { ?>
    <div class="slick-slide slide-4">
        <div class="awards-container">
            <div class="awards-container-left">
                <?php if (!empty($r4_image)) { ?>
                    <?php if (!empty($r4_image_url)) { ?>
                        <a href="<?php print $r4_image_url;?>" target="_blank"><img id="awards-logo" src="/images/<?php print $r4_image;?>" alt="" class="awards-logo"></a>    
                    <?php } else { ?>
                        <img id="awards-logo" src="/images/<?php print $r4_image;?>" alt="" class="awards-logo">
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="awards-container-right">
                <h3 class="awards-description">
                    <?php print $heading4;?>
                </h3>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php if (!empty($r5_image) || !empty($heading5)) { ?>
    <div class="slick-slide slide-5">
        <div class="awards-container">
            <div class="awards-container-left">
                <?php if (!empty($r5_image)) { ?>
                    <?php if (!empty($r5_image_url)) { ?>
                        <a href="<?php print $r5_image_url;?>" target="_blank"><img id="awards-logo" src="/images/<?php print $r5_image;?>" alt="" class="awards-logo"></a>    
                    <?php } else { ?>
                        <img id="awards-logo" src="/images/<?php print $r5_image;?>" alt="" class="awards-logo">
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="awards-container-right">
                <h3 class="awards-description">
                    <?php print $heading5;?>
                </h3>
            </div>
        </div>
    </div>
    <?php } ?>            
</div>

<script type="text/javascript" src="/site/custom_scripts/styles/grad-program/js/slick.js"></script>

<script>
// GR Page - Rankings carousel 
$.fn.exists = function(){return this.length>0;}
$(document).ready(function() {
if ( $('#carousel-awards').exists()) {
console.log ('slick exists');
    $('#carousel-awards').slick({
        speed: 1500,
        autoplay: true,
        autoplaySpeed: 5000,
    });
}
});
</script>