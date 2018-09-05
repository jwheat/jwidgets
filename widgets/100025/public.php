<?php
    # +++++++++++++++++++++++++++++++++++++++
    # Messiah College Multipurpose Widget
    # Author  : Jonathan Wheat, Messiah College
    # Email   : jonathan.p.wheat@gmail.com
    # Web     : http://codedog.net
    # Twitter : @jonathanpwheat
    # +++++++++++++++++++++++++++++++++++++++
    # Change History :

    # initlaize variables to prevent value bleeding from other widgets
    $param_name = "";

    # get all values entered in secure.php


    if ('%PARAM_NAME%' != '' && '%PARAM_NAME%' != '%PARAM_NAME'.'%') {
            $param_name = '%PARAM_NAME%';
    }

?>

<div>
    <?php if ($param_name != "") { ?>
        <h2><?php print $param_name;?></h2>
    <?php } ?>
</div>
