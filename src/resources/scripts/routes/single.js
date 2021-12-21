import Swiper from 'swiper';
import share from '../components/share';

export default {
  init() {
    share();

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

    const youtubue = document.querySelectorAll("iframe[src*='youtube.com']");
    if (youtubue) {
      youtubue.forEach((y) => {
        y.parentElement.classList.add('youtubeifrmae');
      });
    }
  },
  finalize() {},
};
