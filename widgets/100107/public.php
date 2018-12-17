<?php
    # ++++++++++++++++++++++++++++++++++++++++++++
    # Messiah College Grad Pages Accordion Widget (v2)
    # ++++++++++++++++++++++++++++++++++++++++++++

    $param_heading = "";
    $content = "";
    $img_src = "";

    if ('%IMG_SRC%' != '' && '%IMG_SRC%' != '%IMG_SRC'.'%') {
            $img_src = '%IMG_SRC%';
    }

    if ('%PARAM_HEADING%' != '' && '%PARAM_HEADING%' != '%PARAM_HEADING'.'%') {
            $param_heading = '%PARAM_HEADING%';
    }

    if ('%CONTENT%' != '' && '%CONTENT%' != '%CONTENT'.'%') {
            $content = '%CONTENT%';
    }
?>

<div class="messiah-accordion">
    <button class="accordion acc"><?php if (!empty($img_src)){ print "<img class='accordion-icon' style='margin-right:15px;' src='/images/" . $img_src . "' />"; }?><span class="btn-text"><?php print $param_heading;?></span></button>
    <div class="panel">
        <?php print $content;?>
    </div>
</div>