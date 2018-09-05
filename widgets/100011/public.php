<?php
    $param_url = "";
    $param_link_text = "";

    if ('%PARAM_URL%' != '' && '%PARAM_URL%' != '%PARAM_URL'.'%') {
            $param_url = '%PARAM_URL%';
    }

    if ('%PARAM_LINK_TEXT%' != '' && '%PARAM_LINK_TEXT%' != '%PARAM_LINK_TEXT'.'%') {
            $param_link_text = '%PARAM_LINK_TEXT%';
    }
?>
    <?php if ($param_url != "") { ?>
        <a class="widget-advert-link" href='<?php print $param_url;?>' ><span>

      <?php
        if ($param_link_text != "") {
            print $param_link_text;
        } else {
            print $param_url;
        }
      ?></span></a>
    <?php } ?>