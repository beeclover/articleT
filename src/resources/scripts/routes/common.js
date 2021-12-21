import header from '../components/header';
import shrink from '../components/shrink';
import date from '../components/date';
import { select, bodyScrollLock } from '../components/alpinejs';

export default {
  containerInit() {},
  init() {
    header();
    shrink();
    date();
    window.select = select;
    window.bodyScrollLock = bodyScrollLock;
  },
  finalize() {},
};
