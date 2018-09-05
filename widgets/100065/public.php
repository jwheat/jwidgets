<?php
    $param_embedcode = "";

    if ('%PARAM_EMBEDCODE%' != '' && '%PARAM_EMBEDCODE%' != '%PARAM_EMBEDCODE'.'%') {
        $param_embedcode = '%PARAM_EMBEDCODE%';
    } else {
    	print "This widget will not work in preview mode";
    }

    // URL Syntax - https://youtu.be/BrHL7qoBWoc
    // pull out the embed code
    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $param_embedcode, $matches);
?>

<div id="video_player">
	<div class="youtube-embed">
	    <a class="gtm-video" href="https://www.youtube.com/watch?v=<?php print $matches[1];?>" data-lity>
        <img class="play-button" src="https://www.messiah.edu/site/styles/images/youtube-play.png" alt="Press to play video" />
        <img src="https://img.youtube.com/vi/<?php print $matches[1];?>/hqdefault.jpg" alt="screen shot of video" /></a>
	</div>
</div>
