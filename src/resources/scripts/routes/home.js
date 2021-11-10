import Swiper from 'swiper';

function s3() {
  const targetEl = document.querySelector('#swiper-recentPost');
  const recentPost = new Swiper(targetEl, {
    spaceBetween: 70,
    touchEventsTarget: 'wrapper',
    effect: 'fade',
    allowTouchMove: false,
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: targetEl.querySelector('#next'),
      prevEl: targetEl.querySelector('#prev'),
    },
  });
}

export default {
  init() {
    s3();
  },
  finalize() {},
};
