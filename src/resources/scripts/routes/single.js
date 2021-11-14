import Swiper from 'swiper';

export default {
  init() {
    new Swiper('#swipercontainerS5', {
      spaceBetween: 20,
      slidesPerView: 'auto',
      pagination: {
        clickable: true,
      },
      breakpoints: {
        640: {
          spaceBetween: 28,
          slidesPerView: 2,
        },
        1280: {
          slidesPerView: 3,
        },
        1536: {
          slidesPerView: 5,
        },
      },
    });
  },
  finalize() {},
};
