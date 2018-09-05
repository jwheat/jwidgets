<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah webProxy Widget
    # Author  : Jonathan Wheat, Messiah College
    # Email   : jonathan.p.wheat@gmail.com
    # Web     : http://codedog.net
    # Twitter : @jonathanpwheat
    # +++++++++++++++++++++++++++++++++++++++
    # Change History :

    require_once "custom/class.JaduHTTPRequest.php";
    $username = $_SERVER['REMOTE_USER'];

    # initlaize variables to prevent value bleeding from other widgets
    $param_heading = "";
    $param_url = "";

    # get all values entered in secure.php

    if ('%PARAM_HEADING%' != '' && '%PARAM_HEADING%' != '%PARAM_HEADING'.'%') {
            $param_heading = '%PARAM_HEADING%';
    }

    if ('%PARAM_URL%' != '' && '%PARAM_URL%' != '%PARAM_URL'.'%') {
            $param_url = '%PARAM_URL%';
    }
?>

    <?php if ($param_heading != "") { ?>
        <h2><?php print $param_heading;?></h2>
    <?php } ?>

    <?php 
        if ($param_url != "") {
            if (!empty($username)) {
                $param_url .= "?username=".$username;
            }
            
            $r = new JaduHTTPRequest($param_url);
            echo $r->DownloadToString(); 
        }
    ?>
