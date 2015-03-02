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
	return { width:x,height:y };
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

function adjustFooterPos(){
  console.log($("section#main").height()+" : "+$("#page-footer").height());
  if(($("body.single").length||$("body.page").length)&&$("section#main").height()+$("#page-footer").height()<$(window).height()){
    $("#page-footer").addClass("fixed");
  }else if($("#page-footer").hasClass("fixed")){
    $("#page-footer").removeClass("fixed");
  }
}
adjustFooterPos();

    $(window).resize(function(){
        adjustFooterPos();
        updateDetailPosition();
    });


    $(".news-item").on("click",function(){
      window.location.href = $(this).data("link");
    });


    //ページ内スクロール
    $("#scrolldownHome").on('click', function () {
        var p = $("section#main").offset().top;
        $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
        return false;
    });



    //ページ上部へ戻る
    $(document).on("click", ".go-top", function(){
        if($("section#main").length){
          var p = $("section#main").offset().top;
          $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
        }else{
          $('html,body').animate({ scrollTop: 0 }, 800, 'easeInOutCubic');
        }
        
        return false;
    });
    // $(".go-top").click(function () {
    //     var p = $("section#main").offset().top;
    //     $('html,body').animate({ scrollTop: p }, 800, 'easeInOutCubic');
    //     return false;
    // });



    $(document).on("click", '.mobile-button', function(){
        // console.log($(this));
        $( this ).siblings(".nav").slideToggle();
    });

    $(document).on("click", "li.menu-about > a", function(event){

      event.preventDefault();

      $(this).parent().toggleClass("show-sub").find(".sub-menu").slideToggle();
      // $(this).find(".sub-menu").toggleClass("show-sub");
      // $("#main >header").toggleClass("show-sub");
    });

  
/**
*
* Ajax for Guest Artists
*
**/
    $(document).on("click", '.close', function(event){
        event.preventDefault();
        closeContent();
        closeConcertContent();
    });

    var currentItemID = null;
    $(document).on("click",".thumb.item",function(){

      var $this = $(this);
      var id = $this.data("id");
      var listItems = $( ".thumb.item" );
      if(id!=currentItemID){

        if(currentItemID){

          $(".item.content").slideUp("fast",function(){
            $(this).remove();
            showContent($this);
          });

        }else{
          showContent($this);
        }

        listItems.removeClass("active");
        
        currentItemID = id
        

      }
      

      // append elements to container
      // var elem = $('<div class="item content"><div class="wrap"><h2>Joanne Lunn</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas enim reprehenderit pariatur expedita</div></div>');
      // $(this).after( elem );
      // // add and lay out newly appended elements
      // $(".js-packery").packery( 'addItems', elem );
      //  $(".js-packery").packery();


      // $(this).next().toggleClass("active");
      // if($(this).next().hasClass("active")){
      //  $(this).next().css("height","200px");
      // }else{
      //  $(this).next().css("height","0px");
      // }
      
      // $(this).next().find(".inner").slideToggle("fast",function(){
      //  $(".js-packery").packery();
      // });
      

      
      // $(this).next().slideToggle('fast',function(){
      //  $(".js-packery").packery();
      // });
      
    });



    var listItems = $( ".thumb.item" );
    var numCol = Math.round(100 / (($(listItems[0]).width() / $(listItems[0]).parent().width())*100));
    var position;

    function showContent($this){
      // console.log( parseInt(100 / (($(listItems[0]).width() / $(listItems[0]).parent().width())*100)) );
      position = listItems.index($this);
      var col = position%numCol;
      var row = parseInt(position/numCol);
      var id = $this.data("id");
      var $loading = $("<div class='loading' />").append("<div class='throbber throbber_medium'/>");

      /** Ajax Call */
      $.ajax({
 
        cache: false,
        timeout: 8000,
        url: ajax_object.ajaxurl,
        type: "POST",
        data: ({ action:'get_content', id:id }),
 
        beforeSend: function() {          
          // $( '#ajax-response' ).html( 'Loading' );
          $this.prepend($loading);
          // $loading.fadeIn();
        },
 
        success: function( data, textStatus, jqXHR ){
          var listItems = $( ".thumb.item" );
          var $ajax_response = $( data );
          listItems.eq(Math.min((row+1)*numCol-1, listItems.length-1)).after($ajax_response);
          

          $ajax_response.slideDown(800, function(){
            $loading.fadeOut("fast",function(){
              $loading.detach();
            });
            $this.addClass("active");
            adjustFooterPos();
            var p = $this.offset().top;
            $('html,body').animate({ scrollTop: p }, 200, 'easeInOutCubic');

            $('.overview-holder-carousel').slick({
              slidesToShow: 4,
              slidesToScroll: 4,
              arrows: true,
              speed: 500,
              infinite: false,
              prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" class="bcj-btn-white"><g><circle stroke="#FFFFFF" fill="none" cx="20" cy="20" r="19.5"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="24,29 12,20 24,11"/></g></svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" class="bcj-btn-white"><g><circle stroke="#FFFFFF" fill="none" cx="20" cy="20" r="19.5"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062"/></g></svg></button>',
                 responsive: [
                    {
                      breakpoint: 1124,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        centerMode: false,
                        centerPadding: '0px',
                        arrows: true
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        centerMode: false,
                        centerPadding: '0px',
                        arrows: true
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

          });
                                
 
        },
 
        error: function( jqXHR, textStatus, errorThrown ){
          console.log( 'The following error occured: ' + textStatus, errorThrown ); 
        },
 
        complete: function( jqXHR, textStatus ){
        }
 
      });
    }
    function updateDetailPosition(){
      var newNumCol = Math.round(100 / (($(listItems[0]).width() / $(listItems[0]).parent().width())*100));
      if($(".item.content").length&&numCol!=newNumCol){
        numCol = newNumCol;
        var col = position%numCol;
        var row = parseInt(position/numCol);
        listItems.eq(Math.min((row+1)*numCol-1, listItems.length-1)).after($(".item.content"));
      }
    }
    function closeContent(){
      $(".item.content").slideUp("fast",function(){
            $(this).remove();
      });

      listItems.removeClass("active");
        
      currentItemID = null;
    }


/**
*
* Ajax for Concerts
*
**/
var currentConcertItemID = null;
  var listConcertItems = $( ".overview.item" );

    $(document).on("click",".overview.item",function(){
      var $this = $(this);
      var id = $this.data("id");
      if(id!=currentConcertItemID){

        if(currentConcertItemID){

          $(".item.content").slideUp("fast",function(){
            $(this).remove();
            showConcertContent($this);
          });

        }else{
          showConcertContent($this);
        }

        listConcertItems.removeClass("active");
        
        currentConcertItemID = id
        

      }
    });

    function showConcertContent($this){
      // console.log( parseInt(100 / (($(listItems[0]).width() / $(listItems[0]).parent().width())*100)) );
      var id = $this.data("id");
      var $loading = $("<div class='loading' />").append("<div class='throbber throbber_medium'/>");

      /** Ajax Call */
      $.ajax({
 
        cache: false,
        timeout: 8000,
        url: ajax_object.ajaxurl,
        type: "POST",
        data: ({ action:'get_content', id:id }),
 
        beforeSend: function() {          
          // $( '#ajax-response' ).html( 'Loading' );
          $this.prepend($loading);
          // $loading.fadeIn();
        },
 
        success: function( data, textStatus, jqXHR ){
 
          var $ajax_response = $( data );
          $this.after($ajax_response);
          

          $ajax_response.slideDown(800, function(){
            $loading.fadeOut("fast",function(){
              $loading.detach();
            });
            $this.addClass("active");
            adjustFooterPos();
            var p = $this.offset().top;
            $('html,body').animate({ scrollTop: p }, 200, 'easeInOutCubic');

            $('.overview-holder-carousel').slick({
              slidesToShow: 4,
              slidesToScroll: 4,
              arrows: true,
              speed: 500,
              infinite: false,
              prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" class="bcj-btn-white"><g><circle stroke="#FFFFFF" fill="none" cx="20" cy="20" r="19.5"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="24,29 12,20 24,11"/></g></svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" class="bcj-btn-white"><g><circle stroke="#FFFFFF" fill="none" cx="20" cy="20" r="19.5"/><polyline fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="16,11.062 28,20.062 16,29.062"/></g></svg></button>',
                 responsive: [
                    {
                      breakpoint: 1124,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        centerMode: false,
                        centerPadding: '0px',
                        arrows: true
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        centerMode: false,
                        centerPadding: '0px',
                        arrows: true
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

          });
                                
 
        },
 
        error: function( jqXHR, textStatus, errorThrown ){
          console.log( 'The following error occured: ' + textStatus, errorThrown ); 
        },
 
        complete: function( jqXHR, textStatus ){
        }
 
      });
    }

    function closeConcertContent(){
      $(".item.content").slideUp("fast",function(){
            $(this).remove();
      });

      listConcertItems.removeClass("active");
        
      currentConcertItemID = null;
    }

    $("html").on("click", function(){
      $(".filter .option >li").each(function( index ) {
        if($(this).hasClass("openDrop")){ $(this).removeClass("openDrop"); }        
      });
    });
    $(document).on("click", ".filter .option >li .label", function(event){
      event.stopPropagation();
      $(".filter .option >li .label").not(this).parent().removeClass("openDrop");
      $(this).parent().toggleClass("openDrop");
    });

    $(".page-template-template-concerts .filter .option >li .choices >li").on("click", function(){
      $(".filter .option >li.subscription .label").html(translated_text.subscription_concert).parent().removeClass("active");
      $(".filter .option >li.location .label").html(translated_text.location).parent().removeClass("active");
      $(".filter .option >li.repertoire .label").html(translated_text.repertoire).parent().removeClass("active");
      $(this).parent().parent().find(".label").html($(this).html()).parent().addClass("active");

      var $loading = $("<div class='loading' />").append("<div class='throbber throbber_medium'/>");
      var $content = $("#concerts");
      var tax = $(this).data("tax");
      var id = $(this).data("id");
      /** Ajax Call */
      $.ajax({
 
        cache: false,
        timeout: 8000,
        url: ajax_object.ajaxurl,
        type: "POST",
        data: ({ action:'get_concerts', taxonomy: tax, id: id}),
 
        beforeSend: function() {          
          // $( '#ajax-response' ).html( 'Loading' );
          $content.prepend($loading);
          // $loading.fadeIn();
        },
 
        success: function( data, textStatus, jqXHR ){
          $loading.fadeOut("fast",function(){
            $loading.detach();
          });
          var $ajax_response = $( data );
          $content.html( $ajax_response );
                     
 
        },
 
        error: function( jqXHR, textStatus, errorThrown ){
          console.log( 'The following error occured: ' + textStatus, errorThrown ); 
        },
 
        complete: function( jqXHR, textStatus ){
        }    

      });
    });
    
    $(".page-template-template-concerts .filter .option .dismiss").on("click", function(event){
      event.stopPropagation();
      $(".filter .option >li.subscription .label").html(translated_text.subscription_concert).parent().removeClass("active");
      $(".filter .option >li.location .label").html(translated_text.location).parent().removeClass("active");
      $(".filter .option >li.repertoire .label").html(translated_text.repertoire).parent().removeClass("active");

      var $loading = $("<div class='loading' />").append("<div class='throbber throbber_medium'/>");
      var $content = $("#concerts");
      /** Ajax Call */
      $.ajax({
 
        cache: false,
        timeout: 8000,
        url: ajax_object.ajaxurl,
        type: "POST",
        data: ({ action:'get_concerts', taxonomy: 'all'}),
 
        beforeSend: function() {          
          // $( '#ajax-response' ).html( 'Loading' );
          $content.prepend($loading);
          // $loading.fadeIn();
        },
 
        success: function( data, textStatus, jqXHR ){
          $loading.fadeOut("fast",function(){
            $loading.detach();
          });
          var $ajax_response = $( data );
          $content.html( $ajax_response );
                     
 
        },
 
        error: function( jqXHR, textStatus, errorThrown ){
          console.log( 'The following error occured: ' + textStatus, errorThrown ); 
        },
 
        complete: function( jqXHR, textStatus ){
        }    

      });
    });

/**
*
* Discography Filter
*
**/
    $(document).on("click",".post-type-archive-discography .filter .option >li .choices >li", function(){
      // $(".filter .option >li.composer .label").html("作曲家").parent().removeClass("active");

      var $loading = $("<div class='loading' />").append("<div class='throbber throbber_medium'/>");
      var $content = $("#discography");
      var $contentWrap = $(".discography-wrapper");
      var tax = $(this).data("tax");
      var id = $(this).data("id");

      $(this).parent().parent().find(".label").html($(this).html()).parent().addClass("active");
      
      /** Ajax Call */
      $.ajax({
 
        cache: false,
        timeout: 8000,
        url: ajax_object.ajaxurl,
        type: "POST",
        data: ({ action:'get_discography', taxonomy: tax, id: id}),
 
        beforeSend: function() {          
          // $( '#ajax-response' ).html( 'Loading' );
          $contentWrap.prepend($loading);
          // $loading.fadeIn();
        },
 
        success: function( data, textStatus, jqXHR ){
          $loading.fadeOut("fast",function(){
            $loading.detach();
          });
          var $ajax_response = $( data );
          $content.html( $ajax_response );
                     
 
        },
 
        error: function( jqXHR, textStatus, errorThrown ){
          console.log( 'The following error occured: ' + textStatus, errorThrown ); 
        },
 
        complete: function( jqXHR, textStatus ){
        }    

      });

      if(!$(this).parent().parent().hasClass("category")){
        $(".filter .option >li.composer").data("id",id);
        $.ajax({
          dataType: "json",
          url: ajax_object.ajaxurl,
          data: ({ action:'get_category', taxonomy: tax, id: id}),
          beforeSend: function() {          
            $(".filter .option >li.category").remove();
          },
          success: function( data, textStatus, jqXHR ){
            if(data.length>0){
              var items = [];
              $.each( data, function( key, val ) {
                items.push( "<li data-id='" + val.term_id + "' data-tax='discography_category'>" + val.name + "</li>" );
              });
             
             var $subcategory = $("<li/>", {"class": "category", html: '<span class="label">カテゴリー</span><span class="arrow"><svg width="20px" height="14px" ><polyline fill="none" stroke="#000" stroke-miterlimit="10" points="15,2 8,10 1,2 "/></svg></span><span class="dismiss"><svg x="0px" y="0px" width="15px" height="15px"><line fill="none" stroke="#000" x1="14" y1="1" x2="1" y2="14"/><line fill="none" stroke="#000" x1="14" y1="14" x2="1" y2="1"/></svg></span>'});
              $( "<ul/>", {
                "class": "choices",
                html: items.join( "" )
              }).appendTo( $subcategory );
              $subcategory.appendTo(".filter .option");
            }
            
                       
   
          },
          error: function( jqXHR, textStatus, errorThrown ){
            console.log( 'The following error occured: ' + textStatus, errorThrown ); 
          },
   
          complete: function( jqXHR, textStatus ){
          }  
        });
      }
      
      
    });
    
    $(document).on("click", ".post-type-archive-discography .filter .option .dismiss", function(event){
      event.stopPropagation();
      var $loading = $("<div class='loading' />").append("<div class='throbber throbber_medium'/>");
      var $content = $("#discography");
      var $contentWrap = $(".discography-wrapper");
      currentItemID = null;
      if(!$(this).parent().hasClass("category")){
        $(".filter .option >li.composer .label").html(translated_text.composer).parent().removeClass("active");
        $(".filter .option >li.category").remove();

        /** Ajax Call */
        $.ajax({
   
          cache: false,
          timeout: 8000,
          url: ajax_object.ajaxurl,
          type: "POST",
          data: ({ action:'get_discography', taxonomy: 'all'}),
   
          beforeSend: function() {          
            // $( '#ajax-response' ).html( 'Loading' );
            $contentWrap.prepend($loading);
            // $loading.fadeIn();
          },
   
          success: function( data, textStatus, jqXHR ){
            $loading.fadeOut("fast",function(){
              $loading.detach();
            });
            var $ajax_response = $( data );
            $content.html( $ajax_response );
                       
   
          },
   
          error: function( jqXHR, textStatus, errorThrown ){
            console.log( 'The following error occured: ' + textStatus, errorThrown ); 
          },
   
          complete: function( jqXHR, textStatus ){
          }    

        });
      }else{
        $(".filter .option >li.category .label").html("カテゴリー").parent().removeClass("active");
        var tax = "discography_category";
        var id = $(".filter .option >li.composer").data("id");
        $.ajax({
   
          cache: false,
          timeout: 8000,
          url: ajax_object.ajaxurl,
          type: "POST",
          data: ({ action:'get_discography', taxonomy: tax, id: id}),
   
          beforeSend: function() {          
            // $( '#ajax-response' ).html( 'Loading' );
            $contentWrap.prepend($loading);
            // $loading.fadeIn();
          },
   
          success: function( data, textStatus, jqXHR ){
            $loading.fadeOut("fast",function(){
              $loading.detach();
            });
            var $ajax_response = $( data );
            $content.html( $ajax_response );
                       
   
          },
   
          error: function( jqXHR, textStatus, errorThrown ){
            console.log( 'The following error occured: ' + textStatus, errorThrown ); 
          },
   
          complete: function( jqXHR, textStatus ){
          }    

        });
      }
    });
}); /* end of as page load scripts */