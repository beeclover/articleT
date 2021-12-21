import header from '../components/header';
import shrink from '../components/shrink';
import date from '../components/date';
import { bodyScrollLock } from '../components/alpinejs';

export default {
  containerInit() {},
  init() {
    header();
    shrink();
    date();
    window.bodyScrollLock = bodyScrollLock;
  },
  finalize() {},
};
