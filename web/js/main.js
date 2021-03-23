$('ul li.menu-item').on('click', function(){
    $('ul li.menu-item').removeClass('menu-active'); 
    $(this).addClass('menu-active')
})

const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  slidesPerView: 3,
  initialSlide: 1,
  centeredSlides: true,
  spaceBetween: 40,
  allowTouchMove: false,
  slideToClickedSlide: true,
  loop: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    300: {
      slidesPerView: 1,
      centeredSlides: true
    },
    576: {
      slidesPerView: 2,
      spaceBetween: 50
    },
    1020: {
      slidesPerView: 3
    }
  }
});

var $preloader = $('.preloader');
var $backgrLoad = $('.loading-background');

swiper.on('slideChangeTransitionEnd', function () {
  var dayCards = $(".swiper-slide-active").data("date");
  console.log(dayCards);
  $.get({
    url: "/site/getcards",
    data: {date: dayCards},
    beforeSend: function() {
      $preloader.show();
      $backgrLoad.show();
    },
    success: function(data) {
      $(".events").html(data);
    },
    complete: function(){
      $preloader.hide();
      $backgrLoad.hide();
    }
  });
});