

jQuery(document).ready(function($) {

if (location.hash) {
    var hash = window.location.hash;

    window.onload = function() {
      // scrollTo(0,0);
        switch (hash){
            case "#_main":
            // goMain();
            break;
          case "#about_bcj":
            goAbout();
            break;
          case "#concerts":
            goConcerts();
            break;
          case "#friends_society":
            goFriendsSociety();
            break;
        }  
    }
}

window.onload = function() {

    resizeHandler();
}

    $(window).resize(function(){
        resizeHandler();
    });


 

    $(document).scrollsnap({
        snaps: 'section.snap',
        proximity: 0.99
    });

    $(window).on("scroll", function(e){
        // if($("body.home").length){
            window.requestAnimationFrame(scrollHandler);
        // }
    });   

function goMain(){
    var p = $("section#main").offset().top;
    $('html,body').animate({ scrollTop: p+500 }, 800, 'easeInOutCubic');
    return false;    
}
function goAbout(){
    var p = $("section#about").offset().top;
    if(pauseAnimComplete){
        $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
    }else{
        $('html,body').animate({ scrollTop: p+500 }, 800, 'easeInOutCubic');
    }
    return false;    
}
function goConcerts(){
    var p = $("#schedule").offset().top;
    $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
    return false;
}

function goFriendsSociety(){
    var p = $("section#support").offset().top;
    $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
    return false;
}

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
	onInit: function(slide){
                // Create a new instance of Headhesive
                var options = {
                    offset: '#main #schedule',
                    classes: {
                        clone:   'main-nav--clone',
                        stick:   'main-nav--stick',
                        unstick: 'main-nav--unstick'
                    }
                }
                var headhesive = new Headhesive('nav.main-nav', options);

                //スクロール　アバウト
                $(".menu-about").on('click', function () {
                    goAbout();
                });

                //スクロール　コンサート
                $(".menu-concerts").on('click', function () {
                    goConcerts();
                });

                //スクロール　サポート
                $(".menu-friends_society").on('click', function () {
                    goFriendsSociety();
                });

            }
});

var overviewCarouselReady = false;
$('.overview-holder-carousel').slick({
	slidesToShow: 4,
	slidesToScroll: 4,
	// centerMode: true,
	// centerPadding: '1px',
	arrows: true,
	speed: 500,
	infinite: false,
	// prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#FFFFFF" cx="20" cy="20" r="20"/><polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="24,29 12,20 24,11 		"/></g></svg></button>',
	// nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" ><g><circle opacity="0.7" fill="#FFFFFF" cx="20" cy="20.062" r="20"/><polyline fill="none" stroke="#000000" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062 		"/></g></svg></button>',
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
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '50px',
            arrows: false
          }
        }
      ],
      onInit: function(){ overviewCarouselReady = true; $(".overview-holder-carousel").removeClass("inactive"); }
});

var filtered = false;

$('.category-filter').on('click', function(){
  if(filtered === false) {
    var cat = $(this).data("category");
    $('.overview-holder-carousel').slickFilter(cat);
    $(this).removeClass("off");
    $('.category-filter').not(this).addClass("off");
    filtered = true;
  } else {
    $('.overview-holder-carousel').slickUnfilter();
    $('.category-filter').removeClass("off");
    filtered = false;
  }
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
var pauseAnimComplete = true;
var isAboutFocused = false;
            //$("#section-about .wrap").css("height","100vh");

var $aboutWrap = $("section#about .wrap")
    , $aboutBG = $("section#about.about-bg")
    , $aboutSection1 = $("section#about #about_bcj_1")
    , $aboutSection2 = $("section#about #about_bcj_2")
    , $aboutSection3 = $("section#about #about_bcj_3")
    , $aboutSection4 = $("section#about #about_bcj_4")
    , $aboutSection5 = $("section#about #about_bcj_5")
    , $supportSection1 = $("section#support #support_bcj_1");

var $sectionMain = $("section#main"), $sectionAbout = $("section#about"), $sectionSupport = $("section#support");


function resizeHandler(){
    winHeight = $window.height();
    $window.scroll();

    var introHeight = $("section#intro .content").height();
    if(introHeight>winHeight){
        $("section#intro .navigation nav").css("display","none");
    }else{
        $("section#intro .navigation nav").css("display","block");
    }
}


var aboutOffsetTop, supportOffsetTop, topvalue, diffAbout , diffSupport, aboutHeight, mainDy, mainTopPos, mainTopPosPrev, isAnimateActive=false;

        //     aboutHeight = $aboutWrap.height() + 2000;
        // $("#section-about").css("height",aboutHeight+"px");




function scrollHandler (){
        var $aboutBG = $("section#about .background");
        mainOffsetTop = $sectionMain.offset().top;
        aboutOffsetTop = $sectionAbout.offset().top;
        supportOffsetTop = $sectionSupport.offset().top;
        topvalue = $window.scrollTop();
        diffMain = mainOffsetTop - topvalue;
        diffAbout = aboutOffsetTop - topvalue;
        diffSupport = supportOffsetTop - topvalue;
        
        // mainTopPosPrev = mainTopPos;
        // mainTopPos = winHeight-diffMain;
        
        // if(mainTopPosPrev){
        //     mainDy = mainTopPos - mainTopPosPrev;
        //     console.log(diffMain +" : "+mainDy);

        //     if(mainDy>0&&diffMain>0&&diffMain<winHeight){
        //         if(!isAnimateActive){
        //             var p = $("section#main").offset().top;
        //             $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic',function(){
        //                 // Callback function
        //                 isAnimateActive=false;
        //             });
        //             isAnimateActive=true; 
        //         }
        //     }
        // }


        if(!pauseAnimComplete){
            aboutHeight = $("section#about .wrap").height() + 2000;
        }else{
            aboutHeight = $("section#about .wrap").height();
        }

        $sectionAbout.css("height",aboutHeight+"px");

        if(aboutOffsetTop<=topvalue)
        {
            if(!isAboutFocused){
                // $("nav.main-nav").addClass("small");
                $aboutBG.addClass("pause");
                if(!pauseAnimComplete){
                    $aboutWrap.addClass("pause");
                }
                isAboutFocused = true;
            }



        }else{
            if(isAboutFocused){
                // $("nav.main-nav").removeClass("small");
                $aboutBG.removeClass("pause");

                if(!pauseAnimComplete){
                    $aboutWrap.removeClass("pause");
                }
                isAboutFocused = false;
            }

        }
        var aboutTopPos = topvalue+winHeight - aboutOffsetTop;
        var bottomAbout = -diffAbout+winHeight-aboutHeight;
        // if(aboutTopPos>=0)
        // {
            // $("#about-background").css("top", (winHeight-aboutTopPos)*0.5+"px");
        // console.log(aboutTopPos);
        if(diffAbout>=0){
             $("#about-background").css({'-webkit-transform':'translate3d(0,'+ Math.round(diffAbout*0.5) +'px ,0)','transform':'translate3d(0,'+ Math.round(diffAbout*0.5) +'px ,0)' });
        }else{

            if(bottomAbout>=0){
                 $("#about-background").css({'-webkit-transform':'translate3d(0,'+ Math.round(-bottomAbout*0.5) +'px ,0)','transform':'translate3d(0,'+ Math.round(-bottomAbout*0.5) +'px ,0)' });

            }else{
                 $("#about-background").css({'-webkit-transform':'translate3d(0, 0, 0)','transform':'translate3d(0, 0 ,0)' });

            }
        }





        // }else{
        //     // $("#backgound #about-background").css("top","100%");

        // }

        // console.log(diffMain);
        if(diffMain>=0){
            $("#intro-background").removeClass("disable");
            $("#about-background").addClass("disable");

        }else{
            $("#intro-background").addClass("disable");
            $("#about-background").removeClass("disable");

        }




        var timelinePos = -diffAbout / aboutHeight;


        if(timelinePos>-0.05&&!$("#section-about .overlay").hasClass("focus")){
            $("section#about .row-header").addClass("focus");
            $("#about-background .overlay").addClass("focus");
        }

        // Fade in subtitle
        if(timelinePos>0&&!$aboutSection1.hasClass("focus")){
            // $aboutSection1.addClass("focus");
        }

        // Fade in text
        if(timelinePos>0.05&&!$aboutSection3.hasClass("focus")){
            // $aboutSection3.addClass("focus");
        }

        // Move text and fade in the video
        if(timelinePos>0.25&&!$aboutSection2.hasClass("focus")){
            // $aboutSection2.addClass("focus");
        }


        var ratioAboutTop = (1 - diffAbout/winHeight - 0.5) * 2;
        if(ratioAboutTop<0){ ratioAboutTop = 0; }
        if(ratioAboutTop>1){ ratioAboutTop = 1; }
        $("#about-background .overlay").css("opacity", ratioAboutTop);

        var ratioSupportTop = (1 - diffSupport/winHeight - 0.5) * 2;
        if(ratioSupportTop<0){ ratioSupportTop = 0; }
        if(ratioSupportTop>1){ ratioSupportTop = 1; }
        $("section#support .overlay").css("opacity", ratioSupportTop);
        // console.log(ratioSupportTop);

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


        // console.log(diffSupport);

        if(diffSupport <= winHeight){
            var supportPos =   diffSupport / winHeight;
            $("section#support .background").css({'-webkit-transform':'translate3d(0,'+ ((diffSupport*-0.5) ) +'px ,0)', 'transform':'translate3d(0,'+ ((diffSupport*-0.5) ) +'px ,0)' });
            if(supportPos<0.4&&!$supportSection1.hasClass("focus")){
                $supportSection1.addClass("focus");
                $("section#support .background .overlay").addClass("focus");
            }

        }

}





$.stellar({
    horizontalScrolling:false,
    positionProperty: 'transform',
    responsive:true,
    hideDistantElements: false,
    // horizontalOffset: 0,
    // verticalOffset: 0,
    // rest of function
});

}); /* end of as page load scripts */
