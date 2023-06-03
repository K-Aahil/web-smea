var swiper = new Swiper(".majorSwiper", {
  slidesPerView: 4,
  spaceBetween: 16,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
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
