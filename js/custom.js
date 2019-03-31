$(document).on('ready', function () {
  "use strict";
  /*
  ==============================================================
      FIXED HEADER ON - OFF
  ==============================================================
  */
  if($('.header').length){
    $('.header').affix({
       offset: { top: 1, }
    });
  } 

  /*
    ============================================================
       Main Banner Javascript
    ============================================================
  */
    if($('.slider').length){
      $('.slider').slick({
        arrows:false,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        fade: true
      });
      $('.slider').on('init', function(e, slick) {
          var $firstAnimatingElements = $('.slick-slide:first-child').find('[data-animation]');
          doAnimations($firstAnimatingElements);
      });
      $('.slider').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
          var $animatingElements = $('.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
          doAnimations($animatingElements);
      });
      function doAnimations(elements) {
          var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
          elements.each(function() {
              var $this = $(this);
              var $animationDelay = $this.data('delay');
              var $animationType = 'animated ' + $this.data('animation');
              $this.css({
                  'animation-delay': $animationDelay,
                  '-webkit-animation-delay': $animationDelay
              });
              $this.addClass($animationType).one(animationEndEvents, function() {
                  $this.removeClass($animationType);
              });
          });
      }
    }
  /*
    =======================================================================
        PLATFORM DETECT
    =======================================================================
  */
  var htmlT    = $('html'),
    windowT    = $(window),
    ieDetect = false,
    mobileDetect = false,
    ua = window.navigator.userAgent,
    old_ie = ua.indexOf('MSIE '),
    new_ie = ua.indexOf('Trident/');

  if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)) {
    mobileDetect = true;
    htmlT.addClass('mobile');
  } else {
    htmlT.addClass('no-mobile');
  };   

  //IE Detect
  if ((old_ie > -1) || (new_ie > -1)) {
    ieDetect = true;
  };

  /*
    =======================================================================
        Parallax Effect Script
    =======================================================================
  */
  
    /*
    ============================================================
    JS NOT FOR MOBILE (PARALLAX, OPACITY SCROLL)
    ============================================================
    */
    if( mobileDetect == false ) {
      /*
      =======================================================================
      PARALLAX
      =======================================================================
      */
      if ( $('.parallax').length ){
        $.stellar({
          horizontalScrolling: true,
          responsive: true
        }); 
      }; 

    }//END JS NOT FOR MOBILE
  /*
  ==============================================================
     Project SLIDER SCRIPT
  ==============================================================
  */
    if($('.our_teacher_slider').length){
      $('.our_teacher_slider').slick({
        fade:false,
        dots:true,
        arrows:false,
        autoplay: true
      });
    }
    if($('section').length){
      $('section').children('.container').children('.section_heading').addClass('mt-minus-7');
    }
    if($('section').length){
      $('section').children('.section_heading').addClass('mt-minus-7');
    }

  /*
  ==============================================================
     FEATURE SLIDER SCRIPT
  ==============================================================
  */
 
    if($('.event_slider').length){
      $('.event_slider').slick({
      centerMode: true,
      dots:true,
      centerPadding: '0px',
      slidesToShow: 3,
      arrows: true,
      responsive: [
      {
          breakpoint: 1367,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 992,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1,
            centerMode: false
          }
        },
        {
          breakpoint: 481,
          settings: {
            arrows: false,
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
      ]
      });
    }
  /*
  ==============================================================
     Testimonial SLIDER SCRIPT
  ==============================================================
  */
    if($('.testimonial_slider').length){
      $('.testimonial_slider').slick({
        dots:false,
        fade:true,
        arrows:true
      });
    }
  /*
    ============================================================
       Counter Javascript
    ============================================================
  */
    if($('.counter').length){
      $('.counter').counterUp({
        delay: 10,
        time: 1000
      });
    }
  /*
    ============================================================
         popup Javascript
    ============================================================
  */

    if($('.popup-gallery').length){
      $('.popup-gallery').magnificPopup({
        delegate: '.popup-icon',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-3d-unfold',
        removalDelay: 500, //delay removal by X to allow out-animation
        callbacks: {
          beforeOpen: function() {
            // just a hack that adds mfp-anim class to markup 
             this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
            // this.st.mainClass = this.st.el.attr('data-effect');
          }
        },
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          /*titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          }*/
        }
      });
    }
  /*
  ==============================================================
     PROGRESS BAR SCRIPT
  ============================================================== 
  */
  if($('.progressbars').length){
    $(".progressbars").jprogress();
      $(".progressbars").jprogress({
        background: "#"
      });

      var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  }
  /*
  ============================================================
    Custom Select Menu Slider Javascript
  ============================================================
  */
  	if($('select').length){
	    $('select').each(function() {
	      var $this = $(this),
	      numberOfOptions = $(this).children('option').length;
	      $this.addClass('hidden');
	      $this.wrap('<div class="text"></div>');
	      $this.after('<div class="styledselect form-control"></div>');
	      var $styledselect = $this.next('div.styledselect');
	      $styledselect.text($this.children('option').eq(0).text());
	      var $list = $('<ul />', {
	          'class': 'options'
	      }).insertAfter($styledselect);
	      for (var i = 0; i < numberOfOptions; i++) {
	          $('<li />', {
	              text: $this.children('option').eq(i).text(),
	              rel: $this.children('option').eq(i).val()
	          }).appendTo($list);
	      }
	      var $listItems = $list.children('li');
	      $styledselect.click(function(e) {
	          e.stopPropagation();
	          $('div.styledselect.active').each(function() {
	              $(this).removeClass('active').next('ul.options').hide();
	          });
	          $(this).toggleClass('active').next('ul.options').toggle();
	      });
	      $listItems.click(function(e) {
	          e.stopPropagation();
	          $styledselect.text($(this).text()).removeClass('active');
	          $this.val($(this).attr('rel'));
	          $list.hide();
	      });
	      $(document).click(function() {
	          $styledselect.removeClass('active');
	          $list.hide();
	      });
	    });
	  }
  /*
    ============================================================
       Flickr Feed Javascript
    ============================================================
  */
    if($('#flickr_feeds').length){
      $('#flickr_feeds').jflickrfeed({
            limit: 8,
            qstrings: {
                id: '152623543@N06'
            },
            itemTemplate: '<li style="display:inline-block;width:auto;">' + '<a class="lightbox" href="{{image}}" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
        });
    }
  /*
  ============================================================== 
    DL Responsive Menu Javascript
  ============================================================== 
  */

    if(typeof($.fn.dlmenu) == 'function'){
      $('#mg_responsive_navigation').each(function(){
        $(this).find('.dl-submenu').each(function(){
        if( $(this).siblings('a').attr('href') && $(this).siblings('a').attr('href') != '#' ){
          var parent_nav = $('<li class="menu-item mg-parent-menu"></li>');
          parent_nav.append($(this).siblings('a').clone());
          
          $(this).prepend(parent_nav);
        }
        });
        $(this).dlmenu();
      });
    }
  /*
    ============================================================
         Masonry Gallery Javascript
    ============================================================
  */
  	
    if($('.masonry').length){
      $('.masonry').imagesLoaded(function() {
        $(".masonry").masonry();
      });
    }
    var masonrygallery = $('#items-grid2');
  	if (masonrygallery.length) {
  	  var fselector = 0,
  	    itemsGrid = $("#items-grid2");
  	  (function($) {
  	      "use strict";
  	      var isotopeMode;
  	      if (itemsGrid.hasClass("masonry")) {
  	          isotopeMode = "masonry";
  	      } else {
  	          isotopeMode = "fitRows"
  	      }
  	      itemsGrid.imagesLoaded(function() {
  	          itemsGrid.isotope({
  	              itemSelector: '.mix',
  	              layoutMode: isotopeMode,
  	              filter: fselector
  	          });
  	      });
  	      $(".port-filter").on('click', '.filter', function() {
  	          $(".filter").removeClass("active");
  	          $(this).addClass("active");
  	          fselector = $(this).attr('data-filter');
  	          itemsGrid.isotope({
  	              itemSelector: '.mix',
  	              layoutMode: isotopeMode,
  	              filter: fselector
  	          });
  	          return false;
  	      });
  	  })(jQuery);
  	}
  /*
  =======================================================================
      Map Javascript
  =======================================================================
  */
    if($('#map-canvas').length){
      google.maps.event.addDomListener(window, 'load', initialize);
    }
  /*
  =======================================================================
       Map Custom Style Javascript
  =======================================================================
*/
  function initialize() {
      "use strict";
      var MY_MAPTYPE_ID = 'custom_style';
      var map;
      var brooklyn = new google.maps.LatLng(40.6743890, -73.9455);
      var featureOpts = [
          {"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}

        ];
      var mapOptions = {
        zoom: 12,
        center: brooklyn,
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: MY_MAPTYPE_ID
      };

      map = new google.maps.Map(
        document.getElementById('map-canvas'),
        mapOptions
      );

      var styledMapOptions = {
        name: 'Custom Style'
      };

      var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

      map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
  }
});
