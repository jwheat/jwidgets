<link rel="stylesheet" type="text/css" href="//www.messiah.edu/site/custom_scripts/styles/mcforms.css">
<?php
    if (isset($_GET['first_name'])) {
        $first_name = $_GET['first_name'];
?>
        <h2><?php print $first_name;?>, thanks for requesting information from Messiah College.</h2>