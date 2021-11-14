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

// componments
import header from './components/header';
import shrink from './components/shrink';
import date from './components/date';
// Routers
import Router from './util/router';
import home from './routes/home';
import single from './routes/single';

const routes = new Router({
  // All pages
  common: {
    containerInit() {},
    init() {
      header();
      shrink();
      date();
    },
    finalize() {},
  },
  home,
  single,
});

// Load Events
jQuery(document).ready(() => {
  routes.loadEvents();
  Alpine.start();
});
