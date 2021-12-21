import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock';

function select(config) {
  return {
    ...config,
    label: config.label ?? 'None',
    dropdown: false,
    toggle: function () {
      this.dropdown = !this.dropdown;
    },
    close: function () {
      this.dropdown = false;
    },
    selectOption(label) {
      this.label = label;
    },
  };
}

function bodyScrollLock(boolean) {
  const body = document.querySelector('body');
  const header = document.querySelector('header#global');
  const options = {
    reserveScrollBarGap: true,
  };
  if (boolean) {
    disableBodyScroll(body, options);
    disableBodyScroll(header, options);
  } else {
    enableBodyScroll(body, options);
    enableBodyScroll(header, options);
  }
}

export { select, bodyScrollLock };
