import 'jquery';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import SwiperCore, {
  Navigation,
  Pagination,
  EffectFade,
  Autoplay,
  Controller,
} from 'swiper/core';
import 'swiper/css/bundle';

Alpine.plugin(intersect);
SwiperCore.use([Navigation, Pagination, EffectFade, Autoplay, Controller]);

import Router from './util/router';
import Routes from './routes';

const routes = new Router(Routes);

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
