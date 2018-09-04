/******** 100017 internalID:MTAwMDE3MQ *********/

$(document).ready(function() {
	if ($('.xcounter').exists()) {
		$('.fact-slider').appear(function(){
			$('.counter').addClass('counter-analog').counter({
				initial: '0',
				direction: 'up',
				interval: '25',
				format: '99',
				stop: '98'
			});
		});
	}
});/******** 100012 internalID:MTAwMDEyMQ *********/

//--------------------------------------------------------
// Set up listener for Adding a New link

    function selectURL(obj){
        var selectedURL = obj.options[obj.selectedIndex];
        if (selectedURL.value != ""){
                window.location = selectedURL.value;
        }
    }/******** 28 internalID:Mjgx *********/

// http://leemark.github.io/better-simple-slideshow/
var makeBSS = function (el, options) {
    var $slideshows = document.querySelectorAll(el), // a collection of all of the slideshow
        $slideshow = {},
        Slideshow = {
            init: function (el, options) {
                this.counter = 0; // to keep track of current slide
                this.el = el; // current slideshow container    
                this.$items = el.querySelectorAll('figure'); // a collection of all of the slides, caching for performance
                this.numItems = this.$items.length; // total number of slides
                options = options || {}; // if options object not passed in, then set to empty object 
                options.auto = options.auto || false; // if options.auto object not passed in, then set to false
                this.opts = {
                    auto: (typeof options.auto === "undefined") ? false : options.auto,
                    speed: (typeof options.auto.speed === "undefined") ? 1500 : options.auto.speed,
                    pauseOnHover: (typeof options.auto.pauseOnHover === "undefined") ? false : options.auto.pauseOnHover,
                    fullScreen: (typeof options.fullScreen === "undefined") ? false : options.fullScreen,
                    swipe: (typeof options.swipe === "undefined") ? false : options.swipe
                };
                
                this.$items[0].classList.add('bss-show'); // add show class to first figure 
                this.injectControls(el);
                this.addEventListeners(el);
                if (this.opts.auto) {
                    this.autoCycle(this.el, this.opts.speed, this.opts.pauseOnHover);
                }
                if (this.opts.fullScreen) {
                    this.addFullScreen(this.el);
                }
                if (this.opts.swipe) {
                    this.addSwipe(this.el);
                }
            },
            showCurrent: function (i) {
                // increment or decrement this.counter depending on whether i === 1 or i === -1
                if (i > 0) {
                    this.counter = (this.counter + 1 === this.numItems) ? 0 : this.counter + 1;
                } else {
                    this.counter = (this.counter - 1 < 0) ? this.numItems - 1 : this.counter - 1;
                }

                // remove .show from whichever element currently has it 
                // http://stackoverflow.com/a/16053538/2006057
                [].forEach.call(this.$items, function (el) {
                    el.classList.remove('bss-show');
                });
  
                // add .show to the one item that's supposed to have it
                this.$items[this.counter].classList.add('bss-show');
            },
            injectControls: function (el) {
            // build and inject prev/next controls
                // first create all the new elements
                var spanPrev = document.createElement("span"),
                    spanNext = document.createElement("span"),
                    docFrag = document.createDocumentFragment();
        
                // add classes
                spanPrev.classList.add('bss-prev');
                spanNext.classList.add('bss-next');
        
                // add contents
                spanPrev.innerHTML = '<';
                spanNext.innerHTML = '>';
                
                // append elements to fragment, then append fragment to DOM
                docFrag.appendChild(spanPrev);
                docFrag.appendChild(spanNext);
                el.appendChild(docFrag);
            },
            addEventListeners: function (el) {
                var that = this;
                el.querySelector('.bss-next').addEventListener('click', function () {
                    that.showCurrent(1); // increment & show
                }, false);
            
                el.querySelector('.bss-prev').addEventListener('click', function () {
                    that.showCurrent(-1); // decrement & show
                }, false);
                
                el.onkeydown = function (e) {
                    e = e || window.event;
                    if (e.keyCode === 37) {
                        that.showCurrent(-1); // decrement & show
                    } else if (e.keyCode === 39) {
                        that.showCurrent(1); // increment & show
                    }
                };
            },
            autoCycle: function (el, speed, pauseOnHover) {
                var that = this,
                    interval = window.setInterval(function () {
                        that.showCurrent(1); // increment & show
                    }, speed);
                
                if (pauseOnHover) {
                    el.addEventListener('mouseover', function () {
                        interval = clearInterval(interval);
                    }, false);
                    el.addEventListener('mouseout', function () {
                        interval = window.setInterval(function () {
                            that.showCurrent(1); // increment & show
                        }, speed);
                    }, false);
                } // end pauseonhover
                
            },
            addFullScreen: function(el){
                var that = this,
                fsControl = document.createElement("span");
                
                fsControl.classList.add('bss-fullscreen');
                el.appendChild(fsControl);
                el.querySelector('.bss-fullscreen').addEventListener('click', function () {
                    that.toggleFullScreen(el);
                }, false);
            },
            addSwipe: function(el){
                var that = this,
                    ht = new Hammer(el);
                ht.on('swiperight', function(e) {
                    that.showCurrent(-1); // decrement & show
                });
                ht.on('swipeleft', function(e) {
                    that.showCurrent(1); // increment & show
                });
            },
            toggleFullScreen: function(el){
                // https://developer.mozilla.org/en-US/docs/Web/Guide/API/DOM/Using_full_screen_mode
                if (!document.fullscreenElement &&    // alternative standard method
                    !document.mozFullScreenElement && !document.webkitFullscreenElement &&   
                    !document.msFullscreenElement ) {  // current working methods
                    if (document.documentElement.requestFullscreen) {
                      el.requestFullscreen();
                    } else if (document.documentElement.msRequestFullscreen) {
                      el.msRequestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                      el.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                      el.webkitRequestFullscreen(el.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.exitFullscreen) {
                      document.exitFullscreen();
                    } else if (document.msExitFullscreen) {
                      document.msExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                      document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                      document.webkitExitFullscreen();
                    }
                }
            } // end toggleFullScreen
            
        }; // end Slideshow object .....
        
    // make instances of Slideshow as needed
    [].forEach.call($slideshows, function (el) {
        $slideshow = Object.create(Slideshow);
        $slideshow.init(el, options);
    });
};

makeBSS('.bss-slides');/******** 100108 internalID:MTAwMTA4MQ *********/

///******** 100107 internalID:MTAwMTA3MQ *********/

// accordion functionality
	var acc = document.getElementsByClassName("acc");

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight){
			panel.style.maxHeight = null;
			} else {
			panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		});
	}/******** 100064 internalID:MTAwMDY0MQ *********/

var mndFileds=new Array('First Name', 'Email', 'Last Name');
 	  var fldLangVal=new Array('First Name', 'Email', 'Last Name');
		var name='';
		var email='';

 	  function checkMandatory() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads2051930000000136039'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{ 
				 alert('Please select a file to upload.'); 
				 fieldObj.focus(); 
				 return false;
				} 
			alert(fldLangVal[i] +' cannot be empty.'); 
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none.'); 
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   } 
			 } 
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
	     }
	   /******** 100058 internalID:MTAwMDU4MQ *********/

// JavaScript Document
// Written by Chris Converse
// for Lynda.com

$(document).ready(function() {
// begin Ready

	//...................................................
	// When the form changes
	$('#mapForm').change(function() {
	
		var selectedContinent = $('#mapForm option:selected').val();
		if (selectedContinent == 'ALL'){
			$('a.dot').slideDown(1000);
		}else{
			$('a.dot[continent = "'+selectedContinent+'"]').slideDown(1000);
			$('a.dot[continent != "'+selectedContinent+'"]').slideUp(1000);
		}
		
	});
	
	//...................................................
	// When a dot is clicked
	$('a.dot').click(function(){

		$('a.dot').removeClass('selected');
		$(this).addClass('selected');

		var city = '.item_detail#' + $(this).attr('city');
		var htmlCode = $(city).html();

		$('.detail_container').fadeOut(500, function(){
			$('.detail_container .item_detail').html(htmlCode);
			$('.detail_container').fadeIn(500);
		});

	});

// end Ready
});/******** 100059 internalID:MTAwMDU5MQ *********/

$(document).ready(function() {
	// When the form changes
	$('#mapForm').change(function(){
		var selectedBuilding = $('#mapForm option:selected').val();
		if(selectedBuilding=='ALL'){
			$('a.dot').show(1000);
		}else{
			$('a.dot[building*="'+selectedBuilding+'"]').show(1000);
			$('a.dot[building!="'+selectedBuilding+'"]').hide(1000);
		}
		$('a.dot').removeClass('selected');
		$('.submenu_detail').fadeOut(500);
	});

// Mouseover leaf display panel
$('a.dot').click(function(){
	has_class = $('a.dot').hasClass('selected');
	if (has_class) {
		$('a.dot').removeClass('selected');	
	} else {
		$(this).addClass('selected');
	}
	
	$('.submenu_detail').fadeOut(500);

	$(this).addClass('selected');
	var building='#' + $(this).attr('building');
	
	$(building).fadeOut(500, function(){
	$(building).fadeIn(500);
	});
});

// Exit display panel
$('.cancel').click(function () {
	$('a.dot').removeClass('selected');
	$('.submenu_detail').fadeOut(500);
});

// Click a link in a link panel dipslay the image information
$('a.p_link').click(function(){
	var feature='.feature_detail#'+$(this).attr('feature');
	var htmlCode=$(feature).html();
	$('.detail_container').fadeOut(300, function(){
		$('.detail_container .feature_detail').html(htmlCode);
		$('.detail_container').fadeIn(300);
	});
});


// end Ready
	
});
/******** 100055 internalID:MTAwMDU1MQ *********/

/* $(function() {        
        // Create Bridge carousel
        if ($('.alt_gallery').exists()) {
          $(".alt_gallery").flexslider ({
                  animation: "slide",
                  //smoothHeight: true,
                  slideshow: false,
                  useCSS: false,
                  controlNav: false,
                  selector: ".slides > li",
          });

          $('ul.flex-direction-nav').css('height', 0);
      }
});
*//******** 100050 internalID:MTAwMDUwMQ *********/

$(document).ready(function(){
	$.fn.exists = function(){return this.length>0;}

        // Create Bridge carousel
        if ($(window).width() < 767) { // mobile
          
          $('#content .alt_gallery ul.slides li img').each(function(i, e) {
            $(e).attr('src', $(e).data('mobile-src'));
            console.log(i, e);
          });
          
          if ($('.alt_gallery').exists()) {
          window.jpslider = new JpSlide('.alt_gallery', {
            slideOffset: 4,
            slideGap: 10
          });
          }
          $(window).resize(function() {
            window.jpslider.update();
          });
          
          
        }  else  { // desktop */
          if ($('.alt_gallery').exists()) {
              $(".alt_gallery").flexslider ({
                      animation: "slide",
                      //smoothHeight: true,
                      slideshow: false,
                      useCSS: false,
                      controlNav: false,
                      selector: ".slides > li"
              });
          }
          $('ul.flex-direction-nav').css('height', 0);
        };
});