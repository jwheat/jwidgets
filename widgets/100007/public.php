<script src="/site/javascript/instafeed.min.js"></script>
<script>
var feed = new Instafeed({
	    get: "user",
	    target: "mcinstafeed",
	    userId: 267649716,
	    limit: 10,
	    accessToken: "267649716.ed96a3e.1ac493c5b5ed42a3ab41d68c8006bdff",
	    resolution: "thumbnail",
	    template: '<li><a class="fancybox-01" href="{{link}}" data-fancybox-group="gallery" target="_blank"><img src="{{image}}" alt="image" width="185" height="185"/></a></li>',
	    minItems: 9,
	    maxItems: 9
	});
	feed.run();

	$(window).bind("load", function () {
	    $('#mcinstafeed').append('<li><a class="fancybox-01" href="http://instagram.com/messiahcollege" target="_blank"><img src="/images/view-more.jpg" alt="image" width="185" height="185"></a></li>');
	});

</script>
    <div class="instagram-area">
        <div class="container">
            <h3 class="title">#messiahcollege</h3>
            <div class="instagram-gallery gallery-03">
                <ul id="mcinstafeed" class="slides"></ul>
            </div><!-- / instagram-gallery -->
            <div class="social-block">
                <h3>Join the Conversation on</h3>
                <ul class="social">
                    <li><a class="facebook" href="/facebook">facebook</a></li>
                    <li><a class="instagram" href="/instagram">instagram</a></li>
                    <li><a class="snapchat" href="https://www.snapchat.com/">snapchat</a></li>
                    <li><a class="twitter" href="/twitter">twitter</a></li>
                    <li><a class="youtube" href="/youtube">youtube</a></li>
                    <li><a class="pinterest" href="https://www.pinterest.com/messiahcollege/">pinterest</a></li>
                </ul>
            </div>
        </div>
    </div><!-- / instagram-area -->