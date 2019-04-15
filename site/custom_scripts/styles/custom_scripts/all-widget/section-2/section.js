$(function() {

    $('.slider-1-wrapper').slick({    
        centerMode: true,
        centerPadding: '50px',
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                centerPadding: '40px',
                slidesToShow: 2,
                slidesToScroll: 2, 
            }
            },
            {
            breakpoint: 480,
            settings: {
                centerPadding: '30px',
                slidesToShow: 1,
                slidesToScroll: 1,
            }
            }
        ]
      });
});