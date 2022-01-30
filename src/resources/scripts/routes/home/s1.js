import Swiper from 'swiper';

export default () => {
  const targetEl = document.querySelector('#swiper-hero');
  new Swiper(targetEl, {
    touchEventsTarget: 'wrapper',
    effect: 'fade',
    allowTouchMove: true,
    loop: true,
    fadeEffect: {
      crossFade: true,
    },
  });
};
