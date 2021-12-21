import dayjs from 'dayjs';
import 'dayjs/locale/ko';

export default () => {
  const targets = document.querySelectorAll('[datetime]');

  targets.forEach((target) => {
    const date = target.getAttribute('datetime');
    const { format } = target.dataset;
    target.innerHTML = dayjs(date).format(format || 'YY/MM/DD');
  });
};
