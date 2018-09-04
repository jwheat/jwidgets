<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College Accordion Widget
    # Author  : Jonathan Wheat, Messiah College
    # Email   : jonathan.p.wheat@gmail.com
    # Web     : http://codedog.net
    # Twitter : @jonathanpwheat
    # +++++++++++++++++++++++++++++++++++++++
    # Change History :
    # 11.03.14 : Added Subheading
    # 02.24.17 : Added Anchor

    # initlaize variables to prevent value bleeding from other widgets
    $param_anchor = "";
    $param_heading = "";
    $param_subheading = "";
    $content = "";

    # get all values entered in secure.php

    if ('%PARAM_ANCHOR%' != '' && '%PARAM_ANCHOR%' != '%PARAM_ANCHOR'.'%') {
            $param_anchor = '%PARAM_ANCHOR%';
    }

if ($param_anchor == "") {
     $param_anchor = uniqid();
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

    // check and get any anchor in the url


?>
  

<div class="widget-info-accordion accordion-01" id='accordion_<?php print $param_anchor;?>'>
    <h5 class='title-accordion' id='acchead_<?php print $param_anchor;?>' >
         <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
         <?php print $param_heading;?>
<span class="sub-heading"><?php print $param_subheading;?></span>
    </h5>
    <div class='accordion-area block' style='display:none'><?php print html_entity_decode($content);?></div>
</div>
