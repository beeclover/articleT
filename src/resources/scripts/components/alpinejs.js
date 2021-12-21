import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock';

function bodyScrollLock(boolean) {
  const ar = [document.querySelector('body')];
  const options = {
    reserveScrollBarGap: true,
  };
  ar.forEach((el) =>
    boolean ? disableBodyScroll(el, options) : enableBodyScroll(el, options)
  );
}

export { bodyScrollLock };
