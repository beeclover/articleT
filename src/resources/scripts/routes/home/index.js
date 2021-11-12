import s3 from './s3';
import s5 from './s5';

export default {
  init() {
    s3();
    s5();
  },
  finalize() {},
};
