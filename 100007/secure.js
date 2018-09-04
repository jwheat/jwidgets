$.fn.exists = function(){return this.length>0;}

if ( $('.instagram-area').exists()) {
    var feed = new Instafeed({
	    get: "user",
	    target: "mcinstafeed",
	    userId: 267649716,
	    limit: 10,
	    accessToken: "267649716.467ede5.6a64c3cfcc93474e968a96a50d67a2ea",
	    resolution: "low_resolution",
	    template: '<li><a class="fancybox-01" href="{{link}}" data-fancybox-group="gallery" target="_blank"><img src="{{image}}" alt="image" width="185" height="185"/></a></li>',
	    minItems: 9,
	    maxItems: 9
	});
	feed.run();

	$(window).bind("load", function () {
	    $('#mcinstafeed').append('<li><a class="fancybox-01" href="http://instagram.com/messiahcollege" target="_blank"><img src="/images/view-more.jpg" alt="image" width="185" height="185"></a></li>');
	});
}

