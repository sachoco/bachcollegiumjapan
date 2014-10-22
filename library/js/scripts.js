/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y }
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/*
 * Put all your regular jQuery in here.
*/

jQuery(document).ready(function($) {

  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();

// Create a new instance of Headhesive
var options = {
    offset: '.upcoming',
    classes: {
        clone:   'main-nav--clone',
        stick:   'main-nav--stick',
        unstick: 'main-nav--unstick'
    }
}
var headhesive = new Headhesive('nav.main-nav', options);


$('.slick-slides').slick({
	autoplay: true,
	autoplaySpeed: 7000,
	arrows: true,
	dots: true,
	infinite: true,
	pauseOnHover: true,
	centerMode: true,
	centerPadding: '1px',
	speed: 1000,
	prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#000000" cx="20" cy="20" r="20"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="24,29 12,20 24,11"/></g></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#000000" cx="20" cy="20.062" r="20"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062"/></g></svg></button>',
	// onAfterChange: function(slide){ console.log(slide.currentSlide); },
	// onInit: function(slide){ console.log(slide.currentSlide); }
});

$('.overview-holder-carousel').slick({
	slidesToShow: 4,
	slidesToScroll: 4,
	// centerMode: true,
	// centerPadding: '1px',
	arrows: true,
	speed: 500,
	infinite: false,
	prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#FFFFFF" cx="20" cy="20" r="20"/><polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="24,29 12,20 24,11 		"/></g></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#FFFFFF" cx="20" cy="20.062" r="20"/><polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062 		"/></g></svg></button>',
	prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#000000" cx="20" cy="20" r="20"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="24,29 12,20 24,11"/></g></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#000000" cx="20" cy="20.062" r="20"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062"/></g></svg></button>',
	// onAfterChange: function(slide){ console.log(slide.currentSlide); },
	// onInit: function(slide){ console.log(slide.currentSlide); }
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
          ]
});

$('.cd-holder-carousel').slick({
	slidesToShow: 4,
	slidesToScroll: 4,
	// centerMode: true,
	// centerPadding: '1px',
	arrows: true,
	speed: 500,
	infinite: false,
	prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#FFFFFF" cx="20" cy="20" r="20"/><polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="24,29 12,20 24,11 		"/></g></svg></button>',
	nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#FFFFFF" cx="20" cy="20.062" r="20"/><polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062 		"/></g></svg></button>',
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 481,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }
          ]
});


var $window = $(window);
var winHeight = $window.height();
var pauseAnimComplete = false;
var isAboutFocused = false;
            //$("#section-about .wrap").css("height","100vh");

            var $aboutWrap = $("#section-about .wrap")
                , $aboutBG = $("#section-about .about-bg")
                , $aboutSection1 = $("#section-about #about_bcj_1")
                , $aboutSection2 = $("#section-about #about_bcj_2")
                , $aboutSection3 = $("#section-about #about_bcj_3")
                , $aboutSection4 = $("#section-about #about_bcj_4")
                , $aboutSection5 = $("#section-about #about_bcj_5")
                , $supportSection1 = $("#section-support #support_bcj_1");
function resizeHandler(){
        winHeight = $window.height();
        $window.scroll();
}


var aboutOffsetTop, supportOffsetTop, topvalue, diffAbout , diffSupport, aboutHeight;

        //     aboutHeight = $aboutWrap.height() + 2000;
        // $("#section-about").css("height",aboutHeight+"px");


function scrollHandler (){
       aboutOffsetTop = $("#section-about").offset().top;
        supportOffsetTop = $("#section-support").offset().top;
        topvalue = $window.scrollTop();
        diffAbout = aboutOffsetTop - topvalue;
        diffSupport = supportOffsetTop - topvalue;

        if(!pauseAnimComplete){
            aboutHeight = $("#section-about .wrap").height() + 2000;
        }else{
            aboutHeight = $("#section-about .wrap").height();
        }

        $("#section-about").css("height",aboutHeight+"px");

        if(aboutOffsetTop<=topvalue)
        {
            if(!isAboutFocused){
                $("nav.main-nav").addClass("small");
                $aboutBG.addClass("pause");
                if(!pauseAnimComplete){
                    $aboutWrap.addClass("pause");
                }
                isAboutFocused = true;
            }



        }else{
            if(isAboutFocused){
                $("nav.main-nav").removeClass("small");
                $aboutBG.removeClass("pause");

                if(!pauseAnimComplete){
                    $aboutWrap.removeClass("pause");
                }
                isAboutFocused = false;
            }

        }

        var bottomAbout = -diffAbout+winHeight-aboutHeight;

        if(diffAbout>=0){
            $aboutBG.css({'-webkit-transform':'translate3d(0,'+ Math.min(diffAbout*-0.8, 0) +'px ,0)','transform':'translate3d(0,'+ Math.min(diffAbout*-0.8, 0) +'px ,0)' });
            // $aboutBG.css({'background-position':'center '+ Math.min(diffAbout*-0.8, 0) +'px'});
        }else if(bottomAbout>=0){
            $aboutBG.css({'-webkit-transform':'translate3d(0,'+ Math.min(bottomAbout*-0.8, 0) +'px ,0)','transform':'translate3d(0,'+ Math.min(bottomAbout*-0.8, 0) +'px ,0)'  });
             // $aboutBG.css({'background-position':'center '+ Math.min(bottomAbout*-0.8, 0) +'px'});

        }



        var timelinePos = -diffAbout / aboutHeight;


        if(timelinePos>-0.05&&!$("#section-about .overlay").hasClass("focus")){
            $("#section-about .row-header").addClass("focus");
            $("#section-about .overlay").addClass("focus");
        }

        // Fade in subtitle
        if(timelinePos>0&&!$aboutSection1.hasClass("focus")){
            $aboutSection1.addClass("focus");
        }

        // Fade in text
        if(timelinePos>0.05&&!$aboutSection3.hasClass("focus")){
            $aboutSection3.addClass("focus");
        }

        // Move text and fade in the video
        if(timelinePos>0.25&&!$aboutSection2.hasClass("focus")){
            $aboutSection2.addClass("focus");
        }



        // Unset the pause effect

        if(diffAbout < -2000){
            if($aboutWrap.hasClass("pause")){
                // $aboutWrap.css({'position':'absolute','top':'0px'});
                $window.scrollTop(aboutOffsetTop);
                $aboutWrap.removeClass("pause");
                pauseAnimComplete = true;
            }
        }

        // Move text and fade in the video
        if(pauseAnimComplete&&timelinePos>0.2&&!$aboutSection4.hasClass("focus")){
            $aboutSection4.addClass("focus");
        }
        // Move text and fade in the video
        if(pauseAnimComplete&&timelinePos>0.3&&!$aboutSection5.hasClass("focus")){
            $aboutSection5.addClass("focus");
        }




        if(diffSupport <= winHeight){
            var supportPos =   diffSupport / winHeight;
            $("#section-support .support-bg").css({'-webkit-transform':'translate3d(0,'+ ((diffSupport*-0.5) - 280) +'px ,0)', 'transform':'translate3d(0,'+ ((diffSupport*-0.5) - 280) +'px ,0)' });
            if(supportPos<0.4&&!$supportSection1.hasClass("focus")){
                $supportSection1.addClass("focus");
                $("#section-support .overlay").addClass("focus");
            }

        }

}




    $(window).resize(function(){
        resizeHandler();
    });



    $(window).on("scroll", function(e){

        window.requestAnimationFrame(scrollHandler);


    });

    //ページ内スクロール
    $("#scrolldownHome").on('click', function () {
        var p = $("#container").offset().top;
        $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
        return false;
    });



    //ページ上部へ戻る
    $(".btn_top").click(function () {
        $('html,body').animate({ scrollTop: 0 }, 'fast');
        return false;
    });







}); /* end of as page load scripts */
