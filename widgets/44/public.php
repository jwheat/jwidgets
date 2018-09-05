<?php
    # Custom Twitter Feed Widget for Jadu
    # Author : Jonathan Wheat
    #

    // initialize variables
    $twitter_username = $twitter_feed_type = $favorites = "";
    $twitter_code = "Twitter Settings not configured";

    // set username from settings
    if ('%TWITTER_USERNAME%' != '' && '%TWITTER_USERNAME%' != '%TWITTER_USERNAME'.'%') {
            $twitter_username = '%TWITTER_USERNAME%';
    }

    // set twitter code, pasted from twitter.com
    if ('%TWITTER_CODE' != '' && '%TWITTER_CODE%' != '%TWITTER_CODE'.'%') {
            $twitter_code = '%TWITTER_CODE%';
    }

    print $twitter_code;
?>
