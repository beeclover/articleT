import Headroom from 'headroom.js';

function header() {
  const targetEl = document.querySelector('#headroom');
  const headroom = new Headroom(targetEl);
  headroom.init();
}

export default header;
