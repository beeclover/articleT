import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock';
import Alpine from 'alpinejs';

function bodyScrollLock(boolean) {
  const ar = [document.querySelector('body')];
  const options = {
    reserveScrollBarGap: true,
  };
  ar.forEach((el) =>
    boolean ? disableBodyScroll(el, options) : enableBodyScroll(el, options)
  );
}

document.addEventListener('alpine:init', () => {
  Alpine.store('modal', {
    familySite: {
      on: false,
      toggle() {
        this.on = !this.on;
      },
      close() {
        this.on = false;
        setTimeout(() => {
          bodyScrollLock(false);
        }, 200);
      },
      open() {
        this.on = true;
        bodyScrollLock(true);
      },
    },
  });
});

export { bodyScrollLock };
