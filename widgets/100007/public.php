<script>
$(function() {

    var token = '267649716.1677ed0.11b34e8731d74c4dbb0b80afe08ddb08',
        num_photos = 9;
    
    $.ajax({
        url: 'https://api.instagram.com/v1/users/self/media/recent',
        dataType: 'jsonp',
        type: 'GET',
        data: {access_token: token, count: num_photos},
        success: function(data){
            console.log(data);
            for( x in data.data ){
                $('#instagram-gallery').append('<a class="instagram-img-link" href="'+data.data[x].link+'"><img class="instagram-img" src="'+data.data[x].images.low_resolution.url+'"></a>');
            }
            $('#instagram-gallery').slick({
                prevArrow: '.instagram-gallery .instagram-slider-nav-left',
                nextArrow: '.instagram-gallery .instagram-slider-nav-right',
                lazyLoad: 'ondemand',
                variableWidth: true,
                centerMode: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [
                    {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                    }
                    },
                    {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                    },
                    {
                    breakpoint: 668,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1, 
                    }
                    },
                    {
                    breakpoint: 550,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                    }
                ]
            });
        },
        error: function(data){
            console.log(data);
        }
    });
});

</script>
<div class="instagram-area">
 <div class="container">
<h3 class="title">#messiahcollege</h3>
        <div class="instagram-gallery">
            <div class="instagram-slider-nav instagram-slider-nav-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="instagram-slider-nav instagram-slider-nav-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div id="instagram-gallery" class="slides">
                <a href="http://instagram.com/messiahcollege"><img src="images/view-more.jpg" width="185" height="185" alt="image"></a>  
            </div>
        </div>
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
</div>