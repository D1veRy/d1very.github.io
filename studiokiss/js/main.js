const swiper = new Swiper(".gallery__swiper", {
  spaceBetween: 30,
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

const main__service__swiper = new Swiper(".main__service__swiper", {
  spaceBetween: 30,
  slidesPerView: 2,
  loop: true,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false,
  },
});

const service__swiper = new Swiper(".service__swiper", {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});