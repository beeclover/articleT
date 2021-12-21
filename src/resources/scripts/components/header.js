import Headroom from 'headroom.js';

function header() {
  const targetEl = document.querySelector('#global');
  const headroom = new Headroom(targetEl, {
    tolerance: 5,
    offset: 80,
  });
  headroom.init();
}

export default header;
