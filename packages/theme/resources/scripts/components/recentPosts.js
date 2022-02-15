import Swiper from 'swiper';

function recentPosts() {

  new Swiper('#swipercontainerS5', {
    spaceBetween: 26,
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

  new Swiper('.card__hashtag-swiper', {
    slidesPerView: 'auto',
    spaceBetween: 8,
    touchEventsTarget: 'wrapper',
    allowTouchMove: true,
  });
}

export default recentPosts;
