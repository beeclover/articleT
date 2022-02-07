import Swiper from 'swiper';

export default () => {
  const targetEl = document.querySelector('#swiper-hashtagPost');
  const hashtagSwiper = new Swiper(targetEl, {
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

  /**
   * 해당 데이터는 blade에서 페이지 네이션과 슬라이드 간의 데이터가 맞게 들어가기 때문에
   * 유니크한 키를 가질 필요가 없이 보증된 slide number 입니다.
   */
  const paginationEl = document.querySelectorAll(
    '#swiper-hashtagPost-navigation #bullet'
  );
  paginationEl.forEach((bullet) => {
    bullet.addEventListener('click', () => {
      hashtagSwiper.slideTo(bullet.dataset.slideTo);
    });
  });

  hashtagSwiper.on('slideChange', (e) => {
    paginationEl.forEach((bullet) => bullet.dataset.slideTo == e.activeIndex ? bullet.classList.add('active') : bullet.classList.remove('active'));
  });

  /**
   * 해쉬태그 자식 슬라이더
   */
  // PHP 쿼리로 만들어지기 때문에 둘다 갯수 일정
  const childTargets = document.querySelectorAll('[id*=swiper-hashtagChildPost]');
  childTargets.forEach((childTargetEl) => {
    new Swiper(childTargetEl, {
      spaceBetween: 20,
      touchEventsTarget: 'wrapper',
      slidesPerView: 1,
      pagination: {
        el: childTargetEl.querySelector('[id*=swiper-hashtagChildPost-pagination]'),
        clickable: true,
      },
    });
  });
};
