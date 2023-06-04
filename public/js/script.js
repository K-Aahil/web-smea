var swiper = new Swiper(".majorSwiper", {
  slidesPerView: 4,
  spaceBetween: 16,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
});
var swiper = new Swiper(".majorSwiperMobile", {
  spaceBetween: 30,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});
var swiper = new Swiper(".eXSwiper", {
  slidesPerView: 5,
  spaceBetween: 20,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".eXSwiperMobile", {
  slidesPerView: 2,
  spaceBetween: 10,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
});

var swiper = new Swiper(".slider", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  mousewheel: {
    invert: false,
  },
  pagination: {
    el: ".slide-pagination",
    clickable: true,
  },
});
