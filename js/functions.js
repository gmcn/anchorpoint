( function($) {

  /**
   * Match Height (Including Safari onload fix)
   */
  // function startMatchHeight() {
  //   $('.matchheight').matchHeight();
  // }
  // window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

    $("#closeSimple").click(function() {
    $("#myVideo")[0].pause();
    // $("#myVideo").get(0).pause();
    return false;
});

$( document ).ready(function() {


  var ppp = 3; // Post per page
  var pageNumber = 3;


  function load_posts(){
      pageNumber++;
      var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
      $.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = $(data);
              if($data.length){
                  $("#ajax-posts").append($data);
                  $("#more_posts").attr("disabled",false);
              } else{
                  $("#more_posts").attr("disabled",true);
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      return false;
  }

  $("#more_posts").on("click",function(){ // When btn is pressed.
      $("#more_posts").attr("disabled",true); // Disable the button, temp.
      load_posts();
      $(this).insertAfter('#ajax-posts'); // Move the 'Load More' button to the end of the the newly added posts.
  });


});



} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#EC6156",
      "text": "#fff"
    },
    "button": {
      "background": "#fff",
      "text": "#EC6156",
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});

$( ".dropdown-menu" ).css('margin-top',0);
$( ".dropdown" )
  .mouseover(function() {
    $( this ).addClass('show').attr('aria-expanded',"true");
    $( this ).find('.dropdown-menu').addClass('show');
    $( this ).find('.dropdown-menu').addClass('show');
  })
  .mouseout(function() {
    $( this ).removeClass('show').attr('aria-expanded',"false");
    $( this ).find('.dropdown-menu').removeClass('show');
  });

var servicesslider = new Swiper(".servicescopy", {
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 500,
  loop: true,
  autoHeight: true,
  // autoplay: {
     // delay: 2500,
     // pauseOnMouseEnter: true,
   // },
   navigation: {
     nextEl: ".slider__nav-btn--next",
     prevEl: ".slider__nav-btn--prev",
   },
  // pagination: {
  //       el: ".swiper-pagination",
  //     },
  });

var vertreview = new Swiper(".vertreview", {
      // direction: "vertical",
      loop: true,
      speed: 1500,
      autoHeight: true,
      autoplay: {
         delay: 2500,
         pauseOnMouseEnter: true,
       },
    });

var horizontal_gallery = new Swiper(".horizontal_gallery", {
        slidesPerView: 4,
        spaceBetween: 5,
        // slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".slider__nav-btn--next",
          prevEl: ".slider__nav-btn--prev",
        },
      });

var sliderNews4 = new Swiper('.__js_slider-awards', {
    slidesPerView: 1,
    speed: 300,
    loop: true,
    navigation: {
        prevEl: '.arrow-square--prev',
        nextEl: '.arrow-square--next'
    },
    pagination: {
        el: '.slide-counter',
        type: 'fraction',
    },
});

var sliderNews3 = new Swiper('.__js_slider-news-3', {
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 300,
    loop: false,
    navigation: {
        prevEl: '.news-sb-page__related-arrow--prev',
        nextEl: '.news-sb-page__related-arrow--next'
    },
    breakpoints: {
        992: {
            slidesPerView: 3,
            spaceBetween: 50
        },
        768: {
            slidesPerView: 2
        }
    }
});

var sliderNews2 = new Swiper('.__js_slider-news-2', {
    slidesPerView: 1,
    loop: true,
    speed: 600,
    navigation: {
        prevEl: '.arrow-square--prev',
        nextEl: '.arrow-square--next'
    },
    breakpoints: {
        1560: {
            slidesPerView: 3
        },
        1200: {
            slidesPerView: 2
        }
    }
});

var sliderNews = new Swiper('.__js_slider-news', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        prevEl: '.slider__nav-btn--prev',
        nextEl: '.slider__nav-btn--next'
    },
    loop: true,
    speed: 300
});

var mySwiper = new Swiper('.__js_hero-banner', {
    slidesPerView: 1,
    loop: false,
    pagination: {
        el: '.swiper-pagination',
    },
});

var mySwiper = new Swiper('.__js_testimonials-carousel', {
    slidesPerView: 'auto',
    spaceBetween: 60,
    loop: true,
    navigation: {
        nextEl: '.testimonials__nav-btn--next',
        prevEl: '.testimonials__nav-btn--prev',
    },
});

// hero slider
var mySwiperhero = new Swiper('.__js_slider-hero', {
    slidesPerView: 1,
    effect: "fade",
    loop: true,
    speed: 2500,
    autoplay: {
       delay: 2500
     }
});

// OLD hero slider
// var mySwiperhero = new Swiper('.__js_slider-hero', {
//     slidesPerView: 1,
//     effect: "fade",
//     loop: true,
//     speed: 3000,
//     autoplay: {
//        delay: 2500,
//        pauseOnMouseEnter: true,
//      },
//     navigation: {
//         nextEl: '.swiper-hero-button-next',
//         // prevEl: '.swiper-button-prev',
//     },
//     pagination: {
//         el: '.slide-counter',
//     },
// });

// approach slider
var mySwiper = new Swiper('.__js_slider-approach', {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    speed: 1500,
    autoplay: {
       delay: 2500,
       pauseOnMouseEnter: true,
     },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        }
    },
    pagination: {
          el: ".swiper-pagination",
        },
    navigation: {
        nextEl: '.swiper-button-next',
        // prevEl: '.swiper-button-prev',
    }
});

var mySwiper = new Swiper('.__js_slider-single', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loop: true,
    speed: 2000,
    autoplay: {
       delay: 3000,
       pauseOnMouseEnter: true,
     },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.slider__nav-btn--next',
        prevEl: '.slider__nav-btn--prev',
    }
});

var thumbsForLatestProjects = new Swiper('.__js_slider-thumbs', {
    slidesPerView: 3,
    loop: false,
    freeMode: true,
    loopedSlides: 3,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        }
    }
});
var latestProjectsSlider = new Swiper('.__js_slider-simple', {
    slidesPerView: 1,
    loop: false,
    thumbs: {
        swiper: thumbsForLatestProjects,
    },
    navigation: {
        nextEl: '.slider__nav-btn--next',
        prevEl: '.slider__nav-btn--prev',
    }
});
var thHeroSliderThumbs = new Swiper('.__js_th-hero-slider-thumbs', {
    slidesPerView: 'auto',
    loop: false,
    freeMode: true,
    loopedSlides: 3,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
});
var thHeroSliderCurrent = document.querySelector('.__js_th-hero-slider-current');
var thHeroSliderTotal = document.querySelector('.__js_th-hero-slider-total');
var thHeroSliderSlidesCount = document.querySelectorAll('.__js_th-hero-slider .th-hero-slider__slide').length;
var thHeroSlider = new Swiper('.__js_th-hero-slider', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    speed: 800,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    thumbs: {
        swiper: thHeroSliderThumbs
    },
    navigation: {
        nextEl: '.th-hero-slider__nav-btn--next',
        prevEl: '.th-hero-slider__nav-btn--prev',
    },
    on: {
        init: function() {
            if (thHeroSliderCurrent && thHeroSliderTotal) {
                thHeroSliderCurrent.textContent = this.realIndex + 1;
                thHeroSliderTotal.textContent = thHeroSliderSlidesCount;
            }
            console.log(this.slides);
        },
        slideChange: function() {
            if (thHeroSliderCurrent) {
                thHeroSliderCurrent.textContent = this.realIndex + 1;
            }
        }
    },
});

var mySwiper = new Swiper('.__js_slider-carousel', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
var modernCarousel = new Swiper('.__js_slider-carousel-double', {
    slidesPerView: 1,
    loop: false,
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 70,
        },
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
});
